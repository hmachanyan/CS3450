<?php
error_reporting(E_ALL);
  ini_set("display_errors", 1);
	require_once 'config.php';
	$parent_dir = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/';
	echo $parent_dir;
	$parent_dir = $parent_dir . "includes/classes/";
	$files = scandir($parent_dir);

	foreach($files as $file){
		if(strpos($file, '.class.php') !== false && strpos($file, '.swp') === false){
			require_once $parent_dir . $file;
		}
	}
