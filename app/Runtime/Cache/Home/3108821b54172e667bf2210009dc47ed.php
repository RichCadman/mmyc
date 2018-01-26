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
					Welcome to register MeiMing
				</div>
				<div class="login_con1_c">
					<div class="login_con1_img login_con1_img2"></div>
					<div class="login_text">
						Existing account? Login directly We have sent a confirmation email to your email<span id="email_code"><?php echo ($email); ?></span>
					</div>
					<!-- <form action="" method="post" class="login_form1"> -->
						<div class="login_yzm">
							<div class="login_warp">
								<label class="login_warp_l hidden">
									验证码
								</label>
								<input type="text" name="code" id="code" placeholder="请输入验证码" value="" class="yzm placeholdercolor" />
								<div class="login_send" id="send">
									Send out
								</div>
							</div>
						</div>

						<script type="text/javascript">
							$(function(){
								$("#send").click(function(){
									var email=$("#email_code").text();
									$.post("/index.php/RegE/send",{email:email},function(data){
										if(data==0){
											alert("系统繁忙");
										}else{
											alert("发送成功,注意查看");
										}
									})
								})
							})
						</script>

						<script type="text/javascript">
		                  function checkFile(){
		                    var code=$("#code").val();
		                    var email=$("#email_code").text();
		                    if(code==""){
		                      alert("请填写验证码");
		                      return false;
		                    }
		                    $.post("/index.php/RegE/check_code",{code:code,email:email},function(data){
		                    	if(data==0){
		                    		alert("验证码错误");
		                    	}else{
		                    		window.location="/index.php/RegE/index3/email/"+email;
		                    	}
		                    })
		                  }
		                </script>
						<div class="login_text1">
							If the long time does not receive the verification code, please see the<a href="#">help</a>
						</div>
						<input type="submit"  onclick="return checkFile()" value="下一步" class="login_sub login_sub1"/>
					<!-- </form> -->
					<div class="login_herf login_herf1">
						<span class="login_herf_h"><a href="/index.php/RegE/index1.html">Go back to the last step</a></span>|<span class="login_herf_red">Have an account?<a href="/index.php/LoginE/login.html">log</a></span>
					</div>
				</div>
			</div>
		</div>
		<script src="/pub/home/js/js.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>