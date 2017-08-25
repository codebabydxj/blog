-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-30 14:07:08
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `apass` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(10, '编程', 9),
(12, '美文', 0),
(13, '故事集', 0),
(14, '技术类', 0),
(15, '新闻', 0),
(16, '娱乐', 0);

-- --------------------------------------------------------

--
-- 表的结构 `dianzan`
--

CREATE TABLE IF NOT EXISTS `dianzan` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `dianzan`
--

INSERT INTO `dianzan` (`did`, `uid`, `sid`) VALUES
(30, 34, 30),
(31, 34, 26),
(32, 34, 35),
(33, 34, 33),
(34, 33, 35),
(35, 33, 33),
(36, 33, 30),
(37, 33, 26),
(38, 35, 35),
(39, 36, 35),
(40, 36, 36),
(41, 35, 38),
(42, 35, 33),
(43, 36, 38),
(44, 37, 38),
(45, 37, 39);

-- --------------------------------------------------------

--
-- 表的结构 `guanzhu`
--

CREATE TABLE IF NOT EXISTS `guanzhu` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL COMMENT '谁关注',
  `uid2` int(11) NOT NULL COMMENT '关注谁',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `guanzhu`
--

INSERT INTO `guanzhu` (`gid`, `uid1`, `uid2`) VALUES
(1, 36, 34),
(2, 35, 36),
(3, 36, 35),
(4, 37, 36);

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE IF NOT EXISTS `love` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `love`
--

