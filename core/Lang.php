<?php
/**
 * Описание класса: Языковой класс перевода.
 *
 * @package    NoName
 * @subpackage Lang
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */

namespace app\core;

class Lang
{
	//Переводы ядра
	static function CoreTranslate()
	{
		global $config;
		//Если массива $config['lang'] по умолчанию выводится на английском языке
		if(!isset($config['lang'])){
			$config['lang'] = 'en-EN';
		}
		
		$pars = parse_ini_file('lang/'.$config['lang'].'/'.$config['lang'].'.ini');
		
		return $pars;
	}
}
?>