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
		<div class="ny_con">
			<div class="bt1">
				<span>Veneer </span><em>/ VENEER</em>
			</div>
			<div class="cp_c">
				Veneer is used for tooth restoration, covering some tooth surfaces, solving tooth surface defects, discolored teeth, discolored teeth, etc.
				<p>THE UTILITY MODEL RELATES TO A FACIAL VENEER FOR BEAUTIFYING AND REPAIRING TEETH. THE UTILITY MODEL COVERS SOME TOOTH
				<br /> SURFACES, SOLVES THE DEFECTS OF THE TEETH SURFACE, COLORED TEETH,
 				<br /> DISCOLORED TEETH, ETC., AND THE ADHESIVE COVERS THE SURFACE TO RESTORE THE FORM AND </p>
			</div>
			<ul class="tm_ul">
				<li class="tm_li wow fadeInUp">
					<img src="/pub/home/img/js1.jpg"/>
					<div class="tm_li_h">
						A : Easy and quick
					</div>
					<div class="tm_li_c">
						The repair scheme of porcelain teeth with different ages was adopted
						<br />Emphasizing the combination of aesthetic concepts to repair
						<br />Custom personalized solutions
					</div>
				</li>
				<li class="tm_li wow fadeInUp">
					<img src="/pub/home/img/js2.jpg"/>
					<div class="tm_li_h">
						B : Natural beauty
					</div>
					<div class="tm_li_c">
						A complete resolution of the deformity
						<br />Adjust the relation of jaw and jaw accurately
						<br />The best condition for a tooth to bite the jaw
					</div>
				</li>
				<li class="tm_li wow fadeInUp">
					<img src="/pub/home/img/js3.jpg"/>
					<div class="tm_li_h">
						C : Lasting comfort
					</div>
					<div class="tm_li_c">
						Long term use of multiple intelligent orthodontic techniques
						<br />Follow the principles of science and aesthetics
						<br />Rearrange your teeth and change your face quietly
					</div>
				</li>
				<li class="tm_li wow fadeInUp">
					<img src="/pub/home/img/js4.jpg"/>
					<div class="tm_li_h">
						D : Good compatibility
					</div>
					<div class="tm_li_c">
						Adopt advanced international implants
						<br />To ensure the quality of dental implants, a molding
						<br />Make oral patients comfortable and enjoy painless experience
					</div>
				</li>
			</ul>
		</div>
		<div class="tm_bg">
			<div class="tm_bg_c">
				<div class="tm_bg_l wow fadeInLeft">
					<img src="/pub/home/img/js6.png"/>
				</div>
				<div class="tm_bg_r wow fadeInRight">
					<div class="tm_bg_r_h">
						Advantages of Veneer
					</div>
					<div class="tm_bg_r_c">
						Maximum protection of the tooth tissue, will not stimulate the gums, can maintain long-term natural teeth health.The color effect is better - when the teeth are ready, the gums can be flat, and the irritation to the gums is very small. There is no metal ion in the porcelain teeth and the discoloration of the gums.Beautiful and lasting effect -- is transparent and opaque good, because it doesn't contain any metal, excellent aesthetic effect, does not appear KaoCiYa common "black line" phenomenon, high wear resistance ceramic veneer itself and the coloring can achieve permanent whitening effect.Comfortable and not drop - porcelain veneers repair and preserve most or even all of the tongue's morphology.
					</div>
				</div>
			</div>
		</div>
		<div class="bt1">
			<span>Experience </span><em>/ EXPERIENCE</em>
		</div>
		<div class="cp_c cp_js">
			The company was founded in 2001. At the beginning of the company, it was aimed at "the best medical center in Asia"".
		</div>
		<div class="tm_ty">
			<div class="swiper-container swiper-container3"><!--移动滚动-->
				    <div class="swiper-wrapper">
						<?php if(is_array($img)): foreach($img as $key=>$v): ?><div class="swiper-slide">
				        	<div class="tm_ty_li">
								<img src="/pub/upload/<?php echo ($v["img"]); ?>"/>
							</div>
				        </div><?php endforeach; endif; ?>
				    </div>
				    <!-- 如果需要分页器 -->
				   <!-- <div class="swiper-pagination swiper-pagination1"></div>-->
				    
				    <!-- 如果需要导航按钮 -->
				    <!--<div class="swiper-button-prev"></div>
				    <div class="swiper-button-next"></div>-->
				    
				    <!-- 如果需要滚动条 -->
				    <!--<div class="swiper-scrollbar"></div>-->
			</div>
		</div>
		<div class="cp_c1">
			Good reputation, good service, build professional pilot brand
<p>GOOD REPUTATION, GOOD SERVICE, TO CREATE A PROFESSIONAL PILOT BRAND</p>
		</div>
		<div class="msyy">
			<a href="#">Make an appointment immediately</a>
		</div>
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
							Telephone：0755-27695552
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
					<a href="tel:18264161683"><img src="/pub/home/img/wb11.png"/></a>
				</div>
				<div class="bottom_l_c">
					<a href="tel:18264161683">电话咨询</a>
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
		    var swiper3 = new Swiper('.swiper-container3', {
		       	pagination: '.swiper-pagination3',
		        slidesPerView: 3,
		        paginationClickable: true,
		        spaceBetween: 20,
		        autoplay:3000,
		        autoplayDisableOnInteraction: false
		    });
		</script>
	</body>
</html>