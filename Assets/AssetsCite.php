<?php
/**
 * Описание класса: Подключение стилей.
 *
 * @package    NoName
 * @subpackage AccetsCite
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */
namespace app\Assets;

class AssetsCite
{
    public $dir = '/web/assets/';
    
    public function IncludeAssets()
    {
        return array(
            ['link' => $this->dir.'css/bootstrap.css'],
            ['link' => $this->dir.'css/magnific-popup.css'],
            ['link' => $this->dir.'css/responsive.css'],
            ['link' => $this->dir.'css/style.css'],
            ['link' => $this->dir.'fonts/font-awesome/css/font-awesome.css'],
            ['link' => $this->dir.'fonts/ionicons/css/ionicons.css'],
        );
    }
}
?>