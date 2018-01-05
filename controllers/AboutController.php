<?php

class AboutController extends Controller {
	
	public function render($get, $post) {
		return $this->loadTemplate('about');
	}
}