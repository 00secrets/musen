<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
		<meta name="description" content="<?php echo $SEO['description'];?>">
    <link href="<?php echo CSS_PATH;?>myi/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>myi/style.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>fonts/iconfont.css" rel="stylesheet">
    <script src="<?php echo JS_PATH;?>myi/modernizr.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
      <script src="<?php echo JS_PATH;?>myi/html5shiv.min.js"></script>
      <script src="<?php echo JS_PATH;?>myi/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
<div class="container-wap w640 box">
	<div class="iphone__screen">
<?php include template("content","header"); ?>	
		<div class="iphone__content">		
 	<section> 		
		<div class="article-info box w620">
			<div class="case-title row">
				<h1><?php echo $title;?></h1>
				<span class="position"><a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 正文</span>
			</div>
			<article>
				<?php echo $content;?>
			</article>
		</div>
 	</section> 	
<?php include template("content","footer"); ?>	
  </body>
</html>