<?php
require("vt.php");
$sfr=$_POST['ypass'];
$rsfr=$_POST['rypass'];
$kadi=$_POST['kadi'];
$akt=$_POST['akt'];
if($sfr != $rsfr){
    $url ="yenisifre.php?k=$kadi&a=$akt&bilgi=sifreler_uyusmuyor";
    header('Location:'.$url, true, $permanent ? 301 : 302);
    }else{
    try{
        $query = $db->query("SELECT k_aktivasyon_kodu FROM kullanicilar WHERE kullanici_adi = '{$kadi}'")->fetch(PDO::FETCH_ASSOC);
        if ($query['k_aktivasyon_kodu']==$akt){
                $query = $db->prepare("UPDATE kullanicilar SET
                k_sifre = ?,
                k_aktivasyon_kodu = ? WHERE kullanici_adi= ?");
                $insert = $query->execute(array(
                  md5($sfr), "", $kadi
                ));
                if ($insert){
                  $last_id = $db->lastInsertId();
                  $url ="yenisifre.php?bilgi=basarili";
                  header('Location:'.$url, true, $permanent ? 301 : 302);
                }
                }else{
                    echo "Hata!";
                }
        }catch(PDOException  $e ){
        echo "Error: ".$e;
        }
    }
?>