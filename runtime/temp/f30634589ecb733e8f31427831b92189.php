<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"F:\guishan\xiangmu\TwoThink\public/../application/admin/view/default/repair\add.html";i:1521771495;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>在线报修</title>

    <!-- Bootstrap -->
    <link href="__PUBLIC__/static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .main{margin-bottom: 60px;}
        .indexLabel{padding: 10px 0; margin: 10px 0 0; color: #fff;}
    </style>
</head>
<body>
<!--导航结束-->

<div class="container-fluid">
    <form  method="post">
        <div class="form-group">
            <label>报修人(必填):</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <label>电话(必填):</label>
            <input type="text" class="form-control" name="tel"/>
        </div>
        <div class="form-group">
            <label>标题(必填):</label>
            <input type="text" class="form-control" name="title"/>
        </div>
        <div class="form-group">
            <label>地址(必填):</label>
            <input type="text" class="form-control"  name="address"/>
        </div>
        <div class="form-group">
            <label>内容(详细描述需要报修的内容):</label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>

        <!--<div class="form-group">-->
        <!--<div><a href="#"><span class="glyphicon glyphicon-plus onlineUpImg"></span></a></div>-->
        <!--<label>图片(最多上传5张,可不上传):</label>-->
        <!--</div>-->
        <div class="form-group">
            <button class="btn btn-primary onlineBtn">确认提交</button>
        </div>
    </form>
</div>
</div>
</body>
</html>

