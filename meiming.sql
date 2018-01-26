/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : meiming

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-28 23:31:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mmyc_admin
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_admin`;
CREATE TABLE `mmyc_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_admin
-- ----------------------------
INSERT INTO `mmyc_admin` VALUES ('1', 'admin', '202cb962ac59075b964b07152d234b70');
INSERT INTO `mmyc_admin` VALUES ('3', '123', '202cb962ac59075b964b07152d234b70');

-- ----------------------------
-- Table structure for mmyc_banner
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_banner`;
CREATE TABLE `mmyc_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_img` varchar(255) DEFAULT NULL COMMENT '头部banner图片路径',
  `type` varchar(255) DEFAULT NULL COMMENT '区分哪个头部的banner',
  `upload_time` varchar(255) DEFAULT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_banner
-- ----------------------------
INSERT INTO `mmyc_banner` VALUES ('16', 'image/2017-09-23/59c5cb60e0af0.jpg', '5', '1506134880');
INSERT INTO `mmyc_banner` VALUES ('10', 'image/2017-09-25/59c8f95acc8ed.jpg', '1', '1506085651');
INSERT INTO `mmyc_banner` VALUES ('11', 'image/2017-09-22/59c50b88b85c8.jpg', '1', '1506085768');
INSERT INTO `mmyc_banner` VALUES ('12', 'image/2017-09-22/59c50b8ed7f0f.jpg', '1', '1506085774');
INSERT INTO `mmyc_banner` VALUES ('13', 'image/2017-09-23/59c5ca184d845.jpg', '2', '1506134552');
INSERT INTO `mmyc_banner` VALUES ('14', 'image/2017-09-23/59c5cb40e3692.jpg', '3', '1506134848');
INSERT INTO `mmyc_banner` VALUES ('15', 'image/2017-09-23/59c5cb551fa5e.jpg', '4', '1506134869');
INSERT INTO `mmyc_banner` VALUES ('17', 'image/2017-09-23/59c5cb6b14f7d.jpg', '6', '1506134891');
INSERT INTO `mmyc_banner` VALUES ('18', 'image/2017-09-23/59c5cb75d4866.jpg', '7', '1506134901');

-- ----------------------------
-- Table structure for mmyc_company
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_company`;
CREATE TABLE `mmyc_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '美鸣分公司',
  `company_name` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `address` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `tel` varchar(255) DEFAULT NULL COMMENT '公司电话',
  `qq` varchar(255) DEFAULT NULL COMMENT '公司QQ号',
  `img` varchar(255) DEFAULT NULL COMMENT '公司图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_company
-- ----------------------------
INSERT INTO `mmyc_company` VALUES ('2', '美鸣山东公司', '济南市天桥区北辛工业园39号 ', '0531-68820090 ', '2101150767', 'image/2017-09-26/59ca4a570bd75.jpg');
INSERT INTO `mmyc_company` VALUES ('3', '美鸣陕西公司', '陕西省西安市未央区草滩生态产业园蔡伦路2号A座1-5E', '029-81293998 ', '764216192', 'image/2017-09-23/59c5c3b3049ad.jpg');
INSERT INTO `mmyc_company` VALUES ('4', '美鸣深圳公司', '深圳市宝安西乡前进二路航城工业区富鑫林工业园D栋3楼 ', '0755-27695552', ' 479732585', 'image/2017-09-23/59c5c3d29f966.jpg');

-- ----------------------------
-- Table structure for mmyc_email
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_email`;
CREATE TABLE `mmyc_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL COMMENT '验证码',
  `send_time` varchar(255) DEFAULT NULL COMMENT '发送时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_email
-- ----------------------------
INSERT INTO `mmyc_email` VALUES ('1', '417626953@qq.com', '5581', '1505994097');

-- ----------------------------
-- Table structure for mmyc_fangan
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_fangan`;
CREATE TABLE `mmyc_fangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '解决方案表',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `img` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `type` varchar(255) DEFAULT NULL COMMENT '区分类别',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_fangan
-- ----------------------------
INSERT INTO `mmyc_fangan` VALUES ('6', '技术培训', '贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓', 'image/2017-09-25/59c9042a651d5.jpg', '1');
INSERT INTO `mmyc_fangan` VALUES ('7', '店面直销', '贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓', 'image/2017-09-22/59c51244b843f.jpg', '2');
INSERT INTO `mmyc_fangan` VALUES ('8', '单店拓客', '贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓', 'image/2017-09-22/59c512604c7f0.jpg', '3');
INSERT INTO `mmyc_fangan` VALUES ('9', '店面管理', '贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓', 'image/2017-09-22/59c512779d636.jpg', '4');
INSERT INTO `mmyc_fangan` VALUES ('10', '连锁拓展', '贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓、贴面是牙齿美容修复的一种技术，是一种覆盖部分牙面的修复体。即采用粘结技术，在保存活髓', 'image/2017-09-22/59c512920375a.jpg', '5');

-- ----------------------------
-- Table structure for mmyc_message
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_message`;
CREATE TABLE `mmyc_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言表',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL COMMENT '留言内容',
  `stage` varchar(255) DEFAULT '0' COMMENT '留言状态',
  `time` varchar(255) DEFAULT NULL COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_message
-- ----------------------------
INSERT INTO `mmyc_message` VALUES ('3', '刘先生', 'admin@test.com', '0531-68820090 ', '啦啦啦啦阿里', '0', '1506095403');

-- ----------------------------
-- Table structure for mmyc_network
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_network`;
CREATE TABLE `mmyc_network` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公司网点',
  `company` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `network` varchar(255) DEFAULT NULL COMMENT '公司网址',
  `time` varchar(255) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_network
