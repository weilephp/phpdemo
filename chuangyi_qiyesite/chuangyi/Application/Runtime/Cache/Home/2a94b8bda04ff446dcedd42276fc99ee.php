<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<base target="_self" />
<meta charset="UTF-8">
<title>创宜生物</title>
<link type="text/css" rel="stylesheet" href="/weile/chuangyi/Public/style/style.css" />
<link rel="stylesheet" type="text/css" href="/weile/chuangyi/Public/style/jquery.jslides.css" media="screen" />
<script type="text/javascript" src="/weile/chuangyi/Public/style/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/weile/chuangyi/Public/style/jquery.jslides.js"></script>
<script type="text/javascript" src="/weile/chuangyi/Public/style/nav.js"></script>
<script type="text/javascript" src="/weile/chuangyi/Public/style/scrolltext.js"></script>
<style>
#ScrollMe A { 
 COLOR: #444;TEXT-DECORATION: none; display:block; line-height:27px; position:relative; width:1155px;
} 
#ScrollMe A span{ position:absolute; top:0; right:0; }
</style>
</head>
<body>
<div id="header">
  <div class="layout">
    
    <div id="nav">
      <div class="nav">
        <ul>
          <li><a href="/weile/chuangyi/index.php" <?php if($flag): ?>class="header foucs"<?php endif; ?>>
                <p>网站首页</p>
                <p class="en">Home</p>
              </a>
          </li>
            <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mnav"><a href="/weile/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>list<?php elseif($vo[cate_type] == 0): ?>page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>" ><p><?php echo ($vo["cate_name"]); ?></p><p class='en'><?php echo ($vo["cate_ename"]); ?></p></a>
                 <ul class="smenu">
                  <?php $_result=getsub($vo['cate_id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                     <a href="/weile/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>list<?php elseif($vo[cate_type] == 0): ?>page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="logo">
      <a href="/"></a>
    </div>
  </div>
</div>
<div id="full-screen-slider">
	<ul id="slides">
       <li style="background:url('/weile/chuangyi/Public/images/1-150H415361I41.jpg') no-repeat center center"><a href="javascript:void(0)">首页焦点图2-科研</a></li>
<li style="background:url('/weile/chuangyi/Public/images/1-150H32313250-L.jpg') no-repeat center center"><a href="javascript:void(0)">首页焦点图1-科技为先..</a></li>

	</ul>
</div>
<div class="notice">
  <div class="layout"> 
   <div id="ScrollMe" style="overflow: hidden; height: 27px;">
      <a href="/news/company/2016/0324/35.html">肖斯达克成都高新大核酸研究院揭牌成立 <span style="font-size:11px; ">2016-03-24</span></a>
<a href="/news/international-exchange/2015/1130/32.html">荷兰林堡省省长博文斯率团访问创宜生物 <span style="font-size:11px; ">2015-12-01</span></a>
<a href="/news/international-exchange/2015/0929/29.html">我公司董事长关祥乾先生率团赴美国波士顿考察 <span style="font-size:11px; ">2015-09-29</span></a>
<a href="/news/international-exchange/2015/0929/30.html">诺贝尔化学奖获得者获得者阿达·尤纳斯教授率专家团访问创宜生物 <span style="font-size:11px; ">2015-09-28</span></a>
<a href="/news/company/2015/0827/27.html">安徽省委常委、副省长陈树隆一行莅临创宜考察指导 <span style="font-size:11px; ">2015-08-27</span></a>

     
   </div>
  
  </div>
</div>
<div class="main">
   <div class="layout cnt">
     <div class="left">
       <h2><a href="/plus/list.php?tid=1">+</a>关于我们</h2>
       <div class="index-about">
       <img alt="" src="/weile/chuangyi/Public/images/1-150HG04215915.jpg" style="width: 891px; height: 207px;" /><
        成都创宜生物科技有限公司创立于2010年初春，是一家具有自主知识产权和掌握核心技术的集临床体外诊断产品的研发、 生产和销售为一体的高科技生物技术公司，也是四川省高科技产业化协会副理事...</div>
     </div>
     <div class="mid">
       <h2><a href="/plus/list.php?tid=2">+</a>新闻动态</h2>
       <ul class="indexnews">
        <li>
           <a href="/news/company/2016/0324/35.html"><b>01</b>肖斯达克成都高新大核酸研究院揭牌成立</a>
           <p>在3月19日的 创业天府菁蓉汇生物医药专场中 ，肖斯达克成都高新大核酸研究院正式揭牌成立。此前，去年‪11月16日‬，成都高新区管...</p>
         </li>
<li>
           <a href="/news/company/2015/1228/34.html"><b>02</b>《经济日报》刊登创宜生物科技公司董事长关祥乾先生人物专访</a>
           <p>创宜生物科技有限公司： 老男孩的创业梦 本报记者 刘 畅 与人们印象中的生物科技领域创业者不同，年近50岁的创宜生物科技有限公司...</p>
         </li>

       </ul>
     </div>
     <div class="right">
        <h2><a href="/plus/list.php?tid=13">more</a>创宜生物宣传片</h2>
        <div class="flash">
            <EMBED style=" margin: 0 auto; width:360px; height: 198px";   
            src="http://player.youku.com/player.php/sid/XMTI5NDQ3OTg0NA==/v.swf"   
            quality= "high"   
            wmode="transparent"  
            pluginspage="http://www.macromedia.com/go/getflashplayer"  
            type="application/x-shockwave-flash">  
            
           
        </div>
     </div>
     <div class="clr"></div>
   </div>
</div>
<div id="footer">
  <div class="layout footer">
    <div class="footer-info">
      <p>Copyright &copy; 2015  Chengdu  origissay  Diagnostics,LTD     技术支持：博海天韵 <a href=http://www.dedecms.com target='_blank'></a>  蜀ICP12007941 </p>
    </div>
    <div class="footer-nav">
     <ul>
        <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <a href="/weile/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>list<?php elseif($vo[cate_type] == 0): ?>page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>">
              <?php echo ($vo["cate_name"]); ?>
              </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
            
         
      
     </ul>
    </div>
    
    <div class="clr"></div>
  </div>
</div>
<script>new srcMarquee("ScrollMe",0,1,808,27,3,5000,1000,27)</script> 
</body>
</html>