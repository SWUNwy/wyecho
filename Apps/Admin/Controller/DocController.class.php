<?php

namespace Admin\Controller;

use Think\Controller;
/**
 * Description of DocController
 * 文件上传模块
 * @author Administrator
 */
class DocController extends Controller {
    //put your code here
    public function index() {
    	$file = M('files');
        // 导入分页类
        import('Org.Util.Page');

        //查询满足满足条件的总记录条数
        $count = $Doc->count();

        //实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $data = $file->order('add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($data as $=&$value) {
        	$value['size'] = $this->sizeCount($value['size']);
        }
        $this->assign('data',$data);
        $this->display();
    }
    
    public function addDoc() {
        $this->display();
    }

    /**
     * 将上传文件大小转换为字节数
     * @param  string $byte [description]
     * @return string $size [description]
     */
    public funcion sizeCount($byte) {
        if ($byte < 1024) {
            return $byte.'$nbsp;byte';
        } else if (($size = round($byte/1024,2)) < 1024) {
            $return $size.'$nbsp;byte';
        } else if(($size = round($byte/(1024*1024),2)) < 1024){
            return $size.'&nbsp;MB';
        } else{
            return round($byte/(1024*1024*1024),2).'&nbsp;GB';
        }
    }

}
