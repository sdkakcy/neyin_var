<?php
require("vt.php");
if(isset($_GET['k']) && isset($_GET['a'])){
    $kadi=$_GET['k'];
    $akt=$_GET['a'];
}

if(isset($_GET['bilgi'])){
    $bilgi=$_GET['bilgi'];
    if($bilgi=="basarili"){
        $url ="giris.php?bilgi=sifredegistirildi";
        header('Location:'.$url, true, $permanent ? 301 : 302);
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yeni Şifre Belirle | Neyin var? </title>

    <!-- Bootstrap -->
    <link href="build/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="build/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="build/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="build/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

<?php
if(isset($_GET['k']) && isset($_GET['a'])){
$query = $db->query("SELECT k_aktivasyon_kodu FROM kullanicilar WHERE kullanici_adi = '{$kadi}'")->fetch(PDO::FETCH_ASSOC);
if ($query){
    if($akt==$query['k_aktivasyon_kodu']){
    ?>
    <body class="login">
    <div>
      <a class="hiddenanchor" id="yenisifre"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
        <?php
        if(isset($bilgi) && $bilgi == "sifreler_uyusmuyor"){
?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Hata!</strong> Girdiğiniz şifreler birbirleriyle uyuşmuyor.
</div>
<?php
  }
?>
          <section class="login_content">
            <form id="yenisifre" action="yenisifreislem.php" method="post" accept-charset="UTF-8">
              <h1>Yeni Şifrenizi Girin</h1>
              <div>
                <input type="hidden" name="kadi" id="kadi" class="form-control" value="<?php echo $kadi ?>"/>
                <input type="hidden" name="akt" id="akt" class="form-control" value="<?php echo $akt ?>"/>
                <input type="password" name="ypass" id="ypass" class="form-control" placeholder="Yeni şifreniz" required="required" />
              </div>
              <div>
                <input type="password" name="rypass" id="rypass" class="form-control" placeholder="Tekrar" required="required" />
              </div>
              <input type="submit"  style="margin-left:0; margin-bottom:25px;" class="btn btn-default submit" value="Şifremi Değiştir">
                <div class="clearfix"></div>
                <div>
                <h1><i class="fa fa-paw"></i> Neyin var?</h1>
                  <p>©2018 Tüm Hakları Saklıdır.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        </div>
    </div>
    <script src="build/vendors/jquery/dist/jquery.min.js"></script>
    <script src="build/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
  <?php
    }else{
        echo "Sıfırlama bağlantısının süresi dolmuş, yeni bir sıfırlama talebi oluşturun.";
    }
}else{
    $url ="giris.php";
    header('Location:'.$url, true, $permanent ? 301 : 302);
}
}
?>
</html>