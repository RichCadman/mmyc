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
			注册
			<div class="whead_l">
				
			</div>
		</div>
		<div class="login">
			<div class="login_con1">
				<div class="login_con1_h">
					欢迎注册美鸣科技
				</div>
				<div class="login_con1_c">
					<div class="login_con1_img login_con1_img3"></div>
					<form action="/index.php/Reg/reg/email/<?php echo ($email); ?>" method="post" class="login_form1">
						<div class="login_warp">
							<label class="login_warp_l hidden">
								姓名
							</label>
							<input type="text" name="username" id="username" placeholder="请输入姓名" value="" class="login_tel placeholdercolor" />
						</div>
						<div class="login_warp">
							<label class="login_warp_l hidden">
								密码
							</label>
							<input type="password" name="password" id="password" placeholder="密码（6-16位）" value="" class="login_tel placeholdercolor" />
						</div>
						<div class="login_warp">
							<label class="login_warp_l hidden">
								密码
							</label>
							<input type="password" name="password2" id="password2" placeholder="再次输入密码（6-16位）" value="" class="login_tel placeholdercolor" />
						</div>
						<div class="login_warp">
							<label class="login_warp_l hidden">
								邀请码
							</label>
							<input type="text" name="request_code" id="" placeholder="邀请码（非必填）" value="" class="login_tel placeholdercolor" />
						</div>
						
						<script type="text/javascript">
		                  function checkFile(){
		                    var username=$("#username").val();
		                    var password=$("#password").val();
		                    var password2=$("#password2").val();
		                    if(username==""){
		                      alert("请填写用户名");
		                      return false;
		                    }else if(password==""){
		                      alert("请填写密码");
		                      return false;
		                    }else if(password2!=password){
		                      alert("两次密码不一致");
		                      return false;
		                    }
		                  }
		                </script>
						
						
						
						<input type="submit" onclick="return checkFile()" value="完成" class="login_sub login_sub1"/>
					</form>
					<div class="login_herf login_herf1">
						<span class="login_herf_red">已有帐号? 直接<a href="/index.php/Login/login.html">登录</a></span>
					</div>
				</div>
			</div>
		</div>
		<script src="/pub/home/js/js.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>