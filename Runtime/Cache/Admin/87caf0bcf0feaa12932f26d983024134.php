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
                    <h5>编辑会员</h5>
                </div>
                <form  action="<?php echo U('Member/save');?>" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo ($member["id"]); ?>">
                <div class="ibox-content">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">会员姓名</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="<?php echo ($member["uname"]); ?>" placeholder="请填写会员姓名" id="name">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                会员性别
                            </label>

                            <div class="col-sm-10">
                                <div class="radio i-checks">
                                    <label><input type="radio" value="0" name="sex" <?php if(($member['sex'] == 1)): ?>checked="checked"<?php endif; ?> > <i></i> 男</label>
                                    <label><input type="radio" value="1" name="sex" <?php if(($member['sex'] == 0)): ?>checked="checked"<?php endif; ?> > <i></i>女</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">邮箱</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="<?php echo ($member["email"]); ?>" placeholder="请填写邮箱" id="email">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系方式</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="<?php echo ($member["phone"]); ?>" placeholder="请填写方式" id="native_place">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">个人简介</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="introduct" value="<?php echo ($member["introduct"]); ?>" placeholder="请填写个人简介" id="introduct">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" id="save">保存内容</button>
                                <button class="btn btn-white" type="button" onclick="history.go(-1);">取消</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    // 定义全局变量
    var GV = {
        member_editmember : "<?php echo U('Member/editMember');?>",
        member_id : "<?php echo ($member["id"]); ?>"
    };
</script>
<script src="/wyecho/public/Admin/js/http/member/editmember.js"></script>
<script src="/wyecho/public/Admin/js/http/upload.js"></script> -->

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>