<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller {

	public function index() {
		$user = M('user');

		import('Org.Util.Page');

		$count = $user->count();
		        //实例化分页类 传入总记录数和每页显示的记录数
		$Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();
        $list = $user->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);		

        $this->display();
	}

	public function add() {
		$data = array(
			'uname'		=> I('uname'),
			'pwd'		=> I('pwd'),
			'status'	=> I('status'),
			'role_id'	=> I('role_id'),
			'add_time'	=> date('Y-m-d H:i:s'),
			);
		p($data);
		die();
		$result = M('user')->add($data);
		if ($result) {
			$this->success("添加成功!");
		} else {
			$this->error("添加失败!");
		}
	}

}