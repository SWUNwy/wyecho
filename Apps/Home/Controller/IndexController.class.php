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

    	$db = M('blog');
    	// 导入分页类
        import('Org.Util.Page');
    	
    	$count = $db->count();
        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();
        $data = $db->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		// $data = new BlogModel();
		// $data = $data->blogList();
		var_dump($show);
		die();
		$this->assign('data',$data);
		$this->assign('page',$page);
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