<?php
session_start();
try{
    require("vt.php");
    if (!empty($_POST['kadi']) && !empty($_POST['sfr'])){

        $kln=$_POST["kadi"];
        $sfr=$_POST["sfr"];
        $sth = $db->prepare("SELECT * FROM kullanicilar WHERE (k_eposta= ? OR  kullanici_adi=?) AND k_sifre=?");
        $sth -> execute (array($kln, $kln, md5($sfr)));

        if($sth -> rowCount()) {
          foreach ($sth as $kbilgi) {
                $id = $kbilgi["ID"];
                $kadi = $kbilgi["kullanici_adi"];
                $eposta= $kbilgi["k_eposta"];
                $durum= $kbilgi["k_durum"];
              }
            if($durum==0){
                session_destroy();
                $url ="giris.php?bilgi=etkindegil";
                header('Location:'.$url, true, $permanent ? 301 : 302);
            }else if ($durum==1){
            $_SESSION['id']=$id;
            $_SESSION['kadi']=$kadi;
            $_SESSION['eposta']=$eposta;
            $url ="admin/index.php";
            header('Location:'.$url, true, $permanent ? 301 : 302);
            }
        }else{
            session_destroy();
            $url ="giris.php?bilgi=yanlis";
            header('Location:'.$url, true, $permanent ? 301 : 302);
        }
    }else{
        $url ="giris.php?bilgi=bos";
        header('Location:'.$url, true, $permanent ? 301 : 302);
    }
}catch(PDOException  $e ){
    echo "Error: ".$e;
}
?>
