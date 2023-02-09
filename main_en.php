<?
	include './header_en.php';
	include './ks_popset.php';
	include './visit.php';
?>

<style>
/* 메인슬라이드 */
#mainSlide {position:relative; width:100%; height:940px; overflow:hidden;}

#mainSlide .slick-list {width:100%; height:100%;}
#mainSlide .slick-track {width:100%; height:100%;}
#mainSlide .slick-slide {width:100%; height:940px; overflow:hidden;}
#mainSlide .slick-slide .s01 .bgArea {height:100%; background:url('/images/slide01.jpg') center center no-repeat; background-size:cover; transition: all 5s;}
#mainSlide .slick-slide .s02 .bgArea {height:100%; background:url('/images/slide02a.jpg') center center no-repeat; background-size:cover; transition: all 5s;}

#mainSlide .slick-slide > div, #mainSlide .slick-slide > div > div {position:relative; height:100%;}
#mainSlide .slick-slide .bgArea:before { content: ""; display:none; height:100%; width:100%; position:absolute; top:0; left:0;}
#mainSlide .slick-slide.ani .bgArea:before {display:block;}
#mainSlide .slick-slide.ani .bgArea {-ms-transform: scale(1.05); -moz-transform: scale(1.05); -webkit-transform: scale(1.05); -o-transform: scale(1.05); transform: scale(1.05);}

#mainSlide .slick-dots {position:absolute; left:50%;  transform: translateX(-50%); text-align:center; bottom:80px; z-index:50;}
#mainSlide .slick-dots:after {content:""; display:block; clear:both;}
#mainSlide .slick-dots li {display:inline-block; width:8px; height:8px; border:2px solid #fff; transition: all 0.5s; margin:0 7px; cursor:pointer; border-radius:20px;}
#mainSlide .slick-dots li.slick-active {display:inline-block; width:36px; height:8px; border:2px solid #183728; background:#183728;}
#mainSlide .slick-dots li button {display:none;}

.slick-dotted.slick-slider {margin-bottom:0 !important;}



#mainSlide .slick-slide .txtArea {position:absolute; width:100%; top: 35%; left: 50%; transform: translateX(-50%); text-align:center; opacity:0; overflow:hidden; z-index:4;}
#mainSlide .slick-slide .txtArea h2 {margin-bottom:70px; font-size:3.375rem; color:#183728; font-weight:900;  font-family:'Lato', sans-serif;  /*letter-spacing:3px;*/}
#mainSlide .slick-slide .txtArea p {color:#fff; font-size:2.250rem; line-height:48px;/* text-shadow: 2px 2px 2px rgba(0,0,0,0.3);*/}

#mainSWrap {position:relative; width:100%; top:0;}
#mainSWrap:after {content:""; display:block; clear:both;}

@media screen and (max-width:1280px) {
	#mainSlide .slick-slide .txtArea h2 {font-size: 2.375rem; margin-bottom: 40px;}
	#mainSlide .slick-slide .txtArea p {font-size: 1.875rem;}
}
@media screen and (max-width:890px) {
	#mainSlide, #mainSlide .slick-slide {height:650px;}
}

@media screen and (max-width:768px) {

}

