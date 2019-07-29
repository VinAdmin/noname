<?php
/**
 * Описание класса: Главная въюшка.
 *
 * @package    NoName
 * @subpackage View
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */
namespace app\core;

use app\core\View;
use app\core\Heder;

class View extends Heder
{
	public $views;
	
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	public function Main()
	{
		include_once docroot().'/views/site/main.php';
	}
	
	function generate($template_view, $array)
	{
		extract($array);
		ob_start();
		include_once(docroot().$template_view);
		$this->views = ob_get_contents();
		ob_end_clean();
		
		$this->Main();
	}
}
?>