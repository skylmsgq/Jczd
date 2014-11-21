<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>合肥市食品药品稽查支队</title>
<!--link rel="shortcut icon" href="favicon.ico" /-->
<link href="/Jczd/Public/stylesheets/app/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/Jczd/Public/stylesheets/app/header.css" />
<link rel="stylesheet" type="text/css" href="/Jczd/Public/stylesheets/app/global.css" />
<script type="text/javascript" src="/Jczd/Public/javascripts/app/banner1.js"></script>
<script type="text/javascript" src="/Jczd/Public/javascripts/app/jquery.min.js"></script>
<script type="text/javascript"> 
  $(function(){
    var time=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());  
    $('.currentTime').text(time);
    setInterval(function(){
      time=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());  
      $('.currentTime').text(time);
    },1000);
  });
</script>
</head>
<body>
<!--top begin-->
<div class="top">
 <div class="wrap">
  <span class="fl">合肥市食品药品稽查支队</span>
  <span class='fr currentTime'></span>
 </div>
</div>

<!--top end-->
<!--header begin-->
<div class="header">
 <div class="wrap">
  
  <div class="search_box">
   <a href="" title="" target="blank"><img src="/Jczd/Public/images/app/yingkesong.png" width="1003px" alt="" class="fl"/></a>
      
   </div>
   <div class="cb"></div>
  </div>
 </div>

 <div class="nav">
  <div class="wrap">
   <ul class="nav_left">
    <li><a href="<?php echo U('Index/index');?>">首 页</a></li>
    <li><a href="<?php echo U('Function/index');?>" title="">机构职能</a></li>
    <!--li><a href="<?php echo U('Info/index');?>" title="">信息公开</a></li-->
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
<div class="content">
   <div class="clear"></div>
   <div class="content_left">
<div class="article">
	<div class="article-title">
		<h1><?php echo ($article[0]["title"]); ?></h1>
	</div>
	<div class="article-subtitle">
		<h2>来源： <?php echo ($article[0]["tag"]); ?></h2>
		<h3>发布时间：<?php echo (date('Y-m-d H:i',$article[0]["updated_at"])); ?></h3>
	</div>
	<br>
	<br>
	<br>
	<hr>
	<div class="article-content" style="margin-bottom:30px;">
		<?php echo ($article[0]['content']); ?>
	</div>
