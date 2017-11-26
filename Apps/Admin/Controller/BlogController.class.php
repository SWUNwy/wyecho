<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of BlogController
 *
 * @author Administrator
 */
class BlogController extends Controller {
    /**
     * Blog list
     */
    public function index() {
        $blog = M('blog');

        import('Org.Util.Page');

        $count = $blig->count();
        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $list = $blog->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->display();
    }
    
    /**
     * 新增博文
     */
    public function addBlog() {
        $this->display();
    }
    
    /**
     * 编辑博文
     */
    public function editBlog() {
        $this->display();
    }
    
    /**
     * 分类列表
     */
    public function cateList() {
        $this->display();
    }
    
    /**
     * 增加分类
     */
    public function addCate() {
        $this->display();
    }
    
    /**
     * 编辑分类
     */
    public function editCate() {
        $this->display();
    }
    
    /**
     * 
     */
    public function recycle() {
        $this->display();
    }
    
}
