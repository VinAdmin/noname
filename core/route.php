<?php
/**
 * Описание класса: Роутер.
 *
 * @package    NoName
 * @subpackage Route
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */

namespace app\core;
//use app\core\View;

class Route
{
	static function run()
	{
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		//$routes = mb_substr($_SERVER['REQUEST_URI'], 1);
		
		// получаем имя контроллера
		if(empty($routes[1])){
			// контроллер и действие по умолчанию
			$controller_name = 'siteController';
		}
		else{
			if($routes[1] == 'site')
			{
				$controller_name = $routes[1];
			}
		}
		
		// получаем имя экшена
		if (empty($routes[2])){
			$action_name = 'index';
		}
		else{
			$action_name = $routes[2];
		}
		
		$controller_name = $controller_name;
		
		$action_name = ''.$action_name;

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = docroot()."/controllers/".$controller_file;
		
		//Проверка контроллера
		if(file_exists($controller_path))
		{
			include_once docroot()."/controllers/".$controller_file;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = 'action'.$action_name;
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
		
	}
	
	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}
?>