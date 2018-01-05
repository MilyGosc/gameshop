<?php

class Template {
	
	const PAGE_PATH = __DIR__ . '/../pages/';
	
	static function loadTemplate($name) {
		if (!file_exists(self::PAGE_PATH . $name . '.php')) {
			die('Template named by ' . $name . ' not exists.');
		}
		
		return eval('?>' . file_get_contents(self::PAGE_PATH . $name . '.php'));
	}
}