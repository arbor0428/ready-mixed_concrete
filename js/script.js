$(function(){

	var Fload = function(){
		

		var txtPos = function(){
			var winH = $(window).height();
			$('#mainSlide').css('height',winH);
		}
	//	txtPos();
		
		$slickElement = $('#mainSlide');
		$slickElement.slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 6000,
			fade: true,
      slidesToShow: 1,
			speed: 2000,
      prevArrow: '<div class="msLeft"></div>',
      nextArrow: '<div class="msRight"></div>',
			pauseOnHover:false,
      pauseOnFocus:false, 
      touchMove: false,
			arrows: true,
			dots: true
		});
    
    setTimeout(function(){     
     var agent = navigator.userAgent.toLowerCase();
      if ( (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) || (agent.indexOf("msie") != -1) ) {
      }else {
        $('.slick-slide').eq(0).addClass('ani');
      }
    },1000);	

		
		$('.slick-slide').eq(0).find('.txtArea').animate({'opacity':'1'},2000,function(){	
			wayPointS();
		});
		setTimeout(function(){
			$('.slick-slide').eq(0).find('.txtArea').stop().animate({'opacity':'0'},600);			
		},6000);

		$slickElement.on('afterChange', function(event, slick, currentSlide, nextSlide){
			$('#mainSlide .txtArea').css({'opacity': '0'});
			$('.slick-slide').eq(currentSlide).find('.txtArea').stop().animate({'opacity':'1'},2000,function(){
			//	txtPos();
			});
			$('.slick-slide').removeClass('ani');			
       var agent = navigator.userAgent.toLowerCase();
      if ( (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) || (agent.indexOf("msie") != -1) ) {
      }else {
        $('.slick-slide').eq(currentSlide).addClass('ani');
      }

			setTimeout(function(){
				$('.slick-slide').eq(currentSlide).find('.txtArea').stop().animate({'opacity':'0'},600);
			},6000);	

		});



		$(window).resize(function(){
		//	txtPos();
		});



	};



  // main slide
	var $culture = $('#mainRoll');
	var $status = $('.pagingInfo');
	$culture.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
		//currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
		var i = (currentSlide ? currentSlide : 0) + 1;
		$status.html('<span>'+ i +'</span>' + '&nbsp;/&nbsp;' + '<u>'+slick.slideCount+'</u>');		
	});
	$culture.slick({
		infinite: true,
		variableWidth: true,
		swipeToSlide: true,
    focusOnSelect: true,
    draggable: true,
    swipe: true,
    speed:120,
		prevArrow: $('.dLeft'),
		nextArrow: $('.dRight'),
    asNavFor: '#mainRollBig'
	});
	$('#mainRoll .slick-slide a').hover(function(){
		$(this).children('.over').stop().animate({'opacity':'1'},600);
	},function(){
		$(this).children('.over').stop().animate({'opacity':'0'},600);
	});
  
  $('#mainRollBig').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    arrows: false,
    swipe: true
  });

  var changeTxt = function(){
    var myTxt = $('#mainRollBig .slick-active').find('img').attr('data-name');
    $('#btnDirection .over .txt').text(myTxt);
  };
  $('#mainRollBig').on('afterChange', function(){
    changeTxt();
  });
  
  changeTxt();


	var m1 = function(a){
		$('#'+a+'').animate({'opacity':'1'},400,function(){;
//  	  for (i=0;i<$('#'+a+' .slick-slide').size();i++){
//        $('#'+a+' .slick-slide').eq(i).delay(i*120).animate({'margin':'0'},300);
//      }
    });
	}


	var m2 = function(b){
		$('#'+b+'').animate({'opacity':'1'},300,function(){
      for (i=0;i<$('#'+b+' .slick-slide').size();i++){
        $('#'+b+' .slick-slide').eq(i).delay(i*60).animate({'opacity':'1'},300);
      }
      $('#btnDirection').animate({'opacity':'1'},300);
    });
  }


	var wayPointS = function(){
		$('div[id^=sector]').waypoint(function() {
			var sectorNum = $(this).attr('id');
			var depNum = parseInt(sectorNum.substr(6,7));
			switch (depNum) {
				case 1 :
					m1(sectorNum);
				break;
				case 2 :
					m2(sectorNum);
				break;
				default :				
				break;
			}
		}, { offset: '80%' });
	}




	var getParameters = function (paramName) {
	var returnValue;
	var url = location.href;
	var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&');
			for (var i = 0; i < parameters.length; i++) {
			var varName = parameters[i].split('=')[0];

			if (varName.toUpperCase() == paramName.toUpperCase()) {
				returnValue = parameters[i].split('=')[1];
				return decodeURIComponent(returnValue);
			}
		}
	};
	Fload();

	//aos
	AOS.init();
});






$(window).load(function(){
    winH = $(this).height();
  
    // 로케이션 바 하위뎁스 관련
    var loca_v = false;
    var clk_area = "";
    var _this = "";
    $(".loca-area ul li button").on("click", function(){
        _this = $(this);
        clk_area = _this.parent("li"); 
        if ( loca_v == false ){
            _this.addClass("active"); 
			clk_area.find(".next-depth ul").slideDown();
            loca_v = true;
        } else {
            _this.removeClass("active"); 
            loca_v = false;
			clk_area.find(".next-depth ul").slideUp();
        }
        clk_area.mouseleave(function(){
            clk_area.find("button").removeClass("active"); 
            loca_v = false;
			clk_area.find(".next-depth ul").slideUp();
        })
    })


	$(function () {

		$(".top-menu").click(function(e) {
			e.preventDefault();
			$(this).toggleClass("active"); 
				$("#navigation").animate({right:0},'300');
				$(".modalBg").addClass("over").animate(1000);
			});

			$(".topmenu_close").click(function(e) {
				$("#navigation").animate({right:"-100%"},'300');
				$(".modalBg").removeClass("over").animate(1000);
			});

			$(".modalBg").click(function() {
				$(".modalBg").removeClass("over").animate(1000);
				$("#navigation").animate({right:"-100%"},'300');
			});


			var mobileMenu = $(".topmenu > li > a"), mobileMenuDepth = $(".topmenu li ul");
			mobileMenu.click(function(e){
				e.preventDefault();
				$(this).parent().removeClass('hover');
				mobileMenuDepth.slideUp();
				if($(this).next().is(':hidden') == true) {
					$(this).parent().addClass('hover');
					$(this).next().slideDown();
				}
			});
		});

	// select_link
	$('.select_link').find('h2 a').bind('click', function()
	{
		if ($(this).parents('.group').hasClass('active') == false)
		{
			$(this).parents('.select_link').find('.group').removeClass('active');
			$(this).parents('.group').addClass('active');
		}
		else
		{
			$(this).parents('.group').removeClass('active');
		}
		return false;
	});
	// select_link
	$('#wrap').bind('click', function()
	{
		if ($('.select_link').find('.group').hasClass('active') == true)
		{
			$('.select_link .group').removeClass('active');
		}
	});
});