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
			注册成功
			<div class="whead_l">
				
			</div>
		</div>
		<div class="login">
			<div class="login_con1">
				<div class="login_con1_c">
					<div class="login_zc">
						Successful registration, Congratulations!
					</div>
					<div class="login_email">
						Login account for your registered mailbox<span><?php echo ($email); ?></span>
					</div>
					<form action="/index.php/LoginE/login" method="post" class="login_form1">
						<input type="submit" value="Start using" class="login_sub login_sub1"/>
					</form>
					<div class="login_herf login_herf1">
						
					</div>
				</div>
			</div>
		</div>
		<script src="/pub/home/js/js.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>