INSERT INTO `love` (`lid`, `uid`, `sid`) VALUES
(1, 35, 38),
(2, 36, 36);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL COMMENT '自己',
  `uid2` int(11) NOT NULL COMMENT '对方',
  `sid` int(11) NOT NULL COMMENT '哪篇文章',
  `pid` int(11) NOT NULL COMMENT '留言还是回复',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mcon` varchar(2000) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`mid`, `uid1`, `uid2`, `sid`, `pid`, `mtime`, `mcon`) VALUES
(2, 35, 33, 26, 0, '2017-05-14 06:25:32', '生命就像大海，如果没有狂风暴雨的袭击，生命就显得枯燥乏味。'),
(3, 35, 35, 26, 2, '2017-05-14 07:02:16', '一路走来，太累了，停下来歇歇吧，多休息一会，是为了走更远的路。'),
(4, 35, 36, 38, 0, '2017-05-14 14:02:09', '今天日子很短。'),
(5, 35, 35, 38, 4, '2017-05-14 14:03:52', '我感觉很长'),
(6, 35, 35, 38, 4, '2017-05-14 14:07:09', '嗷嗷嗷'),
(7, 33, 36, 38, 0, '2017-05-14 14:12:45', '呀'),
(8, 36, 36, 38, 0, '2017-05-14 14:16:33', '还不错'),
(9, 36, 36, 38, 0, '2017-05-14 14:19:28', ''),
(10, 35, 35, 36, 0, '2017-05-21 13:56:11', '今日事，今日毕。'),
(11, 35, 35, 36, 10, '2017-05-21 13:56:54', '坚持是生存的一项技能。'),
(12, 37, 36, 38, 0, '2017-05-26 10:05:43', '你好'),
(13, 37, 37, 38, 12, '2017-05-26 10:06:00', '一般');

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(255) NOT NULL,
  `scon` varchar(20000) NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `good` int(11) NOT NULL DEFAULT '0',
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`sid`, `stitle`, `scon`, `cid`, `uid`, `status`, `hits`, `good`, `stime`) VALUES
(26, '陌上花开，可缓缓归矣', '<ul class="text list-paddingleft-2" style="list-style-type: none;"><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">“陌上花开，可缓缓归矣。” 含义：（夫人），田间阡陌上的花开了，你可以一边赏花，一边慢慢地回来。</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">“陌上花开，如果没有悄然伫立阡陌并为陌上风情所陶醉的人，那么花开也寂寞，风情也苍白....”喜欢这句话，是因为看了忍冬的作品《陌上花开缓缓归》</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">&nbsp; 阳春三月，风和日暖，信步城外，看阡陌之上的杨柳依依，野花绚烂，身心不由得轻爽而浪漫。“三月风情陌上花”，古远的诗句似乎 &nbsp; 随风从天边飘来，从历史的深处飘来，拂过阡陌，袭上心头，诗是属于清乾嘉诗人赵翼的，可昂首远望，眼前的陌上风情却是不折不扣 &nbsp; 的现代，由眼帘入心扉。</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px; text-align: center;"><img src="/ueditor/php/upload/image/20170513/1494608368999154.jpg" title="1494608368999154.jpg" alt="text02.jpg"/></p><ul class="text list-paddingleft-2" style="list-style-type: circle;"><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">漫步陌上，心情是诗意的那种，优雅而散淡，不惹匆促，只因陌上花开；花是自然的那种，朴素而恬淡，不落尘俗。“三月风情陌上花”，是花在其中生命得以璀璨，人在其中心情得以畅然的一种意境。三月陌上花，让人爱让人痴，恍惚人的骨子里头都沉淀了花的影子，花的风韵。</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">陌上花开，如果没有了从俗累的生活中走出来，悄然伫立阡陌并为陌上风情所陶醉的人，那么花开也寂寞，风情也苍白。于是，一句“陌上花开，可缓缓归矣”不知被多少人吟诵了多少遍。人归缓缓，那花便有灵性，便开得执著，陌上风情也被撩拨得浓郁而热烈。</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">缓缓归，缓缓归，披一袭“三月风情”，再采一束“陌上花”，缓缓归。</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">缓缓归矣，我心已是陌上花开。</p></ul><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;"><br/></p></ul>', 12, 33, 3, 136, 3, '2017-05-12 16:59:59'),
(30, '岁月留痕——我的2010', '<ul class="text list-paddingleft-2" style="list-style-type: none;"><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">A面——岁月留痕之时光</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">每逢新旧年交替时候，我就被笼罩在一股茫然的思绪里，逃也逃不脱，避也避不开，唯有让心事在静静流逝的时光里苍茫成河。</p><p style="margin-top: 0px; margin-bottom: 10px; padding: 0px; line-height: 24px;">是从什么时候开始的呢，我又变得如此感时伤怀？我很羡慕那些在年终盘点总结的人们，过去的一年于他们来说，是大刀阔斧的一年，是硕果累累的一年。再不济的话，也是豪情万丈的一年。而在我那逝去的时光里，平静如水，不起一丝波澜，一年又一年。我没有盘点，因为我没有波澜壮阔；我不会去总结，因为我的总结从来就没有逼近我的心灵。我知道这于我来说，显得多么无厘头。</p></ul><p style="text-align: center;">&nbsp; &nbsp; &nbsp;&nbsp;<img src="/ueditor/php/upload/image/20170513/1494609071122343.jpg" title="1494609071122343.jpg" alt="text01.jpg"/></p><p>&nbsp; &nbsp; &nbsp; 我喜欢这样安静地坐下来，想一些似有若无的心事。尽量不去想那些飞逝的时光，尽量不去想那些形色匆忙的脚步，似乎是在害怕，在这 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 高速运转的时空里，自己有一天会化作一堆虚无。还记得那一部《岁月神偷》的电影吗？真是要感谢来自香港的导演罗启锐，影片给我们芸 &nbsp; &nbsp; &nbsp; 芸众生留下太多的唏嘘。在如水一般逝去的时光里，皱纹爬上你的眼角，白发蔓延我的双鬓。岁月才是最好的神偷，偷走了我的青春和你的 &nbsp; &nbsp; &nbsp; 美好。</p>', 12, 33, 3, 11, 3, '2017-05-12 17:11:15'),
(31, '心灵鸡汤：一片树叶', '<p style="text-indent: 2em;"><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;">人应当谦虚地看待自然和风景。为此固然有必要出门旅行，同大自然直接接触，或深入异乡，领略一下当地人们的生活情趣。然而，就是我们住地周围，哪怕是庭院的一木一叶，只要用心观察，有时也能深刻地领略到生命的涵义。</span><br/></p><p style="text-indent: 2em;"><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">我注视着院子里的树木，更准确地说，是在凝望枝头上的一片树叶，而今，它泛着美丽的绿色，在夏日阳光里闪耀着光辉。我想起当它还是幼芽的时候，我所看到的情景。那是去年初冬，就在这片新叶尚未吐露的地方，吊着一片干枯的黄叶，不久就脱离了枝条飘落到地上。就在原来的枝丫上，你这幼小的坚强的嫩芽，生机勃勃地诞生了。</span></span></p><p style="text-indent: 2em;"><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">任凭寒风猛吹，任凭大雪纷纷，你默默等待着春天，慢慢地在体内积攒着力量。一日清晨，微雨乍晴，我看到树枝上缀满粒粒珍珠，这是一枚枚新生的幼芽凝聚着雨水闪闪发光。于是我感到百草都在催芽，春天已经临近了。</span></span></span></p><p><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">春天终于来了，万木高高兴兴地吐翠了。然而，散落在地面上的陈叶，早已腐烂化作泥土了。</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">　　你迅速长成了一片嫩叶在初夏的太阳下浮绿泛金。对于柔弱的绿叶来说，初夏，既是生机旺盛的季节，也是最易遭受害虫侵蚀的季节。幸好，你平安地迎来了暑天，而今正同伙伴们织成浓密的青荫，遮蔽着枝头。</span></span></span></span></p><p style="text-indent: 2em;"><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">我预测着你的未来。到了仲夏，鸣蝉将在你的浓荫下长啸，等一场台风袭过，那吱吱蝉鸣变成了凄切的哀吟，天气也随之凉爽起来。蝉声一断，代之而来的是树根深处秋虫的合唱，这唧唧虫声，确也能为静寂的秋夜增添不少雅趣。</span></span></span></span></span></p><p style="text-indent: 2em;"><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">你的绿意，不知不觉黯然失色了，终于变成了一片黄叶，在冷雨里垂挂着。夜来秋风敲窗，第二天早晨起来，树枝上已经消失了你的踪影。只看到你所在的那个枝丫上又冒出了一个嫩芽。等到这个幼芽绽放绿意的时候，你早已零落地下，埋在泥土之中了。</span></span></span></span></span></p><p><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">这就是自然，不光是一片树叶，生活在世界上的万物，都有一个相同的归宿。一叶坠地，绝不是毫无意义的。正是这片片黄叶，换来了整个大树的盎然生机。这一片树叶的诞生和消亡，正标志着生命在四季里的不停转化。</span></span></span></span></span></p><p style="text-indent: 2em;"><span style="background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">同样，一个人的死关系着整个人类的生。死，固然是人人所不欢迎的。但是，只要你珍爱自己生命，同时也珍爱他人的生命，那么，当你生命渐尽，行将回归大地的时候，你应当感到庆幸。这就是我观察庭院里的一片树叶所得的启示。不，这是那片树叶向我娓娓讲叙的生死轮回的要谛。</span></span></span></span></span></span></p>', 13, 34, 1, 0, 0, '2017-05-13 02:01:21'),
(32, '朋友是人生最大的财富', '<p style="text-indent: 2em;"><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">每当夜深人静时,我们仰望星空,总会想起过去的美好回忆.人的一生,每个人都离不开朋友.每个人都有自己的朋友.多个朋友多条路,有朋友是是财富.世上的东西,有些失去之后就难以得到.友谊如此,缘分如此,机会如此,感情如此.要不然还有什么值得珍惜.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; &nbsp;有一种朋友,需要天天见面,事事关心,或许,还会常常摩擦.为了“圆融相处”让自己的缺口被对方填满,更适合“腻”在一起.这种朋友叫“依赖”……&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; &nbsp;另一种朋友，很长一段时间见一面，像周期性的抛物线。今年谈去年见面的情景或年年谈第一次交叉线的悸动，百说不厌。冲突，从来没有存在过，思念，却习惯性的出现在某个季节。这种朋友叫做“惯性”&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp;</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; &nbsp;也有朋友，很少见面。靠默契，灵通,第六感,总给对方需要的激动,感动,甚至心动的感觉.哪怕只有一个问候的电话,都令人兴奋不己。这类朋友是“缘定”……&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; &nbsp;朋友，不一定合情合理,但一定知心.不一定形影不离,但一定心心相惜.不一定锦上添花,但一定雪送炭,不一定常常联络,但一定放在心上.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; &nbsp;朋友如伞,在最需要的时候陪伴左右,你就像冬日的阳光,总在最寒冷的时候送来温暖与关怀!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/><span style="font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; &nbsp;朋友是人生最大的财富!我真诚的祝福你:朋友! &nbsp;&nbsp;</span></p>', 13, 34, 2, 0, 0, '2017-05-13 02:03:57'),
(33, '心灵鸡汤：一片树叶', '<p style="text-indent: 2em;">人应当谦虚地看待自然和风景。为此固然有必要出门旅行，同大自然直接接触，或深入异乡，领略一下当地人们的生活情趣。然而，就是我们住地周围，哪怕是庭院的一木一叶，只要用心观察，有时也能深刻地领略到生命的涵义。</p><p><br/></p><p style="text-indent: 2em;">我注视着院子里的树木，更准确地说，是在凝望枝头上的一片树叶，而今，它泛着美丽的绿色，在夏日阳光里闪耀着光辉。我想起当它还是幼芽的时候，我所看到的情景。那是去年初冬，就在这片新叶尚未吐露的地方，吊着一片干枯的黄叶，不久就脱离了枝条飘落到地上。就在原来的枝丫上，你这幼小的坚强的嫩芽，生机勃勃地诞生了。</p><p><br/></p><p style="text-indent: 2em;">任凭寒风猛吹，任凭大雪纷纷，你默默等待着春天，慢慢地在体内积攒着力量。一日清晨，微雨乍晴，我看到树枝上缀满粒粒珍珠，这是一枚枚新生的幼芽凝聚着雨水闪闪发光。于是我感到百草都在催芽，春天已经临近了。</p><p><br/></p><p style="text-indent: 2em;">春天终于来了，万木高高兴兴地吐翠了。然而，散落在地面上的陈叶，早已腐烂化作泥土了。</p><p style="text-indent: 2em;">你迅速长成了一片嫩叶在初夏的太阳下浮绿泛金。对于柔弱的绿叶来说，初夏，既是生机旺盛的季节，也是最易遭受害虫侵蚀的季节。幸好，你平安地迎来了暑天，而今正同伙伴们织成浓密的青荫，遮蔽着枝头。</p><p><br/></p><p style="text-indent: 2em;">我预测着你的未来。到了仲夏，鸣蝉将在你的浓荫下长啸，等一场台风袭过，那吱吱蝉鸣变成了凄切的哀吟，天气也随之凉爽起来。蝉声一断，代之而来的是树根深处秋虫的合唱，这唧唧虫声，确也能为静寂的秋夜增添不少雅趣。</p><p><br/></p><p style="text-indent: 2em;">你的绿意，不知不觉黯然失色了，终于变成了一片黄叶，在冷雨里垂挂着。夜来秋风敲窗，第二天早晨起来，树枝上已经消失了你的踪影。只看到你所在的那个枝丫上又冒出了一个嫩芽。等到这个幼芽绽放绿意的时候，你早已零落地下，埋在泥土之中了。</p><p><br/></p><p style="text-indent: 2em;">这就是自然，不光是一片树叶，生活在世界上的万物，都有一个相同的归宿。一叶坠地，绝不是毫无意义的。正是这片片黄叶，换来了整个大树的盎然生机。这一片树叶的诞生和消亡，正标志着生命在四季里的不停转化。</p><p><br/></p><p style="text-indent: 2em;">同样，一个人的死关系着整个人类的生。死，固然是人人所不欢迎的。但是，只要你珍爱自己生命，同时也珍爱他人的生命，那么，当你生命渐尽，行将回归大地的时候，你应当感到庆幸。这就是我观察庭院里的一片树叶所得的启示。不，这是那片树叶向我娓娓讲叙的生死轮回的要谛。</p><p><br/></p>', 13, 34, 3, 5, 3, '2017-05-13 02:06:17'),
(35, '朋友是人生最大的财富', '<p style="text-indent: 2em;">每当夜深人静时,我们仰望星空,总会想起过去的美好回忆.人的一生,每个人都离不开朋友.每个人都有自己的朋友.多个朋友多条路,有朋友是是财富.世上的东西,有些失去之后就难以得到.友谊如此,缘分如此,机会如此,感情如此.要不然还有什么值得珍惜. &nbsp; &nbsp; &nbsp;</p><p style="text-indent: 2em;">有一种朋友,需要天天见面,事事关心,或许,还会常常摩擦.为了“圆融相处”让自己的缺口被对方填满,更适合“腻”在一起.这种朋友叫“依赖”…… &nbsp; &nbsp; &nbsp; &nbsp;<span style="text-indent: 2em;">另一种朋友，很长一段时间见一面，像周期性的抛物线。今年谈去年见面的情景或年年谈第一次交叉线的悸动，百说不厌。冲突，从来没有存在过，思念，却习惯性的出现在某个季节。这种朋友叫做“惯性” &nbsp; &nbsp; &nbsp; &nbsp;</span></p><p style="text-indent: 2em;">也有朋友，很少见面。靠默契，灵通,第六感,总给对方需要的激动,感动,甚至心动的感觉.哪怕只有一个问候的电话,都令人兴奋不己。这类朋友是“缘定”…… &nbsp; &nbsp; &nbsp;</p><p style="text-indent: 2em;">朋友，不一定合情合理,但一定知心.不一定形影不离,但一定心心相惜.不一定锦上添花,但一定雪送炭,不一定常常联络,但一定放在心上. &nbsp; &nbsp; &nbsp;</p><p style="text-indent: 2em;">朋友如伞,在最需要的时候陪伴左右,你就像冬日的阳光,总在最寒冷的时候送来温暖与关怀! &nbsp; &nbsp; &nbsp;</p><p style="text-indent: 2em;"><span style="text-indent: 2em;">朋友是人生最大的财富!我真诚的祝福你:朋友!</span></p><p style="text-indent: 2em;"><br/></p>', 13, 34, 3, 13, 4, '2017-05-13 02:13:34'),
(36, '“澳门故事”为何精彩', '<p style="text-indent: 2em;">中共中央政治局常委、全国人大常委会委员长张德江8日至10日视察澳门特别行政区，并对澳门“一国两制”的成功实践给予了高度评价。“一国两制”下的“澳门故事”为何精彩？其成功经验可以概括为：准确贯彻“一国两制”方针和澳门基本法；切实落实中央全面管治权和特区行政主导体制；务实进取，集中精力积极推进经济发展和民生改善；大力弘扬中华优秀文化和爱国爱澳主流价值。</p><p><br/></p><p>　　澳门坚守“一国”之本，善用“两制”之利。澳门回归以来，特区政府和社会各界的国家意识不断增强，坚守“一国”之本的自觉性不断增强，中央全面管治权在特区得到充分尊重和维护。澳门准确贯彻“一国两制”方针和基本法，在坚守“一国”之本的前提下，依法行使高度自治权，始终弘扬爱国爱澳、民主和谐的主流社会意识，始终保持繁荣稳定的大局。“一国两制”方针和澳门基本法得到了坚决贯彻执行。</p><p><br/></p><p>　　澳门切实落实了特区政府行政主导体制。按照基本法的规定，特区政府依法行使中央政府授予的行政权、立法权和独立的司法权、终审权，维护了基本法规定的行政主导的政治体制，保证了特区政权机构的平稳有序地运作。澳门行政机关和立法机关相互配合，相互制约，并重在配合，真正实现了行政主导。澳门不搞泛政治化，没有无休无止无谓的争拗，大家集中精力，全力以赴地抢抓国家发展机遇，发挥澳门独特优势发展经济并改善民生。</p><p><br/></p><p>　　澳门特区政府务实进取，集中精力积极推进经济发展和民生改善。澳门特区政府立足当前，谋划长远，采取了一系列有效措施推动经济民生发展。澳门在回归后迎来了历史上发展最快的时期，本地生产总值、特区政府的财政收入持续大幅度增长，同时，失业率不断下降，市民福利不断提高。从1999年回归祖国至2015年，澳门人均GDP由1.5万美元增至7.2万美元。2014年12月，习主席视察澳门并出席庆祝澳门回归祖国15周年大会时，高度赞扬澳门“路子对、政策好、身段灵、人心齐”，赞扬澳门“小桌子上能唱大戏”。近年来，澳门特区政府致力推动经济适度多元化发展，积极打造中葡商贸合作服务平台，把握国家“十三五”规划和“一带一路”机遇，着力推进世界旅游休闲中心和中国与葡语系国家项目服务平台建设。目前，澳门第一个五年发展规划开局良好，经济持续向好的趋势明显。</p><p><br/></p><p>　　在澳门，爱国爱澳理念深入人心，“祖国好，澳门才会更好”是澳门社会凝聚的共识。回归以后，澳门大力弘扬中华优秀文化和爱国爱澳主流价值，特区政府和社会各界高度重视“新生代”的培养，通过各种途径让更多的青年人在参与澳门发展的进程中大显身手，为澳门未来的发展提供有力支撑，不断壮大爱国爱澳力量。澳门一家研究机构的多次民意调查显示，“一国两制”和爱国爱澳始终稳居澳门社会核心价值观的前三位；超过八成的被调查者为自己是中国公民而自豪。澳门是个年轻的城市，３０岁以下的年轻人约占人口总数的一半。为此，澳门推出了“千人计划”，遴选优秀青年到内地学习交流，拓展视野，增长才干，提升综合素质，使爱国爱澳精神能够继续得到传承。</p><p><br/></p><p>　　当前，澳门特区面临一些新情况新问题，经济社会发展对澳门特区政府的管治能力提出了更高要求。澳门特区政府应认真贯彻落实习近平主席关于澳门工作重要指示精神，同心同德，再接再厉，继续坚持依法治澳，努力实现良政善治，用好中央各项惠澳政策，把澳门特别行政区建设得更好，为“一国两制”成功实践再立新功，续写更加精彩的“澳门故事”。（中国经济网记者：毛铁）</p><p><br/></p>', 15, 35, 3, 11, 1, '2017-05-14 01:10:43'),
(37, '娱乐常在，永驻青春。', '<p>在一条道路上战斗到底。</p>', 16, 36, 1, 0, 0, '2017-05-14 02:56:06'),
(38, '经营好自己一生中的三天', '<p style="text-indent: 2em;">人生到底有多少天？不同的人有不同的答案，但我看人的一生无一例外地只有三天：昨天、今天、明天。经营好这三天，就经营好了一生。</p><p style="text-indent: 2em;"><br/></p><p style="text-indent: 2em;">昨天的日子很长，说不清有多少天，但不管有多少天，也不管是受到挫折，还是取得辉煌，都办能代表过去，不能代表将来。比如昨天贫困潦倒的人将来可能会变成富翁；昨天锦衣华食的人将来可能沦为乞人；昨天打工的人将来可能会变成老板。这就是三十年河东三十年河西。世上没有永远的胜利，也没有永远的失败，胜利和失败在合适的条件下是能够转化的。因此，我们不必为昨天的挫折而萎靡不振，也不必为昨天的辉煌而狂妄自大。只有把过去的挫折和辉煌都作为今天的垫脚石，才能攀登美好的明天。</p><p><br/></p><p style="text-indent: 2em;">今天的日子很短。而且正在自己的脚下以秒计算地缩短。今天是昨天和明天的接力处，接力棒交得好，便会走向辉煌的明天；接力出问题，便会前功尽弃。因此，面对今天，我们不要总是怀念过去，过去的就让它过去了，只有从零开始，脚踏实地，全身心地经营好今天，才会结出丰硕的果实。今天的事一定要今天完成，绝不能推到明天。如果总是面对今天望明日，明日何其多，明日的明日便是人生的尽头了，结果不但今天没有经营好，明天也悄悄地溜走了。</p><p><br/></p><p style="text-indent: 2em;">明天的日子还有多长？谁也说不清。明天是辉煌，还是落败？谁也道不明。明天既向我们显示机遇，又向我们发出挑战。明天的希望是美好的，但路途绝不平坦，到处布满荆棘。但不管怎样，有一点是可以肯定的，那就是花好月圆的明天只接纳奋斗不息者。</p><p><br/></p><p style="text-indent: 2em;">因此，我们只有善于汲取昨天的经验和教训，利用今天做好新跨越的准备，斗志昂扬地去挑战明天，才能为人生画上一个圆满的句号。</p><p><br/></p>', 12, 36, 3, 91, 3, '2017-05-14 04:12:55'),
(39, '陈珊', '<p>你是最棒的~~~！！</p>', 15, 37, 3, 1, 1, '2017-05-26 10:06:41');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(32) NOT NULL,
  `bname` varchar(255) NOT NULL COMMENT '姓名',
  `sex` int(2) NOT NULL COMMENT '性别',
  `contact` varchar(255) NOT NULL COMMENT '联系方式',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `introduce` varchar(1000) NOT NULL COMMENT '个人简介',
  `photo` varchar(255) NOT NULL DEFAULT 'http://127.0.0.1/mvc/static/images/bjt.jpg',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `bname`, `sex`, `contact`, `email`, `introduce`, `photo`) VALUES
(33, 'xiaojie', 'd07693fbb5cf93628e3c1442ebe0264e', '', 0, '', '', '', 'http://127.0.0.1/mvc/upload/2017-05-12/1494522864timg.jpg'),
(34, '一匹脱缰的野马', 'fcea920f7412b5da7be0cf42b8c93759', '', 0, '', '', '', 'http://127.0.0.1/mvc/static/images/timgs.jpg'),
(35, '给我个牙签戳地球', 'e10adc3949ba59abbe56e057f20f883e', '小笑', 1, '18823446566', '123456789@qq.com', '我会为了自己梦想一直坚持下去', 'http://127.0.0.1/mvc/static/images/bjt.jpg'),
(36, '我是一只小小鸟', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', '', '', 'http://127.0.0.1/mvc/upload/2017-05/1494771371a.jpg'),
(37, 'chenshan', 'e10adc3949ba59abbe56e057f20f883e', '陈珊', 2, '111111111', '1111111111', '111111', 'http://127.0.0.1/mvc/static/images/bjt.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
