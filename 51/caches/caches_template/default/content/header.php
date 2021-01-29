<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	 	<section>	 		
	 		<div class="header w640 box row">
	 			<div class="col-xs-2 head-nav nav__trigger"><a href="JavaScript:;"><i class="nav__icon"></i></a></div>			
	 			<div class="col-xs-8 head-logo"><a href="<?php echo siteurl($siteid);?>">北京愉悦医疗美容整形医院</a></div>
	 			<div class="col-xs-2 head-info"><a href="JavaScript:;"><i class="icon iconfont icon-xiaoxi1"></i></i></a></div>
		  <nav class="nav">
				
		<div class="sideMenu" style="margin:0 auto">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?> 
			<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
			<h3><em></em><?php echo $c['catname'];?></h3>
			<ul>
				<?php $n=1;if(is_array(subcat($c['catid']))) foreach(subcat($c['catid']) AS $c2) { ?>
				<li><a href="<?php echo $c2['url'];?>">-<?php echo $c2['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
		</div><!-- sideMenu End -->							
		  </nav>  			 			
	 		</div>		
	 	</section>