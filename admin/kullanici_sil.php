<?php
require("oturum.php");
session_start();
try{
    @include"../vt.php";
    if (!empty($_POST['sil'])){

        $id=$_POST['sil'];

        $query = $db->prepare("DELETE FROM kullanicilar WHERE ID = :id");
        $delete = $query->execute(array(
            'id' => $id
        ));
        
        if($delete){
        $url ="./kullanicilar.php?sf=$sf&sonuc=basarili";
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        }

    }else{
        $url ="./kullanicilar.php?sonuc=basarisiz";
        header('Location: ' . $url, true, $permanent ? 301 : 302);
    }
}catch(PDOException  $e ){
    echo "Error: ".$e;
}
?>