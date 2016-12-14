<?php

namespace qs\controller;

use n2n\web\http\controller\ControllerAdapter;

class QuickstartController extends ControllerAdapter {
	
	public function index() {
		$this->forward('..\view\intro.html');	
	}
}

