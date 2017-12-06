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

        $count = $blog->count();
        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $list = $blog->where(['remove'=>0])->order('last_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function getDetail() {
        $id = I('id');
        $detail = M('blog')->find($id);
        $this->assign('detail',$detail);
        $this->display('getDetail');
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
     * [save description]
     * @return [type] [description]
     */
    public function save() {}

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
    
    public function delete() {
        $id = I('id');
        $result = M('blog')->delete($id);
        if ($result) {
            $this->success("删除成功!");
        } else {
            $this->error("删除失败!");
        }
    }

    public function remove() {
        $id = I('id');
        $data = array(
            'remove'    => '1',
            'last_time' => date('Y-m-d H:i:s')
            );
        $result = M('blog')->where(['id'=>$id])->setField($data);
        if ($result) {
            $this->success('放置回收站成功!');
        } else {
            $this->error('放置回收站失败!');
        }
    }

    /**
     * 
     */
    public function recycle() {
        $this->display();
    }
    
}
