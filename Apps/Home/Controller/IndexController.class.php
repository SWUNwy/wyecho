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
 * IndexController
 * 首页模块
 * @author wyecho <[@sina.com]>
 */
class IndexController extends Controller {
    public function index(){
        $this->show();
    }
}