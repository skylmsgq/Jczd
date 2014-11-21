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
    <li><a href="<?php echo U('News/index');?>" title="">食品药品监管</a></li>
    <li><a href="<?php echo U('Notice/index');?>" title="">文件通知</a></li>
    <li><a href="<?php echo U('Policy/index');?>" title="">政务动态</a></li>
    <li><a href="<?php echo U('Law/index');?>" title="">法律法规</a></li>
   </ul>
   <ul class="nav_right">
    <li><a href="#" onclick="alert('此功能施工中...')"title="">加入收藏夹</a>
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
<ul>
	<?php if(is_array($info)): foreach($info as $key=>$v): ?><li><a href="<?php echo U('Index/handleArticle',array('type'=>'info','id'=>$v['id']));?>" title=""><?php echo ($v["title"]); ?><span class='fr'><?php echo (date('Y-m-d H:i',$v["updated_at"])); ?></span></a></li><?php endforeach; endif; ?>
</ul>
     
   </div><!--content_left end-->
   <div class="content_right">
      <div class="menuRight">
        <h1>政府信息公开</h1>
      </div>
      <div class="menuRight">
        <h1>联系我们</h1>
      </div>
      <div class="menuRight">
        <h1>文件下载</h1>
      </div>
          
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