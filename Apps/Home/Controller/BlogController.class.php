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
 * Description of BlogController
 *
 * @author Administrator
 */
class BlogController extends Controller {
    
    public function index() {
        $this->display();
    }
    
    public function detail() {
        $this->display();
    }
}
