<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="/pub/home/css/swiper.min.css">
		<link rel="stylesheet" href="/pub/home/css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="/pub/home/css/css.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<script src="/pub/home/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/pub/home/js/wow.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="head">
			<div class="head_c">
				<div class="head_cc">
					<div class="head_cc_l">
						<a href="/index.php/LoginE/login.html">login</a>
					</div>
					<div class="head_cc_l1">
						<a href="/index.php/RegE/index1.html">register</a>
					</div>
					<div class="head_cc_l2">
						<a href="#">search</a>
					</div>
					<div class="head_cc_l3">
						<span><a href="/index.php/Index/index.html">Chinese</a></span> or <a href="/index.php/IndexE/index.html">English</a>
					</div>
				</div>
			</div>
		</div>

		<div class="list">
			<div class="list_herf"></div>
			<div class="list_logo">
				<img src="/pub/home/img/logo.png"/>
			</div>
			<div class="list_logo1">
				<img src="/pub/home/img/wb9.png"/>
				<span>深圳美鸣科技有限公司</span>
			</div>
			<div class="list_login"></div>
			<ul class="list_ul">
				<li class="list_li"><a href="/index.php/IndexE/index.html">Home</a></li>
				<li class="list_li"><a href="/index.php/CpzxE/index.html">Product Center</a></li>
				<li class="list_li"><a href="/index.php/JjfaE/index.html">Solution</a></li>
				<li class="list_li"><a href="/index.php/MmtmE/index.html">Veneer</a></li>
				<li class="list_li"><a href="/index.php/KhzqE/index.html">Customer</a></li>
				<li class="list_li"><a href="/index.php/DdcxE/index.html">Order</a></li>
				<li class="list_li"><a href="/index.php/XwzxE/index.html">News</a></li>
				<li class="list_li"><a href="/index.php/QyzxE/index.html">Information</a></li>
			</ul>
		</div>
		<div class="ny_banner">
			<img src="/pub/upload/<?php echo ($banner["banner_img"]); ?>"/>
		</div>
		<div class="bt1">
			<span>PROGRAMME </span><em>/ Programme</em>
		</div>
		<ul class="jj_ul">

			<?php if(is_array($info)): foreach($info as $key=>$v): ?><li class="jj_li wow fadeInUp">
				<div class="jj_li_l">
					<a href="/index.php/Jjfa/index1/id/<?php echo ($v["id"]); ?>.html"><img src="/pub/upload/<?php echo ($v["img"]); ?>"/></a>
				</div>
				<div class="jj_li_r">
					<div class="jj_li_r_h">
						<a href="/index.php/Jjfa/index1/id/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a>
					</div>
					<div class="jj_li_r_c">
						<a href="/index.php/Jjfa/index1/id/<?php echo ($v["id"]); ?>.html"><?php echo ($v["content"]); ?></a>
					</div>
				</div>
				<a href="/index.php/Jjfa/index1/id/<?php echo ($v["id"]); ?>.html"><div class="jj_li_dw">
					<?php echo ($v["title"]); ?>
				</div></a>
			</li><?php endforeach; endif; ?>

			
		</ul>
		
		
		<script type="text/javascript">
			new WOW().init();
		</script>
		
		
		
		
		<div class="footer">
			<div class="footer_c">
				<div class="footer_l">
					<ul class="footer_l_h">
						<li class="footer_l_hli"><a href="/index.php/IndexE/index.html">Home</a></li>
						<li class="footer_l_hli"><a href="/index.php/CpzxE/index.html">Product Center</a></li>
						<li class="footer_l_hli"><a href="/index.php/JjfaE/index.html">Solution</a></li>
						<li class="footer_l_hli"><a href="/index.php/MmtmE/index.html">Veneer</a></li>
						<li class="footer_l_hli"><a href="/index.php/KhzqE/index.html">Customer</a></li>
						<li class="footer_l_hli"><a href="/index.php/XwzxE/index.html">News</a></li>
						<li class="footer_l_hli"><a href="/index.php/QyzxE/index.html">Information</a></li>
					</ul>
					<ul class="footer_l_c">
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/QyzxE/index.html">Company profile</a></li>
								<li><a href="/index.php/MmtmE/index.html">Veneer</a></li>
								<li><a href="/index.php/DdcxE/index.html">Order</a></li>
								<li><a href="/index.php/IndexE/index.html">partners</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/CpzxE/index.html">The zirconium oxide series</a></li>
								<li><a href="/index.php/CpzxE/index.html">Sing glass ceramic series</a></li>
								<li><a href="/index.php/CpzxE/index.html">Mei Ming planted series</a></li>
								<li><a href="/index.php/CpzxE/index.html">Meiming Precision</a></li>
								<li><a href="/index.php/CpzxE/index.html">Mei Ming pure titanium</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/JjfaE/index.html">Technical</a></li>
								<li><a href="/index.php/JjfaE/index.html">Marketing</a></li>
								<li><a href="/index.php/JjfaE/index.html">Aspires</a></li>
								<li><a href="/index.php/JjfaE/index.html">Administration</a></li>
								<li><a href="/index.php/JjfaE/index.html">Chains</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/MmtmE/index.html">Introduce</a></li>
								<li><a href="/index.php/MmtmE/index.html">Advantage</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/KhzqE/index.html">Video</a></li>
								<li><a href="/index.php/KhzqE/index.html">Problem solution</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/XwzxE/index.html">Dynamics</a></li>
								<li><a href="/index.php/XwzxE/index.html">Relevant information</a></li>
								<li><a href="/index.php/XwzxE/index.html">Other trends</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/QyzxE/index.html">Company Introduction</a></li>
								<li><a href="/index.php/QyzxE/index.html">About Us</a></li>
								<li><a href="/index.php/QyzxE/index.html">Corporate Culture</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer_r">
					<div class="footer_r_h">
						<div class="footer_r_hl">
							<img src="/pub/home/img/logo2.png"/>
							Telephone：<?php echo ($pc); ?>
							<br />Address：Shenzhen City, Baoan Xixiang forward two Fuxin town industrial zone air Lin Industrial Park D building 3 floor
						</div>
						<div class="footer_r_hr">
							<img src="/pub/home/img/mm29.jpg"/>
						</div>
					</div>
					<div class="footer_r_c">
						<!-- <div class="footer_r_c1"></div> -->
						<div class="footer_r_c2"></div>
						<div class="footer_r_c3"></div>
					</div>
					<div class="footer_r_btm">
						鲁ICP备13071670-2 号<br />
