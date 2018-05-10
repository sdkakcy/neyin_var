<?php
try{

    $db = new PDO('mysql:host=localhost;dbname=cms','root','');
    $db->exec('SET CHARACTER SET utf8');

}catch(PDOException $e){
    echo 'Hata: '.$e->getMessage();
}
?>