</div>

     
   </div><!--content_left end-->

   <div class="content_right">
      <div class="icon">
        <ul>
          <li><a href=""><img src="/Jczd/Public/images/app/food.jpg"></a></li>
          <li><a href=""><img src="/Jczd/Public/images/app/bjshp.jpg"></a></li>
          <li><a href=""><img src="/Jczd/Public/images/app/drug.jpg"></a></li>
          <li><a href=""><img src="/Jczd/Public/images/app/hzp.jpg"></a></li>
          <li><a href=""><img src="/Jczd/Public/images/app/ylqx.jpg"></a></li>
        </ul>
      <div class="info">
        <!-- <h1>政府信息公开</h1> -->
        <img id='infoPublic' style="width:240px;" src="/Jczd/Public/images/app/info.jpg">
        <!-- <img src="/Jczd/Public/images/app/infoleft.png" id="infoleft"> -->
        <ul>
          <li><a href="http://www.hefei.gov.cn/n1070/n304559/n311146/4324693.html"  target="blank"><img src="/Jczd/Public/images/app/button.png">政府信息公开规定</a></li>
          <li><a href="http://zwgk.hefei.gov.cn/zwgk/public/spage.xp?doAction=sindex&unitid=0004000100010018" target="blank"><img src="/Jczd/Public/images/app/button.png">政府信息公开指南</a></li>
          <li><a href="http://zwgk.hefei.gov.cn/zwgk/public/index.xp?doAction=sframe"  target="blank"><img src="/Jczd/Public/images/app/button.png">政府信息公开目录</a></li>
          <li><a href="http://zwgk.hefei.gov.cn/zwgk/public/spage.xp?doAction=sindex&unitid=0004000100010018&frame=nb"  target="blank"><img src="/Jczd/Public/images/app/button.png">政府信息公开年报</a></li>
          <li><a href="http://zwgk.hefei.gov.cn/zwgk/public/spage.xp?doAction=sindex&unitid=0004000100010018&frame=yszgk"  target="blank"><img src="/Jczd/Public/images/app/button.png">依申请公开</a></li>
        </ul>
      </div>


      <div class="menuRight">
        <h1>联系我们<img class="titlePic" src="/Jczd/Public/images/app/contact.png" alt=""></h1>
        <img src="/Jczd/Public/images/app/contact_1.png" width="238px">
        <a href=""><img class="tousu" src="/Jczd/Public/images/app/tousu.jpg"></a>
        <!-- <a href=""><img class="xinxiang" src="/Jczd/Public/images/app/xinxiang.jpg"></a> -->
      </div>
      <div class="menuRight">
        <h1>文件下载<img class="titlePic" src="/Jczd/Public/images/app/download.png" alt=""></h1>
        <ul>
          <li><a href="http://www.ada.gov.cn/zhxx/cyxz/sccbg/" target='blank'><img class="button" src="/Jczd/Public/images/app/button.png">省食品药品监督管理局表格下载</a></li>
          <li><a href="/n1105/n235647/n235856/n236654/n4994426/index.html" target='blank'><img class="button" src="/Jczd/Public/images/app/button.png">市食品药品监督管理局表格下载</a></li>
          <li><a href="http://yjj.hefei.gov.cn/n1105/n235647/n235856/n236654/n4994442/index.html" target='blank'><img class="button" src="/Jczd/Public/images/app/button.png">其他表格下载</a></li>
          <li><a href="http://yjj.hefei.gov.cn/n1105/n235647/n235856/n236654/n4994472/index.html" target='blank'><img class="button" src="/Jczd/Public/images/app/button.png">药品类兴奋剂查询</a></li>
          <li><a href="http://yjj.hefei.gov.cn/n1105/n235647/n235856/n236654/n30255367/index.html" target='blank'><img class="button" src="/Jczd/Public/images/app/button.png">医疗器械查询</a></li>
        </ul>
      </div>
          
   </div><!--content_right end-->

</div>
<div class="clear"></div><!--清除浮动-->

   <div class="link">
      <h1>友情链接</h1>
      <ul>
         <li><a href="http://www.sda.gov.cn/" title="" target='blank'><img src="/Jczd/Public/images/app/cfda.gif"></a></li>
         <li><a href="http://www.ada.gov.cn/" title="" target='blank'><img src="/Jczd/Public/images/app/ahfda.gif"></a></li>
         <li><a href="http://yjj.hefei.gov.cn/" title="" target='blank'><img src="/Jczd/Public/images/app/hffda.png"></a></li>
         <li><a href="http://www.cffda.cn/" title="" target='blank'><img src="/Jczd/Public/images/app/cffda.gif"></a></li>
         <li><a href="http://www.fdda.gov.cn/main/" title="" target='blank'><img src="/Jczd/Public/images/app/fdfda.gif"></a></li>
         <li><a href="http://www.feixifda.gov.cn/" title="" target='blank'><img src="/Jczd/Public/images/app/fxfda.gif"></a></li>
         <li><a href="http://www.hefei.gov.cn/" title="" target='blank'><img src="/Jczd/Public/images/app/hfs.gif"></a></li>
      </ul>
   </div><!--link end-->

</div><!--content end-->

<div class="footer">
   <ul>
       <li>合肥市食品药品稽查支队 版权所有</li>
       <li>联系电话：0551-65950110 </li>
       <li>地址： 合肥市东流路100号市政务中心2区B段（3号门）</li>
       <li>Copyright © 2014-2015 Hefei Food & Drug Inspection Detachment</li>
       <!-- <li class="currentTime"></li> -->
     
   </ul>
</div><!--footer end-->
</body>
</html>