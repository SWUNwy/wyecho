<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of NewsController
 * 资讯模块
 * @author Administrator
 */
class NewsController extends Controller {
    //put your code here
    public function index() {
    	$news = M('news');
    	//引入Page类
    	import('Org.Util.Page');
    	$count = $news->count();
    	$Page = new \Think\Page($count,10);
    	$show = $Page->show();
    	$list = $news->order('add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);
    	$this->assign('page',$show);
        $this->display();
    }
    
    public function addNews() {
        $this->display();
    }

    public function editNews() {
    	$this->display();
    }


}
