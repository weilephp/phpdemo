-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-04-14 20:43:42
-- 服务器版本： 5.7.10-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chuangyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `ar_admin`
--

CREATE TABLE `ar_admin` (
  `ad_id` smallint(6) NOT NULL,
  `ad_name` varchar(30) NOT NULL,
  `ad_password` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ar_article`
--

CREATE TABLE `ar_article` (
  `ar_id` smallint(6) NOT NULL,
  `ar_title` varchar(100) NOT NULL,
  `ar_author` varchar(20) NOT NULL,
  `ar_pic` varchar(100) NOT NULL,
  `ar_rem` tinyint(4) NOT NULL COMMENT '是否推荐',
  `ar_content` text NOT NULL,
  `ar_cateid` smallint(6) NOT NULL,
  `ar_time` int(11) NOT NULL COMMENT '文章发布时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ar_article`
--

INSERT INTO `ar_article` (`ar_id`, `ar_title`, `ar_author`, `ar_pic`, `ar_rem`, `ar_content`, `ar_cateid`, `ar_time`) VALUES
(10, '肖斯达克成都高新大核酸研究院揭牌成立', '伟乐', 'Public/Upload/2017-04-14/58f0390ebeddd.jpg', 0, '&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;在3月19日的&lt;/span&gt;&lt;span style=&quot;;padding: 0px;color: rgb(51, 51, 51);font-family: SimSun, Arial, Helvetica, sans-serif;font-size: 14px&quot;&gt;“创业天府·菁蓉汇”生物医药专场中&lt;/span&gt;&lt;span style=&quot;;padding: 0px;line-height: 28px;text-indent: 28px;color: rgb(51, 51, 51);font-family: 宋体;font-size: 14px;letter-spacing: 0&quot;&gt;，肖斯达克成都高新大核酸研究院正式揭牌成立。此前，去年‪11月16日‬，成都高新区管委会与2009年诺贝尔生理学医学奖得主杰克·邵斯达克教授(JackW.Szostak)在成都签订战略框架合作协议。根据协议，双方将利用各自优势，在成都高新区天府生命科技园建设“邵斯达克成都高新大核酸研究院”，并整合四川大学、哈佛大学、佐治亚州立大学、麻省总医院等科研机构在核酸技术领域的一流人才、研究成果等资源，推动大核酸研发及产业化发展，将成都高新区打造成全球大核酸产业链最健全的区域。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;杰克·肖斯达克教授是美国国家科学院院士，哈佛大学医学院终身教授，霍华德·休斯医学研究所研究员，其在大核酸研究领域取得了举世瞩目的研究成果，并且一直致力于推动其实际应用和产业化转化。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;据悉，该研究院将设立核酸适配体药物及诊断试剂联合实验室，核酸适配体诊断试剂联合实验室，合成核酸、核酸检测及测序仪联合实验室，核酸结构生物学和核酸药物设计联合实验室，硒核酸转化医学和化学结构生物学联合实验室。主要研发领域和重点方向包括：建立核酸适配体分子诊断技术，并发明适配体创新药物以及适配体诊断试剂;宫颈癌适配体诊断试剂研发，及以核酸检测为基础的精准治疗;合成核酸、核酸检测以及测序仪的开发;细胞内的DNA编码技术筛选先导化合物;核酸结构生物学研发、核酸药物设计和创新等。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;邵斯达克教授表示，以核酸检测(包括序列测定和表观遗传学检测)与核酸修饰等为基础的精准医疗是目前全球生物医药暨大健康产业的重要方向，市场前景广阔，是国际医药巨头和国际顶尖资本追逐的热点。在成都高新区建设大核酸研究院，将大大加速该研究项目的研发、应用及产业化进程，从而更好地服务于人类的健康和幸福。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;成都高新区相关负责人说，成都高新区将以建设绍斯达克实验室为切入点，把发展大核酸产业与建设国家自主创新示范区结合起来，率先在全国建立具有鲜明技术特色及产业带动示范效应的“大核酸技术产业基地”，形成核酸产业国内领先发展优势。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;下一步，成都高新区将整合现有生物企业资源，搭建公共平台，促进大核酸技术在成都高新区生物企业间的广泛应用;鼓励迈克、新基因格等检测企业以及全市各级医院积极拓展与核酸相关的疾病检测等业务;鼓励核酸技术在“互联网+医疗健康”领域的拓展应用，鼓励创新创业，形成内容丰富、活力十足的新业态;同国内外著名医院开展合作，建设临床医院，为大核酸药物或设备的临床试验提供平台，完善大核酸产业生态圈。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;打造45平方公里成都国际生物产业城&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;据悉，本次活动为成都“创业天府·菁蓉汇”写上了新的篇章——此前还没有举办过专业的生物医药专场活动。今年，成都市政府将生物医药专场安排在成都高新区举办，其重要的因素包括对生物产业的重视以及对成都高新区现有生物产业基础的肯定。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;2015年，十八届五中全会提出了“健康中国战略”。业内人士认为，接下来的五年中，中国的医疗健康行业将面临着诸多变革，围绕不断增长的医疗健康需求，中国的产业市场规模将高达10万亿元。2015年，四川省政府提出，“力争到2020年全口径医药产业规模迈上5000亿元台阶，将四川打造成为中国重要的医药产业创新高地、现代中药产业基地和健康服务业基地”。成都市委市政府高度重视生物医药产业发展，将生物医药产业作为成都实现“新常态、万亿级，再出发”的战略性产业。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;作为四川省、成都市生物产业的重要聚集区，成都高新区是国家中药现代化科技产业基地、成都国家生物产业基地、成都国家医药出口基地、成都国家生物医用材料与医疗器械高新技术产业化基地。成都市委市政府明确将成都高新区定位为成都市生物产业核心区。四川省卫计委给予成都高新区“四川省‘互联网+医疗健康’创新创业基地”的授牌，着力将成都高新区打造成为四川省发展“互联网+健康服务”产业的重要基地。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;成都高新区经贸发展局副局长尹朝银表示，生物产业是成都高新区着力支持发展的主导产业之一。近年来，成都高新区坚持“培育”和“引进”两条腿走路，特别是注重加快国际化合作，从生物医药产业发展的高端切入，从海外引进了一大批生物医药产业领域的高端人才及相关创新资源，加大平台建设和政策支持力度。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;据统计，近三年来，成都高新区生物医药产业保持20%以上的高速增长。2015年，成都高新区生物医药产业全口径营业收入突破200亿元，占成都市的三分之一。聚集规模企业近800家，产值过亿元企业29家、过10亿元企业4家;亿元单品种14个，产业从业人员近3万人。同时，成都高新区大力推进生物医药重大项目建设，2015年开工建设了镇泰、美敦力、微芯生物等一批重大项目，区内盛迪、欧林生物等重点企业取得品种批件，并开始规模化生产，这些进一步奠定了产业发展后劲。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;截至目前，成都高新区已初步形成了现代中药、化学药、生物制剂、医疗器械等重点产业集群。现代中药聚集了地奥、迪康、新荷花等龙头企业，中药国际化步伐处于全国前列。化学药聚集了四川制药、恒瑞制药、倍特制药等重点企业，其中倍特制药是成都高新区培育的企业，增长快速，去年产业突破20亿元。生物制品企业以蓉生药业、远大蜀阳为代表，在国内血液制品行业占有重要地位。医疗器械领域邹学明团队创业的奥泰医疗公司，研发制造了我国第一台具有完全自主知识产权的超导磁共振医学成像系统。同时，成都高新区初步构建起“孵化+研发+产业化”的生物医药产业载体，以天府生命科技园为龙头，建成了总面积40万平方米的创新药物研发孵化载体。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;此外，成都高新区已形成了包括药物发现、药物开发、临床前评价、临床试验、中试生产等全过程的新药研发体系，建设了生物医药类公共技术平台23个。区内企业在研项目近300个，5个一类新药项目进入临床阶段。聚集该领域国家“千人计划”达到20人，四川省“千人计划”达到58人。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;“生物产业是一个特别需要积累、需要氛围、需要人才和资金的产业。我们要充分发挥成都高新区的产业优势和创新资源集聚优势，把生物医药作为未来产业发展，积极开展创新政策先行先试，着力研发和转化国际领先的科技成果，力争将生物医药打造成为新的千亿产业集群。”尹朝银说。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;据悉，接下来，成都高新区将在生物产业发展中，创建中国血液制品基地品牌，打造核医学产业高地和再生医学基地，建设智慧健康产业园，积极打造大核酸产业品牌;大力引进高层次人才及技术团队，为新药创新提供公共技术平台保障，为创新提供临床支持;高水平建设成都国际生物产业城。提供最具竞争力的政策支持，加大生物医药产业链融资支持。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;值得一提的是，今年3月14日，成都高新区管委会与双流区政府在成都签订合作协议，双方将携手共建45平方公里的成都国际生物产业城，共同推进成都生物产业发展。双方将根据生物产业现有基础、未来发展趋势及合作优势，以中古合作为主，面向全球生物医药产业资源，重点围绕生物医药、生物医学工程、大健康服务等领域，建设生物医药园、生物医学工程园、健康产业园等三大园区，构建“创新研发—中试加速—产业化”为一体的生物产业载体体系，按照能源集中供给、“三废”集中处理、环保统一、资源共享、产城一体开发模式，努力打造四川省生物产业核心聚集区和集研发生产、总部商务、生活配套于一体有国际影响力的生物产业城。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 30px 0;padding: 0;color: rgb(119, 119, 119);font-family: &amp;#39;Microsoft YaHei&amp;#39;;font-size: 12px;white-space: normal;text-indent: 28px;line-height: 28px;background-color: rgb(245, 245, 245)&quot;&gt;&lt;span style=&quot;;padding: 0px;font-family: 宋体;color: rgb(51, 51, 51);letter-spacing: 0;font-size: 14px&quot;&gt;未来五年，成都高新区在支持创新创业上将设立3个50亿元专项资金，支持领军人才和团队进区创新创业，推动院校地协同创新，聚集引进一批大企业大集团研发中心。生物医药产业作为战略产业，成都高新区将在3个50亿专项资金中切块，加大对生物医药领域的支持力度，推动生物医药领域世界500强企业、国内100强企业等设立研发中心、创新中心、工程技术中心，延揽全球生物产业顶尖人才和团队。还将设立20亿元生物产业投资母基金，整合政府和社会资本，在新药筛选、临床中后期到规模化生产等各环节，促进成果诞生和转化，加速产业化发展。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 53, 1492138254),
(11, '发生的方式', '伟乐', '', 0, '&lt;p&gt;阿所发生的法师法师法师打发发生的发生的方式的发生的发生发生的发生的发生的方式地方&lt;/p&gt;', 47, 1492138287),
(12, '腹股沟哈哈哈', '伟乐', '', 0, '&lt;p&gt;白斑病白斑病白斑病白斑病白斑病白斑病白斑病白斑病白斑病宝贝&lt;/p&gt;', 48, 1492138307),
(13, '男男女女', '伟乐', '', 0, '&lt;p&gt;并不比你男男女女男男女女男男女女男男女女男男女女&lt;/p&gt;', 53, 1492138354),
(14, '巴尔干', '伟乐', '', 0, '&lt;p&gt;面积卡卡卡卡卡卡&lt;/p&gt;', 49, 1492138372),
(15, '背后原因', '伟乐', '', 0, '&lt;p&gt;那么忙忙忙忙忙忙忙忙忙忙忙&lt;/p&gt;', 50, 1492138394);

-- --------------------------------------------------------

--
-- 表的结构 `ar_category`
--

CREATE TABLE `ar_category` (
  `cate_id` smallint(5) NOT NULL,
  `cate_name` varchar(20) NOT NULL,
  `cate_ename` varchar(20) NOT NULL COMMENT '栏目英文名称',
  `cate_pic` varchar(100) NOT NULL,
  `cate_keywords` varchar(200) NOT NULL,
  `cate_descr` text NOT NULL,
  `cate_type` tinyint(4) NOT NULL COMMENT '0封面 1列表 2产品',
  `parentid` smallint(5) NOT NULL DEFAULT '0',
  `cate_content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ar_category`
--

INSERT INTO `ar_category` (`cate_id`, `cate_name`, `cate_ename`, `cate_pic`, `cate_keywords`, `cate_descr`, `cate_type`, `parentid`, `cate_content`) VALUES
(52, '公司动态', 'gongsidongtai', '', '', '', 1, 51, ''),
(53, '公司新闻', 'gongsixinwen', '', '', '', 1, 51, ''),
(50, '创宜访谈', 'chuangyifangtan', '', '', '', 1, 49, ''),
(51, '最新动态', 'news', '', '', '', 1, 0, ''),
(47, '产品中心', 'Product', '', '', '', 1, 0, ''),
(48, '宜育康', 'yiyukang', '', '', '', 1, 47, ''),
(49, '企业风采', 'Company style', '', '', '', 0, 0, '&lt;p&gt;保守党fig噶送给i规划变更表嫂你不会换不换啊爸爸不会&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `ar_conf`
--

CREATE TABLE `ar_conf` (
  `cf_id` tinyint(4) NOT NULL,
  `cf_name` varchar(30) NOT NULL,
  `cf_ename` varchar(30) NOT NULL,
  `cf_type` varchar(20) NOT NULL,
  `cf_values` varchar(100) NOT NULL COMMENT '默认值',
  `cf_value` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ar_conf`
--

INSERT INTO `ar_conf` (`cf_id`, `cf_name`, `cf_ename`, `cf_type`, `cf_values`, `cf_value`) VALUES
(9, '当前状态', 'status', 'radio', '关闭，打开', '关闭'),
(8, '是否关闭', 'close', 'radio', '是，否', '是'),
(6, '我的网站', 'mysite', 'text', '', 'werwerwer'),
(10, '网站描述', 'sitedesc', 'textarea', '', '该网站是一个很厉害的网站');

-- --------------------------------------------------------

--
-- 表的结构 `ar_link`
--

CREATE TABLE `ar_link` (
  `li_id` smallint(6) NOT NULL,
  `li_title` varchar(100) NOT NULL,
  `li_pic` varchar(100) NOT NULL,
  `li_descr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar_admin`
--
ALTER TABLE `ar_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `ar_article`
--
ALTER TABLE `ar_article`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `ar_category`
--
ALTER TABLE `ar_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `ar_conf`
--
ALTER TABLE `ar_conf`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `ar_link`
--
ALTER TABLE `ar_link`
  ADD PRIMARY KEY (`li_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ar_admin`
--
ALTER TABLE `ar_admin`
  MODIFY `ad_id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `ar_article`
--
ALTER TABLE `ar_article`
  MODIFY `ar_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `ar_category`
--
ALTER TABLE `ar_category`
  MODIFY `cate_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- 使用表AUTO_INCREMENT `ar_conf`
--
ALTER TABLE `ar_conf`
  MODIFY `cf_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `ar_link`
--
ALTER TABLE `ar_link`
  MODIFY `li_id` smallint(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
