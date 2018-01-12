<?php
	//========== SETTINGS ==========//
	// SET main folder name
	$mainFolder = 'siteStarterPhp';
	
	// SET path for other language files
    $pathEn = $mainFolder.'/en';

    //========== END SETTINGS ==========//


	// get file name from url and strip extension
    $pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	
	// path for all of assets (img, css, js)
    $assets = '/'.$mainFolder;

	// path for files, specified to actual language!
    $files = '/'.$mainFolder;
    
    
	//========== PATH FOR LANGUAGES REDIRECT TO SAME SITE ==========//
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = explode('/', $url);

    $urlEn = $url;
    $urlEn[3] = $pathEn;
    $urlEn = implode('/', $urlEn);
?>