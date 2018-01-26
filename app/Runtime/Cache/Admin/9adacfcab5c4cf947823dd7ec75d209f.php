<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/pub/admin/css/bootstrap.min.css" />
<link rel="stylesheet" href="/pub/admin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/pub/admin/css/uniform.css" />
<link rel="stylesheet" href="/pub/admin/css/select2.css" />
<link rel="stylesheet" href="/pub/admin/css/matrix-style.css" />
<link rel="stylesheet" href="/pub/admin/css/matrix-media.css" />
<link href="/pub/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">


    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo ($_SESSION['admin']['admin_name']); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="/admin.php/Indexs/add_admin"><i class="icon-user"></i>添加账号</a></li>
        <li class="divider"></li>
        <!-- <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li> -->
        <li><a href="/admin.php/Login/login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>


    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <!-- <span class="label label-important">5</span> --> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <!-- <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li> -->
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="/admin.php/Company/message.html"><i class="icon-envelope"></i> 查看留言</a></li>
        <li class="divider"></li>
        <!-- <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li> -->
      </ul>
    </li>


    <!-- <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li> -->
    <li class=""><a title="" href="/admin.php/Login/login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>首页</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Indexs/banner.html">上传头部banner图片</a></li>
        <li><a href="/admin.php/Indexs/xilie.html">上传主页美鸣贴面各系列图片</a></li>
        
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>产品中心</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Index/form_common.html">Basic Form</a></li>
        <li><a href="/admin.php/Index/form_validation.html">Form with Validation</a></li>
        <li><a href="/admin.php/Index/form_wizard.html">Form with Wizard</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>解决方案</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Fangan/add_fangan.html">添加方案</a></li>
        <li><a href="/admin.php/Index/form_validation.html">Form with Validation</a></li>
        <li><a href="/admin.php/Index/form_wizard.html">Form with Wizard</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>美鸣贴面</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Mmtm/add_img.html">产品体验图片</a></li>
        <li><a href="/admin.php/Index/form_validation.html">Form with Validation</a></li>
        <li><a href="/admin.php/Index/form_wizard.html">Form with Wizard</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>客户专区</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Khzq/add_video.html">上传视频</a></li>
        <li><a href="/admin.php/Index/form_validation.html">Form with Validation</a></li>
        <li><a href="/admin.php/Index/form_wizard.html">Form with Wizard</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>新闻中心</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/News/add_news.html">添加新闻</a></li>
        <li><a href="/admin.php/Index/form_validation.html">Form with Validation</a></li>
        <li><a href="/admin.php/Index/form_wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>企业信息</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Company/add_company.html">添加分公司</a></li>
        <li><a href="/admin.php/Company/add_network.html">添加美鸣全国网络</a></li>
        <li><a href="/admin.php/Company/add_qita.html">添加其他分类</a></li>
      </ul>
    </li>
    <li> <a href="/admin.php/Company/message.html"><i class="icon icon-inbox"></i> <span>查看留言</span></a> </li>

    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>



    <li class="active"><a href="/admin.php/Index/index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="/admin.php/Index/baobiao.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="/admin.php/Index/xiaochuangkou.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="/admin.php/Index/table.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="/admin.php/Index/full.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="/admin.php/Index/form_common.html">Basic Form</a></li>
        <li><a href="/admin.php/Index/form_validation.html">Form with Validation</a></li>
        <li><a href="/admin.php/Index/form_wizard.html">Form with Wizard</a></li>
      </ul>
    </li>


    <li><a href="/admin.php/Index/buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="/admin.php/Index/interface1.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="/admin.php/Index/index2.html">Dashboard2</a></li>
        <li><a href="/admin.php/Index/gallery.html">Gallery</a></li>
        <li><a href="/admin.php/Index/calendar.html">Calendar</a></li>
        <li><a href="/admin.php/Index/invoice.html">Invoice</a></li>
        <li><a href="/admin.php/Index/chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="/admin.php/Index/error403.html">Error 403</a></li>
        <li><a href="/admin.php/Index/error404.html">Error 404</a></li>
        <li><a href="/admin.php/Index/error405.html">Error 405</a></li>
        <li><a href="/admin.php/Index/error500.html">Error 500</a></li>
      </ul>
    </li>

  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Form validation</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid"> 
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Security validation</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="/admin.php/Indexs/add3" name="password_validate" id="password_validate" novalidate="novalidate">
                <div class="control-group">
                  <label class="control-label">账号</label>
                  <div class="controls">
                    <input type="text" name="admin_name" id="admin_name" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">密码</label>
                  <div class="controls">
                    <input type="password" name="password" id="password" />
                  </div>
                </div>

                <script type="text/javascript">
                  function checkFile(){
                    var admin_name=$("#admin_name").val();
                    var password=$("#password").val();
                    if(admin_name==""){
                      alert("请填写账号");
                      return false;
                    }else if(password==""){
                      alert("请填写密码");
                      return false;
                    }
                  }
                </script>
                <div class="form-actions">
                  <input type="submit" onclick="return checkFile()" value="添加" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="/pub/admin/js/jquery.min.js"></script> 
<script src="/pub/admin/js/jquery.ui.custom.js"></script> 
<script src="/pub/admin/js/bootstrap.min.js"></script> 
<script src="/pub/admin/js/jquery.uniform.js"></script> 
<script src="/pub/admin/js/select2.min.js"></script> 
<script src="/pub/admin/js/jquery.validate.js"></script> 
<script src="/pub/admin/js/matrix.js"></script> 
<script src="/pub/admin/js/matrix.form_validation.js"></script>
</body>
</html>