<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index() {
        $this->display();
    }
    /**
     * 验证码
     */
    public function verify() {
        $config = [
            'fontSize' => 34,
            'length'   => 4,
        ];
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    
    public function login() {
        $this->redirect('Index/index');
    }
    
    public function logout() {
        session(null);
        $this->redirect('Login/index');
    }
}
