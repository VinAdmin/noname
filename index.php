<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions/docroot.php';
if(file_exists ( __DIR__ . '/config.php')){
	require_once __DIR__ . '/config.php';
}
else{
	$messag_config_file = "<div>Конфигурационный файл ненайден.</div>";
	$messag_config_file .= "<div>Переименуйте example.config.php в config.php.</div>";
	echo $messag_config_file;
	exit;
}


use app\core\Route;
use app\core\UpdateSystems;
/*
$up = new UpdateSystems();
if($up->CheckUpdate())
{
    echo "Доступны обновления безопасности";
}*/
//$up->DownloadUpdate();
//$up->ExtractZip();
//$up->Update();
Route::run();
?>