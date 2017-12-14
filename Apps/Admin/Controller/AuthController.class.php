<?php

namespace Admin\Controller;

use Think\Controller;
use Admin\Controller\BaseController;
/**
 * Description of AuthController
 *
 * @author Administrator
 */
class AuthController extends BaseController {
    //put your code here
    public function index() {
        $this->display();
    }
    
    public function addAuth() {
        $this->display();
    }

    public function getInit() {
    	$token = $this->token;
    	echo $token;
    }
}
