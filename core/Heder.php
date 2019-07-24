<?php
/**
 * Описание класса: Класс генерации заголовка.
 *
 * @package    NoName
 * @subpackage Heder
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */
namespace app\core;
use app\Assets\AssetsCite;

class Heder
{
    static public function Link()
    {
        $assets = new AssetsCite();
        $arrayAssets = $assets->IncludeAssets();
        
        foreach($arrayAssets AS $css)
        {
            echo '<link rel="stylesheet" type="text/css"  href="'.$css['link'].'">'.PHP_EOL;
        }
    }
    
    public function Seo()
    {
        echo '<title>'.$this->title.'</title>'.PHP_EOL;
    }
}
?>