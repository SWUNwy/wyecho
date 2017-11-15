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
