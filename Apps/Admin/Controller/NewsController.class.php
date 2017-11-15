<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of NoticeController
 *
 * @author Administrator
 */
class NewsController extends Controller {
    //put your code here
    public function index() {
        $this->display();
    }
    
    public function addNews() {
        $this->display();
    }
}
