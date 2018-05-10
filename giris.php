<?php
require("nerede.php");
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

    <title>Giriş | Neyin var? </title>

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

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
<?php
        if(isset($bilgi) && $bilgi == "yanlis"){
?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Hata!</strong> Kullanıcı adı veya şifre yanlış.
</div>
<?php
  }else if(isset($bilgi) && $bilgi == "bos"){
    ?>
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong>Hata!</strong> Tüm alanları doldurun.
    </div>
    <?php
  }else if(isset($bilgi) && $bilgi == "sifredegistirildi"){
    ?>
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      Şifreniz başarıyla değiştirildi. Lütfen giriş yapınız.
    </div>
    <?php
  }else if(isset($bilgi) && $bilgi == "etkindegil"){
    ?>
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
     Hesap etkin değil. Lütfen e-posta adresinize gönderdiğimiz bağlantıyla hesabınızı aktifleştirin.
    </div>
    <?php
  }else if(isset($bilgi) && $bilgi == "aktif"){
    ?>
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
     Hesap başarıyla aktifleştirildi. Lütfen giriş yapınız.
    </div>
    <?php
  }
?>
          <section class="login_content">
            <form id="giris" action="girisyap.php" method="post" accept-charset="UTF-8">
              <h1>Giriş Yap</h1>
              <div>
                <input id="kadi" name="kadi" type="text" class="form-control" placeholder="Kullanıcı adı veya e-posta" required="required" />
              </div>
              <div>
                <input id="sfr" name="sfr" type="password" class="form-control" placeholder="Şifre" required="required" />
              </div>
              <div>
                <input type="submit"  style="margin-left:0;" class="btn btn-default submit" value="Giriş Yap">
                <a href="sifremiunuttum.php" class="reset_pass">Şifreni mi unuttun?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Yeni misin?
                  <a href="#signup" class="to_register"> Hesap oluşturun.</a>
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
<div id="register" class="animate form registration_form">
<?php 
if(isset($bilgi) && $bilgi != "basarili"){
  if(isset($bilgi) && $bilgi == "sifreler_uyusmuyor"){
?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Hata!</strong> Girdiğiniz şifreler birbiriyle uyuşmuyor.
</div>
<?php
  }else if(isset($bilgi) && $bilgi=="bos"){
    ?>
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Hata!</strong> Tüm alanları doldurun.
</div>
    <?php
  }else if(isset($bilgi) && $bilgi=="mevcut"){
    ?>
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Hata!</strong> Kullanıcı adı veya E-posta adresi zaten kullanımda.
</div>
    <?php
  }
?>
<?php
}else if(isset($bilgi) && $bilgi=="basarili"){
?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Kayıt başarılı.
                  </div>
          <div>
          <h2>Lütfen E-posta adresinize gönderdiğimiz bağlantıya tıklayın ve hesabınızı aktifleştirin.</h2>
          <p>Ana sayfaya dönmek için <a href="/cms">tıklayın</a></p>
          </div>
<?php
}
?>
          <section class="login_content">
          <form id='register' action='kayit_ol.php' method='post' accept-charset='UTF-8'>
            <h1>Hesap Oluştur</h1>
            <div>
              <input id="kln" name="kln" type="text" class="form-control" placeholder="Kullanıcı adı" value="<?php if(isset($_GET['k'])) echo $_GET['k'] ?>" required="required" />
            </div>
            <div>
              <input id="email" name="email" type="email" class="form-control" placeholder="E-posta" value="<?php if(isset($_GET['e'])) echo $_GET['e'] ?>" required="required" />
            </div>
            <div>
              <input id="pass" name="pass" type="password" class="form-control" placeholder="Şifre" required="required" />
            </div>
            <div>
              <input id="rpass" name="rpass" type="password" class="form-control" placeholder="Şifreyi tekrar girin" required="required" />
            </div>
            <input type="submit"  style="margin-left:0;" class="btn btn-default submit" value="Kayıt ol">
            <div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">Zaten üye misin?
                <a href="#signin" class="to_register"> Giriş yap.</a>
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