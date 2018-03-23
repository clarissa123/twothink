<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"F:\guishan\xiangmu\TwoThink\public/../application/admin\view\repair\add.html";i:1521706660;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>        内容管理|TwoThink内容管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/static/static/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/static/static/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/static/adminlte/dist/css/AdminLTE.min.css">
    <!-- layui -->
    <link rel="stylesheet" href="/static/static/layui/css/layui.css">

    <link rel="stylesheet" href="/static/admin/css/twothink.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load.-->
    <link rel="stylesheet" href="/static/static/adminlte/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 3 -->
    <!--<script src="/static/static/adminlte/bower_components/jquery/dist/jquery.min.js"></script>-->
    <script src="/static/static/js/jquery.js"></script>


    <!-- 页面代码扩展，一般用于加载模板部分差异CSS与JS文件和代码 -->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <div class="logo navbar">
            <button class="navbar-toggle sidebar-toggle tnav_button_logo" data-toggle="push-menu" role="button">
                <span class="sr-only">左侧导航</span>
            </button>

            <button type="button" class="navbar-toggle navbar-toggle-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">顶部导航</span>
                <i class="fa fa-fw fa-ellipsis-h"></i>
            </button>
            <!--</div>-->
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>TWO</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Two</b>Think</span>
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top collapse navbar-collapse" id="navbar">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle hidden-xs" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu" style="float: left;">
                <div class="nav navbar-nav">
                    <li class="">
                        <a href="/admin/index/index.html"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> 首页</a>
                    </li>
                    <li class="">
                        <a href="/admin/repair/index.html"><i class="glyphicon glyphicon-th-large" aria-hidden="true"></i> 报修管理</a>
                    </li>
                    <li class="active">
                        <a href="/admin/article/index.html"><i class="glyphicon glyphicon-th-large" aria-hidden="true"></i> 内容</a>
                    </li>
                    <li class="">
                        <a href="/admin/user/index.html"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> 用户</a>
                    </li>
                    <li class="">
                        <a href="/admin/config/group.html"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> 系统</a>
                    </li>
                    <li class="">
                        <a href="/admin/addons/index.html"><i class="glyphicon glyphicon-th" aria-hidden="true"></i> 扩展</a>
                    </li>
                </div>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="/static/static/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="/static/static/adminlte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="/static/static/adminlte/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="/static/static/adminlte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="/static/static/adminlte/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a target="_blank" href="/home/index/delcache.html" title="网站首页">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/clear/delcache.html" title="清空缓存" class="ajax-get">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </li>


                    <!-- 用户信息 -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/static/static/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">您好:admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/static/static/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    您好，admin                                    <small>2018-03-22 10:09:08</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a target="_blank" href="http://www.twothink.cn/">官网</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="/admin/user/update_nickname.html" class="ajax-get iframe">修改昵称</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/admin/user/update_password.html" class="btn btn-default btn-flat ajax-get iframe">修改密码</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/admin/login/logout.html" class="btn btn-default btn-flat ajax-get">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- /用户信息 -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- 侧边栏 -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/static/static/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>您好:admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- 子导航 -->

            <ul class="side-sub-menu sidebar-menu" data-widget="tree">


                <!-- 子导航 -->

                <li class=""><a href="/admin/article/recycle.html"><i class="fa fa-trash"></i>回收站</a></li>
                <li class="treeview ">
                    <a href="/admin/article/index/cate_id/1.html">
                        <i class="fa fa-circle-o "></i> <span>博客</span>
                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu" style="display: none">

                        <li class=""><a href="/admin/article/index/cate_id/2.html"><i class="fa fa-circle-o "></i>默认分类</a></li>
                    </ul>
                </li>
                <!--/ 子导航 -->
                <li class="header">LABELS</li>
                <li><a href="http://twothink.cn" target="_blank"><i class="fa fa-home text-red"></i> <span>官方网站</span></a></li>
                <li><a href="https://www.kancloud.cn/ming118116/twothink" target="_blank"><i class="fa fa-book text-yellow"></i> <span>官方文档</span></a></li>
                <li><a href="http://shang.qq.com/wpa/qunwpa?idkey=e44ea31a37e47815528c511f139e43c4e80de8edf8aa9c016134450dbbbd5a67" target="_blank"><i class="fa fa-qq text-aqua"></i> <span>QQ交流</span></a></li>
            </ul>

            <!-- /子导航 -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- /侧边栏 -->
    <!-- 内容区 -->
    <div class="content-wrapper">
        <!-- 内容标题 -->

        <!-- /内容标题 -->

        <!-- 内容主体 -->
        <section class="content">
            <div class="content-bottom">

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-5">
                        <div class="container-fluid">

                            <form action="<?php echo url('repair/add'); ?>" method="post">
                                <div class="form-group">
                                    <label>您的姓名(必填):</label>
                                    <input type="text" name="name" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>您的电话(必填):</label>
                                    <input type="text" name="tel" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>您的地址(必填):</label>
                                    <input type="text" name="address" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>标题(必填):</label>
                                    <input type="text" name="title" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>内容(详细描述需要报修的内容):</label>
                                    <textarea type="text" name="content" class="form-control"></textarea>
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

                    <div class="col-xs-12">
                        <table class="layui-hide" id="LAY_table_user" lay-filter="user"></table>
                    </div>
                </div>

                <div class="extra_list" style="display: none;">
                </div>

                <div class="search_html" style="display: none;">
                    <div class="btn-group seach-main col-md-6 col-sm-6 col-xs-12">
                        <div class="layui-input-inline">
                            <select name="seach_all[name][]" lay-filter="field_name">
                                <option value="">请选择字段</option>
                            </select>
                        </div>
                        <div class="layui-input-inline">
                            <select name="seach_all[exp][]">
                                <option value="">不参与搜索</option>
                                <option value="eq">等于</option>
                                <option value="neq">不等</option>
                                <option value="lt">小于</option>
                                <option value="elt">小于等于</option>
                                <option value="gt">大于</option>
                                <option value="egt">大于等于</option>
                                <option value="like">包含</option>
                            </select>
                        </div>
                        <div class="layui-input-inline value-html">
                            <input name="seach_all[value][]" class="layui-input" type="text" value="" placeholder="请输入参数">
                        </div>
                        <button type="button" class="layui-btn seach_all_delte">删除</button>
                    </div>
                </div>


            </div>
        </section>
        <!-- /内容主体 -->
    </div>
    <!-- /内容区 -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>TwoThink</b> 3.0.0 20171119            </div>
        <strong>Copyright &copy; 2014-2017 <a href="http://www.twothink.cn" target="_blank">YiPinWangLuo Studio</a>.</strong> All rights
        reserved.
    </footer>



    <!-- Control Sidebar -->
    <!-- control控制栏 -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">最近的活动</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control控制栏 -->
    <!-- /.control-sidebar -->


    <!-- 添加边栏的背景。必须放置此div -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="/static/static/bootstrap/js/bootstrap.min.js"></script>
<!-- layui -->
<script src="/static/static/layui/layui.js"></script>

<!-- jQuery Knob Chart -->
<script src="/static/static/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- FastClick -->
<script src="/static/static/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/static/static/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/static/adminlte/dist/js/demo.js"></script>

<!-- Twothink -->
<script src="/static/admin/js/common.js"></script>


<style>
    .seach-main{
        padding-left: 0px;
        padding-right: 0px;
        margin-bottom: 5px;
    }
</style>

<!-- 页面代码扩展，一般用于加载模版部分差异CSS与JS文件和代码 -->
</body>
</html>

