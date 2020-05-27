<?php

include("conf/configuration.php");

if(empty($_GET['f'])) $_GET['f'] = 'index.php';
$file = APPLI_SRC.'/admin/'.$_GET['f'];

if(is_file($file)) include($file);
else{
	header('Location:'.SITE_URL);
	die;
}
