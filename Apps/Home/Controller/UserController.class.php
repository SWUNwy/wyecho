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
namespace Home\Controller;

use Think\Controller;
/**
 * UserController
 * 用户管理模块
 * @author wyecho <[@sina.com]>
 */
class UserController extends Controller {
    
    public function index() {
    	$user = M('user');
    	$list = $user->select();
    	$this->assign('list',$list);
        $this->display();
    }
    
    public function set() {
        $this->display();
    }
    
    public function message() {
        $this->display();
    }
}