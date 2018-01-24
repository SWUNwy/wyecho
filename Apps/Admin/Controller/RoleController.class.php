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
namespace Admin\Controller;

use Think\Controller;
/**
 * Description of RoleController
 *
 * @author Administrator
 */
class RoleController extends Controller {
    //put your code here
    public function index() {
        $role = M('auth_group');
        import('Org.Util.Page');

        $count = $role->count();
                //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);

        //分页显示输出
        $show = $Page->show();
        $list = $role->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);                
        $this->display();
    }
    
    public function addRole() {
        $this->display();
    }
    
    public function editRole() {
        $id = I('id');
        $list = M()->find($id);
        $this->assign('list',$list);
        $this->display();
    }
    
    public function save() {
        $id = I('id');
        $newData = array(
            'title' => I('title'),
            'status'=> I('status'),
            'rules' => I('rules'),
            'add_time'=> date('Y-m-d H:i:s')
        );
        var_dump($newData);
    }
}
