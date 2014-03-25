<?php
error_reporting(E_ALL);
  ini_set("display_errors", 1);
	require_once 'config.php';
	$classDir = 'classes/';

	$files = scandir($classDir);

	foreach($files as $file){
		if(strpos($file, '.class.php') !== false && strpos($file, '.swp') === false){
			require_once $classDir . $file;
		}
	}
