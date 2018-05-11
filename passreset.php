<?php
require("vt.php");
require('build/mail/class.phpmailer.php');
$kln=$_POST['kln'];
$k_akt=md5(uniqid(mt_rand(), true));
$link="http://localhost/cms/yenisifre.php";
$query = $db->query("SELECT kullanici_adi, k_eposta FROM kullanicilar WHERE (kullanici_adi = '{$kln}' OR k_eposta = '{$kln}')")->fetch(PDO::FETCH_ASSOC);
if ($query){
    $email=$query['k_eposta'];
    $kadi=$query['kullanici_adi'];
    $query = $db->prepare("UPDATE kullanicilar SET k_aktivasyon_kodu = ? WHERE kullanici_adi = ?");
    $insert = $query->execute(array(
        $k_akt, $kln
    ));
    if ($insert){
        $last_id = $db->lastInsertId();
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP();
        $mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = '';
        $mail->Port = 465;
        $mail->IsHTML(true);
        $mail->SetLanguage("tr", "phpmailer/language");
        $mail->CharSet  ="utf-8";
        $mail->Username = ""; // Mail adresimizin kullanicı adi
        $mail->Password = ""; // Mail adresimizin sifresi
        $mail->SetFrom("posta@neyinvar.com", "Neyin var?"); // Mail attigimizda gorulecek ismimiz
        $mail->AddAddress($email); // Maili gonderecegimiz kisi yani alici
        $mail->Subject = "Şifre Sıfırlama"; // Konu basligi
        $mail->Body = "Merhaba $kadi, birisi şifreni sıfırlama isteği gönderdi.</br>
        Eğer bu işlem size ait değilse hesabınızı kullanmaya devam edebilirsiniz.</br> 
        Şifrenizi sıfırlamak için bağlantıyı takip edin. 
        <a href='$link?k=$kadi&a=$k_akt'>Şifremi sıfırla</a>";
        if(!$mail->Send()){
            echo "Mailer Error: ".$mail->ErrorInfo;
        }
        $url ="sifremiunuttum.php?bilgi=basarili";
        header('Location:'.$url, true, $permanent ? 301 : 302);
    }else{
        echo "Bir sorun oluştu. Lütfen tekrar deneyiniz.";
    }
}else{
    $url ="sifremiunuttum.php?bilgi=kbulunamadi";
    header('Location:'.$url, true, $permanent ? 301 : 302);
}
?>
