<?php
@include"vt.php";

$k=$_GET['k'];
$a=$_GET['a'];
$query = $db->query("SELECT k_aktivasyon_kodu FROM kullanicilar WHERE kullanici_adi = '{$k}'")->fetch(PDO::FETCH_ASSOC);
if ($query){
    if($a==$query['k_aktivasyon_kodu']){
        $query = $db->prepare("UPDATE kullanicilar SET k_durum = ?, k_aktivasyon_kodu = ? WHERE kullanici_adi = ?");
        $insert = $query->execute(array(
            1, " ", $k
        ));
        
        if ($insert){
            $last_id = $db->lastInsertId();
            $url ="giris.php?bilgi=aktif";
            header('Location:'.$url, true, $permanent ? 301 : 302);
        }else{
            echo "Bir sorun oluştu. Lütfen tekrar deneyiniz.";
        }
    }else{
        echo "Hatalı aktivasyon kodu!";
    }
}else{
    echo "Kullanıcı bulunamadı";
}

?>