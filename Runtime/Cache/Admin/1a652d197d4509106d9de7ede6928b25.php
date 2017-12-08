<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>WyEcho</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/wyecho/public/Admin/img/favicon.ico">
    <link rel="stylesheet" href="/wyecho/public/Admin/js/login/layui/css/layui.css">
    <link rel="stylesheet" href="/wyecho/public/Admin/css/login/admin.css">
    <!--[if lt IE 9]>
    <script src="/wyecho/public/Admin/js/login/html5shiv.min.js"></script>
    <script src="/wyecho/public/Admin/js/login/respond.min.js"></script>
    <style>
        .login .login-form input {color: #000;}
    </style>
    <![endif]-->
</head>
<body class="login">
<div class="login-title">后台管理</div>
<form class="layui-form login-form" action="<?php echo U('Login/login');?>" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-block">
            <input type="text" name="uname" id="uname" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" name="pwd" id="pwd" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">验证码</label>
        <div class="layui-input-block">
            <input type="text" name="verify" id="verify" class="layui-input layui-input-inline">
            <img src="<?php echo U('Login/verify');?>" alt="点击更换" title="点击更换" onclick="this.src='<?php echo U('Login/verify');?>?time='+Math.random()" class="captcha">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="*">登 录</button>
        </div>
    </div>
</form>
<!-- <script>
    // 定义全局JS变量
    var GV = {
        current_controller: "admin/<?php echo ((isset($controller) && ($controller !== ""))?($controller):''); ?>/",
        login_controller : "<?php echo U('login/login');?>",
        index_controller : "<?php echo U('index/index');?>"
    };
</script>
<script src="/wyecho/public/Admin/js/login/jquery.min.js"></script>
<script src="/wyecho/public/Admin/js/login/layui/lay/dest/layui.all.js"></script>
<script src="/wyecho/public/Admin/js/login/admin.js"></script>
<script src="/wyecho/public/Admin/js/http/login/login.js"></script> -->
</body>
</html>