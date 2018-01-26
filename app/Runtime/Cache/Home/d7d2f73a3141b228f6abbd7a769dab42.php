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
		<div class="img"></div>
		<div class="kh_bt">
			<i>&nbsp;</i><span>客户专区</span><i>&nbsp;</i>
		</div>
		<div class="cpny_bthd">
			<span>客户专区 </span>
		</div>
		<div class="cp_c">
			长期以来，美鸣公司致力于成为全国领先的义齿供应商及口腔问题系统服务提供商，坚持“科技铸就品质，品质服务生活”的理念围绕
			<br />医疗器械供应、资产托管、管理咨询、知识输出四大板块，为客户创造“专业，让笑容更自信”的品牌体验
获			<br />得持续的利润增长，向股东提供长期稳定的价值回报
		</div>
		<div class="spzq">
			<div class="spzq_l wow fadeInLeft">
				<div class="spzq_l_dw">
					<a href="#"><img src="/pub/home/img/play1.png"/></a>
					<div>
						VIDEO
					</div>
				</div>
			</div>
			<div class="spzq_r wow fadeInRight">
				<div class="spzq_r_h">
					<span>视频专区</span><i>/ Video</i>
				</div>
				<ul>
					<?php if(is_array($video)): foreach($video as $key=>$v): ?><li class="spzq_r_li">
						<div class="spzq_r_li_l">
							<a href="#"><?php echo ($v["title"]); ?></a>
						</div>
						<div class="spzq_r_li_r">
							<?php echo date("Y-m-d",$v['time']);?>
						</div>
					</li><?php endforeach; endif; ?>
					
				</ul>
			</div>
		</div>
		<div class="wtjd">
			<div class="ny_c_h wtjd_h">
				<span>常见问题解答 </span><i>/ PROBLEM SOLUTION</i>
			</div>
			<div class="wtjd_c">
				美鸣公司架构完善，高管团队全部来自国内著名商学院EMBA，战略智慧一流；销售团队傲视群雄，开发并应用成熟完整的营销模式，能够迅速复制，立刻收效！美鸣公司培养员工遵循适才原则，多样化的工作形式、完善的培训机制和内部晋升机制，成就了大批的职业经理人！
			</div>
			<ul class="wtjd_ul">
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/Khzq/index1.html">问:牙医回答患者洗牙8问？</a>
					</div>
					<div>
						<a href="/index.php/Khzq/index1.html">答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。 ...</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/Khzq/index1.html">问：美国科学家称刷牙不彻底会减寿13年？</a>
					</div>
					<div>
						<a href="/index.php/Khzq/index1.html">答：核心提示：据英国《每日邮报》报道，美国科学家称，刷牙不彻底导致的牙菌斑、牙周炎问题可能加大患癌症死亡的风险。 美国科学家称，刷牙不彻底导致的牙菌斑、牙周炎问题可能加大患癌... </a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/Khzq/index1.html">问:代理商级别？</a>
					</div>
					<div>
						<a href="/index.php/Khzq/index1.html">答：代理商级别: 深圳家鸿义齿将代理商分为四个级别，分别如下，您可以根据您的实际情况选择申请，不同级别代理商的代理价格均不同，所有代理商的考察期均为3个月，当不能达标时，公司将派出...</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/Khzq/index1.html">问:代理优势？</a>
					</div>
					<div>
						<a href="/index.php/Khzq/index1.html">答：代理优势 一、渠道规范 深圳家鸿义齿实行区域核心统一化的渠道政策，减少管理层级，保证区域内代理商的利润空间。 1、代理商是深圳家鸿义齿在代理区域的渠道合作伙伴，是深...</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/Khzq/index1.html">问:代理支持？</a>
					</div>
					<div>
						<a href="/index.php/Khzq/index1.html">答：代理支持: 1、公司保证代理商利益，确保产品品质。 2、深圳家鸿义齿对代理商进行必要的技术支持和培训。 3、在新产品出台时，市场部提供有关介绍资料。</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/Khzq/index1.html">问:代理的基本要求？</a>
					</div>
					<div>
						<a href="/index.php/Khzq/index1.html">答：对代理基本要求: A、有专人负责市场销售、印模及产品的接送工作； B、工作认真负责，不损害深圳家鸿义齿在客户心目中的形象； C、具有良好的市场意识及清晰可行的市场开拓计...</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="cpny_bthd">
			<span>常见问题 </span>
		</div>
		<ul class="qa hidden">
			<li class="qa_li">
				<div class="qa_li_h">
					<div class="qa_li_h_l">
						<div>
							Q
						</div>
					</div>
					<div class="qa_li_h_r">
						牙医回答患者洗牙8问？
					</div>
				</div>
				<div class="qa_li_c">
					<div class="qa_li_h_l">
						<div>
							A
						</div>
					</div>
					<div class="qa_li_c_r">
						1.问：为什么要洗牙?
