<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="main-wrapper">
    <header id="pageTop" class="header-wrapper">
      <div class="container-fluid color-bar clearfix">
        <div class="row">
          <div class="col-xs-12"></div>
        </div>
      </div>
      <!-- <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation"> -->
      <nav id="menuBar" class="navbar" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Menüyü görüntüle</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
            </a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#">
                  <span>Neden</span>
                  <span>Gül Çocuk</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span>Mutlu Çocuk</span>
                  <span>Eğitim Modeli</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span>Ne Söylediler</span>
                  <span>Çocuklar, Veliler, Uzmanlar</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span>Etkinlikler</span>
                  <span>Spor, Sanat, Sosyal</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span>Okulumuz</span>
                  <span>Kurucular, Hakkımızda</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span>İletişim</span>
                  <span>Kroki, Adres, Telefon</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
