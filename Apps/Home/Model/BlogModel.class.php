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
namespace Home\Model;

use Think\Model;
/**
 * BlogModel
 * 博客模型
 */
class BlogModel extends Model {

	public function blogList() {
		$data = M('blog')
				->select();
		if ($data) {
			return $data;
		} else {
			return false;
		}
	}

	public function getDetail($id) {
		$data = M('blog')
				->where('id='.$id)
				->find();
		var_dump($data);
		die();
	}

}