<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>合肥市食品药品稽查支队</title>
<link href="/Jczd/Public/stylesheets/app/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/Jczd/Public/stylesheets/app/header.css" />
<link rel="stylesheet" type="text/css" href="/Jczd/Public/stylesheets/app/global.css" />
<script type="text/javascript" src="/Jczd/Public/javascripts/app/banner1.js"></script>
</head>
<body>
<!--top begin-->
<div class="top">
 <div class="wrap">
  <span class="fl">合肥市食品药品稽查支队</span>
 </div>
</div>

<!--top end-->
<!--header begin-->
<div class="header">
 <div class="wrap">
  
  <div class="search_box">
   <a href="#" title="" target="_blank"><img src="/Jczd/Public/images/app/logo.jpg" width="1004px" height="173px"  alt="" class="fl"/></a>
      
   </div>
   <div class="cb"></div>
  </div>
 </div>

 <div class="nav">
  <div class="wrap">
   <ul class="nav_left">
    <li><a href="<?php echo U('Index/index');?>">首 页</a></li>
    <li><a href="<?php echo U('Function/index');?>" title="">机构职能</a></li>
    <li><a href="<?php echo U('Info/index');?>" title="">信息公开</a></li>
    <li><a href="<?php echo U('Report/index');?>" title="">抽验报告</a></li>
    <li><a href="<?php echo U('News/index');?>" title="">食品药品监管新闻</a></li>
    <li><a href="<?php echo U('Notice/index');?>" title="">文件通知</a></li>
    <li><a href="<?php echo U('Policy/index');?>" title="">政务动态</a></li>
   </ul>
   <ul class="nav_right">
    <li><a href="#" onclick="alert('此功能施工中...')"title="">加入收藏夹</a><span>|</span></li>
    <li><a  href="#" onclick="alert('此功能施工中...')" title="">联系我们</a></li>
    
   </ul>
  </div>
 </div>
</div>
<!--header end-->
<div id="container">
<div class="content">
   <div class="clear"></div>
   <div id="test">
<!--      <?php if(is_array($function)): foreach($function as $key=>$v): ?><h1><?php echo ($v["title"]); ?></h1>
      <h2><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></h2>
      <?php echo ($v["content"]); endforeach; endif; ?> -->
   </div>
   <div class="content_left">
      <div class="left_top">
       <div class="left_top_left">
        <div id="fader">
         <ul>
          <li><a href="content/content_1_3.html" title=""><img src="/Jczd/Public/images/app/ct13.jpg" width="372px" height="242px" alt="奥巴马致电胡锦涛 表示珍视两人所作共同努力"></a></li>
          <li><a href="content/content_2_6.html" title=""><img src="/Jczd/Public/images/app/ct26.jpg" width="372px" height="242px" alt="李克强：中国将全面深化改革扩大开放"></a></li>
          <li><a href="content/content_3_6.html" title=""><img src="/Jczd/Public/images/app/ct36.jpg" width="372px" height="242px" alt="新华网评：改革，唯一和最好的选择"></a></li>
          <li><a href="content/content_4_5.html" title=""><img src="/Jczd/Public/images/app/ct45.jpg" width="372px" height="242px" alt="解读生育新政：单独二胎，生？还是不生？"></a></li>
          <li><a href="http://v.ifeng.com/news/mainland/201311/01b249a6-5c86-4970-8152-4a5525cd562a.shtml" title=""><img src="/Jczd/Public/images/app/ct6.jpg" width="372px" height="242px" alt="[文汇报] 曝三中全会将划最严生态红线 逾线官员将被问责"></a></li>
        </ul>
      </div><!--fader(banner) end-->
      <script type="text/javascript" src="/Jczd/Public/javascript/app/banner2.js"></script> 
      <div class="menu">
       <h1>信息公开<a class="more" href="" title="">更多>></a></h1>
       <div class="clear"></div>
       <div class="list">
        <ul>
         <?php if(is_array($info)): foreach($info as $key=>$v): ?><li><a href="<?php echo U('Index/handleArticle',array('type'=>'info','id'=>$v['id']));?>" title=""><?php echo ($v["title"]); ?><span class='fr'><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></span></a></li><?php endforeach; endif; ?>
      </ul>
    </div><!--list end-->
  </div><!--scdt end-->
  <div class="menu">
   <h1>食品药品监管新闻<a class="more" href="" title="">更多>></a></h1>
   <div class="clear"></div>
   <div class="list">
    <ul>
      <?php if(is_array($news)): foreach($news as $key=>$v): ?><li><a href="<?php echo U('Index/handleArticle',array('type'=>'news','id'=>$v['id']));?>" title=""><?php echo ($v["title"]); ?><span class='fr'><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></span></a></li><?php endforeach; endif; ?>
    </ul>  
  </div>      
</div><!--hyaq end-->
</div><!--top_left_zuo end-->