Copyright &copy; MeiMing Technology Corporation
					</div>
				</div>
			</div>
			<div class="footer_bottom">
				Copyright © 2017美鸣科有限公司<br />
				鲁ICP备13071670-2 号
			</div>
		</div>
		<div class="bottom">
			<div class="bottom_l">
				<div class="bottom_l_img">
					<a href="tel:<?php echo ($j); ?>"><img src="/pub/home/img/wb11.png"/></a>
				</div>
				<div class="bottom_l_c">
					<a href="tel:<?php echo ($j); ?>">电话咨询</a>
				</div>
			</div>
			<div class="bottom_l">
				<div class="bottom_l_img1">
					<a href="#"><img src="/pub/home/img/wb12.png"/></a>
				</div>
				<div class="bottom_l_c">
					<a href="#">在线留言</a>
				</div>
			</div>
			<div class="bottom_l">
				<div class="bottom_l_img2">
					<a href="#"><img src="/pub/home/img/wb13.png"/></a>
				</div>
				<div class="bottom_l_c">
					<a href="#">QQ客服</a>
				</div>
			</div>
		</div>
		<div class="gotop"></div>
		<script src="/pub/home/js/js.js" type="text/javascript" charset="utf-8"></script>
		<script src="/pub/home/js/swiper.jquery.min.js" type="text/javascript"></script>
		
		<script>
		    var swiper = new Swiper('.swiper-container1', {
		        pagination: '.swiper-pagination1',
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        paginationClickable: true,
		        spaceBetween: 0,
		        centeredSlides: true,
		        autoplay: 5000,
		        autoplayDisableOnInteraction: false
		    });
		</script>
	</body>
</html>