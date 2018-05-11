<?php
$sayfa="Yönetim Paneli ";
@include("tasarim/header.php");
?>
<style>
.btn.btn-danger{
  float:right;  
  margin-left:10px; 
  cursor:pointer;
}
.btn.btn-warning{
  color:white; 
  float:right;
}

</style>
<?php
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
            <h2>Kullanıcılar</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <p class="text-muted font-13 m-b-30">
                    Tüm Kullanıcılar
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Kullanıcı Adı</th>
                          <th>Ad</th>
                          <th>E-posta</th>
                          <th>Rol</th>
                          <th>Yazılar</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
$query = $db->query("SELECT * FROM kullanicilar ORDER BY ID", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          ?><tr>
              <td><?php echo $row['kullanici_adi'] ?></td>
              <td><?php echo $row['k_goruntulenecek_ad'] ?></td>
              <td><?php echo $row['k_eposta'] ?></td>
              <td><?php echo $row['k_durum'] ?></td>
              <td><?php echo $row['k_durum'] ?></td>
              <td>
                <form action='kullanici_sil.php' method='POST' style='float:right;'>
                  <input type='text' name='sil' style='display:none; width:30px;' value=<?php echo $row['ID'] ?>>
                  <input class='btn btn-danger' type='submit' value='Sil'>
                </form>
                  <a role="button" href="kullanici_duzenle.php?id=<?php echo $row['ID'] ?>" class="btn btn-warning">Düzenle</a>
              </td>
            </tr><?php
     }
}
?>
                      </tbody>
                    </table>
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
<script>
$().DataTable();
</script>