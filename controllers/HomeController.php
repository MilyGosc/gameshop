<?php

class HomeController extends Controller {
	
	public function render() {
		return $this->loadTemplate('home');
	}
}