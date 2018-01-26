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
		<div class="img"></div>
		<div class="kh_bt">
			<i>&nbsp;</i><span>Customer territory</span><i>&nbsp;</i>
		</div>
		<div class="cpny_bthd">
			<span>Customer territory </span>
		</div>
		<div class="cp_c">
			Since the Ming period, the company is committed to become the denture suppliers and oral problems the nation's leading service provider system, adhere to the "science and technology makes quality, quality of service life" concept around four plates of medical supplies, asset custody, management consulting, knowledge output, to create "professional customers, let more confident smile" brand experience to obtain continuous profit growth, provide long-term stable value returns to shareholders
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
					<span>VIDEO</span><i>/ Video</i>
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
				<span>Problem Solution </span><i>/ PROBLEM SOLUTION</i>
			</div>
			<div class="wtjd_c">
				The Ming company structure, executive team comes from the famous EMBA School of business, strategic wisdom first-class sales team; warlords, the development and application of mature and integrated marketing mode, can quickly copy, effective immediately! The company staff training just follow the principle of Ming, diverse forms of work, improve the training mechanism and internal promotion mechanism, the achievements of a large number of occupation managers!
			</div>
			<ul class="wtjd_ul">
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/KhzqE/index1.html">问:牙医回答患者洗牙8问？</a>
					</div>
					<div>
						<a href="/index.php/KhzqE/index1.html">答：沉积在牙齿上的牙石、烟斑、菌斑和色渍，很不美观，更易引起牙周病和口臭，但日常刷牙是刷不掉的，这就需要牙医用专用器械将它洗除干净，称为洗牙。 ...</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/KhzqE/index1.html">问：美国科学家称刷牙不彻底会减寿13年？</a>
					</div>
					<div>
						<a href="/index.php/KhzqE/index1.html">答：核心提示：据英国《每日邮报》报道，美国科学家称，刷牙不彻底导致的牙菌斑、牙周炎问题可能加大患癌症死亡的风险。 美国科学家称，刷牙不彻底导致的牙菌斑、牙周炎问题可能加大患癌... </a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/KhzqE/index1.html">问:代理商级别？</a>
					</div>
					<div>
						<a href="/index.php/KhzqE/index1.html">答：代理商级别: 深圳家鸿义齿将代理商分为四个级别，分别如下，您可以根据您的实际情况选择申请，不同级别代理商的代理价格均不同，所有代理商的考察期均为3个月，当不能达标时，公司将派出...</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/KhzqE/index1.html">问:代理优势？</a>
					</div>
					<div>
						<a href="/index.php/KhzqE/index1.html">答：代理优势 一、渠道规范 深圳家鸿义齿实行区域核心统一化的渠道政策，减少管理层级，保证区域内代理商的利润空间。 1、代理商是深圳家鸿义齿在代理区域的渠道合作伙伴，是深...</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/KhzqE/index1.html">问:代理支持？</a>
					</div>
					<div>
						<a href="/index.php/KhzqE/index1.html">答：代理支持: 1、公司保证代理商利益，确保产品品质。 2、深圳家鸿义齿对代理商进行必要的技术支持和培训。 3、在新产品出台时，市场部提供有关介绍资料。</a>
					</div>
				</li>
				<li class="wtjd_li wow fadeInUp">
					<div class="wtjd_li_h">
						<a href="/index.php/KhzqE/index1.html">问:代理的基本要求？</a>
					</div>
					<div>
						<a href="/index.php/KhzqE/index1.html">答：对代理基本要求: A、有专人负责市场销售、印模及产品的接送工作； B、工作认真负责，不损害深圳家鸿义齿在客户心目中的形象； C、具有良好的市场意识及清晰可行的市场开拓计...</a>
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
		</script>
	</body>
</html>