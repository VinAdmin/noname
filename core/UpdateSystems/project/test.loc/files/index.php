<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions/docroot.php';

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