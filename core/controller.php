<?php
/**
 * Описание класса: Главный контроллер.
 *
 * @package    NoName
 * @subpackage Controller
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */

namespace app\core;
use app\core\View;

class Controller extends View{
	function render($view, $data = null)
	{
		$this->generate($view, $data);
	}
}
?>