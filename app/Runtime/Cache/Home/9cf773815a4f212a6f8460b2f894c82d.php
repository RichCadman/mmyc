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
		<div class="cp_bt">
			<i>&nbsp;</i><span>产品中心</span><i>&nbsp;</i>
		</div>
		<div class="cp_c">
			长期以来，美鸣公司致力于成为全国领先的义齿供应商及口腔问题系统服务提供商，坚持“科技铸就品质，品质服务生活”<br />
的理念，通过“义齿供应+管理咨询+教育培训”的模式，聚焦“大医疗健康”和“大教育咨询”两大产业，<br />
围绕医疗器械供应、资产托管、管理咨询、知识输出四大板块，为客户创造“专业，让笑容更自信”<br />
的品牌体验，获得持续的利润增长，向股东提供长期稳定的价值回报。
		</div>
		<ul class="cp_hul">
			<li class="cp_hli">美鸣氧化锆系列</li>
			<li class="cp_hli">美鸣玻璃陶瓷系列</li>
			<li class="cp_hli">美鸣种植系列</li>
			<li class="cp_hli">美鸣精密</li>
			<li class="cp_hli">美鸣纯钛</li>
		</ul>
		<ul>


			<li class="cp_hli_con">
				<div class="cpny_bthd">
					<span>美鸣氧化锆系列</span>
				</div>
				<ul class="cp_ul">
					<?php if(is_array($mm1)): foreach($mm1 as $key=>$v): ?><li class="cp_li">
						<a href="/index.php/Cpzx/index1/id/<?php echo ($v["id"]); ?>.html"><img src="/pub/upload/<?php echo ($v["mmtm_img1"]); ?>"/></a>
					</li><?php endforeach; endif; ?>
				</ul>
			</li>


			<li class="cp_hli_con">
				<div class="cpny_bthd">
					<span>美鸣玻璃陶瓷系列</span>
				</div>
				<ul class="cp_ul">
					<?php if(is_array($mm2)): foreach($mm2 as $key=>$v): ?><li class="cp_li">
						<a href="/index.php/Cpzx/index1/id/<?php echo ($v["id"]); ?>.html"><img src="/pub/upload/<?php echo ($v["mmtm_img1"]); ?>"/></a>
					</li><?php endforeach; endif; ?>
				</ul>
			</li>
			<li class="cp_hli_con">
				<div class="cpny_bthd">
					<span>美鸣种植系列</span>
				</div>
				<ul class="cp_ul">
					
					<?php if(is_array($mm3)): foreach($mm3 as $key=>$v): ?><li class="cp_li">
						<a href="/index.php/Cpzx/index1/id/<?php echo ($v["id"]); ?>.html"><img src="/pub/upload/<?php echo ($v["mmtm_img1"]); ?>"/></a>
					</li><?php endforeach; endif; ?>
				</ul>
			</li>
			<li class="cp_hli_con">
				<div class="cpny_bthd">
					<span>美鸣精密</span>
				</div>
				<ul class="cp_ul">
					
					<?php if(is_array($mm4)): foreach($mm4 as $key=>$v): ?><li class="cp_li">
						<a href="/index.php/Cpzx/index1/id/<?php echo ($v["id"]); ?>.html"><img src="/pub/upload/<?php echo ($v["mmtm_img1"]); ?>"/></a>
					</li><?php endforeach; endif; ?>
				</ul>
			</li>
			<li class="cp_hli_con">
				<div class="cpny_bthd">
					<span>美鸣纯钛</span>
				</div>
				<ul class="cp_ul">
					<?php if(is_array($mm5)): foreach($mm5 as $key=>$v): ?><li class="cp_li">
						<a href="/index.php/Cpzx/index1/id/<?php echo ($v["id"]); ?>.html"><img src="/pub/upload/<?php echo ($v["mmtm_img1"]); ?>"/></a>
					</li><?php endforeach; endif; ?>
				</ul>
			</li>
		</ul>
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
							电话：<?php echo ($pc); ?>
							<br />地址：深圳市宝安西乡前进二路航城工业区富鑫林工业园D栋3楼
						</div>
						<div class="footer_r_hr">
							<img src="/pub/home/img/mm29.jpg"/>
						</div>
					</div>
					<div class="footer_r_c">
						<!-- <div class="footer_r_c1"></div> -->
						<div id="zone" class="footer_r_c2"></div>
						<div id="blog" class="footer_r_c3"></div>
					</div>
					<input type="hidden" id="content" value="<?php echo ($content); ?>">
					<script type="text/javascript">
					//分享到微博
						$('#blog').click(function(){
							var content=$("#content").val();
			                window.sharetitle = content;//标题
			                window.shareUrl = '__IMG__<%$info.img.0.url%>';//缩略图
			                share();
			            });
			            function share(){
			                //d指的是window
			                (function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(window.sharetitle),'&appkey=2924220432','&pic=',e(window.shareUrl)].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent);
			            }
					</script>
					
					<script type="text/javascript">
					//分享到QQ空间
						$("#zone").click(function(){
							var content=$("#content").val();
			                var p = {
			                    url:location.href,
			                    showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */
			                    desc:'',/*默认分享理由(可选)*/
			                    summary:content,/*分享摘要(可选)*/
			                    title:'美鸣义齿',/*分享标题(可选)*/
			                    site:'美鸣义齿',/*分享来源 如：腾讯网(可选)*/
			                    pics:'__IMG__<%$info.img.0.url%>', /*分享图片的路径(可选)*/
			                    style:'203',
			                    width:98,
			                    height:22
			                };
			                var s = [];
			                for(var i in p){
			                    s.push(i + '=' + encodeURIComponent(p[i]||''));
			                }
			                window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join('&'));
			            });
					</script>
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
		<input type="hidden" id="qq" value="<?php echo ($qq); ?>">
		<script type="text/javascript">
			function chatQQ(){  
				var qq=$("#qq").val();
			    /*1234567对应的就是需要聊天的客服*/  
			    window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1&src_type=web&web_src=oicqzone.com";  
			}  
		</script>
		<div class="bottom">
			<div class="bottom_l">
				<div class="bottom_l_img">
					<a href="tel:<?php echo ($sj); ?>"><img src="/pub/home/img/wb11.png"/></a>
				</div>
				<div class="bottom_l_c">
					<a href="tel:<?php echo ($sj); ?>">电话咨询</a>
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
					<a href="javascript:void(0);" onclick="chatQQ()"><img src="/pub/home/img/wb13.png"/></a>
				</div>
				<div class="bottom_l_c">
					<a href="javascript:void(0);" onclick="chatQQ()">QQ客服</a>
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