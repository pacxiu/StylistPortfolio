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

    <!-- PACE -->
    <script type="text/javascript" src="<?php echo $assets; ?>/dist/js/pace.min.js"></script>

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
  <body class="<?php if($pg=='index') { ?>index<?php } ?>">
    <div id="loader">
      <div id="circle">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
            <defs>
              <path id="circlePath" d=" M 150, 150 m -120, 0 a 60,60 0 0,1 240,0 a 60,60 0 0,1 -240,0 "/>
            </defs>
            <circle cx="150" cy="150" r="150" fill="none"/>
            <g>
              <use xlink:href="#circlePath" fill="none"/>
              <text fill="#fff">
                <textPath xlink:href="#circlePath">
                  Sylwia&nbsp;&nbsp;&nbsp;Morawska
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Stylist
                </textPath>
              </text>
            </g>
        </svg>
        </div>
    </div>
    <div id="loader-helper"></div>
    <nav id="menu">
      <div class="logotype-container">
        <a class="logotype" href="./index.php">Sylwia Morawska Stylist</p>
      </div>
      <ul class="menu-list">
        <li class="menu-item<?php if($pg=='index') { ?> active<?php } ?>"><a class="menu-link" href="./index.php">Portfolio</a></li>
        <li class="menu-item<?php if($pg=='experiance') { ?> active<?php } ?>"><a class="menu-link" href="./experiance.php">Experiance</a></li>
        <li class="menu-item positioned<?php if($pg=='contact') { ?> active<?php } ?>"><a class="menu-link" href="./contact.php">Contact</a></li>
      </ul>
      <div id="menu-trigger" class="js-menu-open">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    

        
        