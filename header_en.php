<?
	include "/home/hkone/www/module/login/head_en.php";	
	include "/home/hkone/www/module/class/class.DbCon.php";
	include "/home/hkone/www/module/class/class.Util.php";
	include "/home/hkone/www/module/class/class.Msg.php";
	require_once '/home/hkone/www/module/Mobile-Detect-master/Mobile_Detect.php';
	$detect = new Mobile_Detect;

	if($detect->isiOS())						$UserDevice = "ios";
	elseif($detect->isAndroidOS())		$UserDevice = "android";
	else										$UserDevice = "";
	
	if($detect->isMobile())	$UserOS = 'mobile';
	else							$UserOS = 'pc';
?>


    <header id="header" class="header">
        <div class="h-center">
            <a href="http://hkone.co.kr/main_en.php" class="logo"><img src="images/logo.png" alt="Heungkuk Industry"></a>
            <div class="gnb_wrap">
                <nav id="gnb" class="gnb">
                    <ul class="dep1 clearfix">
                        <li class="dep1_li">
                            <a href="/sub01/sub01_en.php" class="dep1_link" title="About HK">About HK</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub01/sub01_en.php" class="dep2_link" title="Business Philosophy and Company Motto">Business Philosophy and Company Motto</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub01/sub02_en.php" class="dep2_link" title="CEO’s Message">CEO’s Message</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub01/sub03_en.php" class="dep2_link" title="Company History">Company History</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub01/sub04_en.php" class="dep2_link" title="Code of Conduct">Code of Conduct</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub01/sub05_en.php" class="dep2_link" title="Vision">Vision</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub01/sub06_en.php" class="dep2_link" title="Organization Structure">Organization Structure</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub01/sub07_en.php" class="dep2_link" title="Location and Contact Information">Location and Contact Information</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub01/sub08_en.php" class="dep2_link" title="Heungkuk Industry NEWS">Heungkuk Industry NEWS</a>
                                </li>
                            </ul>
                        </li>
						<li class="dep1_li">
                            <a href="/sub02/sub01_en.php" class="dep1_link" title="R&D Center">R&D Center</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub02/sub01_en.php" class="dep2_link" title="About R&D Center">About R&D Center</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub02/sub02_en.php" class="dep2_link" title="Research Institute Organization Structure">Research Institute Organization Structure</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub02/sub03_en.php" class="dep2_link" title="Research Fields">Research Fields</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub02/sub04_en.php" class="dep2_link" title="Research Project">Research Project</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub02/sub05_en.php" class="dep2_link" title="Research Result">Research Result</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub02/sub06_en.php" class="dep2_link" title="Intellectual Property Right">Intellectual Property Right</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub02/sub07_en.php" class="dep2_link" title="Owned Equipment">Owned Equipment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dep1_li">
                            <a href="/sub03/sub01_en.php" class="dep1_link" title="Business Area">Business Area</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub03/sub01_en.php" class="dep2_link" title="Ready-mix concrete">Ready-mix concrete</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub03/sub02_en.php" class="dep2_link" title="Construction material">Construction material</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub03/sub03_en.php" class="dep2_link" title="Geopolymer">Geopolymer</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dep1_li">
                            <a href="/sub04/sub01_en.php" class="dep1_link" title="Product">Product</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub04/sub01_en.php" class="dep2_link" title="Product Type">Product Type</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub04/sub02_en.php" class="dep2_link" title="Product Production Process">Product Production Process</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub04/sub03_en.php" class="dep2_link" title="Product’s Characteristics and Strength">Product’s Characteristics and Strength</a>
                                </li>
								<!--
                                <li class="dep2_li">
                                    <a href="/sub04/sub04.php" class="dep2_link">주요협력사</a>
                                </li>
								-->
                            </ul>
                        </li>
                        <li class="dep1_li">
                            <a href="/sub05/sub01_en.php" class="dep1_link" title="Certification">Certification</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub05/sub01_en.php" class="dep2_link" title="Environmental Score Certificate">Environmental Score Certificate</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub05/sub02_en.php" class="dep2_link" title="Low Carbon certified">Low Carbon certified</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub05/sub03_en.php" class="dep2_link" title="Technology certificate">Technology certificate</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub05/sub04_en.php" class="dep2_link" title="KS certificate">KS certificate</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub05/sub05_en.php" class="dep2_link" title="INNO-BIZ">INNO-BIZ</a>
                                </li>
								<li class="dep2_li">
                                    <a href="/sub05/sub06_en.php" class="dep2_link" title="Green certified">Green certified</a>
                                </li>
								<!--
								<li class="dep2_li">
                                    <a href="/sub05/sub07.php" class="dep2_link">인증서취득 계획</a>
                                </li>
								-->
                            </ul>
                        </li>
                        <li class="dep1_li">
                            <a href="/sub06/sub01_en.php" class="dep1_link">Career</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub06/sub01_en.php" class="dep2_link">Desired Talents</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub06/sub02_en.php" class="dep2_link">Grow Talents Ability cultivation system</a>
                                </li>
								 <li class="dep2_li">
                                    <a href="/sub06/sub03_en.php" class="dep2_link">Benefits</a>
                                </li>
								 <li class="dep2_li">
                                    <a href="/sub06/sub04_en.php" class="dep2_link">Recruitment Process</a>
                                </li>
								 <li class="dep2_li">
                                    <a href="/sub06/sub05_en.php" class="dep2_link">Job Information</a>
                                </li>
								 <li class="dep2_li">
                                    <a href="/sub06/sub06_en.php" class="dep2_link">Apply Basic information</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dep1_li">
                            <a href="/sub07/sub01_en.php" class="dep1_link">Contact</a>
                            <ul class="dep2">
                                <li class="dep2_li">
                                    <a href="/sub07/sub01_en.php" class="dep2_link">Mandatory for Individual/Companies</a>
                                </li>
                                <li class="dep2_li">
                                    <a href="/sub07/sub02_en.php" class="dep2_link">Estimate request</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
			<nav id="fullMenu" class="full_menu">
				<ul class="dep1">
					<li class="dep1_li">
						<a href="#" class="dep1_link">About HK</a>
						<ul class="dep2">
							<li class="dep2_li">
								<a href="/sub01/sub01_en.php" class="dep2_link" title="Business Philosophy and Company Motto">Business Philosophy and Company Motto</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub02_en.php" class="dep2_link" title="CEO’s Message">CEO’s Message</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub03_en.php" class="dep2_link" title="Company History">Company History</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub04_en.php" class="dep2_link" title="Code of Conduct">Code of Conduct</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub05_en.php" class="dep2_link" title="Vision">Vision</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub06_en.php" class="dep2_link" title="Organization Structure">Organization Structure</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub07_en.php" class="dep2_link" title="Location and Contact Information">Location and Contact Information</a>
							</li>
							<li class="dep2_li">
								<a href="/sub01/sub08_en.php" class="dep2_link" title="Heungkuk Industry NEWS">Heungkuk Industry NEWS</a>
							</li>
						</ul>
					</li>
					<li class="dep1_li">
						<a href="#" class="dep1_link">R&D Center</a>
						<ul class="dep2">
							<li class="dep2_li">
								<a href="/sub02/sub01_en.php" class="dep2_link" title="About R&D Center">About R&D Center</a>
							</li>
							<li class="dep2_li">
								<a href="/sub02/sub02_en.php" class="dep2_link" title="Research Institute Organization Structure">Research Institute Organization Structure</a>
							</li>
							<li class="dep2_li">
								<a href="/sub02/sub03_en.php" class="dep2_link" title="Research Fields">Research Fields</a>
							</li>
							<li class="dep2_li">
								<a href="/sub02/sub04_en.php" class="dep2_link" title="Research Project">Research Project</a>
							</li>
							<li class="dep2_li">
								<a href="/sub02/sub05_en.php" class="dep2_link" title="Research Result">Research Result</a>
							</li>
							<li class="dep2_li">
								<a href="/sub02/sub06_en.php" class="dep2_link" title="Intellectual Property Right">Intellectual Property Right</a>
							</li>
							<li class="dep2_li">
								<a href="/sub02/sub07_en.php" class="dep2_link" title="Owned Equipment">Owned Equipment</a>
							</li>
						</ul>
					</li>
					<li class="dep1_li">
						<a href="#" class="dep1_link">Business Area</a>
						<ul class="dep2">
							<li class="dep2_li">
								<a href="/sub03/sub01_en.php" class="dep2_link" title="Ready-mix concrete">Ready-mix concrete</a>
							</li>
							<li class="dep2_li">
								<a href="/sub03/sub02_en.php" class="dep2_link" title="Construction material">Construction material</a>
							</li>
							<li class="dep2_li">
								<a href="/sub03/sub03_en.php" class="dep2_link" title="Geopolymer">Geopolymer</a>
							</li>
						</ul>
					</li>
					<li class="dep1_li current">
						<a href="#" class="dep1_link">Product</a>
						<ul class="dep2">
							 <li class="dep2_li">
								<a href="/sub04/sub01_en.php" class="dep2_link" title="Product Type">Product Type</a>
							</li>
							<li class="dep2_li">
								<a href="/sub04/sub02_en.php" class="dep2_link" title="Product Production Process">Product Production Process</a>
							</li>
							<li class="dep2_li">
								<a href="/sub04/sub03_en.php" class="dep2_link" title="Product’s Characteristics and Strength">Product’s Characteristics and Strength</a>
							</li>
							<!--
							<li class="dep2_li">
								<a href="/sub04/sub04.php" class="dep2_link">주요협력사</a>
							</li>
							-->
						</ul>
					</li>
					<li class="dep1_li">
						<a href="#" class="dep1_link">Certification</a>
						<ul class="dep2">
							<li class="dep2_li">
								<a href="/sub05/sub01_en.php" class="dep2_link" title="Environmental Score Certificate">Environmental Score Certificate</a>
							</li>
							<li class="dep2_li">
								<a href="/sub05/sub02_en.php" class="dep2_link" title="Low Carbon certified">Low Carbon certified</a>
							</li>
							<li class="dep2_li">
								<a href="/sub05/sub03_en.php" class="dep2_link" title="Technology certificate">Technology certificate</a>
							</li>
							<li class="dep2_li">
								<a href="/sub05/sub04_en.php" class="dep2_link" title="KS certificate">KS certificate</a>
							</li>
							<li class="dep2_li">
								<a href="/sub05/sub05_en.php" class="dep2_link" title="INNO-BIZ">INNO-BIZ</a>
							</li>
							<li class="dep2_li">
								<a href="/sub05/sub06_en.php" class="dep2_link" title="Green certified">Green certified</a>
							</li>
							<!--
							<li class="dep2_li">
								<a href="/sub05/sub07.php" class="dep2_link">인증서취득 계획</a>
							</li>
							-->
						</ul>
					</li>
					<li class="dep1_li">
						<a href="#" class="dep1_link">Career</a>
						<ul class="dep2">
							<li class="dep2_li">
								<a href="/sub06/sub01_en.php" class="dep2_link" title="Desired Talents">Desired Talents</a>
							</li>
							<li class="dep2_li">
								<a href="/sub06/sub02_en.php" class="dep2_link" title="Grow Talents Ability cultivation system">Grow Talents Ability cultivation system</a>
							</li>
							 <li class="dep2_li">
								<a href="/sub06/sub03_en.php" class="dep2_link" title="Benefits">Benefits</a>
							</li>
							 <li class="dep2_li">
								<a href="/sub06/sub04_en.php" class="dep2_link" title="Recruitment Process">Recruitment Process</a>
							</li>
							 <li class="dep2_li">
								<a href="/sub06/sub05_en.php" class="dep2_link" title="">Job Information</a>
							</li>
							 <li class="dep2_li">
								<a href="/sub06/sub06_en.php" class="dep2_link" title="Apply Basic information">Apply Basic information</a>
							</li>
						</ul>
					</li>
					<li class="dep1_li">
						<a href="#" class="dep1_link">Contact</a>
						<ul class="dep2">
							<li class="dep2_li">
								<a href="/sub07/sub01_en.php" class="dep2_link" title="Mandatory for Individual/Companies">Mandatory for Individual/Companies</a>
							</li>
							<li class="dep2_li">
								<a href="/sub07/sub02_en.php" class="dep2_link" title="Estimate request">Estimate request</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>

            <div class="util_box">
                <a href="/main.php" class="link_lang">KOR</a>
                <button type="button" id="btnFullMenu" class="btn_full_menu">
                    메인메뉴 열기
                    <span class="bar_top"></span>
                    <span class="bar_mid"></span>
                    <span class="bar_bot"></span>
                </button>
            </div>
			<!--모바일메뉴버튼-->
			<button type="button" id="btnFullMenu" class="m-btn">
				메인메뉴 열기
				<span class="bar_top"></span>
				<span class="bar_mid"></span>
				<span class="bar_bot"></span>
			</button>
        </div>

		<!--모바일메뉴-->
		<div class="m-navWrap">
			<div class="bBg"><!--뒷배경--></div>
			<div class="m-navbox">	
				<div class="mn-top">
					<div class="closeBtn">
						<a href="#" title="close">
							<span class="lnr lnr-cross"></span>
						</a>
					</div>
				</div>
				<ul class="m-nav">
					<li>
						<a href="#" title="About HK">About HK</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub01/sub01_en.php" title="Business Philosophy and Company Motto">Business Philosophy and Company Motto</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub02_en.php" title="CEO’s Message">CEO’s Message</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub03_en.php" title="Company History">Company History</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub04_en.php" title="Code of Conduct">Code of Conduct</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub05_en.php" title="Vision">Vision</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub06_en.php" title="Organization Structure">Organization Structure</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub07_en.php" title="Location and Contact Information">Location and Contact Information</a></li>
							<li class="dp_f dp_c "><a href="/sub01/sub08_en.php" title="">Heungkuk Industry NEWS</a></li>
						</ul>
					</li>
					<li>
						<a href="#" title="R&D Center">R&D Center</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub02/sub01_en.php" title="About R&D Center">About R&D Center</a></li>
							<li class="dp_f dp_c "><a href="/sub02/sub02_en.php" title="Research Institute Organization Structure">Research Institute Organization Structure</a></li>
							<li class="dp_f dp_c "><a href="/sub02/sub03_en.php" title="Research Fields">Research Fields</a></li>
							<li class="dp_f dp_c "><a href="/sub02/sub04_en.php" title="Research Project">Research Project</a></li>
							<li class="dp_f dp_c "><a href="/sub02/sub05_en.php" title="Research Result">Research Result</a></li>
							<li class="dp_f dp_c "><a href="/sub02/sub06_en.php" title="Intellectual Property Right">Intellectual Property Right</a></li>
							<li class="dp_f dp_c "><a href="/sub02/sub07_en.php" title="Owned Equipment">Owned Equipment</a></li>
						</ul>
					</li>
					<li>
						<a href="#" title="Business Area">Business Area</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub03/sub01_en.php" title="Ready-mix concrete">Ready-mix concrete</a></li>
							<li class="dp_f dp_c "><a href="/sub03/sub02_en.php" title="Construction material">Construction material</a></li>
							<li class="dp_f dp_c "><a href="/sub03/sub03_en.php" title="Geopolymer">Geopolymer</a></li>
						</ul>
					</li>
					<li>
						<a href="#" title="Product">Product</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub04/sub01_en.php" title="Product Type">Product Type</a></li>
							<li class="dp_f dp_c "><a href="/sub04/sub02_en.php" title="Product Production Process">Product Production Process</a></li>
							<li class="dp_f dp_c "><a href="/sub04/sub03_en.php" title="Product’s Characteristics and Strength">Product’s Characteristics and Strength</a></li>
							<!--<li><a href="/sub04/sub04.php" title="">주요협력사</a></li>-->
						</ul>
					</li>
					<li>
						<a href="#" title="Certification">Certification</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub05/sub01_en.php" title="Environmental Score Certificate">Environmental Score Certificate</a></li>
							<li class="dp_f dp_c "><a href="/sub05/sub02_en.php" title="Low Carbon certified">Low Carbon certified</a></li>
							<li class="dp_f dp_c "><a href="/sub05/sub03_en.php" title="Technology certificate">Technology certificate</a></li>
							<li class="dp_f dp_c "><a href="/sub05/sub04_en.php" title="KS certificate">KS certificate</a></li>
							<li class="dp_f dp_c "><a href="/sub05/sub05_en.php" title="INNO-BIZ">INNO-BIZ</a></li>
							<li class="dp_f dp_c "><a href="/sub05/sub06_en.php" title="Green certified">Green certified</a></li>
							<!--<li><a href="/sub05/sub07.php" title="">인증서취득 계획</a></li>-->
						</ul>
					</li>
					<li>
						<a href="#" title="Career">Career</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub06/sub01_en.php" title="Desired Talents">Desired Talents</a></li>
							<li class="dp_f dp_c "><a href="/sub06/sub02_en.php" title="Grow Talents Ability cultivation system">Grow Talents Ability cultivation system</a></li>
							<li class="dp_f dp_c "><a href="/sub06/sub03_en.php" title="Benefits">Benefits</a></li>
							<li class="dp_f dp_c "><a href="/sub06/sub04_en.php" title="Recruitment Process">Recruitment Process</a></li>
							<li class="dp_f dp_c "><a href="/sub06/sub05_en.php" title="">Job Information</a></li>
							<li class="dp_f dp_c "><a href="/sub06/sub06_en.php" title="Apply Basic information">Apply Basic information</a></li>
						</ul>
					</li>
					
					<li>
						<a href="#" title="Contact">Contact</a>
						<span class="lnr lnr-chevron-down"></span>
						<span class="lnr lnr-chevron-up"></span>
						<ul class="m-depth2">
							<li class="dp_f dp_c "><a href="/sub07/sub01_en.php" title="Mandatory for Individual/Companies">Mandatory for Individual/Companies</a></li>
							<li class="dp_f dp_c "><a href="/sub07/sub02_en.php" title="">Estimate request</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
    </header>

	<script>
		$(function(){

			//pc gnb depth2
			$(".gnb_wrap").on("mouseenter",function(event){

				event.preventDefault();

				$(".header").addClass("over");
			});

			$(".gnb_wrap").on("mouseleave",function(event){

				event.preventDefault();

				$(".header").removeClass("over");
			});

			var flag = true;
			$(".btn_full_menu").click(function(event){

				event.preventDefault();

				event.preventDefault();
				if(flag){
				$(".header").addClass("openFull");

					flag= false;
				} else {
				$(".header").removeClass("openFull");

					flag= true;
				}
			});


			    //모바일 gnb depth2

				$(".m-btn").click(function(event){

					event.preventDefault();

					$(".m-navWrap").css({"width":"100%"});
					$(".bBg").stop().fadeIn();
					$(".m-navbox").stop().addClass("on");
					$("html, body").css("overflow","hidden");
				});

				$(".closeBtn").click(function(event){

					event.preventDefault();

					$(".bBg").stop().fadeOut();
					$(".m-navWrap").css({"width":"0"});
					$(".m-navbox").stop().removeClass("on");
					$(".m-depth2").stop().slideUp();
					$(".m-nav > li").removeClass("on");
					$("html, body").css("overflow","auto");
				});

				$(".m-nav > li > a").on("click",function(event){

					event.preventDefault();
					
					$(this).parent().siblings().children(".m-depth2").stop().slideUp();

					$(this).siblings(".m-depth2").stop().slideToggle();

					$(this).parent().siblings().removeClass("on");
					$(this).parent().toggleClass("on");

				});

		});
	</script>




