<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/pub/admin/css/bootstrap.min.css" />
<link rel="stylesheet" href="/pub/admin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/pub/admin/css/matrix-style.css" />
<link rel="stylesheet" href="/pub/admin/css/matrix-media.css" />
<link href="/pub/admin//font-awesome/css/font-awesome.css" rel="stylesheet" />
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
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
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
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Gallery</a> </div>
    <h1>Gallery</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
            <h5>Gallery</h5>
          </div>
          <div class="widget-content">
            <ul class="thumbnails">
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" class="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a > <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a > <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span2"> <a> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
            </ul>
            <ul class="thumbnails">
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a class="thumbnail lightbox_trigger" href="/pub/admin/img/gallery/imgbox5.jpg"> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span1"> <a> <img src="/pub/admin/img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="/pub/admin/img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              
            </ul>
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
<script src="/pub/admin/js/matrix.js"></script>
</body>
</html>