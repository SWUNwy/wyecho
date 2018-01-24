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
/**
 * Description of DatabaseController
 *
 * @author Administrator
 */
class DatabaseController extends Controller {
    //put your code here
    public function index() {
        $list = M()->query('SHOW TABLE STATUS');
        // p($list);
        // die();
        $this->assign('list',$list);
        $this->display();
    }
    
    public function exprot() {}
    
    public function import() {
        $this->display();
    }
}
