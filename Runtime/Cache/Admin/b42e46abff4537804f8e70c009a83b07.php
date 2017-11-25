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
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>会员详情</h5>
                <div class="ibox-tools">
                    <button type="button" class="btn btn-outline btn-primary btn-xs" onclick="history.go(-1);">返回</button>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-bordered" style="width: 80%;margin: auto;">
                    <thead>
                        <tr>
                            <th colspan="5"  style="text-align: center;">会员<?php echo ($member["uname"]); ?>基本信息</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>姓名</th>
                        <td><?php echo ($member["uname"]); ?></td>
                        <th>性别</th>
                        <td>
                            <?php if(($member['sex'] == 1)): ?>男<?php endif; ?>
                            <?php if(($member['sex'] == 0)): ?>女<?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>邮箱</th>
                        <td><?php echo ($member["email"]); ?></td>
                        <th>联系方式</th>
                        <td><?php echo ($member["phone"]); ?></td>
                    </tr>
                    <tr>
                        <th>最后访问IP</th>
                        <td><?php echo ($member["ip"]); ?></td>
                        <th>加入时间</th>
                        <td><?php echo ($member["add_time"]); ?></td>
                    </tr>
                    <tr>
                        <th>个人简介</th>
                        <td colspan="4"><?php echo ($member["introduction"]); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>