-- ----------------------------
INSERT INTO `mmyc_network` VALUES ('5', '山东网点', 'www.shandongjinan.com', '1506430124');
INSERT INTO `mmyc_network` VALUES ('6', '厦门网点', 'www.shandongjinan.com', '1506133208');
INSERT INTO `mmyc_network` VALUES ('7', '陕西网点', 'www.shandongjinan.com', '1506133224');
INSERT INTO `mmyc_network` VALUES ('8', '湖南网点', 'www.shandongjinan.com', '1506133249');

-- ----------------------------
-- Table structure for mmyc_news
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_news`;
CREATE TABLE `mmyc_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '新闻标题',
  `content1` varchar(255) DEFAULT NULL COMMENT '内容一',
  `content2` varchar(255) DEFAULT NULL COMMENT '内容二',
  `content3` varchar(255) DEFAULT NULL COMMENT '内容三',
  `content4` varchar(255) DEFAULT NULL COMMENT '内容四',
  `news_img1` varchar(255) DEFAULT NULL COMMENT '图片一',
  `news_img2` varchar(255) DEFAULT NULL COMMENT '图片二',
  `news_img3` varchar(255) DEFAULT NULL COMMENT '图片三',
  `news_img4` varchar(255) DEFAULT NULL COMMENT '图片四',
  `release_time` varchar(255) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_news
-- ----------------------------
INSERT INTO `mmyc_news` VALUES ('7', '美鸣义齿全国口腔学术交流会 · 邯郸站圆满闭幕！', '<span>7月5日，美鸣义齿全国口腔学术交流会在河北邯郸成功召开，现场座无虚席，邯郸百位口腔医师莅临现场。现场大咖云集，参加本次交流活动的医师们热情度高涨。在此要特别感谢邯郸贝洁口腔医院为本次会议提供会场。&nbsp;</span>', '<span>美鸣义齿美学贴面总监朱玉琳女士现场讲授《贴面的制备与粘贴》课程。&nbsp;</span>', '深圳盟略方圆营销策划机构高级咨询师张鑫辉先生为大家带来《单店盈利提升》课程。美鸣义齿美学贴面总监朱玉琳女士现场讲授《贴面的制备与粘贴》课程。', '<span>深圳美鸣齿科器械有限公司于2015年成立美鸣商学院，“美鸣义齿全国口腔学术交流会”为美鸣商学院推出的重点项目。美鸣义齿全国口腔学术交流会目前已经进入全国多个省份，共计开展近百场各种形式的口腔学术研讨会超百场，参会人员共计逾万人，帮助口腔门诊开展逾百场的营销活动，效果显著。&nbsp;</span>', 'image/2017-09-22/59c51c530a408.jpg', 'image/2017-09-22/59c51c530c731.jpg', null, null, '1506009600');
INSERT INTO `mmyc_news` VALUES ('9', '美鸣精英训练营 · 太原站正式开班啦~', '6月18日，美鸣精英班太原站在太原理工大学正商书院举办了隆重的开班仪式！美鸣精英训练营的学员均是进行层层选拔，是一个精英的大聚会，也是一个学习的能量场。 一大早，小伙伴们就齐聚太原理工大学正商书院，期待着开班仪式的开幕。', '', '', '', 'image/2017-09-25/59c90e3fc4f9d.jpg', null, null, null, '1506096000');

