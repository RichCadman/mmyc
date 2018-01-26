<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="/pub/home/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="/pub/home/css/css.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<script src="/pub/home/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="whead hidden">
			登录
			<div class="whead_l">
				
			</div>
		</div>
		<div class="login">
			<div class="login_con">
				<div class="login_h">
					欢迎登录美鸣科技
				</div>
				<div class="login_hx"></div>
				<form action="/index.php/Login/login_do" method="post" class="login_form">
					<div class="login_warp">
						<label class="login_warp_l">
							账号
						</label>
						<input type="text" name="email" id="email" placeholder="请输入用户名" value="" class="login_inp login_bg1 placeholdercolor" />
					</div>
					<div class="login_warp">
						<label class="login_warp_l">
							密码
						</label>
						<input type="password" name="password" id="password" placeholder="请输入密码" value="" class="login_inp login_bg2 placeholdercolor" />
					</div>

					<script type="text/javascript">
	                  function checkFile(){
	                    var email=$("#email").val();
	                    var password=$("#password").val();
	                    if(email==""){
	                      alert("请填写用户名");
	                      return false;
	                    }else if(password==""){
	                      alert("请填写密码");
	                      return false;
	                    }
	                  }
	                </script>

					<input type="submit" onclick="return checkFile()" value="登录" class="login_sub"/>
				</form>
				<div class="login_herf">
					<span class="login_herf_h"><a href="#">忘记密码?</a></span><i>&nbsp;</i><span class="login_herf_red"><a href="/index.php/Reg/index1.html">免费注册</a></span>
				</div>
			</div>
		</div>
		<script src="/pub/home/js/js.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>