<br />答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。
<br />2.问：什么是牙石?
<br />答：牙菌斑与唾液中钙磷离子结合钙化成牙石。就像烧水后水壶底的水垢一样。不论你牙刷得有多好，时间久了牙石总会形成的。不过，视个体差异有的人多，有的人会少一些。牙齿排列整齐的相对易刷牙较少。牙列不齐的相对会多一些。
<br />3.问：用什么设备洗牙?
<br />答：有超声波洁治器，喷砂洁治器和手工洁治器三种。如果仅有牙石，则用超声波洁治器就可。如果牙石少色渍多，则选用喷砂。如果牙石色渍均多，则建议超声波和喷砂联合使用。对于龈下牙石多的，牙周情况差的，主张在做完超声波洁治一周后手工刮治术。这样效果会更好一些。
<br />4.问：洗牙伤牙不?为什么好多的人都说洗牙不好呢?
<br />答：洗牙对牙齿的损伤是相当轻微的。相对于保护牙齿的健康，那一点小的损伤是可以忽略不计的，就象我们没有必要担心洗碗会将碗洗薄一样。但是，洗牙的方法很重要。选择医生和洁牙助理很重要。对于超声波洁牙，关键是超声波振头与牙面的角度控制，且不能在同一个点震动过久，另外要控制好洁牙机的功率。操作者的手势要轻柔。如果动作粗暴不损伤牙齿是假的。
<br />5.问：洗过一次后还需要再洗吗?
<br />答：这个世界上没有一劳永逸的事情。因为牙齿每天在用，还会再脏。
<br />6.问：多久洗牙一次合适?
<br />答：半年到一年左右。依您的口腔具体情况及牙科医生的建议。
<br />7.问：洗一次牙要花多长时间?
<br />答：40分钟到一个小时左右。依您的口腔具体情况。太短就不对了
<br />8.问：为什么有些人洗牙之后牙齿会松动?
<br />答：如果您的牙齿牙周情况好,牙结石少,正确的洗牙方法绝不会把牙齿洗松的。对于那些牙周情况不好的，之前有大量牙石的，才有可能出现这种“松”动现象——其实是一种正常的现象——我们把牙齿比喻为大树。大树的营养靠它旁边的土壤来供给。假如有一颗大树它旁边都是石头，那么它虽然也很稳固，可是因为没有营养。以后也会慢慢的枯死。所以我们需要把石头搬走，给它培上土。虽然刚把石头拿走换上土的时候树会有些松动。以后土实了就好了。牙齿的稳固性和营养来源靠它旁边的牙龈和牙槽骨。如果牙齿旁边有牙石，虽然牙齿也很稳，但是以后也会因为没有营养而死掉。虽然当时有点松动。对长久有好处。
					</div>
				</div>
			</li>
			<li class="qa_li">
				<div class="qa_li_h">
					<div class="qa_li_h_l">
						<div>
							Q
						</div>
					</div>
					<div class="qa_li_h_r">
						美国科学家称刷牙不彻底会减寿13年？
					</div>
				</div>
				<div class="qa_li_c">
					<div class="qa_li_h_l">
						<div>
							A
						</div>
					</div>
					<div class="qa_li_c_r">
						1.问：为什么要洗牙?
<br />答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。
					</div>
				</div>
			</li>
			<li class="qa_li">
				<div class="qa_li_h">
					<div class="qa_li_h_l">
						<div>
							Q
						</div>
					</div>
					<div class="qa_li_h_r">
						代理商级别？
					</div>
				</div>
				<div class="qa_li_c">
					<div class="qa_li_h_l">
						<div>
							A
						</div>
					</div>
					<div class="qa_li_c_r">
						1.问：为什么要洗牙?
<br />答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。
					</div>
				</div>
			</li>
			<li class="qa_li">
				<div class="qa_li_h">
					<div class="qa_li_h_l">
						<div>
							Q
						</div>
					</div>
					<div class="qa_li_h_r">
						代理优势？
					</div>
				</div>
				<div class="qa_li_c">
					<div class="qa_li_h_l">
						<div>
							A
						</div>
					</div>
					<div class="qa_li_c_r">
						1.问：为什么要洗牙?
<br />答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。
					</div>
				</div>
			</li>
			<li class="qa_li">
				<div class="qa_li_h">
					<div class="qa_li_h_l">
						<div>
							Q
						</div>
					</div>
					<div class="qa_li_h_r">
						代理支持？
					</div>
				</div>
				<div class="qa_li_c">
					<div class="qa_li_h_l">
						<div>
							A
						</div>
					</div>
					<div class="qa_li_c_r">
						1.问：为什么要洗牙?
<br />答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。
					</div>
				</div>
			</li>
			<li class="qa_li">
				<div class="qa_li_h">
					<div class="qa_li_h_l">
						<div>
							Q
						</div>
					</div>
					<div class="qa_li_h_r">
						代理的基本要求？
					</div>
				</div>
				<div class="qa_li_c">
					<div class="qa_li_h_l">
						<div>
							A
						</div>
					</div>
					<div class="qa_li_c_r">
						1.问：为什么要洗牙?
<br />答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。
					</div>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			new WOW().init();
		</script>
		
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