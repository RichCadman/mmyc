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
		<div class="head">
			<div class="head_c">
				<div class="head_cc">
					<div class="head_cc_l">
						<a href="/index.php/Login/login.html">登录</a>
					</div>
					<div class="head_cc_l1">
						<a href="/index.php/Reg/index1.html">注册</a>
					</div>
					<div class="head_cc_l2">
						<a href="#">搜索</a>
					</div>
					<div class="head_cc_l3">
						<span><a href="#">Chinese</a></span> or <a href="#">English</a>
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
				<li class="list_li"><a href="/index.php/Index/index.html">首页</a></li>
				<li class="list_li"><a href="/index.php/Cpzx/index.html">产品中心</a></li>
				<li class="list_li"><a href="/index.php/Jjfa/index.html">解决方案</a></li>
				<li class="list_li"><a href="/index.php/Mmtm/index.html">美鸣贴面</a></li>
				<li class="list_li"><a href="/index.php/Khzq/index.html">客户专区</a></li>
				<li class="list_li"><a href="/index.php/Ddcx/index.html">订单查询</a></li>
				<li class="list_li"><a href="/index.php/Xwzx/index.html">新闻中心</a></li>
				<li class="list_li"><a href="/index.php/Qyzx/index.html">企业信息</a></li>
			</ul>
		</div>
		<div class="ny_banner">
			<img src="/pub/upload/<?php echo ($banner["banner_img"]); ?>"/>
		</div>
		<div class="ny_con">
			<div class="cpny_bthd">
				<span>公司简介 </span>
			</div>
			<div class="ny_c">
				<div class="ny_c_h">
					<span>公司介绍 </span><i>/ Veneer</i>
				</div>
				<div class="ny_c_c">
					&emsp;&emsp;深圳美鸣齿科器械有限公司是行业内领先的义齿供应商，专注于全瓷牙领域，坚持稳健经营、持续创新、开放合作，为门诊提供优质的牙齿和高性价比的解决方案。美鸣公司成立于2005
