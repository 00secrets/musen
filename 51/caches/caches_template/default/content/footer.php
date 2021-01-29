<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>		
		 	<section>
		 		<div class="foot-address box w640">
		 			<img src="<?php echo IMG_PATH;?>myi/foot_adress.jpg" class="img-responsive"/>
		 		</div>
		 	</section>
		<section>
			<div class="footbox box w640"></div>
			<div class="footer">
				<ul>
					<li><a href="JavaScript:;"><i class="icon iconfont icon-dianhualianxiwo"></i>拨打电话</a></li>
					<li><a href="JavaScript:;"><i class="icon iconfont icon-xiaoxi1"></i>在线提问</a></li>
					<li><a href="<?php echo siteurl($siteid);?>"><i class="icon iconfont icon-tubiaozhizuomoban"></i>网站首页</a></li>
				</ul>
			</div>
		</section> 	
		</div> 
	</div> 		
</div>  	
<script src="<?php echo JS_PATH;?>myi/jquery-1.9.1.min.js"></script>
<script src="<?php echo JS_PATH;?>myi/bootstrap.min.js"></script>
<script src="<?php echo JS_PATH;?>myi/jquery.bxslider.min.js"></script>
<script src="<?php echo JS_PATH;?>myi/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>myi/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript">
		TouchSlide({ slideCell:"#focus", mainCell:".bd ul", effect:"leftLoop" });
		TouchSlide({ 
			slideCell:"#inx-zj",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"left", 
			autoPlay:true,//自动播放
			autoPage:true, //自动分页
			//switchLoad:"_src" //切换加载，真实图片路径为"_src" 
		});				
		var footh=$('.footer').height();
		$('.footbox').css('height',footh);
	</script>  	
	<!--
    	作者：offline
    	时间：2018-06-04
    	描述：导航效果
    -->
<script type="text/javascript">
$(function(){
	$('.nav__trigger').on('click', function(e){
	  e.preventDefault();
	  $(this).parent().toggleClass('nav--active');
	});
})
var headH=$('.header').height();
$('.nav').css('top',headH);
</script>

<script type="text/javascript">
	jQuery(".sideMenu").slide({
		titCell:"h3", //鼠标触发对象
		targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
		effect:"slideDown", //targetCell下拉效果
		trigger:"click",
		delayTime:300 , //效果时间
		triggerTime:150, //鼠标延迟触发时间（默认150）
		defaultPlay:true,//默认是否执行效果（默认true）
		returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
		});
</script>	
<!--banner-->
<script type="text/javascript">
	TouchSlide({ 
		slideCell:"#banner",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul", 
		effect:"leftLoop", 
		autoPlay:true,//自动播放
		autoPage:true //自动分页
	});
</script>
<!--专家-->
<script>

	var idx = null;

	var beafSlide = $(".beaf_slide ul").bxSlider({

		auto : false,

		speed : 1,

		pagerCustom : ".thumb_pager",

		onSlideAfter :  function(obj){

			idx = $(obj).index() -1;

			thumb_pager.goToSlide(idx);

		}
	});
	var thumb_pager = $(".thumb_pager").bxSlider({

		slideWidth: 127,

		maxSlides: 5,

		minSlides: 5,

		moveSlides: 1,

		speed : 1,

		pager: false,

		controls: false,

		touchEnabled: false,

		onSlideAfter :  function(obj){

			$(obj).find("a").addClass("active");

		},

		onSliderLoad : function(){

			//$(".thumb_pager").css("transform", "translate3d(-380px, 0px, 0px)");

		}
	});
	$(window).load(function(){

		$(".thumb_pager > .slide > a.active").click(function(){									

		});
	});
</script>