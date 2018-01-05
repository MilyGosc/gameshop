<?php

class ContactController extends Controller {
	
	public function render($get, $post) {
		return $this->loadTemplate('contact');
	}
}