年，总部设在深圳，现已在山东、山西、内蒙、湖南、四川、陕西、深圳成立分公司。目前，美鸣公司已经成长为北方规模最大的高端义齿生产企业，配备国际一流的义齿加工设备。公司旗
下拥有多个高端义齿品牌，其中“美鸣”、“洛诗”已是业内知名品牌。先进成熟的营销模式取得了巨大成功，公司未来5年将抓住行业风口浪潮，进行全国市场开发的战略布局，做坚实的行
业引领者。
				</div>
				<ul class="fgs_ul">
					<li class="fgs_li">
						<img src="/pub/home/img/ny1.jpg"/>
						<div class="fgs_li_c">
							<span>公司愿景</span><i>：让天下没有难看的牙齿</i>
						</div>
					</li>
					<li class="fgs_li">
						<img src="/pub/home/img/ny2.jpg"/>
						<div class="fgs_li_c">
							<span>公司使命</span><i>：致力于成为口腔行业一流的综合解决方案服务商 </i>
						</div>
					</li>
					<li class="fgs_li">
						<img src="/pub/home/img/ny3.jpg"/>
						<div class="fgs_li_c">
							<span>企业精神</span><i>：脚踏实地 稳健创新</i>
						</div>
					</li>
				</ul>
				<div class="fgs">
						<div class="fgs_l">
		<ul>
			<li class="fgs_l_li">
				<a href="/index.php/Qyzx/index.html">联系我们</a>
			</li>
			<li class="fgs_l_li">
				<a href="/index.php/Qyzx/geju.html">全国格局下的美鸣贴面</a>
			</li>
			<li class="fgs_l_li">
				<a href="/index.php/Qyzx/school.html">美鸣商学院</a>
			</li>
			<li class="fgs_l_li">
				<a href="/index.php/Qyzx/change.html">工作机会与职业发展</a>
			</li>
			<li class="fgs_l_li">
				<a href="/index.php/Qyzx/network.html">美鸣全国网络</a>
			</li>
			<li class="fgs_l_li">
				<a href="/index.php/Qyzx/fgs.html">各分公司</a>
			</li>
		</ul>
	</div>
					<div class="fgs_r">
						<ul>
							<?php if(is_array($school)): foreach($school as $key=>$v): ?><li class="fgs_r_li">
								<div class="fgs_r_li_l">
									<img src="/pub/upload/<?php echo ($v["img"]); ?>"/>
								</div>
								<div class="fgs_r_li_r">
									<div class="fgs_r_h1">
										<a href="/index.php/Qyzx/school1/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?>  </a>
									</div>
									<div class="fgs_r_c1">
										发布时间：<?php echo date("Y-m-d",$v['time']);?>
									</div>
									<div class="fgs_r_c_sm">
										<a href="/index.php/Qyzx/school1/id/<?php echo ($v["id"]); ?>"><?php echo ($v["content"]); ?></a>
									</div>
								</div>
							</li><?php endforeach; endif; ?>
							
						</ul>
						<div class="ny_herf">
							<div class="ny_herf_l">
								<a href="#">首页</a
								><a href="#">上一页</a
								><a href="#">下一页</a
								><a href="#">尾页</a
								><span class="whidden">页次：1/1页</span><span>共12条记录</span><span class="whidden">15条每页</span>
							</div>
							<div class="ny_herf_r">
								<form action="" method="post">
									<input type="" name="" id="" value="" class="ny_inp" />
									<input type="submit" value="转到"class="ny_sub" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="footer">
			<div class="footer_c">
				<div class="footer_l">
					<ul class="footer_l_h">
						<li class="footer_l_hli"><a href="/index.php/Index/index.html">首页</a></li>
						<li class="footer_l_hli"><a href="/index.php/Cpzx/index.html">产品中心</a></li>
						<li class="footer_l_hli"><a href="/index.php/Jjfa/index.html">解决方案</a></li>
						<li class="footer_l_hli"><a href="/index.php/Mmtm/index.html">美鸣贴面</a></li>
						<li class="footer_l_hli"><a href="/index.php/Khzq/index.html">客户专区</a></li>
						<li class="footer_l_hli"><a href="/index.php/Xwzx/index.html">新闻中心</a></li>
						<li class="footer_l_hli"><a href="/index.php/Qyzx/index.html">企业信息</a></li>
					</ul>
					<ul class="footer_l_c">
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Qyzx/index.html">公司简介</a></li>
								<li><a href="/index.php/Mmtm/index.html">美鸣贴面</a></li>
								<li><a href="/index.php/Ddcx/index.html">订单查询</a></li>
								<li><a href="/index.php/Index/index.html">合作伙伴</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Cpzx/index.html">美鸣氧化锆系列</a></li>
								<li><a href="/index.php/Cpzx/index.html">铸瓷全瓷牙</a></li>
								<li><a href="/index.php/Cpzx/index.html">美鸣种植系列</a></li>
								<li><a href="/index.php/Cpzx/index.html">美鸣精密</a></li>
								<li><a href="/index.php/Cpzx/index.html">美鸣纯钛</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Jjfa/index.html">技术支持</a></li>
								<li><a href="/index.php/Jjfa/index.html">店面营销</a></li>
								<li><a href="/index.php/Jjfa/index.html">店面扩客</a></li>
								<li><a href="/index.php/Jjfa/index.html">店面管理</a></li>
								<li><a href="/index.php/Jjfa/index.html">连锁扩展</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Mmtm/index.html">贴面介绍</a></li>
								<li><a href="/index.php/Mmtm/index.html">贴面优势</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Khzq/index.html">视频专区</a></li>
								<li><a href="/index.php/Khzq/index.html">问题解答</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Xwzx/index.html">公司动态</a></li>
								<li><a href="/index.php/Xwzx/index.html">相关资讯</a></li>
								<li><a href="/index.php/Xwzx/index.html">其他动态</a></li>
							</ul>
						</li>
						<li class="footer_l_cli">
							<ul>
								<li><a href="/index.php/Qyzx/index.html">公司介绍</a></li>
								<li><a href="/index.php/Qyzx/index.html">关于我们</a></li>
								<li><a href="/index.php/Qyzx/index.html">企业文化</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer_r">
					<div class="footer_r_h">
						<div class="footer_r_hl">
							<img src="/pub/home/img/logo2.png"/>
							电话：0755-27695552
							<br />地址：深圳市宝安西乡前进二路航城工业区富鑫林工业园D栋3楼
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
Copyright &copy; 2017深圳美鸣科技有限公司
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
		</script>
	</body>
</html>