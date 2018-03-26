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
 * IndexController
 * 首页模块
 * @author wyecho <[@sina.com]>
 */
class IndexController extends Controller {

    public function index() {
    	
		$data = new BlogModel();
		$data = $data->blogList();
		$this->assign('data',$data);
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