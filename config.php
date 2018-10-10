<?php
	//========== SETTINGS ==========//
	// SET main folder name
	$mainFolder = 'SylwiaPortfolio';

  //========== END SETTINGS ==========//

	// get file name from url and strip extension
  $pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	
	// path for all of assets (img, css, js)
  $assets = '/'.$mainFolder;

	// path for files, specified to actual language!
  $files = '/'.$mainFolder;
    
?>