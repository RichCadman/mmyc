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
			Register
			<div class="whead_l">
				
			</div>
		</div>
		<div class="login">
			<div class="login_con1">
				<div class="login_con1_h">
					Welcome to register MeiMing
				</div>
				<div class="login_con1_c">
					<div class="login_con1_img login_con1_img1"></div>
					<!-- <form action="" method="post" class="login_form1"> --> 
						<!--<input type="text" name="" id="" placeholder="请输入邮箱" value="" class="login_tel placeholdercolor" />-->
						<div class="login_warp">
							<label class="login_warp_l hidden">
								用户名
							</label>
							<input type="text" name="email" id="email" placeholder="Please enter the mailbox" value="" class="login_tel placeholdercolor" />
						</div>
						<div class="login_yzm">
							<div class="login_warp">
								<label class="login_warp_l hidden">
									用户名
								</label>
								<input type="" name="code" id="code" placeholder="Please enter your identification number and click on the picture to change it" value="" class="placeholdercolor" />
								<div class="login_yzm_r">
									<a href="javascript:void(0)" onclick="changeImage()"><img id="myImg" src="/index.php/RegE/verify"/></a>
								</div>
							</div>
						</div>

						<script type="text/javascript">
							function changeImage(){
								var imageEle=document.getElementById("myImg");
								imageEle.src="/index.php/RegE/verify/rnd="+(new Date()).getTime();
							}
						</script>

						<script type="text/javascript">
		                  function checkFile(){
		                  	var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/; 
		                    var email=$("#email").val();
		                    var code=$("#code").val();
		                    var checkbox=$("input[type='checkbox']").is(':checked');
		                    if(email==""){
		                      alert("请填写邮箱");
		                      return false;
		                    }else if(!reg.test(email)){
		                      alert("邮箱格式错误");
		                      return false;
		                    }else if(code==""){
		                      alert("请填写验证码");
		                      return false;
		                    }else if(checkbox!=true){
		                    	alert("请勾选条款");
		                      	return false;
		                    }
		                    $.post("/index.php/RegE/check_verify",{code:code},function(data){
		                    	if(data==0){
		                    		alert("验证码有误");
		                    	}else{
		                    		window.location="/index.php/RegE/index2/email/"+email;
		                    	}
		                    })
		                  }
		                </script>
						<div class="login_bz">
							<input type="checkbox" checked='checked'/>
							Do you agree to accept? <a href="#">Membership use clause</a>
						</div>
						<input type="submit" onclick="return checkFile()" value="Agree, next" class="login_sub login_sub1"/>
					<!-- </form>  -->
					<div class="login_herf login_herf1">
						<span class="login_herf_red">Existing account?<a href="/index.php/LoginE/login.html">Login directly</a></span>
					</div>
				</div>
			</div>
		</div>
		<script src="/pub/home/js/js.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>