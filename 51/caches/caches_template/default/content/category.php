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
        <div class="case-title box w620"> 
            <span class="position"><a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> 正文</span>
        </div>
        <div class="list-article box w620">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" class="clear clearfix">                     
                            <h5><?php echo $r['title'];?></h5>                            
                            <p><?php echo str_cut($r[description],120);?>…</p>
                            <p><span>详情</span></p>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>           
        </div>
    </section>
    <section>
        <div class="inx-title box w640"> <i class="icon iconfont icon-vertical_line"></i><h5>愉悦专家</h5></div>
            <div class="inx-zj box w640" id="inx-zj">
                <div class="bd">
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=caa0ccd35eea3edaf158cf706c447d51&action=lists&moreinfo=1&catid=21&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>'21','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                    <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['inx_exp'];?>" class="img-responsive"/></a></li>
                    <?php $n++;}unset($n); ?> 
                    </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>               
                </div>
                <div class="hd">
                    <ul></ul>
                </div>      
            </div>
    </section>
    <section>
        <div class="inx-title box w640"> <i class="icon iconfont icon-vertical_line"></i><h5>整形日记</h5></div>
        <div class="inx-case box w640" id="focus">
            <div class="hd">
                <ul></ul>
            </div>
            <div class="bd">
                <ul>            
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3c2a957602f121fbdedd5bbf227b062&action=lists&catid=18&order=listorder+DESC&num=2&start=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'listorder DESC','limit'=>'2',));}?>                     
                        <li class="row">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>                     
                            <div class="col-xs-6">
                                <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r['thumb'],310,199);?>" class="img-responsive"/></a>
                                <h5><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h5>
                                <p><a href="<?php echo $r['url'];?>"><?php echo str_cut($v['description'],90);?>…<em>【详情】</em></a></p>
                            </div>  
                            <?php $n++;}unset($n); ?>             
                        </li>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a9df25834be6458584ee9fd339176907&action=lists&catid=18&order=listorder+DESC&num=2&start=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'listorder DESC','limit'=>'2,2',));}?>                     
                        <li class="row">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>                     
                            <div class="col-xs-6">
                                <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r['thumb'],310,199);?>" class="img-responsive"/></a>
                                <h5><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h5>
                                <p><a href="<?php echo $r['url'];?>"><?php echo str_cut($v['description'],90);?>…<em>【详情】</em></a></p>
                            </div>  
                            <?php $n++;}unset($n); ?>             
                        </li>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                               
                </ul>
            </div>          
        </div>
    </section>          
<?php include template("content","footer"); ?>   
  </body>
</html>