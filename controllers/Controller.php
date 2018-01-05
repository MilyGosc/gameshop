<?php

class Controller {
	
	const PAGE_PATH = __DIR__ . '/../pages/';
	
	protected function loadTemplate($name) {
		return Template::loadTemplate($name);
	}
}