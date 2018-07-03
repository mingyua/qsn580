/* This file is created by MySQLReback 2016-04-04 13:27:02 */
 /* 创建表结构 `think_access` */
 DROP TABLE IF EXISTS `think_access`;/* MySQLReback Separation */ CREATE TABLE `think_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`role_id`,`node_id`),
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_access` */
 INSERT INTO `think_access` VALUES ('4','59','3',''),('4','58','2',''),('4','43','3',''),('4','44','3',''),('4','45','3',''),('4','71','3',''),('4','72','3',''),('4','73','3',''),('4','74','3',''),('4','75','3',''),('6','21','1',''),('8','97','3',''),('8','96','2',''),('8','1','1',''),('5','53','3',''),('5','52','2',''),('5','90','3',''),('5','92','3',''),('5','91','3',''),('5','89','2',''),('5','47','3',''),('5','48','3',''),('5','46','2',''),('5','69','3',''),('4','77','3',''),('4','78','3',''),('5','61','3',''),('4','70','3',''),('4','76','3',''),('4','42','2',''),('4','79','3',''),('4','80','3',''),('4','66','3',''),('4','65','2',''),('4','1','1',''),('4','21','1',''),('4','83','3',''),('4','60','3',''),('4','35','2',''),('4','39','3',''),('4','36','3',''),('4','37','3',''),('4','38','3',''),('4','68','3',''),('4','61','3',''),('4','69','3',''),('4','54','2',''),('4','56','3',''),('4','55','3',''),('4','49','2',''),('4','51','3',''),('4','50','3',''),('4','46','2',''),('4','48','3',''),('4','47','3',''),('4','3','2',''),('4','10','3',''),('4','9','3',''),('4','8','3',''),('4','7','3',''),('4','5','3',''),('4','4','3',''),('4','25','2',''),('4','27','3',''),('4','26','3',''),('4','40','3',''),('4','28','3',''),('4','63','2',''),('4','82','3',''),('4','64','3',''),('4','81','3',''),('4','52','2',''),('4','53','3',''),('4','30','2',''),('4','41','3',''),('5','68','3',''),('5','88','3',''),('5','37','3',''),('5','36','3',''),('5','39','3',''),('5','35','2',''),('5','43','3',''),('5','44','3',''),('5','45','3',''),('5','77','3',''),('5','78','3',''),('5','76','3',''),('5','75','3',''),('5','74','3',''),('5','73','3',''),('5','70','3',''),('5','71','3',''),('5','72','3',''),('5','42','2',''),('5','66','3',''),('5','79','3',''),('5','80','3',''),('5','65','2',''),('5','1','1',''),('5','21','1',''),('8','98','3','');/* MySQLReback Separation */
 /* 创建表结构 `think_ad` */
 DROP TABLE IF EXISTS `think_ad`;/* MySQLReback Separation */ CREATE TABLE `think_ad` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `kinds` varchar(40) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `pic` varchar(300) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `write` varchar(40) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_ad` */
 INSERT INTO `think_ad` VALUES ('1','商家','贵阳龙腾网络','爱马电动车','21','21','1','admin','12112121','1212121');/* MySQLReback Separation */
 /* 创建表结构 `think_ap_attr` */
 DROP TABLE IF EXISTS `think_ap_attr`;/* MySQLReback Separation */ CREATE TABLE `think_ap_attr` (
  `bid` int(10) unsigned NOT NULL DEFAULT '0',
  `aid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`,`aid`),
  KEY `bid` (`bid`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_ap_attr` */
 INSERT INTO `think_ap_attr` VALUES ('5','1'),('5','3'),('7','1'),('7','3'),('7','5'),('8','1'),('8','5'),('9','5'),('36','3'),('57','1'),('57','5'),('61','3'),('121','3'),('123','3'),('124','3');/* MySQLReback Separation */
 /* 创建表结构 `think_article` */
 DROP TABLE IF EXISTS `think_article`;/* MySQLReback Separation */ CREATE TABLE `think_article` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `kinds` int(8) NOT NULL,
  `title` char(200) DEFAULT NULL,
  `retitle` char(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL,
  `key` char(200) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL,
  `contents` varchar(8000) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `hits` int(10) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `write` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kinds` (`kinds`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_article` */
 INSERT INTO `think_article` VALUES ('1','25','【通知】贵州乾宏汽车竞拍网上线','贵州乾宏汽车竞拍网上线','','','','','<p>月月月月月月月</p>','1','0','1458711887','admin'),('2','23','【新闻】关于竞拍网，我们能做什么？','【新闻】关于竞拍网，我们能做什么？','','','','','<p>压顶无可奈何花落去</p>','1','0','1458711927','admin'),('3','32','合作案例一','合作案例一','','./uploads/56f234cf7a120.jpg','','微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式','<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式</span></span></span></span></span></p>','1','0','1458713738','admin');/* MySQLReback Separation */
 /* 插入数据 `think_article` */
 INSERT INTO `think_article` VALUES ('4','32','合作案例二','合作案例二','','./uploads/56f2351203d09.png','','微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解','<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解</span></span></span></span></span></p>','1','0','1458713832','admin');/* MySQLReback Separation */
 /* 插入数据 `think_article` */
 INSERT INTO `think_article` VALUES ('5','32','合作案例三','合作案例三','合作案例三','./uploads/56f2353457bcf.jpg','','微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网','<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网<span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 17.77777862548828px; line-height: 30px; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。 微皮客拥有资深的策划设计团队：5年以上策划经验的网</span></span></span></span></span></span></p>','1','0','1458713880','admin');/* MySQLReback Separation */
 /* 插入数据 `think_article` */
 INSERT INTO `think_article` VALUES ('6','29','服务流程','服务流程','','','','服务流程','<h2 style=\"word-wrap: break-word; margin: 0px; padding: 20px 0px 10px; font-size: 30px; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">1.商务洽谈</h2><p class=\"lh-30 f-14\" style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 10px; padding: 0px; font-size: 14px; line-height: 30px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。</p><h2 style=\"word-wrap: break-word; margin: 0px; padding: 20px 0px 10px; font-size: 30px; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">2.合作意向确认</h2><p class=\"lh-30 f-14\" style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 10px; padding: 0px; font-size: 14px; line-height: 30px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。</p><h2 style=\"word-wrap: break-word; margin: 0px; padding: 20px 0px 10px; font-size: 30px; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">3.签署合作协议</h2><p class=\"lh-30 f-14\" style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 10px; padding: 0px; font-size: 14px; line-height: 30px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。</p><h2 style=\"word-wrap: break-word; margin: 0px; padding: 20px 0px 10px; font-size: 30px; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">4.全损车辆保全</h2><p class=\"lh-30 f-14\" style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 10px; padding: 0px; font-size: 14px; line-height: 30px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。</p><h2 style=\"word-wrap: break-word; margin: 0px; padding: 20px 0px 10px; font-size: 30px; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">5.全损车辆保全</h2><p class=\"lh-30 f-14\" style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 10px; padding: 0px; font-size: 14px; line-height: 30px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。</p><h2 style=\"word-wrap: break-word; margin: 0px; padding: 20px 0px 10px; font-size: 30px; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">6.全损车辆保全</h2><p class=\"lh-30 f-14\" style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 10px; padding: 0px; font-size: 14px; line-height: 30px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);\">微皮客是以帮助企业创造网络品牌价值为使命。通过策划国际化的网络品牌形象、建设高标准的网站平台、提供高水准的网站运营顾问服务、实施高效率的企业信息化建设、制定行之有效的网络营销策略。以提升客户网络竞争力为目标、为客户提供一站式的网站解决方案。</p><p><br/></p>','1','0','1458714394','admin');/* MySQLReback Separation */
 /* 插入数据 `think_article` */
 INSERT INTO `think_article` VALUES ('7','30','服务优势','服务优势','','','服务优势','服务优势','<p style=\"text-align: center;\"><img src=\"/uploads/image/20160323/1458714489562769.jpg\" title=\"1458714489562769.jpg\" alt=\"youshi.jpg\"/></p>','1','0','1458714463','admin'),('8','31','服务对象','服务对象','','','服务对象','服务对象','<p>服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象服务对象</p>','1','0','1458714699','admin');/* MySQLReback Separation */
 /* 创建表结构 `think_attr` */
 DROP TABLE IF EXISTS `think_attr`;/* MySQLReback Separation */ CREATE TABLE `think_attr` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `module` varchar(40) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `sort` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_attr` */
 INSERT INTO `think_attr` VALUES ('1','置顶','#FF0000','Article','1','3'),('2','精华','#33FF00','product','1','5'),('5','幻灯片','#000000','Article','1','2'),('6','sdfsd','#000000','','1','0');/* MySQLReback Separation */
 /* 创建表结构 `think_cash` */
 DROP TABLE IF EXISTS `think_cash`;/* MySQLReback Separation */ CREATE TABLE `think_cash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paytype` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `nowcash` int(11) DEFAULT NULL,
  `icecash` int(11) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL,
  `del` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_cash` */
 INSERT INTO `think_cash` VALUES ('3','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459414468'),('4','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459414591'),('5','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459414831'),('10','1','20','5','2500','2500','竞拍成功,扣除保证金','0','1459488409'),('11','1','20','4','1000','1000','竞拍成功,扣除保证金','0','1459488466'),('12','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459488676'),('13','1','20','4','1000','1000','竞拍成功,扣除保证金','0','1459488720'),('14','1','20','5','2500','2500','竞拍成功,扣除保证金','0','1459488732'),('15','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459488805'),('16','1','20','5','2500','2500','竞拍成功,扣除保证金','0','1459488811'),('17','1','20','4','1000','1000','竞拍成功,扣除保证金','0','1459488814'),('18','1','20','4','1000','1000','竞拍成功,扣除保证金','0','1459488890'),('19','1','20','5','2500','2500','竞拍成功,扣除保证金','0','1459488898'),('20','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459488899'),('21','1','20','4','1000','1000','竞拍成功,扣除保证金','0','1459488949'),('22','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459488950'),('23','1','20','5','2500','2500','竞拍成功,扣除保证金','0','1459488951'),('24','0','20','4','1000','0','交易完成返还保证金','0','1459488963'),('25','1','20','6','20000','20000','竞拍成功,扣除保证金','0','1459489177'),('26','1','20','5','2500','2500','竞拍成功,扣除保证金','0','1459489179'),('27','1','20','4','1000','1000','竞拍成功,扣除保证金','0','1459489180'),('28','0','20','6','20000','0','交易完成返还保证金','0','1459489188');/* MySQLReback Separation */
 /* 创建表结构 `think_cate` */
 DROP TABLE IF EXISTS `think_cate`;/* MySQLReback Separation */ CREATE TABLE `think_cate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` char(15) DEFAULT NULL COMMENT '//栏目名称',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '//栏目归属id',
  `sort` smallint(6) DEFAULT NULL COMMENT '//排序',
  `module` varchar(60) DEFAULT NULL COMMENT '//所属模型',
  `parentid` varchar(40) NOT NULL DEFAULT '' COMMENT '//分组归属id',
  `url` varchar(200) DEFAULT NULL COMMENT '//栏目URL地址',
  `window` varchar(20) DEFAULT NULL COMMENT '//新窗口打开',
  `status` int(1) DEFAULT NULL COMMENT '//是否开户二级',
  `enable` int(1) DEFAULT NULL COMMENT '//是否显示',
  `image` varchar(200) DEFAULT NULL COMMENT '//栏目图标',
  `title` varchar(50) DEFAULT NULL COMMENT '//标题',
  `keys` varchar(200) DEFAULT NULL COMMENT '关键词',
  `description` varchar(500) DEFAULT NULL COMMENT '//描述',
  `nav` int(1) DEFAULT NULL COMMENT '//是否在导航上显示',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_cate` */
 INSERT INTO `think_cate` VALUES ('1','拍卖会','0','1','Product','1','../paimai','0','1','1','','开发服务','SERVICES','','1'),('2','会员服务','0','2','Product','1','../service/','0','1','1','','','','','1'),('3','保险公司委托服务','0','3','Product','1','../insurance','0','1','1','','案例精选','CASE','','1'),('4','商务合作','0','4','Article','1','../shoper','0','1','1','','关于我们 ','ABOUT','','1'),('5','联系我们','0','5','Product','1','../about','0','1','1','','','','','1'),('6','拍卖保障','0','100','Single','1','','0','1','1','','','','','0'),('7','会员服务说明','0','100','Single','1','','0','1','1','','','','','0'),('8','新手帮助','0','100','','1','','0','1','1','','','','','0'),('21',' 首页幻灯片','0','100','Slide','1','','1','0','0','','','','','0'),('22','新闻动态','0','100','Article','1','','0','0','1','','','','','0'),('23','公司新闻','22','100','Article','1','','0','1','1','','','','','0'),('24','优惠活动','22','100','Article','1','','0','1','1','','','','','0'),('25','通知公告','22','100','Article','1','','0','1','1','','','','','0'),('26','公司简介','5','100','Single','1','','0','1','1','','','','','0'),('27','发展历程','5','100','Single','1','','0','1','1','','','','','0'),('28','联系我们','5','100','Single','1','','0','1','1','','','','','0'),('29','服务流程','4','100','Article','1','','0','1','1','','','','','0'),('30','服务优势','4','100','Article','1','','0','1','1','','','','','0'),('31','服务对象','4','100','Article','1','','0','1','1','','','','','0'),('32','合作案例','4','100','Article','1','','0','1','1','','','','','0'),('34','如实描述','6','100','Single','1','','0','1','1','','','','','0'),('35','拍前预展','6','100','Single','1','','0','1','1','','','','','0'),('36','鉴定证书','6','100','Single','1','','0','1','1','','','','','0'),('38','会员服务流程','7','100','','1','','0','1','1','','','','','0'),('39','会员政策','7','100','','1','','0','1','1','','','','','0'),('40','会员相关文件','7','100','','1','','0','1','1','','','','','0'),('42','竞拍流程','8','100','Single','1','','0','1','1','','','','','0'),('43','竞拍协议','8','100','Single','1','','0','1','1','','','','','0'),('44','保证金介绍','8','100','Single','1','','0','1','1','','','','','0'),('46','服务保障','6','100','Single','1','','0','1','1','','','','','0');/* MySQLReback Separation */
 /* 创建表结构 `think_city` */
 DROP TABLE IF EXISTS `think_city`;/* MySQLReback Separation */ CREATE TABLE `think_city` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cid` int(8) DEFAULT NULL COMMENT '归属id',
  `name` varchar(20) DEFAULT NULL COMMENT '城市',
  `pinyin` varchar(50) DEFAULT NULL COMMENT '城市英文',
  `frist_words` varchar(2) DEFAULT NULL COMMENT '首字母',
  `pca` varchar(10) DEFAULT NULL COMMENT 'p省c城市a区',
  `sort` int(8) DEFAULT NULL COMMENT '排序',
  `bianm` int(20) DEFAULT NULL,
  `enable` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_city` */
 INSERT INTO `think_city` VALUES ('2','0','上海','shanghai','S','P','3','0','1'),('3','0','天津','TianJin','T','P','2','0','1'),('4','0','贵州','GuiZhou','G','P','4','0','1'),('5','0','福建','FuJian','0','P','5','0','1'),('6','0','广州','GuangZhou','G','P','6','0','1'),('7','0','云南','YunNan','Y','P','7','0','1'),('8','0','天津','TianJin','T','P','4','0','1'),('9','0','北京','BeiJing','B','P','1','0','1'),('10','0','厦门','XiaMen','X','P','100','0','0'),('11','0','宁夏','NingXia','N','P','100','0','0'),('13','0','香港','XiangGang','X','P','100','0','0');/* MySQLReback Separation */
 /* 创建表结构 `think_comments` */
 DROP TABLE IF EXISTS `think_comments`;/* MySQLReback Separation */ CREATE TABLE `think_comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL,
  `uid` int(11) unsigned NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_comments` */
 INSERT INTO `think_comments` VALUES ('114','118','0','彭毅','如果有一天我君不见有问题了，我一定会改过来的！','1','1445239393'),('115','126','0','乐山大佛','微信发展很快，从聊天工具发展到网络营销，以为会被淘汰的，谁想....。现在的企业和个人都有在做微信公众号，微信都成为人们的营销工具了。','1','1445337840');/* MySQLReback Separation */
 /* 创建表结构 `think_company` */
 DROP TABLE IF EXISTS `think_company`;/* MySQLReback Separation */ CREATE TABLE `think_company` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) DEFAULT NULL,
  `c_name` varchar(200) DEFAULT NULL COMMENT '公司名称',
  `c_hy` int(8) DEFAULT NULL,
  `c_zhuying` varchar(200) DEFAULT NULL,
  `c_severce` varchar(200) DEFAULT NULL,
  `c_pro` varchar(10) DEFAULT NULL,
  `c_city` varchar(10) DEFAULT NULL,
  `c_area` varchar(20) DEFAULT NULL,
  `c_address` varchar(100) DEFAULT NULL,
  `c_tel` varchar(40) DEFAULT NULL,
  `c_logo` varchar(40) DEFAULT NULL,
  `c_url` varchar(40) DEFAULT NULL,
  `c_peo` varchar(10) DEFAULT NULL,
  `c_card` varchar(40) DEFAULT NULL,
  `c_yyzz` varchar(40) DEFAULT NULL,
  `c_contents` varchar(18000) DEFAULT NULL,
  `c_regcash` varchar(20) DEFAULT NULL COMMENT '//注册资本',
  `c_mode` varchar(20) DEFAULT NULL COMMENT '//公司规模',
  `c_regtime` int(11) DEFAULT NULL,
  `c_stoptime` int(11) DEFAULT NULL,
  `c_click` int(8) DEFAULT NULL,
  `c_focus` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_config` */
 DROP TABLE IF EXISTS `think_config`;/* MySQLReback Separation */ CREATE TABLE `think_config` (
  `id` int(4) NOT NULL DEFAULT '0',
  `site_title` varchar(200) DEFAULT NULL,
  `site_url` varchar(200) DEFAULT NULL,
  `logo` varchar(400) DEFAULT NULL,
  `site_email` varchar(100) DEFAULT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `seo_keywords` varchar(100) DEFAULT NULL,
  `seo_description` varchar(200) DEFAULT NULL,
  `site_peo` varchar(20) DEFAULT NULL,
  `site_phone` char(20) DEFAULT NULL,
  `site_tel` char(20) DEFAULT NULL,
  `site_fax` char(20) DEFAULT NULL,
  `site_post` int(10) DEFAULT NULL,
  `site_icp` varchar(80) DEFAULT NULL,
  `site_addr` varchar(400) DEFAULT NULL,
  `site_foot` varchar(4000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_config` */
 INSERT INTO `think_config` VALUES ('1','贵州乾宏汽车竞拍网','http://localhost/dian','./Uploads/56f20f5d7de29.png','285412937@qq.com','贵州乾宏汽车竞拍网','贵州乾宏汽车竞拍网','贵州乾宏汽车竞拍网','彭毅','18798075208','0851-8110056','0851-8110056','553522','','贵州省贵阳市高新技术产业园','<p>Copy Right© 贵州微皮客 2015-2016 保留一切权利 黔ICP备13000105号-1&nbsp;Email：285412937@qq.com</p>');/* MySQLReback Separation */
 /* 创建表结构 `think_email` */
 DROP TABLE IF EXISTS `think_email`;/* MySQLReback Separation */ CREATE TABLE `think_email` (
  `id` int(4) NOT NULL DEFAULT '0',
  `type` varchar(10) DEFAULT NULL,
  `post_email` varchar(100) DEFAULT NULL,
  `send_email` varchar(100) DEFAULT NULL,
  `email_pwd` varchar(80) DEFAULT NULL,
  `email_title` varchar(100) DEFAULT NULL,
  `contents` varchar(8000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_email` */
 INSERT INTO `think_email` VALUES ('1','测试标题','1510594794@qq.com','wrainiyiwannian@126.com','mingyu123','测试标题43','<p><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">尊敬的xxfjy：</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">您好！</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">您在备案平台上的用户名是：xxfjy ,密码是：qaz123</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">请妥善保管好您的帐号和密码，谢谢！</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><a href=\"http://beian.vhostgo.com/\" target=\"_blank\" style=\"outline: none; cursor: pointer; color: rgb(0, 102, 153); font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\">http://beian<wbr/>.vhostgo.com</a><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">&nbsp;点此链接登录系统。1</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">本邮件由系统自动发送，请勿回复!</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);\">备案管理中心</span><br style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span t=\"5\" times=\"\" style=\"font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204);\">2014-11-21</span></p>');/* MySQLReback Separation */
 /* 创建表结构 `think_events` */
 DROP TABLE IF EXISTS `think_events`;/* MySQLReback Separation */ CREATE TABLE `think_events` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `contents` varchar(500) DEFAULT NULL,
  `click` int(8) DEFAULT NULL,
  `top` int(8) DEFAULT NULL,
  `down` int(8) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_exam` */
 DROP TABLE IF EXISTS `think_exam`;/* MySQLReback Separation */ CREATE TABLE `think_exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kinds` int(11) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `answer` varchar(8000) DEFAULT NULL,
  `analysis` varchar(2000) DEFAULT NULL,
  `correct` int(10) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_exam` */
 INSERT INTO `think_exam` VALUES ('1','1','罗马帝国曾一度辉煌，令人神往，故有“条条大陆通罗马”一说。那么，今天你是怎样理解这一谚语的准确含义的？','A．入乡随俗 ###B．四通八达 ###C．殊途同归 ###D．流连忘返','','1','','0'),('2','1','找出不同类的一项：','A.斑马 ###B.军马 ###C.赛马 ###D.骏马 ###E.驸马','','2','','0'),('3','1','蜡烛在空气中燃烧，蜡烛质量逐渐变小。这说明','A.物质可以自生自灭###B.发生的不是化学变化###C.不遵守质量守恒定律###D.生成物为气体，散发到空气中了','','2','','0'),('4','0','这里是标题哦？','桂丰大厦','33333333333','3','','1434546541'),('5','0','5555555555555','5555555','333','1','','0'),('6','0','请问你有几个女朋友？','A:1###B：2###C:3###D:4','4','4','','1434547020');/* MySQLReback Separation */
 /* 创建表结构 `think_good_attr` */
 DROP TABLE IF EXISTS `think_good_attr`;/* MySQLReback Separation */ CREATE TABLE `think_good_attr` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `pid` int(8) NOT NULL COMMENT '//商品id',
  `brand` varchar(100) NOT NULL COMMENT '品牌',
  `sn` varchar(20) NOT NULL COMMENT '//商品唯一编号',
  `market_price` decimal(9,2) NOT NULL COMMENT '//市场价',
  `vip_price` decimal(9,2) NOT NULL COMMENT '//会员价',
  `shop_price` decimal(9,2) NOT NULL COMMENT '//本店价',
  `material` varchar(100) NOT NULL COMMENT '//材质',
  `color` varchar(100) NOT NULL COMMENT '//颜色',
  `weight` varchar(40) NOT NULL COMMENT '//重量',
  `size` varchar(250) NOT NULL COMMENT '//尺码',
  `num` mediumint(8) unsigned NOT NULL COMMENT '//库存数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_good_attr` */
 INSERT INTO `think_good_attr` VALUES ('1','11','11111','111','111.00','0.00','111.00','2211','221','221','221','0'),('2','18','禾','和','231.00','0.00','123.00','123','123','123','123','0'),('3','19','777','77','77.00','0.00','77.00','77','7','7','7','0'),('4','20','777','77','77.00','0.00','77.00','77','7','7','7','0'),('5','21','7772','772','7222.00','222.00','72222.00','22','22','22','22','2'),('6','22','pppp','pppp','5555.00','0.00','555.00','5','5','5','5','0'),('7','1','78','78','7.00','0.00','7.00','67','67','67','67','0'),('8','2','4','4','4.00','0.00','4.00','4','4','4','4','0'),('9','3','asd','asd','22.00','0.00','22.00','2','2','2','2','0');/* MySQLReback Separation */
 /* 创建表结构 `think_member` */
 DROP TABLE IF EXISTS `think_member`;/* MySQLReback Separation */ CREATE TABLE `think_member` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) NOT NULL,
  `truename` varchar(50) NOT NULL,
  `sex` int(1) DEFAULT '0',
  `password` char(32) NOT NULL,
  `res_id` int(11) DEFAULT NULL COMMENT '闄㈢郴 id',
  `sp_id` int(11) DEFAULT NULL COMMENT '涓撲笟id',
  `class` varchar(15) NOT NULL COMMENT '鐝埆',
  `year` varchar(15) DEFAULT NULL,
  `company` varchar(25) DEFAULT NULL COMMENT '鍏徃',
  `zhicheng` varchar(10) DEFAULT NULL,
  `zhiwu` varchar(10) DEFAULT NULL,
  `jibie` char(5) DEFAULT NULL,
  `honor` text,
  `last_login_time` int(11) unsigned DEFAULT '0',
  `last_login_ip` varchar(40) DEFAULT NULL,
  `login_count` mediumint(8) unsigned DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  `tel` int(15) DEFAULT NULL,
  `qq` int(15) DEFAULT NULL,
  `province` char(10) DEFAULT NULL,
  `city` char(12) DEFAULT NULL,
  `county` char(6) DEFAULT NULL,
  `join` int(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `role_id` mediumint(9) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_node` */
 DROP TABLE IF EXISTS `think_node`;/* MySQLReback Separation */ CREATE TABLE `think_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` tinyint(1) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `enable` tinyint(1) DEFAULT NULL,
  `ico` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_node` */
 INSERT INTO `think_node` VALUES ('1','Admin','后端应用','1','1','1','0','1','1',''),('65','Cache','缓存管理','1','1','1','1','2','1','Hui-iconfont Hui-iconfont-huanyipi'),('3','Rbac','会员中心','1','1','9','1','2','1','Hui-iconfont Hui-iconfont-userid'),('4','index','用户列表','1','1','1','3','3','1',''),('5','role','权限管理','1','1','1','3','3','1',''),('7','node','节点列表','1','1','1','3','3','1',''),('8','adduser','添加用户','1','1','1','3','3','0',''),('9','addrole','添加管理组','1','1','1','3','3','0',''),('10','addnode','添加节点','1','1','1','3','3','0',''),('21','Index','前端应用','1','1','1','0','1','1',''),('39','del','删除','1','1','1','35','3','0',''),('52','Database','数据库管理','1','1','32','1','2','1','Hui-iconfont Hui-iconfont-jifen'),('36','index','文章列表','1','1','1','35','3','1',''),('37','add','添加文章','1','1','2','35','3','0',''),('35','Article','文章模型','1','0','5','1','2','1','Hui-iconfont Hui-iconfont-news'),('40','index','分类列表','1','1','1','25','3','1',''),('41','siteinfo','基础信息','1','1','1','30','3','1',''),('42','System','全局设置','1','1','1','1','2','1','Hui-iconfont Hui-iconfont-manage'),('43','base','站点配置','1','1','1','42','3','1',''),('44','nav','导航设置','1','1','1','42','3','1',''),('45','upfileset','上传配置','1','1','1','42','3','1',''),('46','Ad','广告模型','1','1','7','1','2','1','Hui-iconfont Hui-iconfont-ad'),('47','index','广告列表','1','1','1','46','3','1',''),('48','addad','广告添加','1','1','1','46','3','1',''),('49','Slide','幻灯片管理','1','1','6','1','2','1','Hui-iconfont Hui-iconfont-upload'),('50','index','幻灯片列表','1','1','1','49','3','1',''),('51','add','幻灯片添加','1','1','1','49','3','1',''),('53','index','数据表','1','1','1','52','3','1',''),('54','Product','产品模型','1','1','6','1','2','1','Hui-iconfont Hui-iconfont-goods'),('55','index','产品列表','1','1','1','54','3','1',''),('56','add','产品添加','1','1','1','54','3','1',''),('93','index','属性列表','1','0','0','58','3','1',''),('60','add','属性添加','1','1','2','58','3','0',''),('61','Single','单文章管理','1','1','5','35','3','1',''),('64','index','企业信息导入','1','1','1','63','3','0',''),('66','cache','后台缓存','1','1','1','65','3','1',''),('68','edit','编辑','1','0','4','35','3','0',''),('69','delall','批量删除','1','0','6','35','3','0',''),('70','updateconfig','站点修改','1','0','1','42','3','0',''),('71','upwater','上传修改','1','0','1','42','3','0',''),('72','updateemail','邮箱修改','1','0','1','42','3','0',''),('73','sendmail','邮件发送','1','0','1','42','3','0',''),('74','addnav','基础栏目添加','1','0','1','42','3','0',''),('75','editnav','栏目修改','1','0','1','42','3','0',''),('76','addnavhandle','添加处理','1','0','1','42','3','0',''),('77','deleted','删除','1','0','1','42','3','0',''),('78','shielding','屏蔽词','1','0','1','42','3','1',''),('79','Index','前台缓存','1','0','1','65','3','1',''),('80','AllCache','全部缓存','1','0','1','65','3','1',''),('84','backfile','数据库还原','1','0','2','52','3','1',''),('85','Order','财务管理','1','0','2','1','2','1','Hui-iconfont Hui-iconfont-order'),('86','index','订单列表','1','0','1','85','3','1',''),('87','payset','接口配置','1','0','1','85','3','0',''),('88','status','文章状态','1','0','3','35','3','0',''),('102','Select','下拉选择','1','','7','42','3','1','');/* MySQLReback Separation */
 /* 创建表结构 `think_orderlist` */
 DROP TABLE IF EXISTS `think_orderlist`;/* MySQLReback Separation */ CREATE TABLE `think_orderlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL COMMENT '购买者userid',
  `username` varchar(255) DEFAULT NULL COMMENT '购买者姓名',
  `ordid` varchar(255) DEFAULT NULL COMMENT '订单号',
  `ordtime` int(11) DEFAULT NULL COMMENT '订单时间',
  `productid` int(11) DEFAULT NULL COMMENT '产品ID',
  `ordtitle` varchar(255) DEFAULT NULL COMMENT '订单标题',
  `ordbuynum` int(11) DEFAULT '0' COMMENT '购买数量',
  `ordprice` float(10,2) DEFAULT '0.00' COMMENT '产品单价',
  `ordfee` float(10,2) DEFAULT '0.00' COMMENT '订单总金额',
  `ordstatus` int(11) DEFAULT '0' COMMENT '订单状态',
  `payment_type` int(11) NOT NULL COMMENT '支付类型',
  `payment_trade_no` varchar(255) DEFAULT NULL COMMENT '支付接口交易号',
  `payment_trade_status` varchar(255) DEFAULT NULL COMMENT '支付接口返回的交易状态',
  `payment_notify_id` varchar(255) DEFAULT NULL COMMENT '通知校验ID',
  `payment_notify_time` varchar(255) DEFAULT NULL COMMENT '通知校验时间',
  `payment_buyer_email` varchar(255) DEFAULT NULL COMMENT '支付者邮箱',
  `ordcode` varchar(255) DEFAULT NULL,
  `isused` int(11) DEFAULT '0',
  `usetime` int(11) DEFAULT NULL,
  `checkuser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_orderlist` */
 INSERT INTO `think_orderlist` VALUES ('23','20','admin','GZQHQC1459489012','1459489012','6','奥迪Q5 2013款 40 TFSI 技术型','1','349000.00','349000.00','4','2','','','','','','','0','',''),('24','20','admin','GZQHQC1459489013','1459489013','5','别克 凯越 2011款 1.6LX-MT ','1','400000.00','400000.00','1','1','','','','','','','0','',''),('25','20','656','GZQHQC1459489013','1459489013','4','咨询费撒旦飞洒地方','1','344000.00','344000.00','1','1','','','','','','','0','','');/* MySQLReback Separation */
 /* 创建表结构 `think_pay` */
 DROP TABLE IF EXISTS `think_pay`;/* MySQLReback Separation */ CREATE TABLE `think_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL DEFAULT '',
  `values` varchar(200) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `kinds` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_pay` */
 INSERT INTO `think_pay` VALUES ('1','jian','件','件','9','1','151'),('2','jin','1','斤','2','1','151'),('5','dun','吨','吨','3','1','151'),('6','kg','kg','kg','6','1','149');/* MySQLReback Separation */
 /* 创建表结构 `think_photo` */
 DROP TABLE IF EXISTS `think_photo`;/* MySQLReback Separation */ CREATE TABLE `think_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(8) NOT NULL,
  `image` varchar(200) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_price` */
 DROP TABLE IF EXISTS `think_price`;/* MySQLReback Separation */ CREATE TABLE `think_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `uname` varchar(40) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `del` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_price` */
 INSERT INTO `think_price` VALUES ('1','6','20','admin','347000','0','1459324370'),('2','4','20','656','344000','0','1459324372'),('11','6','20','admin','349000','0','1459324370'),('12','5','20','admin','400000','0','1459324372'),('13','2','20','admin','1800','0','1459494171');/* MySQLReback Separation */
 /* 创建表结构 `think_product` */
 DROP TABLE IF EXISTS `think_product`;/* MySQLReback Separation */ CREATE TABLE `think_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kinds` int(40) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `retitle` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `keys` varchar(100) DEFAULT NULL,
  `description` varchar(6000) DEFAULT NULL,
  `contents` longtext,
  `sort` int(8) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `paistatus` int(2) DEFAULT NULL,
  `paystatus` int(2) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `time` int(12) DEFAULT NULL,
  `write` varchar(40) DEFAULT NULL,
  `sxlx` int(11) DEFAULT NULL,
  `sxhappend` int(11) DEFAULT NULL,
  `sxyear` int(11) DEFAULT NULL,
  `sxprice` int(11) DEFAULT NULL COMMENT '产地',
  `term` varchar(100) DEFAULT NULL COMMENT '期次',
  `term-show` int(11) DEFAULT NULL COMMENT '供应商',
  `updownprice` float(11,0) DEFAULT NULL,
  `saleprice` float(11,2) DEFAULT NULL COMMENT '拍卖价格',
  `cash` float(11,2) DEFAULT NULL COMMENT '保证金',
  `starttime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kinds` (`kinds`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_product` */
 INSERT INTO `think_product` VALUES ('2','22','品牌型号:宝马牌BMW7201WL','','','/uploads/20160323/56f21d803567e.JPG','车架号变形；发动机号位置无法拍照，竞买人现场查验车况；此车以现状拍卖，丢失及更换配件无法找回','车架号变形；发动机号位置无法拍照，竞买人现场查验车况；此车以现状拍卖，丢失及更换配件无法找回','<p><img src=\"http://localhost/gzqhqc/Public/images/0.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; background-color: rgb(255, 255, 255);\"></span><img src=\"http://localhost/gzqhqc/Public/images/01.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; background-color: rgb(255, 255, 255);\"></span><img src=\"http://localhost/gzqhqc/Public/images/02.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; background-color: rgb(255, 255, 255);\"></span><img src=\"http://localhost/gzqhqc/Public/images/03.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"/></p>','1','1','1','0','1','1459490950','','37','43','44','49','','0','300','1500.00','100.00','1459494000','1459508400'),('4','21','咨询费撒旦飞洒地方','','','/uploads/20160323/56f23172ca2dd.jpg','车架号变形；发动机号位置无法拍照，竞买人现场查验车况；此车以现状拍卖，丢失及更换配件无法找回','车架号变形；发动机号位置无法拍照，竞买人现场查验车况；此车以现状拍卖，丢失及更换配件无法找回','<p>模压</p>','1','1','1','1','3','1459172862','','38','40','45','49','2016-3-26','0','200','1000.00','1000.00','1460120400','1461848400');/* MySQLReback Separation */
 /* 插入数据 `think_product` */
 INSERT INTO `think_product` VALUES ('5','106','别克 凯越 2011款 1.6LX-MT ','','','/Uploads/20160328/56f939623d090.png','12','123','<table style=\"border: 1px solid #e5e5e5; width: 100%;\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr class=\"firstRow\"><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">品牌型号</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">北京现代牌BH6430AY</td><th style=\"border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">车牌号</th><td style=\" border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">京N</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">钥匙/车牌</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2/两块</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">颜色</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">灰</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">初登日期</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2012-06-14</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">排量</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2.0 L</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">保险/交强</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2016-06-12</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">事故原因</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">成车</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">原购置价</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">¥ 0</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">车船税日期</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2015</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">车架号</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">LBEJMBKB4CX******</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">过户截止日</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2016-04-12</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">发动机号</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">CB162987</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">年检有效期</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">2016-06</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">车辆暂存地</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">北京 朝阳</td><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">起拍价</th><td style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">¥ 50,000</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">所属分公司</th><td colspan=\"3\" style=\"border-bottom: 1px solid #e5e5e5;background-color: #fff; word-break: break-all;padding:5px\">北京分公司</td></tr><tr><th style=\"width: 105px; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f3f3f3; padding: 8px 0 8px 20px; font: normal 14px/22px ; color: #333;\">备注</th><td colspan=\"3\" style=\"background-color: #fff; word-break: break-all;padding:5px\">整车；公户；租赁非营运；无购车发票；开具过户发票及填写过户合同的金额须与该车拍卖成交价一致；提车时必须提交过户手续，过户北京需提交指标与身份证原件，外迁需提交车主身份证原件；过户完成后携带登记证、行驶本、二手过户发票的原件以及二手买卖合同卖家联原件到本公司；车辆部分改装，竞买人自行核查车况，更换及丢失配件无法追回；车辆成交后过户本市5日内完成，外迁10日内完成</td></tr></tbody></table><p><br/></p>','1','1','1','1','20','1459491960','','37','40','44','50','2016-3-26','2','1000','45000.00','2500.00','1459213200','1459256400');/* MySQLReback Separation */
 /* 插入数据 `think_product` */
 INSERT INTO `think_product` VALUES ('6','99','奥迪Q5 2013款 40 TFSI 技术型','','','/uploads/20160328/56f9334907a12.jpg','','','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i1/2770559321/TB2ljT_kpXXXXbSXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/2770559321/TB2GGzOkpXXXXb4XpXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; float: none; margin: 10px;\"/><span style=\"line-height: 1.5;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><span style=\"line-height: 1.5;\"></span><strong style=\"font-family: &#39;tahoma arial hiragino sans gb 宋体&#39;; font-size: 18px; line-height: 18px; color: rgb(255, 0, 0);\"><span style=\"font-family: &#39;microsoft yahei&#39;; line-height: 27px;\">咨询电话：15050558888</span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><strong style=\"font-family: &#39;tahoma arial hiragino sans gb 宋体&#39;; font-size: 18px; line-height: 18px; color: rgb(255, 0, 0);\"><span style=\"font-family: &#39;microsoft yahei&#39;; line-height: 27px;\">展厅地址：江苏省南京市秦淮区大光路35号金宇饭店1楼董兵首佳二手车</span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><strong style=\"font-family: &#39;tahoma arial hiragino sans gb 宋体&#39;; font-size: 18px; line-height: 18px; color: rgb(255, 0, 0);\"><span style=\"font-family: &#39;microsoft yahei&#39;; line-height: 27px;\"></span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><strong style=\"font-family: &#39;tahoma arial hiragino sans gb 宋体&#39;; font-size: 18px; line-height: 18px; color: rgb(255, 0, 0);\"><span style=\"font-family: &#39;microsoft yahei&#39;; line-height: 27px;\"></span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><strong style=\"font-family: &#39;tahoma arial hiragino sans gb 宋体&#39;; font-size: 18px; line-height: 18px; color: rgb(255, 0, 0);\"><span style=\"font-family: &#39;microsoft yahei&#39;; line-height: 27px;\"></span></strong></p><table cellpadding=\"0\" cellspacing=\"1\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#ededed\" height=\"35\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">车型</td><td bgcolor=\"#f9f9f9\" colspan=\"3\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">奥迪Q5 2013款 40 TFSI 技术型<br/></td></tr><tr><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">使用性质</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">非营运</td><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">归属地</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">江苏南京</td></tr><tr><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">变速箱类型</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">自动挡</td><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">排量</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">2.0T</td></tr><tr><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">车身颜色<br/></td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">白色</td><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">上牌时间</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">2014年4月<br/></td></tr><tr><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">表显里程</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">5.7万公里</td><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">钥匙<br/></td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">1把</td></tr><tr><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">交强险有效期</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">2016年7月<br/></td><td bgcolor=\"#ededed\" height=\"35\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">年检有效期</td><td bgcolor=\"#f9f9f9\" width=\"25%\" style=\"margin: 0px; padding: 0px 0px 0px 9px;\">2016年4月</td></tr></tbody></table><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\"><span style=\"line-height: 1.5;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: simsun;\"><span style=\"font-size: 18px;\"><strong><span style=\"line-height: 18.5705px; widows: 1;\">&nbsp; &nbsp; &nbsp; 南京首佳名车汇欢迎您！</span><span style=\"line-height: 18.5705px; widows: 1;\">最新到店的奥迪 奥迪Q5 2013款 40 TFSI 技术型，安全行驶5.7万公里，Q5的外观不用多说，车灯绚烂，设计具有激情元素，让人看上去就觉得融入了科技元素。另外车胎黑色发亮，厚重结实，给人强烈的安全感。全景天窗，前半页全开超爽，既大气又时尚。</span></strong></span></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: simsun;\"><span style=\"font-size: 18px;\"><strong><span style=\"line-height: 18.5705px; widows: 1;\">&nbsp; &nbsp; &nbsp; 买车请认准&gt;&gt;南京首佳名车汇&lt;&lt;首佳认证二手车，澳大利亚南恒1年质保等你来拿，所有出售车辆均可享受三天包退，七天包换，一年两万公里的质保服务。另外我公司提供二手车收购，二手车寄售，二手车评估，二手车置换；代办业务：过户、变更、提档、落档、年检、环保保险、转籍等一切业务。展厅地址位于：南京市秦淮区大光路35号金宇饭店一楼南京首佳名车汇。由于车辆销售较?快，请您来店之前打电话确定车辆是否在厅。心动不如行动，你还在等什么呢? 有喜欢的赶紧私聊吧!!!</span></strong></span></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: simsun;\"><span style=\"font-size: 18px;\"><strong><span style=\"line-height: 18.5705px; widows: 1;\">&nbsp; &nbsp; &nbsp;车源：精选精品车源，每一辆车都历经数百项严格检测，保证车车精品；</span></strong></span></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: simsun;\"><span style=\"font-size: 18px;\"><strong><span style=\"line-height: 18.5705px; widows: 1;\"><br/></span></strong></span></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: simsun;\"><span style=\"font-size: 18px;\"><strong><span style=\"line-height: 18.5705px; widows: 1;\"><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/2770559321/TB2CWIbkpXXXXboXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/2770559321/TB2QfTYkpXXXXafXpXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/2770559321/TB2yE3akpXXXXbvXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/2770559321/TB2aarRkpXXXXbrXpXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i1/2770559321/TB2zVEdkpXXXXaWXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/2770559321/TB2PysbkpXXXXboXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/2770559321/TB2PUohkpXXXXaXXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/2770559321/TB2.P.dkpXXXXa.XXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i1/2770559321/TB2_VIlkpXXXXXRXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i1/2770559321/TB2etwdkpXXXXaZXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/2770559321/TB20GY6kpXXXXcNXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/2770559321/TB2rlf6kpXXXXcPXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/2770559321/TB2CabLkpXXXXcbXpXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/2770559321/TB2b.smkpXXXXXmXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/2770559321/TB22L2LkpXXXXb3XpXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><span style=\"color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; background-color: rgb(255, 255, 255);\">&nbsp;</span><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/2770559321/TB2IfcbkpXXXXbeXXXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/2770559321/TB2eGrOkpXXXXbEXpXXXXXXXXXX_!!2-paimai.png\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i1/2770559321/TB2RenWkpXXXXaHXpXXXXXXXXXX_!!0-paimai.jpg\" style=\"border: 0px; vertical-align: top; max-width: 900px; color: rgb(102, 102, 102); font-family: tahoma, arial, &#39;Hiragino Sans GB&#39;, 宋体; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(255, 255, 255); float: none; margin: 10px;\"/></span></strong></span></span></p>','1','1','1','0','2','1459496426','','38','40','44','52','2016-4-20','1','1000','342000.00','20000.00','1459580400','1459594800');/* MySQLReback Separation */
 /* 创建表结构 `think_role` */
 DROP TABLE IF EXISTS `think_role`;/* MySQLReback Separation */ CREATE TABLE `think_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_role` */
 INSERT INTO `think_role` VALUES ('4','超级管理员','0','1','拥有至高无上的权利'),('5','网站管理员','0','1','具有添加、审核、发布、删除内容的权限'),('8','微信用户','0','1','只有管理微信的权限');/* MySQLReback Separation */
 /* 创建表结构 `think_role_user` */
 DROP TABLE IF EXISTS `think_role_user`;/* MySQLReback Separation */ CREATE TABLE `think_role_user` (
  `role_id` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `user_id` char(32) NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_role_user` */
 INSERT INTO `think_role_user` VALUES ('0','6'),('4','20'),('5','19'),('7','21'),('8','8');/* MySQLReback Separation */
 /* 创建表结构 `think_select` */
 DROP TABLE IF EXISTS `think_select`;/* MySQLReback Separation */ CREATE TABLE `think_select` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_select` */
 INSERT INTO `think_select` VALUES ('1','0','品牌','品牌','品牌','1','1','1458708028'),('2','0','车辆类型','车辆类型','车辆类型','100','1','1458710082'),('3','0','事故类型','事故类型','事故类型','100','1','1458710105'),('4','0','车辆年限','车辆年限','车辆年限','100','1','1458710118'),('5','0','起拍价','起拍价','起拍价','100','1','1458710129'),('21','1','凯迪拉克','','','0','0',''),('22','1','雷无萨斯','','','0','0',''),('23','1','路虎','','','0','0',''),('24','1','林肯','','','0','0',''),('25','1','雷诺','','','0','0',''),('26','1','兰博基尼','','','0','0',''),('27','1','劳斯莱斯','','','0','0',''),('28','1','铃木','','','0','0',''),('29','1','玛莎拉蒂','','','0','0',''),('30','1','迈巴赫','','','0','0',''),('31','1','MINI','','','0','0',''),('32','1','马自达','','','0','0',''),('37','2','事故车','','','100','1','1458710167'),('38','2','二手车','','','100','1',''),('39','2','零部件','','','100','1','1458710191'),('40','3','碰撞','','','100','1','1458710250'),('41','3','火烧','','','100','1','1458710260'),('42','3','水淹','','','100','1','1458710269'),('43','3','盗抢','盗抢','盗抢','100','1','1458710279'),('44','4','1年以内','','','100','1','1458710299'),('45','4','1~3年','','','100','1','1458710308'),('46','4','3~6年','','','100','1','1458710317'),('47','4','6~10年','','','100','1','1458710326'),('48','4','10年以上','10年以上','10年以上','100','1','1458710335'),('49','5','0~2万','','','100','1','1458710358'),('50','5','2~5万','','','100','1','1458710367'),('51','5','5~10万','','','100','1','1458710375'),('52','5','10万以上','10万以上','10万以上','100','1','1458710384'),('99','1','奥迪','奥迪','奥迪','100','1','1458708045'),('100','1','本田','本田','本田','100','1','1458708080'),('101','1','保时捷','保时捷','保时捷','100','1','1458708105'),('102','1','宾利','宾利','宾利','100','1','1458708430'),('103','1','宝马','宝马','宝马','100','1','1458708446'),('104','1','奔驰','奔驰','奔驰','100','1','1458708460'),('105','1','标致','标致','标致','100','1','1458708478'),('106','1','别克','','','0','0',''),('107','1','大众','','','0','0',''),('108','1','道奇','','','0','0',''),('109','1','丰田','','','0','0',''),('110','1','福特','','','0','0',''),('111','1','法拉利','','','0','0',''),('112','1','菲亚特','','','0','0',''),('113','1','悍马','','','0','0',''),('114','1','Jeep','','','0','0',''),('115','1','捷豹','','','0','0',''),('116','1','克莱斯勒','','','0','0','');/* MySQLReback Separation */
 /* 创建表结构 `think_session` */
 DROP TABLE IF EXISTS `think_session`;/* MySQLReback Separation */ CREATE TABLE `think_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_session` */
 INSERT INTO `think_session` VALUES ('va9v6rkpvuf68766cet4dj3fa0','1402115253','verify|s:32:\"aa8fdbb7d8159b3048daca36fe5c06d2\";');/* MySQLReback Separation */
 /* 创建表结构 `think_shield` */
 DROP TABLE IF EXISTS `think_shield`;/* MySQLReback Separation */ CREATE TABLE `think_shield` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shield` varchar(18000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_shield` */
 INSERT INTO `think_shield` VALUES ('1','汇中财富|love21c|招妓|出卖|亲日|仁吉旺姆|歌功颂德|通信维权|万润南|卫星定位|密穴|张庆黎|锦陶|您好票提供|破坏奥运|十七换血|暴力|贾庆林|兵运|吴仁华|722十周年法轮功|英雄纪念碑|汇钱|89-64cdjp|中华时事|戴相龙|政变|minghuinews|汤涛|falun|周恩来自责|联名信|独裁|法院|林长盛|鸡扒|血渍|痴女|诚信通手机商城|舒淇|赵勇|吕秀莲|家族势力|王冶坪|仁波切|王XX|麻醉乙醚|三个代表|张中伟|黑车|讲真相|没磁性|陈总统|胡权利瓜分|颜射|白立朴|刘晓竹|砝轮|昨日重现|兰大|刘国凯|吴镇南|狂操|烂货|伐仑|煞笔|张昭富|对抗|胡总书记|吴学灿|咨讯|金日成|17大人事变动|陈奎元|大陆教会|色情小电影|李海峰|发嘌|骚乱|陈蒙|乏论|波波|刘永治|自杀手册|高层生命|李三共志|中共十七大前夕人事布局出手既稳又重|freedom|刘石泉|彭枫|发票出售|激情大片|hypermart.net|铁凝|共匪|盘口|小泉|黄树贤|大麻油|国家安全|中共|E周刊|干妳老母|郭声琨|干你|7.4中山公园|学运|猪操|17da|2004年公共服务奖|女女|苏家屯|蒙汗药|日他|阎明复|伊斯兰|手机复制|淫秽|赵铁锤|税票出售|中共统治集团|成人频道|马志鹏|新生网|世界开运气功|杜鹃|华建敏|伟哥|竺延风|幼幼|熊焱|罚沦|胡晓炼|狗卵子|孙政才|深圳红岭|阴道|刘晓榕|干你娘|毛厕洞|于浩成|中共当权者|笨逼|破解|卖国|法论|唐家璇|国际法院|拉登|真象|刘俊国|洪吟|敌对分子|相互勾联|波霸|异己|之歌|军委|朱保成|徐粉林|17预测|吴毓萍|刘青|刘奇葆|香艳|窃听器材|boxun|黄作兴|十六大|中南海波澜起伏|麻醉枪|你娘|欧泽高|三水法轮|春菜|萨拉托加|给休闲会所|出千|香港71集会|贾育台|世华商务|刘宾深|狗逼|应召|林樵清|李契克|叫鸡|高官互调|6850|勾清明|腐败|试卷、|杨利民|淫图|汕头农村信用社|美乳|郭平|政治风波|张耕|寂寞|罢课|杜导斌|垡伦|恶心|靖志远|同房|司有代税|赌具|郭罗基|先天健康法|李洪峰|师父评注|金振吉|珐伦|合一共融|杨松|zhengjian|乏伦|汤光中|张惠新|践踏人权|风色|黄晶|民主|公投|干你妈逼|借贷|清纯|身份证生成器|中共政坛腐败内幕|大法弟子|喷血|新鲜海鲜|分裂中国|政局雾里看花|中国改革年代政治斗争|找政府评理|伐论|舒乐安定|窝囊中国|你好税提供|胡绩伟|刘伟平|老婊子|台湾政论区|游龙商务联盟|张伟国|狗娘|吴胜利|tianwang|fuck|布局十七大|钓鱼台|版署|天安门屠杀|砝抡|程凯|政权|古怪歌|猛男强奸|小灵通|玄机|加藤|chinamz|发论|宏法|红志|专制|大B|冠希|paper|春宵|江罗|姜异康|毒气|徐邦秦|2006年十句最真实的谎言|周强|新华举报|falu|颠覆|xuri|李玉赋|李小鹏|博彩|废除中共|李希|李金章|朱毛|陈尧军|绿色环保手机|足浴|侦探|性福|台湾狗|报警|海关总署|窃听器|将则民|上海垮台|黄色文学|中央军委|古兰经|微型无线隐型耳机|法功|惹火|刻章|我日|八九|罚仑|傅雯娟|10657|绑架|两岸三地论坛|七月一日游行|陈存根|北妹|吴百益|宿命论|成人漫画|王寿祥|反社会|珐轮|监听王|隧道|符贵|亲美|精子|转法轮|A级|刘奇葆热门人选|地铁十号线塌方|五至七步功|建党|EstaZolam|点数优惠|私人会所|六一零|克劳塞维茨|大苹果|夜总会|胡春华|曹长青|银行卡消费问题银联管理中心|高文谦|追债|大贸|弹药|renminbao|人民大会堂|地下律师服务点|梦网洪志|何清涟|黄色漫画|hongzhi|ムㄞ你娘|中共十七大前夕|邓小平|发情|滕文生|花花公子|周川|生者和死者|嘿咻|操你|酱猪媳|蠢猪|西藏论坛|占卜|透视|反共游击队|噶玛巴|朱维群|几吧|发票需要|何勇|王力雄|阀伦|司徒华|中共十七大热门人选|争鸣论坛|鲜族|申维辰|非典|办证|林保华|第五代领导人|我操你|发伦|舔西|法十轮十功|伐轮|妳老母的|发囵|佛展千手法|社保基金会|发改委|正见网|鸿志|魏家福|恐怖手段|民阵|袁贵仁|男公关|杨焕宁|白梦|傻逼|车臣|吗啡碱|一党专制|白恩培|打10010|吴双战|招待|叶青纯|法正乾坤|王兆国|王晓初|讲法|ustibet|苏荣|亚洲周刊|猪毛|弟大物勃|死去|柴玲|人体炸弹|孙宝树|禁书|翻案|国地税|人渣|洗浴|陈希同|高莺莺|平方米|香港集会|水扁|烂B|李总理|保密室|专业代考|宋爱荣|筏纶|裸干|民意|即时通|常劲|屌七|民意论坛|信访局|性爱|隐私|李总统|破鞋|插你|何平|静坐|共党|洗浴中心|假冒|单据|国内长途|易通高科|省市换班第五代冒起|李熙|绿色雨|正西液压|陈炳德|五套功法|林左鸣|dfdz|两会报道|分析：中共派系力量再达成妥协|李盛霖|地下刊物|沈彤|中奖|杨洁篪|刘京|中山公园哀悼|卡上扣除|魏京生|俞正声|臧献甫|列宁|华语世界论坛|中国政治新星|胸罩|家乐福游行|15528236773|佳丽|宋祖英|张基|老二|九码|高强|盖棺定论|鸿泰通迅|艳影|江Core|杂种|japan|自已的故事|民族矛盾|讲清真相|白云山|人民真实报道|伊扎布特|周英|张海阳|恶搞|乏仑|白皮书|自摸|现房|恐怖主义|ㄐ吧|天鹅之旅|王润生|专业拷贝|回民暴动|黑手党|机巴|华岳|中国银联|九评|人民大众时事参考|政体改造论|奚国华|色情网站|李鹏|内射|七月四日中山公园|港澳办|一党专政|可知道对方通话|炼功|真理教|巴哈依教|权威主义国家的合法性理论|常万全|9评|小九|王建平|珐论|wstaiji|血债|马三家|人员变动|七一集会|人民日报|H7N9|真善美|台独|屌妳|疆独|干妳妈|主义|北京市亿霖公司|打倒|姚月谦|义军|走私|xuri|毛泽东123|洪传|做爱全过程|6.4.运动|自由写作奖|外围|文学城|操你妈|罗干|干死你|第五代中共领导人|十七大人事安排意见|金尧如|法*功|毛贼东|李学举|民主潮|白春礼|三陪女|回民暴|帝国主义|张宏堡|UP新势力|周恩来忏悔|龟孙子|声色|杨建亭|天安门事件|群发|人员安排|台湾青年独立联盟|中国政坛“清华帮”盛极而衰|网上赚钱|子女任职名单|预约卡|司有税票|保持正念|蒋彦永|新疆人|煽情|陈希|hrichina|正邪大决战|李汉柏|上海帮|金钱豹|接收对方所有电话|接听对方任何电话|李荣融|毛泽东|唐人电视台|金水路英|大参考|换届隐忧|日你妈啦逼|核污染|六合彩|你说我说论坛|由喜贵|国务院|香港明报|转世|张文岳|中国社会进步党|红魂网站|赵南|刘粤军|复制|李岚清|项波|多维|李小雪|欲望|张万年|FLG|一部分人因年龄或健康原因将不得不退下去|汪洋|中俄边界|利川|狗屁|难属|两岸关系|鸡鸡|屁眼|费良勇|江流氓|向外代办|疆.独|群交|陈炳基|中国媒体十大事件|赵海青|定税企业|破坏|独夫|中俄密约|杨建利|修炼|肖强|穴|纪元|青天白日旗|行业短信|蒙独|吹萧|两个中国|J巴|一等奖|监听|屠杀|民进党|日他娘|24X|澤民|民怨|中共高层变动：王兆国将任常委或取代贾庆龄|张连珍|37776|18X|税金低|抵制|无聊|连胜德|文化大革命|各种发票|民猪|睾丸|北美讲坛|蔣彥永|佳静安定片|卖逼|刷卡消费|生鸦片|邝锦文|焉荣竹|官场日志|统计局|税力|香港71游行|赔率|陈国令|红海湾|捍卫社会主义共和国|扑克|淫靡|八婆|江绵恒|圣战|塞你爸|X夜激情|齐墨|筏仑|董万才|黄菊　|民航局|汪岷|出售枪支|赵洪祝|联大|雷春美|庆红|正信|对冲|撞车|南华早报|名模尊享|李大师|刘成军|中移动|砝伦|北大三角地论坛|你妈|李文斌|df\'d|发票供应|牌照|拉姆斯菲尔德|四步行动|刘文胜|三陪|吴新雄|安魂网|共黨|强硬发言|商用通道|极权专政|乳房|朱明国|镇压|阿拉法特|钱国梁|禽流感|金普提上师|殷一璀|迫害|高科信息|杀人|6a6.net|双腿间的禁地|宗教|安全监管|窃取|世界经济导报|高干子女|Soccer01.com|点数低|曾道人|学自联|李鸿忠|用卡消费|孙大发|陈水扁|卫留成|上门安装|王瑞林|高息不要|海外民运|大层功|中国民主党联合总部|智能SIM|王国生|李克强|naive|塞你老母|陈至|兴奋剂|发纶|宗教迫害|鲍戈|阝月|发沦|磁头坏|税票据|旭日|乏纶|女公关|发轮|骚货|婊子|王立英|江八点|中共中央|彤体|告全国股民同胞书|刘华清|17届|打入|以商养政|邱学强|群体灭绝|智能卡|军牌|性免费电影|理想信念斗争|操他|武吉海|王家瑞|劳教|恐怖份子|革命|废统|社会不公|讨伐|六四|日本军舰|李旺阳|密宗|月经|中国报禁怎样开|易丹轩|看中国|陈宣良|孙春兰|中共权利斗争|夜激情|汕尾|妈卖妈屁|反恐委员会|谢和平|中国复兴论坛|日货|阴唇|李买富|王丹|戈扬|明慧网|宋秀岩|真相|疯狂掠夺大陆股民|香港七一游行|法伦|王沪宁|共青团背景|聚会|被日|军委主席|钓鱼岛|气功|情妇|珐仑|周生贤|人弹|东社|黄晴宜|令狐安|鸿达通信|令狐计划|fa轮|鸽派|证实大法|成人电影|邓天生|主席|风雨神州|潜在用户|移民|北京之春|开票|陈左宁|接听对方所有来电|结帐|五不|南联盟|激情电影|十足十恶|传单|我XX你|法.轮.功|性欲|星相|不来提不都热西提|打压|联总|阴道被捅|台人治台|17届名单|温云松|你好票提供|项怀诚|党棍官僚|nacb|freechina|包皮|翟小衡|罗清泉|符强|吕京花|提供号码|分众|广闻|中南海秘闻|游戏管理员|骚|向巴平措|登辉|幼齿|宋楚瑜|万能钥匙|多功能SIM卡|华达通迅|砝仑|triangle|短信商务广告|筏囵|时事论坛|GCD|高压|张岱梨|保钓|康涛杰|肉棍|王通智|流血|黄建国|新观察论坛|台盟|吾尔开希|发愣|禁片|校信通|杨巍|叶冬松|焦国标|绝色|贺邦靖|税票代理|381929279|器官移植|李刚|拍肩神药|出售假币|卖春|西山会议|陈训秋|揭批书|姜春云|暗杀|成人图片|宗教压迫|发飘|禁卫|民主墙|民政部|侦探专家|外汇局|亡党|叫床|色诱|霍英东临终遗言|陈政高|短信群发器|文物局|中国孤儿院|升天|马飚|江戏子|王志刚|盘古乐队|荣基|塞你母|人权调查|高官子女|十七大人事|罗保铭|谢旭人|李适时|残酷迫害|民国|ktv|窃听|套牌车|何家栋|舔奶|胡景涛|两会|四级答案|三公|安全部|热站政论网|银行联合管理局|制服|邢元敏|贯通两极法|马英九|吕祖善|吴方城|月赚三千|共产|伊斯兰运动|多功能手机卡|国色天香网|支树平|手机游戏|武器|陈良宇|赌恒指|绳虐|教徒|许其亮|东突|交班|轮回|狗操|王冠中|假钞|颠覆国家|老母|日死你|新闻封锁|沈浩波|平反|件行|政治变革|符跃兰|万维读者论坛|肉洞|一夜情|九-评|哈批|政治犯|卖比|白粉|刘学普|白景富|救度一切众生|133118.com|闳志|阿拉|摩门教|销魂|结帐日|僵贼民|根浴|昏药|徐建国|分家在|猪毛1|猛料|挑逗|大便|明斯克号|中国高层人事变动解读|司马璐|中央派系斗争|游行|开天目|天怒|仁青加|美腿|svdc|于幼军|远志明|套牌小车|发票代理|筏抡|魏新生|应招|杜青林|北姑|韩长赋|妳娘的|第一批下海经商的人富|40万名车车主名单|Fuck|骚货|黄祸|陈军|北美讲坛s|王莉莉|一中一台|北京当局|運動|安立敏|投毒杀人|小穴|张晓刚|罗正富|tibetalk|共军|前列腺炎|联合国|麻醉钢枪|洪志|黑火药|梁擎墩|K他|zhuanfalun|陈德铭|烧饼歌|里藏春|玄音大法|胡温|中共十七大的基层选举|钱运录|二逼|歌德|刘玉亭|男人|妈比|余额增值|本.拉登|文香雅苑|王华庆|钱还没存|田成平|无帮国|瑞士金融大学|钱其琛|古方迷香|李宏志|zhengjianwang|李老师|客户端非法字符|刘千石|你妈的|刘振来|刘冬冬|真耶稣教会|中国真实内容|安装天线节目|bitch|王为璐|透视眼镜|洪法|军转干部|恭喜你的号码|捐款|慢驶|失身|中功|禁区|广闻|jiangdongriji|巨奖|名山县|罢餐|抵制邪恶|印尼伊斯兰祈祷团|针扎|团派|21世纪中国基金会|民告官|shit|轻舟快讯|藏娇|王辅臣|中央团系|酷刑|袁家军|吹喇叭|我操|境界|江core|白立忱|邮政局|梅克保|9.635|阴水|自杀指南|枪手|易达网络卡|郭树清|徐守|中国和平|13660233260|巨波|簧片|胡*锦*涛|包赢|王侠|美国佬|冤案|马凯|迪里夏提|红智|你敢上吗|聊聊|短信平台|张建平|真修弟子|东北独立|魏礼群|陈文清|套牌|石大华|老姜|胡耀邦|黑枪|陈元|江棋生|统独论坛|台*湾|熟女|杨周|江核心|倒闭|sex|税票|宇宙大法|作弊|日元贷款|paper64|手机铃声下载|王军涛|操比|她妈的|肖中特|阴胫|联合起诉最高人民法院|达赖|保监会|嫖娼|李金城|共产党|魏凤和|上床|鹿心社|税点优惠|四无目标|参加者回忆录|傻屄|洗脑|玄`机|曾庆红|黄色小说|民警|王俊莲|风雨神州论坛|巨乳|往事并不如烟|税号码改13|偷拍|痴母|罚伦|中南海|万艾克|做爱挑逗|严家其|蓝清|中电信|cnd|同胞书|黎智|梵蒂冈|东突厥斯坦伊斯兰运动|吴宏达|自由导报|刘振起|兽交|第五代领导新星|素人|贾廷安|立方体|郑恩宠|男女公关|张纪南|黄页|熊炎|语音|卖淫|赵晓微|法抡|政治诉求|FOCUSC|母子|时事参考|驶你老母|生肖|台湾独立|妈批|making|珐纶|霍比预言|吴学璨|党校安插亲信|unixbox|经文|张明双|分头黑箱作业|杨刚|十七庆红|华夏文摘|黄殿中|颠覆中国政权|23条|联通商务通|7.31|路甬祥|610洗脑班|北京政权|抽奖|程真|冯敏刚|张三是帅哥|125元获取网站|孟学农|司有开税|中共十七热门人选|去你妈|你爸|自然静坐法|吴爱|阀沦|K你妈|戴海静|17大人事预测|71游行|黄慈萍|反法示威|筏伦|中华人民实话实说|笨蛋|夏春荣|SleepingPill|刘晓凯|妈的b|大麻树脂|妈的|法正|红心宝|文化部|兰清|叶剑英|陈一谘|高瞻|张国清|保证金|特别号码|松下|中共统治|新华网|民生危机|张高丽|洗浴|天上人间|白痴|大众真人真事|中南海权力斗争|鸡吧|罢市|张先玲|宏志|支那|疯狂施暴|蒋峰|自由亚洲|刘亚洲|温家宝|指定银行帐号|龙卷风|对宗教自由的迫害|小来子|周伯华|消磁|韩联潮|freenet|中国社会论坛|伦功|收容所|公开批评中央高层领导人|国民党|民选参政|黎安友|董贵山|推信|张轩|性事|中宣部|鸠|盛华仁|珐囵|榕基|中共十七人事|中共特权阶层|童增|不影响对方|天安门母亲|华过锋|新唐人|涂运普|程铁军|温加饱|情色大片|破坏正法者|朱容基|erdaoqiao|网管|壮阳|李志绥|胡紧掏|朱之鑫|廉政大论坛|肖捷|马馼|小日本|黄翔|中共十七人选|香港七一集会|中國當局|娇点|藏品|淫穴|风骚|担保|法西斯|李玉妹|达赖喇嘛|迷奸|代理税率|17909|从陈良宇倒台看中国政局走势|王乐泉|汉风|尹庆民|慧网|民族问题|日你|下盘|事实独立|韩正降职副市长|17高官互调|设局|免房费名模女儿|嫩穴|新华社|张志清|黄华华|大中国论坛|圣火|新闻办|中央召开北戴河会议决定十七大高层人事|克林顿|工力|新疆独|王正伟|功友|偷越边境|江泽林|zhenshanren|任亚平|性交姿势|陈建国|新快报|卖国贼|人民之声|办理文凭|中国在统一问题上的投降主义|和平改革八位一体|法仑|孙晓群|周恩来|军事委员会|潘云鹤|平反六四|俄国|阀纶|自然功|张博涵|阴蒂|何德普|杜宇新|付申奇|A片|杜智富|清债|第四代|花柳|爱护与救度|徐才厚|李小朋|阀论|义解|桑拿|安理会|蛊惑|少女高潮|手机铃声|江泽慧|法谪功|反抗|我是回民|王伟光|信息封锁|大血B|中华讲清|鹰派|中共十七人事变动|诚聘|陈车|发票办理|杀手|月赚千圆|朱嘉明|chinaliberal|大图|发1234567890票|税务代|大红赤龙七头十角|天灭中共|阀抡|文凭车辆|成人书库|王学军|秦光荣|商务部|阿娇|刘玉浦|吴邦国|艾斯海提·克里木拜|政坛明日之星|政体改造|唐捷|李建国|方舟子|枪支弹药|穆斯林|信息设备|平井|税率低|十月飞雪|福娃火车相撞地震|祝君|代办证件|李禄|铁道部|成人片|菩提教会|封圣|新华通论坛|大纪园|秦晋|远程偷拍|封从德|少儿误入|苏树林|8945212|择民|西藏独立|UltraSurf|逊克农场26队|罢驶|赤龙|江猪|月薪|李向东|二奶|燃烧辅助工具|党委|俞杰|大阀|外来工协会|如何推翻中共|正帮通信公司|ムㄞ你爸|流氓|宗功|央视内部晚会|布什|军长发威|积克馆|车仑|他妈|调情|蛋白同化制剂|陈际瓦|ムㄞ你母|赌博|高干子弟|dafa|陈川平|暴行|庄家|共狗|李从军|艾司唑仑|17届常委|失密|大纪元新闻网|杨传堂|赤党|烂比|优化官员|现世现报|票优惠联系|放屁|蒋经国|外交与方略|李洪宽|中国太子|筏论|万晓东|个人崇拜|垡论|性感|斐得勒|QQ宠物|中国问题论坛|爆乳|王洪章|17届委员|项宗西|新疆|明Hui|肛门|下岗工人|何峰|宋育英|税点低|猪聋畸|人权侵害|淫乱|内幕|精液|陈润儿|抡功|网络活动颠覆|转化班|弘法|李毅中|自焚|曹康泰|色情|大法|年福纯|短信端口|恩格斯|泡为啥不赚轻|伐囵|邓小平和他的儿子|张裔炯|中华大地思考|消业|王和民|老毛|陈至立|逼样|打炮|李兰菊|江蛤蟆|薄熙来|萨达姆|抵制奥运|阎庆新|拍丸|B样|电信|新时空|人民真实|江青|法轮功信徒|血腥图片|zhuanfalu|大比|法囵|孙忠同|俱乐部|专业找人|李景田|试题答案|大奶|李少民|张仕波|驶你母|苗圩|十七大权力变更|治军方针定调|中朝|恶搞晚会|透支|国民根本大法|钦本立|六四|子弹|马良骏|田力普|绝食|兆赫|轮奸|许云昭|16大|赤匪|和平请愿书|贱比|肖亚庆|17届中央|可卡因|吉炳轩|桑拿|发抡|刘通|威而柔|有票开|维权|台湾|小弟弟|奶子|王希哲|税上网|法沦|上海市劳动和社会保障局违规使用社保资金|Dick|刘宾雁|于起龙|3P|老人政治|统战|黄色电影|干你妈|刘云山|空劲功|压迫|强效失意药|余远辉|台湾建国运动组织|公道话|票源正规|SIM卡抽奖|胡江|简鸿章|杨怀安|一贯道|xinsheng|新势力|闹事|告中国人民解放军广大官兵书|基督教|刘山青|消业论|红兽|红岗|罢工|电视流氓|迷药|71集会|劳工|郭岩华|变态|接听对方任何来电|习近平|人事布局出手既稳又重|税票代开|自由亚州|突破信息封锁|爆炸装置|反共|口蹄疫|两性狂情|华岳时事论坛|数据通信|周天法|周旋|张研农|老子|八老|乏轮|康日新|回民|岚清|中国论坛|国研新闻邮件|12590|印章|糟蹋|真、善、忍|朱总理|联总之声|GAMEMASTER|造业|邓可人|文香|小贸|阴茎|中俄边界新约|开房|公开信胡书记|登天梯|中国之春|美国之音|劳动教养所|SIM卡|陆浩|资本运作|报复|incest|应急通信|以血护法|傅申奇|东土耳其斯坦|分裂|强卫|余欣荣|马时敏|项小吉|李成玉|堪布|巴音朝鲁|干你妈|脱衣舞|岳福洪|马会|帝国之梦|宪政|舔|一塌糊涂|巴赫|垡抡|林业局|杨月清|陈破空|膏药旗|彩民|张平|李录|郭金龙|轮功|反腐|米洛沙发|无网界浏览|回良玉|颠覆中华人民共和国政|马强|李淑娴|福娃出事|周刊纪事|于大海|复转军人|罗蒙马格赛基金会|国家主要部委|法轮功|拨968|邓笑贫|学习班|GameMaster|裸体|电话卡|邓晓平|企信通|自主择业|政坛两黑马|粉饰太平|creaders|足疗|flg|李法泉|小参考|陈冀平|张阳|抢粮记|法轮佛法|宇宙真理|中国猪|涵养人生|漏点|wangce|师父|张毅|苏绍智|五月花广场|双十节|丁元|贱货|可待因|睾|斯诺|王明方|绝食宣言|亲民党|恭喜您的号码|操我|东南西北论谈|十八摸|弘志|咪咪|小泉纯一郎|日内瓦金融|英语四六级答案|郑源|黄色|simple|性游戏|六合|中国泛蓝联盟|耶和华|底裤|自民党|木犀地|两性|韩东方|邪魔|曾培炎|中南海高层权利斗争|江澤民|来电显示|狗屎|反政府|反封锁|私家侦探|台湾独|军转安置|透视镜|右派|傅成玉|诸世纪|畜生|蒋洁敏|双飞|真念|海洛因|救度|水深火热|大花逼|郭庚茂|童世平|成人网站|集体做爱|射精|健康法|五出三进|刘文瑜|令计划|冯素英|被迫|民运功绩论|王华元|交媾|发票提供|晓德|共铲党|珐沦|高自联|光祖|在十月|操蛋|税后付款|燕南评论|放账|牛逼|丫头养的|出售手枪|胡书记|恶劣|余额增直|超常科学|法lun功|社会主义|汕特农信社|舒晓琴|法轮|他妈的|税点优|高校骚乱|阿拉伯之春|筏轮|台湾共合国|中国政坛新星中的四大天王|乏沦|税票需要|枪决现场|法轮大法|李幛喆|voa|发伦功|檀鑫|九、评|李兆焯|大纪元|撒尿|九.评|淫荡|被盗|师傅法身|肽类激素|贼民|大逼|暴政|反腐败|出售答案|舆论反制|谢长廷|李立国|伴游|倒卖|集会|中国高层权力斗争|警告|黄色影视|烂逼|狗b|下体|北韩|人民报|谢万军|现金奖|兑奖电话|乏抡|束缚|戒严|独立中文笔会|开放杂志|dpp|猪的梦|dajiyuan|陈宝生|普通可开|黄献中|正义党论坛|网特|善恶有报|大法洪转|好死不如赖活着|大史纪|邵家健|林军|尉健行|爱滋|流氓燕|死gm|民联|发骚|水去车仑|洪哲胜|总书记红人|基督|尹蔚民|国家领导|高官|法会|falundafa|falun|邵明立|联合行动|爱国者同盟|秦银河|阴囊|老江|热辣|几巴|红灯区|徐斌|詹文龙|中天一气功|王建军|chinesenewsnet|王玉普|反华|彭清华|李崇禧|王传平|薛伟|褚益民|雪灾西藏地震|宏宝大法王|白志健|四联航空|个信|袁纯清|教养院|司有开票|大法之声|64运动|废除劳教签名|江八|中华大众|对外代办|胡玉敏|triangleboy|王炳章|沈跃跃|民运|升达毕业证|赤裸|勾引|破处|王荣|屌鸠|推翻社会主义制度|李洪志|张三是个坏蛋|退党|王岐山|情趣|沈德咏|龙虎豹|毛泽东2|小平|巴特尔|刘振亚|十七年|功德圆满|特码|PK黑社会|奸淫|张健|人民内情真相|大善大忍|胡平|汇入|重新评定|刑警|间行|乱伦|旭日厂|利鹏|弟子|万科欧泊|高息贷款|郭伯雄|虹志|实际神|张玉台|她马的|吹箫|中国六四真相|廖锡龙|麦角酸|警察|柳斌杰|txwq.net|反封锁技术|对外代理|中天|乔石|性虐待|分裂中华人民共和国|鸡8|致幻剂|前列腺|7.23|蒙古独立|博信|陆兵|方励之|尤权|东洲|王宪魁|江贼|王毅|胡锦涛|动乱|维护权益|辛灏年|杨崇汇|太监|西藏天葬|李宏治|加拿大皇家骑警|上海孤儿院|朱金基|奸|邪恶生命|乳头|党政一把手|中国移动通信|鲍彤|东突厥斯坦|章虹|蔡继华|大片|省委大门集合|慈心佛性|泽名|张又侠|陆委会|华通时事论坛|侦探设备|杨晶|刘晓波|推翻|法纶|监管局|则民|邵琪伟|大陆当局|王鸿举|代开|大纪|统治|姚增科|按摩|猪头|企信专家|大中华论坛|夫妻情趣|王涵万|中共十七布局|葛振峰|金正日|讲事实要说法|新华内情|红色恐怖|17大的人事安排意见|中特|暴乱|蠢蛋|跟踪|刘家义|17987|温元凯|张云川|航空母舰|超高级功法|6-4tianwang|骗局|手机充值|善念|国家领导人|吴玉良|世界风|胡振民|垡纶|黎阳平|阴部|口交|天葬|王光亚|请愿|税票办理|法輪|杨利伟|陈子明|蔡武|骗子|信用合作社|氵去|两会新闻|鸡毛信文汇|吴仪|打工者俱乐部|ㄐ掰|二手车|段录定|国贼|告全国同胞|屙民|贪官|宇明网|税票提供|公开信胡|普京|成人小说|毒品|死全家|高层人事变动|新唐人电视台|刘刚|疆独|鲍筒|枪决女犯|植物药|色狼|屌|异见人士|新党|林幼芳|信用危机|李世明|波胆|娄义|鸡八|商信通|木子论坛|充气娃娃|绵恒|安全局|高校暴乱|罄竹难书|孙建国|生当作人杰之昨日重现|狂野|D301|张庆伟|喷水|中医药局|大史记|陶驷驹|力鹏|林慎立|西方|谢小庆|司有代票|阴毛|奶头真红|李长江|朱丹|枪杀|huanet|强奸犯|刘建华|枪支|贺信彤|按摩|祝春林|李月月鸟|丝袜|汉奸|三级片|作秀|民运返家|轮公|考后付款|功法|魔难|破坏大法|孙思敬|中国共产党|胡锦滔|款汇到|以身护法|司马晋|马大维|造反|麻将|妈祖|田修思|回教|抵制游行|夜总会|十七大未来|工自联|劳改|泄密|自慰|茳澤民|俄罗斯|刘永川|乡巴佬|他母亲|十七届|早泄|对人权的侵害|茉莉花|张宝顺|章沁生|反日|接班|黄色小电影|刘志军|玉树|华泰通讯|汇票|垡囵|张铁健|丸仔|四川独立|该死|鬼子|婚外情调查|干以胜|K粉|001工程|反腐败论坛|陈雷|税率优惠|赵爱明|张汝成|张小平|代办|圆满|皮包|发仑|小鸡鸡|晚年周恩来|柳树中学|沈素琍|省政府大门集合|告全体网民书|大纪元|磁条|老毛子|屄|发抡功|短信广告|腾飞科技|洪智|杨衍银|姜大明|春药|瑞环|余英时|成人类|测绘局|林彪|旦科|南蛮子|发漂|真善忍|玛雅预言|短信安全关键词测试|六●四|张春贤|法谪|建设部|酷行|王秀丽|DICK|雪山狮子|北美自由论坛|李安东|天安门一代|上访|发正念|联总这声传单|迷奸药|邓颖超日记|少妇|刀林荫|新疆独立|养根|求购|希特勒|下法轮|林树森|袁荣祥|李纪恒|岳武|孟令伟|江责民|希拉克|我妳老爸|天府广场集会|赵紫阳|办理证件|发论功|外蒙|粉嫩小洞|13560258484|蔡崇国|数据中国|传中共中央关于17大的人事安排意见|李长春|抵押|税金优|垡仑|食捻屎|新经文|中南海惊现东宫小朝廷|使馆|幼女|骚穴|大学骚乱|悔过书|黄局|胡泽君|骚逼|中心广场|贾庆、林黄菊、17大的人事|明心|努尔白克力|摇头丸|国军|日本狗|大b|fuc|操你娘|贾安|伐抡|中共当局|李延芝|王维民|高潮|王万宾|工运|六合采|邓昌友|蓝丝带|高利贷|范印华|投注|周永康|股权投资|操逼|王八蛋|时代论坛|鬼村|徐匡迪|指点江山论坛|nmis|王策|您好税提供|铁通|王正福|鸡巴|汇款|仙灵签|朱德|烟草局|周济|韩正|龟公|男妓|erdaoqiao|业力|安全套|黄色图片|曹清|吴弘达|操妳|香港游行|李学勇|混蛋|宋平|江ze民|白军|九成|祁建|冯寿淼|人事接班|黄兴国|菩提功|流亡|南大自由论坛|税率优|徐一天|曾庆红削权|亚洲自由之声|卫生巾|地动仪|二乙基酰胺|观音法门|倒陈运动的最大受益人|屈万祥|春宫|建国党|849118.com|手枪|九评共产党|漂据|嘌据|13660615599|13687965626|藏独|弹劾|阳痿|江折民|黄康生|抵制示威|春夏自由论坛|鸠屎|发论公|中华大地|骆惠宁|吗啡片|周锋锁|代开发票|金书波|18岁以下勿入/看|楼继伟|李铁映|诱奸|四川独|李洪志|正法|戴秉国|情色电影|唐柏桥|谌贻琴|上你|成人生活片|我XX你|上层次|办正|xxx|僵贼|命根|总书记|舆论|伐沦|大彩|脱轨|李瑞环|阿扁|家乐福示威|李克强接班人|十七大预测|真相资料|魔障|房峰辉|飞雪|张德江|亚热|校讯通|性交大赛|传说的胡曾联手是一种假象|宋xx|美国参考|罚囵|刷卡成功|廖晖|赵宪庚|伊拉克|郑义|唐嘉爵|各界众生|无网界|史莲喜|社会民主派民运|泽民|作爱|蔡挺|大史|王若望|曹建明|杜学芳|强迫|持不同政见|筏沦|法轮功|政治反对派|playboy|色情服务|点数优|公民私权|情色|TMD|朱琳|法轮功十周年|呼喊派|无界浏览|可窃对方|去死|衡阳万通房产|护士|假发|渗透中共|文凭|美利坚|东西南北论坛|保健按摩|主神教|打折机票|中共权斗|圆顿|贷款|垫资|修正法|叫小姐|成人影视|砝囵|法L功|温总理|贾治邦|纽崔莱七折|护法|河殇|靖国神社|safeweb|网信|大纪元网|加入非法字符|妓女|美少女|40698|王超华|铃声下载|现身|地产广告|泡沫经济|peacehall|贺国强|望月|郭永平|485558.com|情欲|鹰狼传|连战|毛一鲜|告全国同胞书|罚纶|我的后讨伐中宣部时代|张开双腿|蠢货|嫂|上网文凭|考前发放|飞扬论坛|文革|六四事件|磁条坏|反革命|马晓天|格庵遗录|忍无可忍|关卓中|徐光春|徐绍史|江独裁|蒙汗药粉|二B|牛B|李源潮|刘延东|禁看|呼吁书|清楚邪恶|换妻|风波记|江主席|邢铮|钱达|当官靠后台|砝沦|丁子霖|ムㄞ你老师|自杀|联总之声传单|吴定富|阴道|淫水|潘国平|王旭东|高校群体事件|瞒报|蛤蟆|无界浏览器|殉道圣人|薛延忠|吴官正|黄菊|坐台|中共独裁|喻林祥|群P|穆罕默德|傻B|骆琳|王刚|车辆手续发票|牛比|神通加持法|李克|龟儿子|谢中之|发票代办|懂文华|马克思|蒋文兰|虐待人权和宗教自由|王金山|十七大人事调整|闵维方|拉丹|税票供应|结印|许达哲|博讯|FUCK|第5代领导|李克强第五代领导人|政治局十七|曾经的心痛|看日本人卖给了我们什么|可卡叶|涉日|13281257753|高武生|罗礼诗|刘淇|商业广告|爱国运动正名|珐抡|废物|惊暴双乳|bignews|首长|普通票|阻止中华人民共和国统|算命|专政|反攻大陆|丁关根|贪污犯|曹刚川|传九促三|10七|烂屌|统独|激情|肛交|示威|金壮龙|症状|海洋局|天安门|中国报禁|救度世人|阴茎|靠你妈|走光|陈敏尔|空中民主墙|假币|朱成虎|肖爱玲|冯东海|反人类|摊牌要权|十八大|法愣|重组|网络封锁|地下钱庄|徐水良|日你妈|家宝开会布局新兴战|蔡振华|胡锦淘|刘晓江|和弦|李继耐|病业说|杜恒岩|卢越刚|你妈铋|观世音|来京上访|renmingbao|窃听王|热比娅|童屹|王忠民|做爱经典|yuming|龙华经|杨士秋|华莱士|新语丝|宇宙众生|六码|郑中|自由网|钟山风雨论坛|国家机密|肉体|无界|致胡书记的公开信|台湾自由联盟|春夏之交|王东明|菩提法门|鸿宇通讯|盛雪|人事变动|中国威胁论|gay|伍凡|外交部|邪恶|讲清真象|心藏大恶|孙金龙|广电局|反奥运|苏士亮|党风日下|放贷|正念|泽明|催情药|610办|星亚网络影视公司|性交|独裁政治|放入春药|刘明康|红潮谎言录|喷你|突破封锁|荭志|目前有年化收益大于10%的理财产品|刘春良|庭审|石戈|春梦|紫阳|罚抡|卫生部|氵去车仑工力|大家论坛|农运|林昭纪念奖|江贼民|无能|夜话紫禁城|江猪媳|十大穷人|世界通|王立军|中国社会的艾滋病|捻|I2590|原子能机构|姬胜德|肉穴|人民大众|三码|张钢|复临安息日会|李康|中共伪政权|放下执着|中华养生益智功|质检局|华天高科|肉棒|华夏文摘快递|王喜斌|陳水扁|王宝森|朱溶剂|激情小电影|艳照|黑帮|谢选骏|梁保华|言论自由|砝论|七月二十二日法轮功|苏晓康|破迷与正心|迟万春|香港总部|地下教会|孟母来文|大紀元|雒树刚|学联|华惠棋|乌海大学|突厥斯坦|伦理|中华真实报道|宋书元|性伴侣|王儒林|4．25事件|高丽棒子|梁光烈|毛片|石宗源|诱惑|杨元元|泓志|泽东|CCTV|跨世纪的良心犯|宋平一句话|冷溶|火凤凰|抗议|NMD|赵品潞|等你上来|凌锋|一平|人权保障|全国两会|伐伦|伦公|人权|血腥|小樱桃|西藏独|干柴烈火|毛都露出|屄命|姜洪禄|发票代开|三级|超爽|贱人|大庄|见行|中央政治局|刘源|人民之声论坛|亚洲自由电台|中共反腐风暴大背景揭秘|练功点|李长才|l2590803027|对日强硬|锦涛|张左己|未来震源|乌云其木格|周恩来后悔|女优|17大委员名单|杨传升|去你妈的|人民报讯|开周天秘法|证据收集|独立台湾会|张晓平|罗志军|rfa|女人香|邓楠|姜建清|东突厥斯坦伊斯兰|昝爱宗|拷贝|诚信制卡|高息代款|焦焕成|王进东|赵乐际|废除中共一党专制统治|迟浩田|周国强|信息产业部|消防队|十七大政治局|天皇|刘士贤|珐.輪功|买卖枪支|麒麟文化|访问链接|乏囵|中共领导人黑幕|1717wg.88448.com|龟头|王胜俊|voachinese|反攻|江则民|网赚队伍|邪恶因素|审计署|垡轮|答案卫星接收机|色欲|以文养政|统一教|淫|瘸腿帮|迷昏药|黑庄|中华人民正邪|易志熹|轮大|范长龙|狗日的|教育部|冰毒|独立|孟建柱|团派政治明星|李月鸟|少数民族|避孕套|东方红时空|砝纶|蒙古独|张伯笠|强奸|秘书长|年轻高知团系接班|呼叫转移|徐乐江|赶快取款|妈的B|国资委|发票|打架|6842|王三运|李红痔|抗日|中共心中最大的恐惧|党禁|发票刻章车牌|阀仑|网通|云雨|东方时空|封杀|翟渠|聂卫国|假证|反法游行|总统号|贱逼|张成寅|法抡功|尚勇|鸿宇通信|联通贵宾卡|串联聚会|干妳娘|轮攻|第五代领导|金麒麟网|江泽民|自由运动|处女终结者|王新宪|广东五元集团|赌球|做爱|群奸|武装反抗|集体上访|异议人士|金道铭|城管|把钱汇到|新疆人七月四日哀悼|李登辉|自由民主论坛|恶势力|傅志寰|放光明制作中心|代练|银行卡|林明月|特等奖|八四纲领|亦凡|垡沦|王太华|中南海斗争|太子党|许家屯|扎卡维|赵克石|minghui|学潮|走入邪悟者|成人论坛|明慧|七一游行|讨伐中宣部|一国两制|陪睡觉|中共政治新星|免试|三唑仑|天安门录影带|虐待|中华民国|破产|卢展工|泡妞|孤独|陈小同|陈新权|性服务|徐天亮|莫伟强|张林|赤化|QQb|朱镕基|性高潮|封杀酱猪媳|极景|十七大|我们剩下甚么|哲民|催情|话费充值|黄色网站|喇嘛抗议|freenet-china.org|借款|同样的世界|康妮?契普卡|杭州湾跨海大桥|高考移民|王斌余|仿五四枪狙击枪|完全自杀手册|军权膨胀|退脏帐号|门徒会|血洗|威海|衡阳中院工作报告|学生运动|迷魂药|dd21.kaxb.com|qxbbs.homeftp.net|nzhengjianwang|党魁|高家伟|上天在警告世人|江卖国|人大代表|中国银行|康小光|权威主义|建设银行|景观住宅|邪灵|大连建厂|九评讲播|全户型|首付|zhengjia|师傅李洪志|taip|24.87.30.178|u1.tengotech.com|开单提成|乡亲铡刀|衡阳中级人民法院|鸡奸|街铺|高校罢餐|大降价|出国考察|血吸虫|杜湘成|大奖|www6.kinghost.com|短信推广|高薪养廉|全哲洙|lihongzhi|列确|天目|阀囵|刘凯中|觉者|荡妇|潜入潜出|外交论坛|司马义·铁力瓦尔地|徐敬业|官商勾结|收藏|税票代办|死|华人媒体|佰酷|发瞟|小电影|成人文学|优惠税金|倪育贤|税查验|李源朝黑马|蒋介石|末世论|《12个春秋》|严家祺|傅怡彬|自制手枪|买春|更衣|郭炎炎|17权力布局|许万平|摧毁旧卫星|无线针孔摄象机看字专用针孔摄像机|nloveroot|suck|商铺|特惠房|pointsmoney.com|车库|消息封锁|卡号|三峡移民|党专制|滕兴善|宏观调控|反宇宙的力量|购房|ucloo|尼日利亚|卖房|屠城|汽车反测速雷达|w8.sullyhome.net|张万|www.dajiyuan.com.c|belong.zapto.org|刘杰告状信|保钓活动|草泥马|zhenshanre|金世纪电脑学校现推出优惠学电脑活动|nfalundafa|baishishi|大fa|台湾进口纽扣式超清晰针孔摄像机|太石村|nfalg|融资|力霸|ftp.xinhone.com|面积|放光明镜像|www.geocities.com|十二个春秋|查禁八本图书|邨|漠视人权施独裁|滴滴血泪唤君醒|野鸡|银行卡诈骗|邓力群|xxboy.net|市长自杀|生者与死者|境外并购|国际品牌花花|高考泄题|上海合作组织|城堡|X泽|瀑布沟|军用炸药|东海天然气|lookatme0.tripod.ca|洗脑酷刑|北大一教授被辞退致信教育部部长陈情|中国人民银行|falu|超级信使|51游行|圆明网|封城|均价|废除劳教签名活动|elite.zapto.org|安徽高考文科统分|一手操控|突破网络封锁|反垄断法|湘阴群体事件|李月月|哈工大女博士|马英泽|胡温面临的地雷阵|新股发行|6合彩|杨长军天安门广场自残事件|movie.yygov.com|briefcase.yahoo.com|101.redirectme.net|uc***|ming.got-game.org|https:|web3.km120.com|www.in-wa.com|瘟疫|www.90550.com|复仇|物价上涨|板楼|特卖会|爆炸|免房费|未来自由中国在民间|超级短信|大面积爆发|noblock.no-ip.com|法LG|falungong|劳动教养|辽宁两会|隐形无线耳机|博迅|三期|spring.bounceme.net|房折|度假区|达赖抗议|万古事为法来|无线针孔摄象机|轮工力|nwww.downdown.net|倒行逆施|zapto.org|www.hhslut.com|五一游行|隐瞒数据|性病|加强网上群体性事件信息管理|复式|flgong|炮轰中国教育部|gui.hopto.org|瓦良格|集资|勃起|康晓光|www.boybbs.net|www.minghui|退脏不咎|取款风波|六.四|山西黑砖窑|CBD|高考舞弊|缅甸问题|房展|长株潭‘申特’不受重庆成都影响|okte|24.83.220.95|spr.hopto.org|清水君|IP17908|讲真相民谣|隐瞒疫情|nu18.com|台湾特工|农业银行|刘志华生活腐败|生态区|dadaobao.myetang.com|国统会|藏族独立|拉萨戒严|湘潭韶山|zhina444.xrs.net|斯诺|王军滔|法国游行|不为人知的故事|六合彩买码|w8.base-v.ch|公寓|希望之声|两性视频|家乐福|武装冲突|戴松林疑案|西藏|twfgm.no-ip.com|donghua.zapto.org|坦荡正法路|nbreakit.batcave.net|一梯两户|两岸|陆建华|旺铺|双规|mzc.zapto.org|高校罢课|福建戒毒所|美国副国务卿|抵制日货|慰问信|甘丹寺|衡阳中院|色拉寺|一折起|h119.ath.cx|拉法叶舰|tripod|暗访摄像包|喝一送一|江系人马|假新闻|房型|国家恐怖主义|柴铃|保钓行动|经租房|拉萨抗议|29t.com|畜牲|姬鹏飞|毛主席|退款网址|豪宅|三峡旅游资源被垄断|红杏出墙|杀戮|你有权知道|辽宁海城二台子社区|gau12.amxy.com|法轮转动|法轮gong|大ji元|浏阳河水出现异味|二手汽车|锦滔|n癌症村|六四屠城|溶心法理|国家药监局|风水宝地|刘胡兰|楼盘|十七大前后的中国|嘉禾事件|核电站|商业楼|www.111shop.com|芙蓉姐姐|救渡世人|抵制家乐福|平可夫|绝食抗议|超科学|江家班|特价|样板间|高校游行|dajiyua|Windows8(23)|魔盒|sy01.nhua.org|体协原副主席宋万年|写字楼|普渡众生|同样的人权|江xx|工商银行|万古事為法來|医生状告医院|embed|流氓政权|江氏集团|尤甘斯克|取消利息税|民运分子|www.12488.com|陈水扁过境美国|杀人奶粉|uw.slyip.com|玉素甫|小旺铺|陈晖|陈柄基|新一届|www.hkgirlz.com|nolie.redirectme.net|fresh.hopto.org|生化武器|陈光诚|酬宾|窝囊的中国|江氏|www.taiwanmovie.com|裸之秀|boxu|安全投毒|红顶商人|草草草|萬古事為法來|光大银行|207.44.142.89|瘙痒药吃了后就全身痒想脱光衣服的|www.hellocd.com|邮政储蓄银行|www.minghui.org|木塔里甫|新唐人电视|扩大台湾农产品|权贵私有化|名宅|讲真相诗歌|抵制法货|www.dajiyuan.com|www.xys2.org|江黑心|贪恋权力|无耻|bbs.ievista.com|内部日记|福莱斯特|绿色台商|两限房|江氏一只黑手|招商银行|人大主任|黑龙江干部|高莺莺死亡案件|灵动卡|airfresh_|公馆|张戎|新大新鞋业升级改造|TheUnknownStory|SCRIPT|库尔勒市长|系统神学|事纪神|汉唐证券|朝令夕改|天药|2008奥运性感泳装|dick|www.pussyasians.com|徽农民工子弟学校|韩桂芝|qmnoog.homeip.net|同化宇宙|xiaopin.zapto.org|冰点|生物武器|抢购|用真像打破禁锢|nzhina444.allhere.com|商圈|新闻管制|拉案|庸医|河南艾滋病|nda法|img|www.500movies.com|love21c|祸国殃民|生化袭击|三唑伦|习仲先|中郡财富|瑞通公司|至强商务|欣祺益贵金属|贵金属|起亚|白银|金瑞福|五菱|恒通达|别克|现代|通用|10010.com|小升初统考|三期|他妈的|他妈的|狗日的|shit|共党|共产党|共匪|党员|共党垃圾|共党垃圾|共匪|师父评注|超高级功法|他妈的|共产党|开周天秘法|白痴|混蛋|自然功|狗日的|小日本|实际神|蠢蛋|蠢货|八婆|三陪女|贱人|主神教|菩提功|菩提教会|宏宝大法王|金普提上师|菩提法门|玄音大法|高层生命|诸世纪|破迷与正心|大纪元网|讲清真相|世界开运气功|空劲功|中天一气功|自然静坐法|大层功|殉道圣人|摩门教|复临安息日会|观音法门|一贯道|师傅法身|宗教迫害|亚洲自由电台|自由导报|赤党|网络封锁|相互勾联|党禁|平反六四|民选参政|渗透中共|政治变革|呼吁书|串联聚会|以商养政|以文养政|民运返家|恐怖手段|十足十恶|政治诉求|绝食宣言|四无目标|社会民主派民运|八四纲领|政体改造论|民运功绩论|和平改革八位一体|四步行动|民主墙|废除中共一党专制统治|极权专政|中共特权阶层|中共统治集团|中共当权者|民生危机|党棍官僚|突破信息封锁|网络活动颠覆|人权保障|对人权的侵害|虐待人权和宗教自由|宇宙大法|宇宙众生|贺信彤|正见网|践踏人权|各界众生|邪恶生命|邪恶因素|爱护与救度|救度一切众生|残酷迫害|疯狂施暴|保持正念|抵制邪恶|救度世人|突破封锁|张宏堡|阎庆新|圆顿|金麒麟网|慈心佛性|五至七步功|呼喊派|烧饼歌|玛雅预言|霍比预言|格庵遗录|真相资料|大陆教会|合一共融|巴哈依教|伊扎布特|偷越边境|潜入潜出|台人治台|地下律师服务点|打工者俱乐部|外来工协会|公民私权|告全国同胞书|颠覆国家|真修弟子|假冒|家乐福游行|家乐福示威|反法游行|反法示威|劳工|维权|地动仪|雪灾西藏地震|福娃火');/* MySQLReback Separation */
 /* 创建表结构 `think_shoper` */
 DROP TABLE IF EXISTS `think_shoper`;/* MySQLReback Separation */ CREATE TABLE `think_shoper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kinds` int(11) DEFAULT NULL COMMENT '1为个人，2为企业',
  `realname` varchar(40) DEFAULT NULL COMMENT '联系人姓名',
  `sex` varchar(20) DEFAULT NULL COMMENT '性别',
  `cards` varchar(40) DEFAULT NULL COMMENT '身份证',
  `bothday` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL COMMENT '公司名称或单位称呼',
  `tel` varchar(40) DEFAULT NULL COMMENT '座机电话',
  `phone` varchar(40) DEFAULT NULL COMMENT '手机',
  `qq` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `ip` varchar(200) DEFAULT NULL COMMENT '服务器IP',
  `addr` varchar(200) DEFAULT NULL COMMENT '联系地址',
  `hangye` varchar(200) DEFAULT NULL COMMENT '做的是什么行业',
  `city` varchar(40) DEFAULT NULL COMMENT '城市',
  `provice` varchar(40) DEFAULT NULL COMMENT '省份',
  `area` varchar(40) DEFAULT NULL COMMENT '地区',
  `description` varchar(2000) DEFAULT NULL COMMENT '描述',
  `avater` varchar(200) DEFAULT NULL COMMENT '头像',
  `url` varchar(200) DEFAULT NULL COMMENT '网址',
  `start-time` int(11) DEFAULT NULL COMMENT '开始时间、成立时间',
  `end-time` int(11) DEFAULT NULL COMMENT '结束时间',
  `status` int(2) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_single` */
 DROP TABLE IF EXISTS `think_single`;/* MySQLReback Separation */ CREATE TABLE `think_single` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `kinds` int(8) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL,
  `keys` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `contents` varchar(8000) DEFAULT NULL,
  `write` varchar(40) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_single` */
 INSERT INTO `think_single` VALUES ('7','26','公司简介','','','','','<p><img src=\"http://s-152069.gotocdn.com/Public/images/banner_a.jpg\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; background-color: rgb(255, 255, 255);\"></span></p><p style=\"word-wrap: break-word; margin-top: 1.5rem; margin-bottom: 10px; padding: 0px; text-align: justify; word-break: break-all; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\">上海证券交易所成立于1990年11月26日，同年12月19日开业，归属中国证监会垂直管理。按照“法制、监管、自律、规范”的八字方针，上海证券交易所致力于创造透明、开放、安全、高效的市场环境，其主要职能包括：提供证券交易的场所和设施；制定证券交易所的业务规则；接受上市申请，安排证券上市；组织、监督证券交易；对会员、上市公司进行监管；管理和公布市场信息。</p><p style=\"word-wrap: break-word; margin-top: 1.5rem; margin-bottom: 10px; padding: 0px; text-align: justify; word-break: break-all; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\">上海证券交易所下设办公室、人事部（党委组织部）、党委办公室（党委宣传部）、纪检监察办公室、交易管理部、发行上市部、上市公司监管一部、上市公司监管二部、会员部、债券业务部、国际发展部、基金业务部、衍生品业务部、市场监察部、法律部、投资者教育部（企业培训中心）、系统运行部、技术开发部、技术规划与服务部、信息中心、北京中心、财务部、风控与内审部、资本市场研究所、自贸区交易平台筹备工作小组、基建工作小组、花桥基地工作小组等</p><p style=\"word-wrap: break-word; margin-top: 1.5rem; margin-bottom: 10px; padding: 0px; text-align: justify; word-break: break-all; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; background-color: rgb(255, 255, 255);\">内设部门或临时工作小组，以及全资子公司——上海证券通信有限责任公司、上证所信息网络有限公司、上证金融服务有限公司，通过它们的合理分工和协调运作，有效地担当起证券市场组织者的角色。此外，上海证券交易所还控股或参股了20家公司机构，大大拓展了上交所的服务范围。</span></p><p style=\"word-wrap: break-word; margin-top: 1.5rem; margin-bottom: 10px; padding: 0px; text-align: justify; word-break: break-all; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; line-height: 22px; background-color: rgb(255, 255, 255);\">经过二十五年的快速成长，上海证券交易所已发展成为拥有股票、债券、基金、衍生品四大类证券交易品种的，市场结构完整的证券交易所；拥有可支撑上海证券市场高效稳健运行的，世界先进的交易系统及基础通信设施；拥有可确保上海证券市场规范有序运作的，效能显著的自律监管体系。依托这些优势，上海证券市场的规模和投资者群体也在迅速壮大。2014年，沪市上市公司家数达995家，总市值24.4万亿元，全年累计成交金额37.56万亿元，日均成交达1533亿元，股市筹资总额达3962.59亿元；债券市场挂牌只数达2603只，托管量2.29万亿元，累计成交86.68万亿元；基金市场上市只数达75只，总市值2084亿元，累计成交37478亿元。投资者开户数量已达12317万户。</span></p><p><br/></p>','admin','0','1458716478'),('8','27','发展历程','','','','','','','',''),('9','28','联系我们','','','','','','','',''),('10','33','拍卖保障','','','','','','','',''),('11','34','如实描述','','','','','','','',''),('12','35','拍前预展','','','','','','','',''),('13','36','鉴定证书','','','','','','','',''),('14','37','会员服务说明','','','','','','','',''),('15','42','竞拍流程','','','','','','','',''),('16','43','竞拍协议','','','','','','','','');/* MySQLReback Separation */
 /* 插入数据 `think_single` */
 INSERT INTO `think_single` VALUES ('17','44','保证金介绍','','','','','<p><img src=\"http://localhost/gzqhqc/Public/images/3.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; background-color: rgb(255, 255, 255);\"></span><img src=\"http://localhost/gzqhqc/Public/images/4.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14.44444465637207px; line-height: 24.44444465637207px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"/></p>','admin','0','1458718103');/* MySQLReback Separation */
 /* 插入数据 `think_single` */
 INSERT INTO `think_single` VALUES ('18','46','服务保障','','','','','<section class=\"hui-container mb-10\" style=\"word-wrap: break-word; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 13.333333969116211px; line-height: 21.111112594604492px; white-space: normal;\"><p style=\"word-wrap: break-word; margin-top: 1.5rem; margin-bottom: 10px; padding: 0px; text-align: justify; word-break: break-all;\"><img src=\"http://localhost/gzqhqc/Public/images/1.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%;\"/><img src=\"http://localhost/gzqhqc/Public/images/2.png\" style=\"word-wrap: break-word; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; max-width: 100%;\"/></p></section><p><br/></p>','admin','0','1458718244');/* MySQLReback Separation */
 /* 创建表结构 `think_slide` */
 DROP TABLE IF EXISTS `think_slide`;/* MySQLReback Separation */ CREATE TABLE `think_slide` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `kinds` int(8) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `retitle` varchar(200) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `pic` varchar(300) DEFAULT NULL,
  `contents` varchar(500) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_slide` */
 INSERT INTO `think_slide` VALUES ('59','21','444','4','44','./uploads/20160323/56f211d3b71b0.jpg','','0','1','1458705237'),('60','21','基本面','棋','','./uploads/20160323/56f211ed53ec6.jpg','','11','1','1458704877'),('58','21','22222','222','','./uploads/20160323/56f2113240d99.jpg','','0','1','1458705244');/* MySQLReback Separation */
 /* 创建表结构 `think_user` */
 DROP TABLE IF EXISTS `think_user`;/* MySQLReback Separation */ CREATE TABLE `think_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL COMMENT '注册用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `realname` char(20) DEFAULT NULL COMMENT '真实姓名',
  `sex` tinyint(1) DEFAULT NULL COMMENT '性别',
  `educational` varchar(20) DEFAULT NULL COMMENT '教育程度',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱',
  `address` varchar(200) DEFAULT NULL COMMENT '地址',
  `score` int(8) DEFAULT NULL COMMENT '积分',
  `images` varchar(400) DEFAULT NULL COMMENT '头像',
  `tip` varchar(400) DEFAULT NULL COMMENT '宣言',
  `url` varchar(200) DEFAULT NULL COMMENT '个人网址',
  `logintime` int(10) NOT NULL COMMENT '登录时间',
  `loginip` varchar(30) NOT NULL COMMENT '登录IP',
  `lock` tinyint(1) NOT NULL COMMENT '用户启用状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_user` */
 INSERT INTO `think_user` VALUES ('20','admin','8526b3aaeb010be62ee0b636293a68ad','彭毅','0','                请选择学','18798075208','285412937@qq.com','贵州','500000','Uploads/avater/1444977934_162.jpg','','','1459746856','127.0.0.1','0'),('8','mingyu','f82bf09bb412a252b4e74a55aabafb7f','','0','                    ','0','','','0','Uploads/avater/1440480542_162.jpg','','','1458736594','127.0.0.1','0'),('21','mingyua','e10adc3949ba59abbe56e057f20f883e','','0','','0','','','0','','','','1440480496','127.0.0.1','0');/* MySQLReback Separation */
 /* 创建表结构 `think_userinfo` */
 DROP TABLE IF EXISTS `think_userinfo`;/* MySQLReback Separation */ CREATE TABLE `think_userinfo` (
  `iid` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) DEFAULT NULL COMMENT '用户ID',
  `u_nickname` varchar(20) DEFAULT NULL COMMENT '昵称',
  `u_bithday` varchar(40) DEFAULT NULL COMMENT '生日',
  `u_home` varchar(200) DEFAULT NULL COMMENT '家庭住址',
  `u_pro` varchar(10) DEFAULT NULL COMMENT '省份',
  `u_city` varchar(10) DEFAULT NULL COMMENT '城市',
  `u_area` varchar(10) DEFAULT NULL COMMENT '地区',
  `u_school` varchar(200) DEFAULT NULL COMMENT '毕业学校',
  `u_qq` varchar(20) DEFAULT NULL COMMENT 'QQ',
  `u_motto` varchar(200) DEFAULT NULL COMMENT '座佑铭',
  `u_sex` int(1) DEFAULT NULL COMMENT '性别',
  `u_tel` varchar(12) DEFAULT NULL COMMENT '电话',
  `u_url` varchar(100) DEFAULT NULL COMMENT '个人网址',
  `u_email` varchar(40) DEFAULT NULL COMMENT '邮箱',
  `u_worker` varchar(40) DEFAULT NULL COMMENT '职业',
  `u_score` int(8) DEFAULT NULL COMMENT '积分',
  `u_vip` varchar(40) DEFAULT NULL COMMENT 'VIP',
  `u_renqi` int(8) DEFAULT NULL COMMENT '人气值',
  PRIMARY KEY (`iid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_verify` */
 DROP TABLE IF EXISTS `think_verify`;/* MySQLReback Separation */ CREATE TABLE `think_verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v-length` int(11) DEFAULT NULL,
  `v-width` int(11) DEFAULT NULL,
  `v-height` int(11) DEFAULT NULL,
  `v-bgcolor` varchar(100) DEFAULT NULL,
  `v-seed` varchar(200) DEFAULT NULL,
  `v-fontfile` varchar(200) DEFAULT NULL,
  `v-size` int(11) DEFAULT NULL,
  `v-color` varchar(100) DEFAULT NULL,
  `v-session` varchar(200) DEFAULT NULL,
  `v-mode` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_verify` */
 INSERT INTO `think_verify` VALUES ('1','4','100','40','#FFF','0123456789','','30','#FFF','verify','1');/* MySQLReback Separation */
 /* 创建表结构 `think_vhits` */
 DROP TABLE IF EXISTS `think_vhits`;/* MySQLReback Separation */ CREATE TABLE `think_vhits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) DEFAULT NULL,
  `tag` varchar(2) DEFAULT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_vhits` */
 INSERT INTO `think_vhits` VALUES ('1','20','a','127.0.0.1','1450949768'),('2','16','a','127.0.0.1','1450949797'),('3','9','a','127.0.0.1','1453461030');/* MySQLReback Separation */
 /* 创建表结构 `think_video` */
 DROP TABLE IF EXISTS `think_video`;/* MySQLReback Separation */ CREATE TABLE `think_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kinds` int(11) DEFAULT NULL COMMENT '分类',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `entitle` varchar(200) DEFAULT NULL COMMENT '英文标题',
  `zhuyan` varchar(400) DEFAULT NULL COMMENT '主演',
  `daoyan` varchar(40) DEFAULT NULL COMMENT '导演',
  `image` varchar(200) DEFAULT NULL COMMENT '缩略图',
  `tag` varchar(200) DEFAULT NULL COMMENT '影片标签',
  `area` varchar(100) DEFAULT NULL COMMENT '出产地区',
  `year` int(11) DEFAULT NULL COMMENT '年份',
  `total` varchar(40) DEFAULT NULL COMMENT '总集数',
  `nowji` int(11) DEFAULT NULL COMMENT '当前集数',
  `site_url` varchar(200) DEFAULT NULL COMMENT '采集地址',
  `play_url` longtext COMMENT ' 影片地址',
  `phone_url` varchar(1000) DEFAULT NULL COMMENT '手机地址',
  `contents` varchar(1000) DEFAULT NULL COMMENT '内容',
  `status` int(2) DEFAULT NULL COMMENT '状态',
  `hot` int(2) DEFAULT NULL COMMENT '热门',
  `top` int(2) DEFAULT NULL COMMENT '推荐',
  `hits` int(11) DEFAULT NULL COMMENT '点击量',
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kinds` (`kinds`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_vset` */
 DROP TABLE IF EXISTS `think_vset`;/* MySQLReback Separation */ CREATE TABLE `think_vset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kinds` int(11) DEFAULT NULL COMMENT '分类',
  `site_name` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `zhuyan` varchar(400) DEFAULT NULL COMMENT '主演',
  `daoyan` varchar(200) DEFAULT NULL COMMENT '导演',
  `image` varchar(200) DEFAULT NULL COMMENT '缩略图',
  `tag` varchar(200) DEFAULT NULL COMMENT '影片标签',
  `area` varchar(100) DEFAULT NULL COMMENT '出产地区',
  `year` varchar(200) DEFAULT NULL COMMENT '年份',
  `total` varchar(40) DEFAULT NULL COMMENT '总集数',
  `nowji` varchar(40) DEFAULT NULL COMMENT '当前集数',
  `site_url` varchar(200) DEFAULT NULL COMMENT '采集网站网址',
  `url` text COMMENT '采集地址',
  `play_url` varchar(1000) DEFAULT NULL COMMENT ' 影片地址',
  `phone_url` varchar(200) DEFAULT NULL COMMENT '手机地址',
  `contents` varchar(100) DEFAULT NULL COMMENT '内容',
  `pos` varchar(100) DEFAULT NULL,
  `content_round` varchar(100) DEFAULT NULL,
  `glzd` text COMMENT '过虑字段',
  `replace` text,
  `set1` int(11) DEFAULT NULL,
  `set2` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_vset` */
 INSERT INTO `think_vset` VALUES ('1','8','八哥电影天堂','<li><div class=\"img\"><a href=\"(.*)\"><img class=\"vipicbg\" title=\"(.*)\" alt=\"(.*)\" src=\"(.*)\"></a></div><a href=\"(.*)\"><h3>(.*)</h3>','<div class=\"zhuyan\"><ul><li>(.*)</li>','','<li><div class=\"img\"><a href=\"(.*)\"><img class=\"vipicbg\" title=\"(.*)\" alt=\"(.*)\" src=\"(.*)\"></a></div><a href=\"(.*)\"><h3>(.*)</h3>','<div class=\"zhuyan\"><h1>(.*)</h1><ul><li>(.*)</li>','<div class=\"zhuyan\"><h1>(.*)</h1><ul><li>(.*)</li>','<div class=\"zhuyan\"><h1>(.*)</h1><ul><li>(.*)</li>','<div class=\"zhuyan\"><ul><li>(.*)</li>','','http://www.xunleige.net/','http://www.xunleige.net/dongman/index','<div class=\"xz\"><span>迅雷下载观看</span></div></div></div><div id=\"jishu\"><div class=\"con4\"><ul class=\"downurl\"><script>(.*)</script>','','<div class=\"neirong\">(.*)</div>','1-1-1-1-1','','八哥电影','欧巴电影','0','20','0'),('2','1','锅边鱼电影网','<li><div class=\"img\"><a href=\"(.*)\"><img class=\"vipicbg\" title=\"(.*)\" alt=\"(.*)\" src=\"(.*)\"></a></div><a href=\"(.*)\"><h3>(.*)</h3>','<div class=\"zhuyan\"><ul><li>(.*)</li>','','<li><div class=\"img\"><a href=\"(.*)\"><img class=\"vipicbg\" title=\"(.*)\" alt=\"(.*)\" src=\"(.*)\"></a></div><a href=\"(.*)\"><h3>(.*)</h3>','','','','','','http://www.guobianyu.com.cn/','http://www.guobianyu.com.cn/dzp/index','<div id=\"jishu\"><div class=\"con4\"><ul class=\"downurl\"><script>(.*)</script>','','<div class=\"neirong\">(.*)</div>','1-1-1-1-1','','','','2','10','0');/* MySQLReback Separation */
 /* 创建表结构 `think_water` */
 DROP TABLE IF EXISTS `think_water`;/* MySQLReback Separation */ CREATE TABLE `think_water` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `upload_path` varchar(200) DEFAULT NULL,
  `file_size` int(8) DEFAULT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `font_water` varchar(100) DEFAULT NULL,
  `font_size` int(4) DEFAULT NULL,
  `font_color` varchar(20) DEFAULT NULL,
  `water_w` int(4) DEFAULT NULL,
  `water_h` int(4) DEFAULT NULL,
  `water_image` varchar(200) DEFAULT NULL,
  `opacity` int(4) DEFAULT NULL,
  `water_p` int(4) DEFAULT NULL,
  `water_pos` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 创建表结构 `think_wxapi` */
 DROP TABLE IF EXISTS `think_wxapi`;/* MySQLReback Separation */ CREATE TABLE `think_wxapi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `appid` varchar(100) DEFAULT NULL,
  `appsecret` varchar(200) DEFAULT NULL,
  `mchid` varchar(200) DEFAULT NULL,
  `key` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_wxapi` */
 INSERT INTO `think_wxapi` VALUES ('1','3','wxda22e7765288a720','6471a54d118664acbe7c6e87aa9c13cb','3333','333'),('2','0','524','6354163','131','131'),('3','0','2342','23423','42342','3423'),('4','20','梅艳芳菲','234242','4234','234'),('5','8','333','333','33','433');/* MySQLReback Separation */
 /* 创建表结构 `think_wxmenu` */
 DROP TABLE IF EXISTS `think_wxmenu`;/* MySQLReback Separation */ CREATE TABLE `think_wxmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `key` varchar(200) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `think_wxmenu` */
 INSERT INTO `think_wxmenu` VALUES ('1','20','0','微信管网','tree','','333','3','0'),('2','20','0','最新资料','tree','','NEWS','2','0'),('3','20','0','DF','view','','','0','0'),('4','20','1','hhh','click','','4444','1','0'),('5','20','1','333','view','','45','0','1440479611'),('6','8','1','第一个菜单','','','http://www.baidu.com','1','1440480186'),('7','20','0','测试二级','click','','','33','1441781736');/* MySQLReback Separation */
 /* 创建表结构 `think_wxreply` */
 DROP TABLE IF EXISTS `think_wxreply`;/* MySQLReback Separation */ CREATE TABLE `think_wxreply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `openid` varchar(200) DEFAULT NULL,
  `contents` varchar(2000) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;/* MySQLReback Separation */