-- ----------------------------
-- Table structure for mmyc_phone
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_phone`;
CREATE TABLE `mmyc_phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL COMMENT '分类',
  `phone` varchar(255) DEFAULT NULL COMMENT '手机号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_phone
-- ----------------------------
INSERT INTO `mmyc_phone` VALUES ('1', '1', '0755-27695552');
INSERT INTO `mmyc_phone` VALUES ('2', '2', '0755-27695552');
INSERT INTO `mmyc_phone` VALUES ('3', '3', '123456');

-- ----------------------------
-- Table structure for mmyc_qita
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_qita`;
CREATE TABLE `mmyc_qita` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '添加格局   商学院    工作机会',
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '区分类别',
  `content` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_qita
-- ----------------------------
INSERT INTO `mmyc_qita` VALUES ('2', '学会交流会', '1', '深圳美鸣齿科器械有限公司于2015年成立美鸣商学院，“美鸣义齿全国口腔学术交流会”为美鸣商学院推出的重点项目。美鸣义齿全国口腔学术交流会目前已经进入全国多个省份，共计开展近百场各种形式的口腔学术研讨会超百场', '1506133940', 'image/2017-09-26/59ca4f5651b50.jpg');
INSERT INTO `mmyc_qita` VALUES ('5', '橙色星期三', '2', '深圳美鸣齿科器械有限公司于2015年成立美鸣商学院，“橙色星期三”是美鸣商学院四大运营项目之一，其开展形式有别于全国口腔交流会，为了让每一位参与客户都能畅所欲言，每期活动限制邀约人数，期间大家一起品茶艺，尝花果，谈运营，岂不快哉！谈笑间，互通了经验；交流中，发现了问题，集思广益，取长补短，受益', '1506135905', 'image/2017-09-23/59c5cf60ac92d.jpg');
INSERT INTO `mmyc_qita` VALUES ('4', '员工职业发展流程', '3', '新员工转正定级 在试用期时，新员工的序列级别由人力资源部比照正式员工初步拟定。根据试用期的考核结果，对新员工进行转正、确定序列和级别。&nbsp;<br>转岗 员工在任何时候都可以提出转岗申请。公司根据需要对空缺职位进行内部招聘，所有具备条件的员工都可以应聘表', '1506134056', 'image/2017-09-23/59c5c82839a67.jpg');

-- ----------------------------
-- Table structure for mmyc_share
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_share`;
CREATE TABLE `mmyc_share` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL COMMENT '分享内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_share
-- ----------------------------
INSERT INTO `mmyc_share` VALUES ('1', '深圳美鸣齿科器械有限公司是行业内领先的义齿供应商，专注于全瓷牙领域，坚持稳健经营、持续创新、开放合作，为门诊提供优质的牙齿和高性价比的解决方案。美鸣公司成立于2005 年，总部设在深圳，现已在山东、山西、内蒙、湖南、四川、陕西、深圳成立分公司。目前，美鸣公司已经成长为北方规模最大的高端义齿生产企业，配备国际一流的义齿加工设备。公司旗 下拥有多个高端义齿品牌，其中“美鸣”、“洛诗”已是业内知名品牌。先进成熟的营销模式取得了巨大成功，公司未来5年将抓住行业风口浪潮，进行全国市场开发的战略布局，做坚实的行 业引');

-- ----------------------------
-- Table structure for mmyc_tiyanimg
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_tiyanimg`;
CREATE TABLE `mmyc_tiyanimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '美鸣贴面之产品体验图片',
  `img` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `time` varchar(255) DEFAULT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_tiyanimg
-- ----------------------------
INSERT INTO `mmyc_tiyanimg` VALUES ('2', 'image/2017-09-25/59c906a47068f.jpg', '1506093495');
INSERT INTO `mmyc_tiyanimg` VALUES ('3', 'image/2017-09-22/59c529c1653c0.jpg', '1506093505');
INSERT INTO `mmyc_tiyanimg` VALUES ('4', 'image/2017-09-22/59c529c74e5e2.jpg', '1506093511');
INSERT INTO `mmyc_tiyanimg` VALUES ('5', 'image/2017-09-22/59c529cdb5ba9.jpg', '1506093517');

