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
                    <h5>站点配置</h5>
                </div>
                <form method="post" action="<?php echo U('System/save');?>">
                <?php if(is_array($sys)): $i = 0; $__LIST__ = $sys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" id="id" value="<?php echo ($vo["id"]); ?>">
                <div class="ibox-content">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="<?php echo ($vo["title"]); ?>" placeholder="请填写版权信息" id="title">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键词</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keywords" value="<?php echo ($vo["keywords"]); ?>" placeholder="请填写版权信息" id="keywords">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" value="<?php echo ($vo["description"]); ?>" placeholder="请填写版权信息" id="description">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ICP备案号</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="icp" value="<?php echo ($vo["icp"]); ?>" placeholder="请填写ICP备案号" id="icp">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">版权信息</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="copyright" value="<?php echo ($vo["copyright"]); ?>" placeholder="请填写版权信息" id="copyright">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


<!--                         <div class="form-group">
                            <label class="col-sm-2 control-label">统计代码</label>

                            <div class="col-sm-10">
                                <textarea  type="text" class="form-control" name="count" value="<?php echo ($vo["count"]); ?>" placeholder="请填写统计代码" id="count"><?php echo ($vo["count"]); ?></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> -->

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" id="save">保存内容</button>
<!--                                 <button class="btn btn-white" type="button" onclick="reset();">重置</button> -->
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    //定义全局变量
    // var GV = {
    //     system_siteconfig : "<?php echo U('System/index');?>"
    // };

    //重置操作
    function reset(){
        $("input[name='copyright']").val("");
        $("input[name='icp']").val("");
        $("#count").val("");
    }
</script> -->
<!-- <script src="/wyecho/public/Admin/js/http/system/siteconfig.js"></script> -->

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 12:29:44 GMT -->
</html>