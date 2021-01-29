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
		 		<div class="nav-muen w640 box">
		 			<ul class="clear clearfix">
		 				<li><a href="<?php echo $CATEGORYS['19']['url'];?>">关于愉悦</a></li>
		 				<li><a href="<?php echo $CATEGORYS['21']['url'];?>">愉悦专家 </a></li>
		 				<li><a href="JavaScript:;">热门项目</a></li>
		 				<li><a href="<?php echo $CATEGORYS['18']['url'];?>">整形日记</a></li>
		 			</ul>
		 		</div>
		 </section>	
		 	<section>
		 		<div class="banner box w640" id="banner">		 			
					<div class="hd">
						<ul></ul>
					</div>
					<div class="bd">
						<ul>
								<li><a href="#"><img src="<?php echo IMG_PATH;?>myi/banner.jpg" class="img-responsive"/></a></li>
								<li><a href="#"><img src="<?php echo IMG_PATH;?>myi/banner2.jpg" class="img-responsive"/></a></li>
								<li><a href="#"><img src="<?php echo IMG_PATH;?>myi/banner3.jpg" class="img-responsive"/></a></li>
								<li><a href="#"><img src="<?php echo IMG_PATH;?>myi/banner4.jpg" class="img-responsive"/></a></li>
								<li><a href="#"><img src="<?php echo IMG_PATH;?>myi/banner5.jpg" class="img-responsive"/></a></li>
								<li><a href="#"><img src="<?php echo IMG_PATH;?>myi/banner6.jpg" class="img-responsive"/></a></li>								
						</ul>
					</div>		 			
		 		</div>
		 	</section> 	
		 	<section>
		 		<div class="inx-title box w640"><h5>热门项目</h5><i class="icon iconfont icon-vertical_line"></i></div>
		 		<div class="inx-items box w640">
		 			<ul class="clear clearfix">
		 				<li><a href="<?php echo $CATEGORYS['9']['url'];?>"><img src="<?php echo $CATEGORYS['9']['image'];?>"/></a><h5><?php echo $CATEGORYS['9']['catname'];?></h5></li>
		 				<li><a href="<?php echo $CATEGORYS['10']['url'];?>"><img src="<?php echo $CATEGORYS['10']['image'];?>"/></a><h5><?php echo $CATEGORYS['10']['catname'];?></h5></li>	
		 				<li><a href="<?php echo $CATEGORYS['71']['url'];?>"><img src="<?php echo $CATEGORYS['71']['image'];?>"/></a><h5><?php echo $CATEGORYS['71']['catname'];?></h5></li>		 					 			
		 				<li><a href="<?php echo $CATEGORYS['7']['url'];?>"><img src="<?php echo $CATEGORYS['7']['image'];?>"/></a><h5><?php echo $CATEGORYS['7']['catname'];?></h5></li>
		 				<li><a href="<?php echo $CATEGORYS['11']['url'];?>"><img src="<?php echo $CATEGORYS['11']['image'];?>"/></a><h5><?php echo $CATEGORYS['11']['catname'];?></h5></li>
		 				<li><a href="<?php echo $CATEGORYS['12']['url'];?>"><img src="<?php echo $CATEGORYS['12']['image'];?>"/></a><h5><?php echo $CATEGORYS['12']['catname'];?></h5></li>
		 				<li><a href="<?php echo $CATEGORYS['70']['url'];?>"><img src="<?php echo $CATEGORYS['70']['image'];?>"/></a><h5><?php echo $CATEGORYS['70']['catname'];?></h5></li>
		 				<li><a href="<?php echo $CATEGORYS['14']['url'];?>"><img src="<?php echo $CATEGORYS['14']['image'];?>"/></a><h5><?php echo $CATEGORYS['14']['catname'];?></h5></li>
		 			</ul>
		 		</div>
		 	</section> 	
		<section>
			<div class="inx-title box w640"><h5>愉悦专家</h5><i class="icon iconfont icon-vertical_line"></i></div>


			<div class="main_cont box w640">
				<div class="mc_beaf">
					<div class="beaf_wrap">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=caa0ccd35eea3edaf158cf706c447d51&action=lists&moreinfo=1&catid=21&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>'21','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
						<div class="thumb_pager">
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<div class="slide"><a data-slide-index="" href="JavaScript:;"><span></span><img src="<?php echo $r['thumb_img'];?>"></a></div>
							<?php $n++;}unset($n); ?>	
						</div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<div class="beaf_slide">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=caa0ccd35eea3edaf158cf706c447d51&action=lists&moreinfo=1&catid=21&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>'21','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
							<ul>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['inx_exp'];?>" /></a></li>
								<?php $n++;}unset($n); ?>	
                            </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
					</div>
				</div>
			</div>
		</section>	
		 	
		<section>
			<div class="inx-title box w640"><h5>整形日记</h5><i class="icon iconfont icon-vertical_line"></i></div>
			<div class="inx-case box w640" id="focus">
				<div class="hd">
					<ul>
						<span class="prev">&lt;</span>
						<span class="next">&gt;</span>
					</ul>
				</div>
				<div class="bd">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af6b48e076dec520d58d2387c010705e&action=lists&moreinfo=1&catid=18&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>'18','order'=>'listorder DESC','limit'=>'20',));}?>
					<ul>					
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>				
						<li>					
							<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['case_img'];?>" class="img-responsive"/></a>
							<h5><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h5>	
						</li>	
					<?php $n++;}unset($n); ?>											
					</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div> 			
			</div>
		</section> 
		<section>
			<div class="inx-title box w640"><h5>媒体报道</h5><i class="icon iconfont icon-vertical_line"></i></div>
			<div class="box w620 inx-news">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4a397ef2147aec39fe3eb6c6d92b73e8&action=lists&catid=72&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'72','order'=>'listorder DESC','limit'=>'3',));}?>
				<ul>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
					<li><a href="<?php echo $r['url'];?>">- <?php echo str_cut($r[title],57);?> <span><?php echo date('Y-m-d',$r[inputtime]);?></span></a></li>
					<?php $n++;}unset($n); ?>	
				</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="more"><a href="<?php echo $CATEGORYS['72']['url'];?>">+</a></div>
			</div>
		</section>
		<section>
			<div class="inx-title box w640"><h5>通知公告</h5><i class="icon iconfont icon-vertical_line"></i></div>
			<div class="box w620 inx-news">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=672315a44a20f6b6b205c6bb2e1de0ee&action=lists&catid=73&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'73','order'=>'listorder DESC','limit'=>'3',));}?>
				<ul>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
					<li><a href="<?php echo $r['url'];?>">- <?php echo str_cut($r[title],57);?> <span><?php echo date('Y-m-d',$r[inputtime]);?></span></a></li>
					<?php $n++;}unset($n); ?>	
				</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="more"><a href="<?php echo $CATEGORYS['73']['url'];?>">+</a></div>
			</div>
		</section>		
<?php include template("content","footer"); ?>	
<script type="text/javascript">
$('.thumb_pager .slide').each(function(index, item){
    $(item).find('a').attr('data-slide-index',index);
});
</script>
  </body>
</html>