<?php
/**
 * Описание класса: Обновлятор системы :).
 *
 * @package    NoName
 * @subpackage Update
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @version    0.1
 * @copyright  (C) 2019
 */
namespace app\core;

class UpdateSystems
{
    private $url = 'http://texno.loc/index.php';
    private $link = 'http://texno.loc/update.zip';
    private $tmp;
    
    function __construct()
    {
        $this->tmp = docroot().'/tmp/';
        
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
}
?>
