      if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){ //判断当前浏览器是否为ie,精确到ie6~9
            new WOW().init();
      };

      var toppos = 0; 
      $(window).scroll(function(){
       var scrollTop = $(window).scrollTop();
       if(scrollTop > toppos){
         $("#nav").addClass("navbar3");
         $("#nav .collapse .navbar-nav").addClass("navbar-nav2").siblings().removeClass("navbar-nav");
         return;
       } else {
        $("#nav").removeClass("navbar3");
        $("#nav .collapse .navbar-nav2").removeClass("navbar-nav2").addClass("navbar-nav").siblings();

       }
       toppos = scrollTop;
      });


      $(document).ready(function(){
        $("#blog-k .col-lg-3").hover(function(){
          $(this).children(".blog-kk").children(".blog-y").stop().fadeIn();
        },function(){
          $(this).children(".blog-kk").children(".blog-y").stop().fadeOut();
        });

        $("#case-yc .col-lg-3").hover(function(){
          $(this).children(".course-list-img").children(".case-ms").stop().fadeIn();
        },function(){
          $(this).children(".course-list-img").children(".case-ms").stop().fadeOut();
        });
      });

      $(document).ready(function(){
        $(".case-k .col-lg-4").hover(function(){
          $(this).children(".blog-kk").children(".blog-y").stop().fadeIn();
        },function(){
          $(this).children(".blog-kk").children(".blog-y").stop().fadeOut();
        });

        $(".case-k .col-lg-4").hover(function(){
          $(this).children(".course-list-img").children(".case-ms").stop().fadeIn();
        },function(){
          $(this).children(".course-list-img").children(".case-ms").stop().fadeOut();
        });
      });

      $(document).ready(function(){
        $(".case-k .col-lg-12").hover(function(){
          $(this).children(".blog-kk").children(".blog-y").stop().fadeIn();
        },function(){
          $(this).children(".blog-kk").children(".blog-y").stop().fadeOut();
        });

        $(".case-k .col-lg-12").hover(function(){
          $(this).children(".course-list-img").children(".case-ms").stop().fadeIn();
        },function(){
          $(this).children(".course-list-img").children(".case-ms").stop().fadeOut();
        });
      });