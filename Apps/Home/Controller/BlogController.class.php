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
use Home\Model\BlogModel;
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
     */
    public function blogDetail() {
    	
        $id = I('id');
    	$blog = new BlogModel();
    	$data = $blog->getDetail($id);
    	$this->assign('data',$data);
        $this->display();
    }
}
