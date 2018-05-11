<?php
require('build/mail/class.phpmailer.php');
require('vt.php');
date_default_timezone_set('Europe/Istanbul');
$tr = array ('ı', 'İ', 'ç', 'Ç', 'Ü', 'ü', 'Ö', 'ö', 'ş', 'Ş', 'ğ', 'Ğ', ' ');
$trok = array ('i', 'I', 'c', 'C', 'U', 'u', 'O', 'o', 's', 'S', 'g', 'G', '_');
$kln=$_POST['kln'];
$email=$_POST['email'];
$sfr=$_POST['pass'];
$rsfr=$_POST['rpass'];
if($sfr != $rsfr){
    $url ="giris.php?bilgi=sifreler_uyusmuyor&k=$kln&e=$email#signup";
    header('Location:'.$url, true, $permanent ? 301 : 302);
    }else{
        $query = $db->query("SELECT kullanici_adi, k_eposta FROM kullanicilar WHERE (kullanici_adi = '{$kln}' OR k_eposta = '{$email}')")->fetch(PDO::FETCH_ASSOC);
    if ($query){
        $url ="giris.php?bilgi=mevcut#signup";
        header('Location:'.$url, true, $permanent ? 301 : 302);
    }else{
    $link="http://localhost/cms/aktiflestir.php";
    try{
        if (!empty($kln) && !empty($email) && !empty($sfr) && !empty($rsfr)){
        $kln=str_replace($tr, $trok, $_POST["kln"]);
        $k_tarih=date('Y-m-d H:i:s');
        $k_akt=md5(uniqid(mt_rand(), true));
        $k_durum=0;
        $k_gad=$kln;
        $query = $db->prepare("INSERT INTO kullanicilar SET
        kullanici_adi = ?,
        k_sifre = ?,
        k_eposta = ?,
        k_kayit_tarihi = ?,
        k_aktivasyon_kodu = ?,
        k_durum = ?,
        k_goruntulenecek_ad = ?");
        $insert = $query->execute(array(
          $kln, md5($sfr), $email, $k_tarih, $k_akt, $k_durum, $k_gad
        ));
        if ( $insert ){
          $last_id = $db->lastInsertId();
          $mail = new PHPMailer(); // create a new object
          $mail->IsSMTP();
          $mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = 'ssl';
          $mail->Host = 'mail.sdkakcy.com';
          $mail->Port = 465;
          $mail->IsHTML(true);
          $mail->SetLanguage("tr", "phpmailer/language");
          $mail->CharSet  ="utf-8";
          $mail->Username = ""; // Mail adresimizin kullanicı adi
          $mail->Password = ""; // Mail adresimizin sifresi
          $mail->SetFrom("posta@neyinvar.com", "Neyin var?"); // Mail attigimizda gorulecek ismimiz
          $mail->AddAddress($email); // Maili gonderecegimiz kisi yani alici
          $mail->Subject = "Hesabını Etkinleştir"; // Konu basligi
          $mail->Body = "Merhaba $kln, sistemimize kayıt olduğun için teşekkürler.</br>
          Şimdi yapman gereken tek bir şey kaldı. Lütfen hesabını onaylamak için linke tıkla.</br>
          <a href='$link?k=$kln&a=$k_akt'>Hesabımı Onayla</a>";
          if(!$mail->Send()){
              echo "Mailer Error: ".$mail->ErrorInfo;
            }
          $url ="giris.php?bilgi=basarili#signup";
          header('Location:'.$url, true, $permanent ? 301 : 302);
        }
        }else{
            $url ="giris.php?bilgi=bos#signup";
            header('Location:'.$url, true, $permanent ? 301 : 302);
        }
        }catch(PDOException  $e ){
        echo "Error: ".$e;
        }
    }
}
?>
