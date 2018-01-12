<?php
	//========== SETTINGS ==========//
	// SET main folder name
	$mainFolder = 'siteStarterPhp';
	
	// SET path for other language files
    $pathPl = $mainFolder.'';

    //========== END SETTINGS ==========//


	// get file name from url and strip extension
    $pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	
	// path for all of assets (img, css, js)
    $assets = '/'.$mainFolder;

	// path for files, specified to actual language!
    $files = '/'.$mainFolder.'/en';
    
    
	//========== PATH FOR LANGUAGES REDIRECT TO SAME SITE ==========//
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = explode('/', $url);

    $urlPl = $url;
    $urlPl[3] = $pathPl;
    unset($urlPl[4]);
    $urlPl = implode('/', $urlPl);
?>