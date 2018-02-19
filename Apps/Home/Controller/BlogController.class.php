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
    
    /**
     * 博文详细内容展示
     * @param  [int] $id [博文Id]
     * @return [array] $result [博文详细内容]
     */
    public function detail($id) {
    	
    	$blog = N('blog');
    	$result = $blog->find($id);
    	$this->assign('result',$result);
        $this->display();
    }
}