@media screen and (max-width:590px) {
	#mainSlide .slick-slide .txtArea {padding:0 20px; box-sizing:border-box;}
	#mainSlide .slick-slide .txtArea h2 {margin-bottom:35px; font-size:2.5rem;}
	#mainSlide .slick-slide .txtArea p {line-height: 28px; font-size:1rem;}
}
</style>


	<!--
    <div class="visual">
        <div class="textbox">
            <h2>HeungKuk Industry</h2>
            <p>40년 이상 쌓아온 흥국산업의 기술력을 바탕으로 <br><strong>자원 순환을 선도합니다.</strong></p>
        </div>
    </div>
	-->
	<div id="mainSWrap">
		<!-- main slide -->
		<div id="mainSlide">
			<div class="s01">
				<a href="#">
					<div class="bgArea"></div>
					<div class="txtArea" style="opacity:0;">
						<h2><!--HeungKuk Industry--><img src="/images/common/hk_text_img.png" style="display:inline-block"></h2>
						<p>With over 40 years of experience,<br>HK leads the resource circulation industry.</p>
					</div>
				</a>
			</div>

			<div class="s02">
				<a href="#">
					<div class="bgArea"></div>
					<div class="txtArea" style="opacity:0;">
						<h2 class="c1">Sustainable future with HK</h2>
						<p>We strive to be the pioneers of sustainable technology and<br>management that puts nature first.</p>
					</div>
				</a>
			</div>
		</div>
		<!-- //main slide -->
	</div>

    <div class="container">
        <section class="section sec01">
            <div class="s-center">
                <h3>Business Area</h3>
                <p class="h3-detail">
					In the construction materials industry, HK has been a large contributor to the greater Seoul area.<br>
					We provide quality products to our customers with constant efforts to find sustainable solutions for the future.
				</p>
                <div class="linkBox" data-aos="fade-up" data-aos-duration="1000">
                    <ul>
                        <li class="ba1">
                            <a href="/sub03/sub02_en.php">
                                <p>Construction materials</p>
                                <h4>Aggregate</h4>
                                <span>We strictly monitor and control the quality of our product.</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                        <li class="ba2">
                            <a href="/sub03/sub01_en.php">
                                <p>Ready-mix concrete</p>
                                <h4>Ready-mix concrete</h4>
                                <span>We provide both KS certified and Low Carbon certified products to our customers.</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                        <li class="ba3">
                            <a href="/sub03/sub03_en.php">
                                <p>Sustainable innovations</p>
                                <h4>Geopolymer</h4> 
                                <span><!--이산화탄소를 배출하지 않는<br>친환경·고성능 콘크리트입니다.-->
								Our patent technology using a byproduct from coal power plants, is highly durable and functional while creating sustainable economic characteristics. This material can be applied to a wide variety of industries including construction, military, and aerospace.
								</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section sec02">
            <div class="s-center">
                <h3>R&D Center</h3>
                <p class="h3-detail">
					<!--Heungkuk Industry’s technology research institute will lead the research and <br>development that harmonize Humanity with environment.-->
					HK constantly aims to find sustainable technology innovations for advanced materials. Our R&D center focuses on discovering sustainable material solutions for not only in the construction industry but also for the environment. Moreover, it takes part in improving the quality and efficiency of our overall production.
				</p>
				<div class="sec02Cont">

					<div class="sec02_list">
						<ul class="clearfix">
							<li data-aos="fade-right" data-aos-duration="1000"> 
								<a href="/sub02/sub01_en.php">
									<span class="img"><img src="images/res_b01_bg.jpg" alt=""></span>
									<span class="txWrap">
										<span lang="en" class="tx">Research Institute</span>
										<strong>About</strong>
										<span class="arr"></span>
									</span>
								</a>

								<p class="tx">Our R&D center aims to achieve sustainable material solutions that emphasize humanity and environment.</p>

								<div class="sec_button">
									<a lang="en" class="jt_btn" href="/sub02/sub01_en.php"><span>View More</span></a>
								</div>
							</li>

							<li data-aos="fade-left" data-aos-duration="1000">
								<a href="/sub02/sub03_en.php">
									<span class="img"><img src="images/res_b02_bg.jpg" alt=""></span>
									<span class="txWrap">
										<span lang="en" class="tx">Sustainable innovations</span>
										<strong>Research fields</strong>
										<span class="arr"></span>
									</span>
								</a>

								<p class="tx">Our R&D Center conducts research with advanced equipment and experts.</p>

								<div class="sec_button">
									<a lang="en" class="jt_btn" href="/sub02/sub03_en.php"><span>View More</span></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
            </div>
        </section>
        <section class="section sec03">
            <div class="s-center">
                <h3>Certifications</h3>
                <p class="h3-detail">We monitor and regulate our Products with high standards.</p>
					<div data-aos="fade-up" data-aos-duration="1000">
					 <?
						//인증서	
						include 'slick02.php';
					?>
					</div>
            </div>
        </section>
        <section class="section sec04">
			<div class="rgt">
                <div class="imgbg"></div>
                <p class="category">Notice</p>
                <div class="wrap clearfix">
                    <h4>Heungkuk Industry NEWS</h4>
                    <p class="desc">We provide the latest news of Heungkuk Industry.</p>
                </div>
                <a href="/sub01/sub08_en.php" class="more">More View</a>
            </div>
            <div class="lft">
                <div class="imgbg"></div>
                <p class="category"><!--Partners-->Estimate</p>
                <div class="wrap clearfix">
                    <h4><!--주요 협력사-->Online estimation</h4>
                    <p class="desc">We will do our best to provide a satisfactory customer service with the best quality and distinguished service.</p>
                </div>
                <a href="/sub07/sub02_en.php" class="more">More View</a>
            </div>
            <div class="mid">
                <div class="imgbg"></div>
                <p class="category">Career</p>
                <div class="wrap clearfix">
                    <h4>Apply</h4>
                    <p class="desc">We are looking for creative and outstanding applicants who will become the future of Heungkuk Industry.</p>
                </div>
                <a href="/sub06/sub04_en.php" class="more">More View</a>
            </div>
            
        </section>
    </div>

<?
	include './footer_en.php';
?>