-- ----------------------------
-- Table structure for mmyc_userinfo
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_userinfo`;
CREATE TABLE `mmyc_userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `request_code` varchar(255) DEFAULT NULL COMMENT '邀请码',
  `email` varchar(255) DEFAULT NULL COMMENT '登录用户名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_userinfo
-- ----------------------------
INSERT INTO `mmyc_userinfo` VALUES ('1', '阁下贵姓', '202cb962ac59075b964b07152d234b70', '', '417626953@qq.com');

-- ----------------------------
-- Table structure for mmyc_video
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_video`;
CREATE TABLE `mmyc_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频表',
  `video` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_video
-- ----------------------------
INSERT INTO `mmyc_video` VALUES ('1', 'video/2017-09-23/59c5e0bf5cd24.mp4', '1506140351', '业务迅速发展，版图全国布局');
INSERT INTO `mmyc_video` VALUES ('2', 'video/2017-09-23/59c5e3b40e46c.mp4', '1506141108', '美鸣义齿全国口腔学术交流会');
INSERT INTO `mmyc_video` VALUES ('3', 'video/2017-09-25/59c90986117c4.mp4', '1506142140', '水电费');

-- ----------------------------
-- Table structure for mmyc_xl
-- ----------------------------
DROP TABLE IF EXISTS `mmyc_xl`;
CREATE TABLE `mmyc_xl` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '美鸣贴面系列表',
  `type` varchar(255) DEFAULT NULL COMMENT '美鸣贴面之区分各个系列',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `mmtm_img2` varchar(255) DEFAULT NULL COMMENT '产品展示图片',
  `mmtm_img1` varchar(255) DEFAULT NULL COMMENT '首页美鸣贴面图片路径',
  `content1` varchar(255) DEFAULT NULL,
  `content2` varchar(255) DEFAULT NULL COMMENT '图片说明',
  `upload_time` varchar(255) DEFAULT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mmyc_xl
-- ----------------------------
INSERT INTO `mmyc_xl` VALUES ('22', '1', '美鸣氧化锆系列', 'image/2017-09-22/59c528b34f658.jpg', 'image/2017-09-22/59c528b34e6b7.jpg', '美鸣氧化锆系列是“美鸣义齿”进口氧化锆材料李的主打产品，市场占有率极高，客户反馈效果非常优越，具有高强度、高韧性以及完美的超透明性，兼顾美学效果、经济效率、强韧持久的三大优势，尤其是美学形态上，比传统国内氧化锆更具彩色丰盈感！&nbsp;', '美学修复的完美呈现，让更多暧昧的人士重新恢复微笑的自信！不同个性定制修复方案满足您的高坠准要求！则插销式精密附件临床用于前牙美学修复、连冠修复、种植牙冠等，无需繁琐的内冠染色或上瓷，凭借高强度、韧性强的优势，就能获得持久稳定的冠体修复，并且在制作工艺上更加简洁、高效！在临床上，也可应用于后牙的制备。', '1506093235');
INSERT INTO `mmyc_xl` VALUES ('23', '2', '美鸣玻璃陶瓷系列', 'image/2017-09-22/59c528ea066e0.jpg', 'image/2017-09-22/59c528e9b3c40.jpg', '美鸣玻璃陶瓷系列是“美鸣义齿”进口氧化锆材料李的主打产品，市场占有率极高，客户反馈效果非常优越，具有高强度、高韧性以及完美的超透明性，兼顾美学效果、经济效率、强韧持久的三大优势，尤其是美学形态上，比传统国内氧化锆更具彩色丰盈感！&nbsp;', '美学修复的完美呈现，让更多暧昧的人士重新恢复微笑的自信！不同个性定制修复方案满足您的高坠准要求！则插销式精密附件临床用于前牙美学修复、连冠修复、种植牙冠等，无需繁琐的内冠染色或上瓷，凭借高强度、韧性强的优势，就能获得持久稳定的冠体修复，并且在制作工艺上更加简洁、高效！在临床上，也可应用于后牙的制备。', '1506093290');
INSERT INTO `mmyc_xl` VALUES ('26', '5', '美鸣纯钛系列', 'image/2017-09-27/59cbb928552d3.jpg', 'image/2017-09-27/59cbb92853393.jpg', '美鸣纯钛系列', '美鸣纯钛系列', '1506523432');
INSERT INTO `mmyc_xl` VALUES ('27', '4', '美鸣精密系列', 'image/2017-09-27/59cbbc6624379.jpg', 'image/2017-09-27/59cbbc6622821.jpg', '美鸣精密系列', '美鸣精密系列', '1506524262');
