<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<base target="_self" />
<meta charset="UTF-8">
<title>创宜生物</title>
<link type="text/css" rel="stylesheet" href="/weile/chuangyi/Public/style/style.css" />
<script type="text/javascript" src="/weile/chuangyi/Public/style/jquery-1.8.0.min.js"></script>
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

<div id="full-screen-slider-sec">
	<div class="layout">
      <div class="page-title">
       <?php echo ($catetop["cate_name"]); ?>
      </div>
    </div> 
</div>
<div class="main">
   <div class="layout cnt2">
     <div class="left">
        <ul>
         <?php if(is_array($subs)): $i = 0; $__LIST__ = $subs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/weile/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>list<?php elseif($vo[cate_type] == 0): ?>page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>" <?php if($vo['cate_id'] == $cateself['cate_id']): ?>class="foucs"<?php endif; ?>><?php echo ($vo["cate_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
         
         
        </ul>
     </div>
     <div class="right">
        <h1>
           <div class="page">
             <a href='/weile/chuangyi/index.php'>网站首页</a> > 
             <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/weile/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>list<?php elseif($vo[cate_type] == 0): ?>page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></a><?php if($i != count($data)): ?>><?php endif; endforeach; endif; else: echo "" ;endif; ?>
           </div>
           <?php echo ($cateself["cate_name"]); ?>
        </h1>
        <div class="cnt-in">
         <div class="news-list-wimg">
           <ul>
             <li>
               <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h3> <a href="/weile/chuangyi/index.php/Home/article/index/ar_id/<?php echo ($vo["ar_id"]); ?>"><?php echo ($vo["ar_title"]); ?></a></h3>
                <p>
                <?php if($vo['ar_pic'] != ''): ?><img src="/weile/chuangyi/<?php echo ($vo["ar_pic"]); ?>" width="120" height="90" style="float:left; margin-right:15px;">
                <?php else: ?>
                暂无缩略图<?php endif; ?>
                <?php echo (mb_substr(htmlspecialchars_decode($vo["ar_content"]),0,500,'utf-8')); ?>
                <span class="list-date">
                <?php echo (date('Y-m-d',$vo["ar_time"])); ?>
                </span></p>
                
              </li><?php endforeach; endif; else: echo "" ;endif; ?>


             </ul>
         </div>
          
            <div class="pages">
              
            </div>
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
</body>
</html>