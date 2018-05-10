<?php
$sayfa="Yönetim Paneli ";
@include("tasarim/header.php");
$kadi=$_SESSION['kadi'];
@include("tasarim/menu.php");
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Yönetim Paneli</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Aramak istediğinizi yazın">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Boş Sayfa</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              Bir şeyler ekle ...
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php
@include("tasarim/footer.php");

?>