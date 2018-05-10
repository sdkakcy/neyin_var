  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Neyin var?</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../uploads/images/varsayilan.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldiniz,</span>
                <h2><?php echo $kadi?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Genel</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-th-large"></i> Başlangıç</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> İçerikler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="duzenle.php">Tüm İçerikler</a></li>
                      <li><a href="yeniicerik.php">Yeni Ekle</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i> Sayfalar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tüm Sayfalar</a></li>
                      <li><a href="#">Yeni Ekle</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bars"></i> Kategoriler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tüm Kategoriler</a></li>
                      <li><a href="#">Yeni Ekle</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tags"></i> Etiketler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tüm Etiketler</a></li>
                      <li><a href="#">Yeni Ekle</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-picture-o"></i>Ortam <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Kütüphane</a></li>
                      <li><a href="#">Yeni Ekle</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-comment"></i>Yorumlar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tüm Yorumlar</a></li>
                      <li><a href="#">Yeni Ekle</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Yönetim</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Kullanıcılar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="kullanicilar.php">Tüm Kullanıcılar</a></li>
                      <li><a href="#">Yeni Ekle</a></li>
                      <li><a href="#">Kayıt Başvurularını Yönet</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-cog"></i> Sistem Ayarları</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Sistem Ayarları">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Çıkış yap" href="kapat.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            </menu footer buttons -->
            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../uploads/images/varsayilan.png" alt=""><?php echo $kadi?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profil</a></li>
                    <li><a href="javascript:;">Yardım</a></li>
                    <li><a href="kapat.php"><i class="fa fa-sign-out pull-right"></i> Çıkış yap</a></li>
                  </ul>
                </li>
                <!--
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
