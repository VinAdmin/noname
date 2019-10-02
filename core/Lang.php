<?php
namespace app\core;

class Lang
{
	static function CoreTranslate()
	{
		global $config;
		
		if(!isset($config['lang'])){
			$config['lang'] = 'ru-RU';
		}
		
		$pars = parse_ini_file('lang/'.$config['lang'].'/'.$config['lang'].'.ini');
		
		return $pars;
	}
}
?>