<?php

class ProductController extends Controller {
	
	public function render($get, $post) {
		return $this->loadTemplate('home');
	}
}