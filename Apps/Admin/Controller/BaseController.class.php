<?php
// +----------------------------------------------------------------------
// | wyecho
// +----------------------------------------------------------------------
// | Copyright (c) 2018~2022  All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: wyecho <@sina.com>
// +----------------------------------------------------------------------
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller {

	public function _initialize() {
		$uid = $_SESSION['uid'];
		if (!isset($uid) || $uid == '') {
			$this->error('非法操作!',U('Login/index'));
		}
		if ($uid == 1) {
			return true;
		}
		$auth = new \Think\Auth();
		$name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
		$result = $auth->check($name,$uid);
		if (!$result) {
			$this->error("Not Allow!",U('Login/index'));
		}
	}
}