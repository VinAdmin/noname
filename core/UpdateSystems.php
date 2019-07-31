<?php
/**
 * Описание класса: Обновлятор системы :).
 *
 * @package    NoName
 * @subpackage Update
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @version    0.0.1
 * @copyright  (C) 2019
 */
namespace app\core;

use ZipArchive;
use FilesystemIterator;

class UpdateSystems
{
    //Корневое имя проекта
    public $globalDir = null;
    //Путь ресурса для получения верссии обновления
    private $url = 'http://texno.loc/index.php';
    //Путь к архиву с обновлением
    private $link = 'http://texno.loc/update.zip';
    //Путь для временного каталога
    private $tmp;
    //Путь генерации обновлений
    private $linkFolderUpdate;
    //Путь к архиву
    public $zip_link = 'core/UpdateSystems/project/';
    //Комментарий к архиву
    public $zipComment = 'Commentariy k archivu';
    
    /**
     * Принимает параметр имени деректории проекта, например /texnoblog.
     **/
    function __construct($projectName = null)
    {
        $this->globalDir = $projectName;
        $this->tmp = docroot().'/tmp/';
        $this->linkFolderUpdate = docroot().'/core/UpdateSystems/project/'.$this->globalDir.'/files';
        
        if(!file_exists($this->tmp))
        {
            mkdir($this->tmp);
        }
    }
    
    /**
     * 1. Вызывается проверка
     **/
    public function CheckUpdate()
    {
        //Получаем информацию об обновлении
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $head = curl_exec($ch);
        curl_close($ch);
        
        //Парсим файл с текущей версией сайта
        $arr = parse_ini_file(docroot()."/core/version.ini");
        //Переводим json в массив
        $head = json_decode($head, true);
        
        //Проверка версий 
        if((string)$arr['version'] == (string)$head['version']){
            //Нет новой версии
            return 0;
        }
        else{
            //Доступна новая версия
            return 1;
        }
    }
    
    /**
     * 2. Скачевается пакет обновлений
     **/
    public function DownloadUpdate()
    {
        // Каталог files
        $uploadfile = $this->tmp.basename($this->link);
        
        // Копируем файл в files
        if (copy($this->link, $uploadfile)){
            //echo "Файл успешно загружен на сервер";
            return 1;
        }
        
        return 0;
    }
    
    /**
     * 3. Распаковка архива
     **/
    public function ExtractZip()
    {
        $zip = new \ZipArchive;
        if ($zip->open($this->tmp.'update.zip') === TRUE) {
            // путь к каталогу, в который будут помещены файлы
            $zip->extractTo(docroot().'/tmp');
            $zip->close();
            //echo "Файл успешно распакован";
            
            return 1;
        }
        else {
            // неудача
            
            return 0;
        }
    }
    
    /**
     * Создание zip архива
     * Возвращает:
     * 0 - Ошибка создания
     * 1 - Архив запакован
     **/
    public function CompresZip($files)
    {
        $zip_name = $this->zip_link.$this->globalDir."/update.zip"; // имя файла
        
        if (file_exists($zip_name)) {
            unlink($zip_name);
        }
        
        // проверяем выбранные файлы
        $zip = new ZipArchive(); // подгружаем библиотеку zip
        
        if($zip->open($zip_name, ZIPARCHIVE::CREATE)!=TRUE)
        {
            return 0;
        }
        
        foreach($files as $file)
        {
            $zip->addFile($this->linkFolderUpdate.$file, $file); // добавляем файлы в zip архив
        }
        
        $zip->setArchiveComment($this->zipComment);
        
        $zip->close();
        
        return 1;
    }
    
    /**
     * 4. Обновление файлов сайта
     **/
    public function Update()
    {
        $ReadFileJson = file_get_contents($this->tmp.'info_update.json');
        $array = json_decode($ReadFileJson, true);
        
        $lick = docroot();
        $copy = docroot().'/tmp';
        
        foreach($array['files'] as $file)
        {
            //проверяем путь
            if(!file_exists($lick.$file['dir']))
            {
                mkdir($lick.$file['dir']);
            }
            
            if(!copy($copy.$file['dir'].$file['file'], $lick.$file['dir'].$file['file']))
            {
            }
        }
        
        $this->recursiveRemoveDir($copy.'/');
        mkdir(docroot().'/tmp');
        
        return 1;
    }
    
    private function recursiveRemoveDir($dir) {
        $includes = new \FilesystemIterator($dir);
        foreach ($includes as $include) {
            if(is_dir($include) && !is_link($include)) {
                $this->recursiveRemoveDir($include);
            }
            else {
                unlink($include);
            }
        }
        rmdir($dir);
    }
    
    /**
     *
     **/
    public function FileJson()
    {
        $dir = docroot().'/core/UpdateSystems/project/'.$this->globalDir.'/info_update.json';
        $dir_priject = docroot().'/core/UpdateSystems/project/'.$this->globalDir.'/';
        
        if(!file_exists($dir_priject))
        {
            mkdir($dir_priject);
        }
        
        if(file_exists($dir))
        {
            $ReadFileJson = file_get_contents($dir);
            $array = json_decode($ReadFileJson, true);
            return $array;
        }
        
        return $array = (array());
    }
    
    /**
     * Функция исполняет: получает пост запрос, записывает данных в info_update.json,
     * подготовка файлов для сжатия методом CompresZip
     * array('version=>'', files[]=>['dir','file'])
     **/
    public function InfoUpdateFile($array)
    {
        foreach($array['files'] as $key => $line)
        {
            if(empty($line['dir']) || empty($line['file']))
            {
                unset($array['files'][$key]);
            }
            
            if(!file_exists($this->linkFolderUpdate.$line['dir']))
            {
                mkdir($this->linkFolderUpdate.$line['dir']);
            }
            
            if(isset($array['files'][$key])){
                if (copy('../'.$this->globalDir.$line['dir'].$line['file'], $this->linkFolderUpdate.$line['dir'].$line['file'])){
                    //Файл успешно загружен на сервер
                }
                else{
                    echo "Ошибка копирования: ".$key;
                }
                
                $fileZip[] = $line['dir'].$line['file'];
            }
        }
        
        $update = json_encode($array);
        
        //Перезапись или создание файла
        $info_json = fopen(docroot()."/core/UpdateSystems/project/".$this->globalDir."/info_update.json", 'w');
        fwrite($info_json, $update);
        fclose($info_json);
        
        $version_ini = fopen(docroot()."/core/UpdateSystems/project/".$this->globalDir."/files/core/version.ini", 'w');
        $update = '[VERSION]'.PHP_EOL;
        $update .= 'version = '.(string)$array['version'];
        fwrite($version_ini, $update);
        fclose($version_ini);
        
        //Добавление файлов в архив
        if(!$this->CompresZip($fileZip))
        {
            return 2;
        }
        
        return 1;
    }
}
?>