<div class="left_top_right">
  <div class="menu">
    <h1>机构职能<a class="more" href="" title="" tar>更多>></a></h1>
    <div class="clear"></div>
    <div class="list">
      <ul>                   
        <?php if(is_array($function)): foreach($function as $key=>$v): ?><li><a href="<?php echo U('Index/handleArticle',array('type'=>'function','id'=>$v['id']));?>" title=""><?php echo ($v["title"]); ?><span class='fr'><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></span></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
  </div><!--hyyw end-->
  <div class="menu">
    <h1>抽验报告<a class="more" href="" title="">更多>></a></h1>
    <div class="clear"></div>
    <div class="list">
      <ul>
        <?php if(is_array($report)): foreach($report as $key=>$v): ?><li><a href="<?php echo U('Index/handleArticle',array('type'=>'report','id'=>$v['id']));?>" title=""><?php echo ($v["title"]); ?><span class='fr'><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></span></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
  </div><!--hyfx end-->
  <div class="menu">
   <h1>文件通知<a class="more" href="" title="">更多>></a></h1>
   <div class="clear"></div>
   <div class="list">
    <ul>                    
      <?php if(is_array($notice)): foreach($notice as $key=>$v): ?><li><a href="<?php echo U('Index/handleArticle',array('type'=>'notice','id'=>$v['id']));?>" title=""><?php echo ($v["title"]); ?><span class='fr'><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></span></a></li><?php endforeach; endif; ?>                       
    </ul>
  </div><!--list end-->
</div><!--dfdt end-->

</div><!--top_left_you end-->
      </div><!--left_top end-->
     
   </div><!--content_left end-->
   <div class="content_right">
      <div class="rdsp">
        <h1>热点视频</h1>
        <ul>
            <li><a href="http://news.xinhuanet.com/video/2013-11/19/c_125728773.htm" title="" target="_blank"><img src="/Jczd/Public/images/app/rdsp.jpg" width="108px" height="110px" alt="" /><span>习近平:宣讲要讲全、讲透、讲实</span></a></li>
            <li><a href="http://news.xinhuanet.com/video/2013-11/19/c_125725627.htm" title="" target="_blank"><img src="/Jczd/Public/images/app/rdsp.jpg" width="108px" height="110px" alt="" /><span>三中全会《决定》诞生记</span></a></li>
            <li><a href="http://news.xinhuanet.com/video/2013-11/21/c_125740204.htm" title="" target="_blank"><img src="/Jczd/Public/images/app/rdsp.jpg" width="108px" height="110px" alt="" /><span>驻华使节解读十八届三中全会精神</span></a></li>
            <li><a href="http://news.xinhuanet.com/video/2013-11/20/c_125735659.htm" title="" target="_blank"><img src="/Jczd/Public/images/app/rdsp.jpg" width="108px" height="110px" alt="" /><span>政协十二届常委会第三次会议闭幕</span></a></li>
        </ul>
      </div><!--rdsp end-->
           <div class="rwzf">
               <h1>人物专访</h1>
               <div class="intro">
                  <a href="" title=""><img src="/Jczd/Public/images/app/rwzf1.jpg" width="100px" height="113px" alt="" /></a>
                  <h2><a href="http://www.news.cn/xhft/20131112a/" title="">宋世明</a></h2>
                  <p>国家行政学院公共管理教研部教授宋世明做客新华访谈...<a href="http://www.news.cn/xhft/20131112a/" title="">[详细]</a></p>
               </div><!--intro end-->
               <div class="intro">
                  <a href="" title=""><img src="/Jczd/Public/images/app/rwzf2.jpg" width="100px" height="113px" alt="" /></a>
                  <h2><a href="http://www.news.cn/xhft/20131113a/" title="">任建明</a></h2>
                  <p>中央纪委监察部特邀监察员任建明做客新华网访谈室...<a href="http://www.news.cn/xhft/20131113a/" title="">[详细]</a></p>
               </div><!--intro end-->
               <div class="intro">
                  <a href="" title=""><img src="/Jczd/Public/images/app/rwzf3.jpg" width="100px" height="113px" alt="" /></a>
                  <h2><a href="http://www.news.cn/xhft/20131112a/" title="">周天勇</a></h2>
                  <p>中央党校国际战略研究所副所长周天勇做客新华访谈...<a href="http://www.news.cn/xhft/20131112a/" title="">[详细]</a></p>
               </div><!--intro end-->
           </div><!--rwzf end-->
          
   </div><!--content_right end-->

</div>
<div class="clear"></div><!--清除浮动-->
   <div class="link">
      <h1></h1>
      <ul>
         <li><a href="http://www.xinhuanet.com/" title="">新华网</a></li>
         <li><a href="http://news.ifeng.com/" title="">凤凰新闻</a></li>
         <li><a href="http://news.sina.com.cn/" title="">新浪新闻</a></li>
         <li><a href="http://news.qq.com/" title="">滕讯新闻</a></li>
      </ul>
   </div><!--link end-->
</div><!--content end-->
<div class="footer">
   <ul>
       <li class="li_left">合肥市食品药品稽查支队</li>
       <li class="li_right">2014-10</li>
     
   </ul>
</div><!--footer end-->
</body>
</html>