<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>WyEcho管理系统</title>
    <meta name="keywords" content="WyEcho管理系统">
    <meta name="description" content="WyEcho管理系统">

    <link rel="shortcut icon" href="/wyecho/public/Admin/img/favicon.ico">
    <link href="/wyecho/public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="/wyecho/public/Admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <script src="/wyecho/public/Admin/js/jquery.min63b9.js?v=2.1.4"></script>
    <script src="/wyecho/public/Admin/js/bootstrap.min14ed.js?v=3.3.6"></script>
    <script src="/wyecho/public/Admin/js/content.mine209.js?v=1.0.0"></script>
    <script src="/wyecho/public/Admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="/wyecho/public/Admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="/wyecho/public/Admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="/wyecho/public/Admin/js/demo/bootstrap-table-demo.min.js"></script>
    <script src="/wyecho/public/Admin/js/plugins/summernote/summernote.min.js"></script>
    <script src="/wyecho/public/Admin/js/plugins/summernote/summernote-zh-CN.js"></script>
    <script src="/wyecho/public/Admin/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/wyecho/public/Admin/js/demo/peity-demo.min.js"></script>
    <script src="/wyecho/public/Admin/js/plugins/peity/jquery.peity.min.js"></script>
    <link href="/wyecho/public/Admin/css/plugins/webuploader/webuploader.css" rel="stylesheet">
    <script src="/wyecho/public/Admin/js/plugins/webuploader/webuploader.js"></script>
    <script src="/wyecho/public/Admin/js/layer/layer.js"></script>
    <script src="/wyecho/public/Admin/js/laydate/laydate.js"></script>
    <script src="http://tajs.qq.com/stats?sId=9051096" type="text/javascript"  charset="UTF-8"></script>
</head>

<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>会员列表</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3" style="float: right;">
<!--                             <div class="input-group">
                                <input type="text" placeholder="请输入姓名" class="input-sm form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>用户名</th>
                                <th>性别</th>
                                <th>邮箱</th>
                                <th>联系方式</th>
                                <th>最后访问IP</th>
                                <th>最后访问时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td>
                                        <input type="checkbox" class="i-checks" name="id[]" value="<?php echo ($vo["id"]); ?>">
                                    </td>
                                    <td><?php echo ($vo["uname"]); ?></td>
                                    <td>
                                        <?php if(($vo['sex'] == 1)): ?>男<?php endif; ?>
                                        <?php if(($vo['sex'] == 0)): ?>女<?php endif; ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["email"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["phone"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["ip"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["last_time"]); ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo U('Member/getDetail',['id'=>$vo['id']]);?>"><button type="button" class="btn btn-outline btn-primary btn-xs">详情</button></a>
                                        <a href="<?php echo U('Member/editMember',['id'=>$vo['id']]);?>"><button type="button" class="btn btn-outline btn-default btn-xs">编辑</button></a>
                                        <a href="<?php echo U('Member/delete',['id'=>$vo['id']]);?>" class=""><button type="button" class="btn btn-outline btn-warning btn-xs">删除</button></a>                                    
                                    </td>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="text-align: center;"><?php echo ($page); ?></div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="/wyecho/public/Admin/js/http/ajax.js"></script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>