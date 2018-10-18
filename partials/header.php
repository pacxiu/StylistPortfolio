<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta name="keywords" content="">
    <title><?php echo $pageTitle; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/dist/css/normalize.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/dist/css/main.css">

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="<?php echo $assets; ?>/img/favicon.png" sizes="32x32">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="loader">
      <div class="loader-container">Progressbar here</div>
    </div>
    <nav id="menu">
      <div class="logotype-container">
        <p class="logotype">Sylwia Morawska Stylist</p>
      </div>
      <ul class="menu-list">
        <li class="menu-item<?php if($pg=='index') { ?> active<?php } ?>"><a class="menu-link" href="./index.php">Portfolio</a></li>
        <li class="menu-item<?php if($pg=='experiance') { ?> active<?php } ?>"><a class="menu-link" href="./experiance.php">Experiance</a></li>
        <li class="menu-item positioned<?php if($pg=='contact') { ?> active<?php } ?>"><a class="menu-link" href="./contact.php">Contact</a></li>
      </ul>
      <div id="menu-trigger" class="js-menu-open">
        Hamburger
      </div>
    </nav>
    

        
        