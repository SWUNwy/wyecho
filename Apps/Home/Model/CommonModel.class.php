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
 * Description of CommonModel
 *
 * @author Administrator
 */
class CommonModel extends Model {
    //put your code here
    /**
     * [add description]
     * @param char  $table 需要增加数据的表
     * @param array $data  需要增加的数据
     * @return boolean 操作结果
     */
    public function add() {
    	return true;
    }

    public function save() {
    	return true;
    }

    public function delete() {
    	return true;
    }
}
