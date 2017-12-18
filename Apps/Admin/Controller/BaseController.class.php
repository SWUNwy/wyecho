<?php

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller {

	public function _initialize() {
		$uid = session('uid');

		$auth = new \Think\Auth();
		$result = $auth->check();
		if (!$result) {
			$this->error("Not Allow!");
		}
	}
}