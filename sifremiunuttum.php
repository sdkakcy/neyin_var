<?php
if(isset($_GET['bilgi'])){
  $bilgi=$_GET['bilgi'];
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

    <title>Şifremi Unuttum | Neyin var? </title>

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

<style>
    .geri{
        float:left;
        margin-bottom: 25px !important;
    }
</style>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="passreset"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
        <?php
        if(isset($bilgi) && $bilgi == "kbulunamadi"){
?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Hata!</strong> Girdiğiniz bilgilere ait kullanıcı bulunamadı.
</div>
<?php
  }else if(isset($bilgi) && $bilgi == "basarili"){
    ?>
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      Şifre sıfırlama bağlantısı e-posta adresinize gönderildi.
    </div>
    <?php
  }
?>
          <section class="login_content">
            <form id="passreset" action="passreset.php"  method="post" accept-charset="UTF-8">
              <h1>Şifrenizi Sıfırlayın</h1>
              <div style="margin-bottom: -15px;"> 
                <input type="text" name="kln" id="kln" class="form-control" placeholder="Kullanıcı adı veya eposta adresi" required="required" />
              </div>
              <div style="text-align: left;">
              <p class="reset_pass">E-posta adresinize bir sıfırlama bağlantısı göndereceğiz.</p>
              <input type="submit"  style="margin-left:0;" class="btn btn-default submit" value="Sıfırla">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="giris.php" class="geri"><i class="fa fa-arrow-left"></i> Geri dön</a>
                </p>

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
</html>
