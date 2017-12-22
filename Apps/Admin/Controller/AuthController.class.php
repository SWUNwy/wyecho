<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of AuthController
 *
 * @author Administrator
 */
class AuthController extends Controller {
    //put your code here
    public function index() {
        $rule = M('auth_rule');
        import('Org.Util.Page');
        $count = $rule->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $list = $rule->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$page);
        $this->display();
    }
    
    public function addAuth() {
        $this->display();
    }

    public function editAuth() {
        $id = I('id');
        $list = M('auth_rule')->find($id);
        $this->assign('list',$list);
        $this->display();
    }

    public function save() {
        $id = I('id');
        $result = M('auth_rule')->find($id);
        if ($result) {
            $editdata = array(
                'name'      => I('name'),
                'title'     => I('name'),
                'status'    => I('status'),
                'last_time'  => date('Y-m-d H:i:s'),
            );
            $editData = M('auth_rule')->where('id='.$id)->save($editdata);
            if ($editData) {
                $this->success("编辑成功!",U('Auth/index'));
            } else {
                $this->error("编辑失败!");
            }
        } else {
            $data = array(
                'name'      => I('name'),
                'title'     => I('name'),
                'status'    => I('status'),
                'add_time'  => date('Y-m-d H:i:s'),
            );
            $addData = M('auth_rule')->add($data);
            if ($result) {
                $this->success("添加成功",U('Auth/index'));
            } else {
                $this->error("添加失败!");
            }
        }
    }

    public function setStatus() {
        $id = I('id');
        $data = array(
            'status' => I('status'),
            'last_time' => date('Y-m-d H:i:s'),
        );
        $result = M('auth_rule')->where('id='.$id)->setField($data);
        if ($result) {
            $this->success("操作成功!");
        } else {
            $this->error("操作失败!");
        }
    }

    public function delete() {
        $id = I('id');
        $result = M('auth_rule')->delete($id);
        if ($result) {
            $this->success("删除成功!");
        } else {
            $this->error("删除失败!");
        }
    }
}
