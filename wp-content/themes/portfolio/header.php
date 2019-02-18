<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kenta Kodashima | Mobile Developer</title>
  <meta name="description" content="Kenta Kodashima - iOS Developer Based in Vancouver">
  <meta name="author" content="Kenta Kodashima">

  <!-- Open Graph data -->
  <meta property="og:title" content="Kenta Kodashima | Mobile Developer" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://kentakodashima.com/" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/kentakodashima_ogimage.png" />
  <meta property="og:description" content="Kenta Kodashima - iOS developer base in Vancouver" />
  <meta property="og:site_name" content="kentakodashima.com" />

  <!-- Facebook -->
  <meta property="fb:app_id" content="684829848548537" />

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">

  <meta name="thumbnail" content="<?php echo get_template_directory_uri(); ?>/img/kentakodashima_ogimage.png">

  <!-- Favicon -->
  <meta name=”msapplication-config” content=”/browserconfig.xml”> <meta name=”msapplication-TileColor” content=”#1F2029>
  <meta name=”msapplication-TileImage” content=”/mstile-144×144.png”> <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-180x180.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-icon.svg" color="#555" />
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/android-chrome-192x192.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

  <!-- CSS for Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <!-- CSS for Fonrawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <!-- Custom CSS -->
  <?php if( is_single() ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app_detail.css">
  <?php else: ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php endif; ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">

  <!-- JS for Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!-- JS fot Vertical Timeline -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>

  <!-- Custom Javascript -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/function.js" type="text/javascript"></script>
</head>

<body>
  <div id="wrapper" ontouchstart="">

    <header id="header">
      <nav id="nav" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a href="https://kentakodashima.com/" class="logoImg navbar-brand">
            <!-- <span class="logoText">MyLogo</span> -->
            <object id="logoImg" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
            </object>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburgerBorder"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item nav-works"><a class="nav-link" href="#works">Works</a></li>
              <li class="nav-item nav-blog"><a class="nav-link" href="#blogArticles">Blog</a></li>
              <li class="nav-item nav-skills"><a class="nav-link" href="#skills">Skills</a></li>
              <li class="nav-item nav-resources"><a class="nav-link" href="#resources">Resources</a></li>
              <li class="nav-item nav-profile"><a class="nav-link" href="#profile">Profile</a></li>
              <li class="nav-item nav-contact"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>