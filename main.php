<?
	include './header.php';
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
						<p>40년 이상 쌓아온 흥국산업의 기술력을 바탕으로 <br><!--<strong>-->자원 순환을 선도합니다.<!--</strong>--></p>
					</div>
				</a>
			</div>

			<div class="s02">
				<a href="#">
					<div class="bgArea"></div>
					<div class="txtArea" style="opacity:0;">
						<h2 class="c1">Sustainable future with HK</h2>
						<p>자연을 먼저 생각하는 친환경 경영과 기술로 <br><!--<strong>-->미래를 열어갈 것입니다.<!--</strong>--></p>
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
                <p class="h3-detail">레미콘, 골재뿐 아니라 친환경 신소재를 개발하여 자원순환을 선도하고 있습니다.</p>
                <div class="linkBox" data-aos="fade-up" data-aos-duration="1000">
                    <ul>
                        <li class="ba1">
                            <a href="/sub03/sub02.php">
                                <p><!--Building materials-->Construction materials</p>
                                <h4>건축자재</h4>
                                <span>다양한 건축자재를 좋은 품질로<br>유지하겠습니다.</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                        <li class="ba2">
                            <a href="/sub03/sub01.php">
                                <p>Ready-mix concrete</p>
                                <h4>레미콘</h4>
                                <span>KS인증 받을 정도로<br>빼어난 레미콘 품질을 자랑합니다.</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                        <li class="ba3">
                            <a href="/sub03/sub03.php">
                                <p><!--Geopolymer-->Sustainable innovations</p>
                                <h4><!--친환경<br>건축 소재 개발-->지오폴리머</h4> 
                                <span><!--이산화탄소를 배출하지 않는<br>친환경·고성능 콘크리트입니다.-->
									친환경, 고내구성, 고기능성, 경제성으로<br>건설 기초 소재부터 유해 물질 차폐까지 활용도가 다양합니다.
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
                <h3>기술연구소</h3>
                <p class="h3-detail">인류와 환경이 융화되는 연구개발, 흥국산업 기술연구소가 선도하겠습니다.</p>
				<div class="sec02Cont">

					<div class="sec02_list">
						<ul class="clearfix">
							<li data-aos="fade-right" data-aos-duration="1000"> 
								<a href="/sub02/sub01.php">
									<span class="img"><img src="images/res_b01_bg.jpg" alt=""></span>
									<span class="txWrap">
										<span lang="en" class="tx">Research Institute</span>
										<strong>연구소 소개</strong>
										<span class="arr"></span>
									</span>
								</a>

								<p class="tx">지속가능성이 우수한 연구를 진행하고 있으며,<br>미래의 환경과 인류를 위해 헌신적인 연구개발을 수행합니다.</p>

								<div class="sec_button">
									<a lang="en" class="jt_btn" href="/sub02/sub01.php"><span>View More</span></a>
								</div>
							</li>

							<li data-aos="fade-left" data-aos-duration="1000">
								<a href="/sub02/sub03.php">
									<span class="img"><img src="images/res_b02_bg.jpg" alt=""></span>
									<span class="txWrap">
										<span lang="en" class="tx"><!--Research-->Sustainable innovations</span>
										<strong>연구 분야</strong>
										<span class="arr"></span>
									</span>
								</a>

								<p class="tx">최신 설비와 전문성이 우수한 연구진을 통해<br>지속가능성이 우수한 연구를 진행합니다.</p>

								<div class="sec_button">
									<a lang="en" class="jt_btn" href="/sub02/sub03.php"><span>View More</span></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
            </div>
        </section>
        <section class="section sec03">
            <div class="s-center">
                <h3>인증정보</h3>
                <p class="h3-detail">끊임없이 더 좋은 레미콘, 더 좋은 품질 향상을 위해 나아가겠습니다.</p>
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
                    <h4>흥국NEWS</h4>
                    <p class="desc">흥국산업의 새로운 소식을<br>안내드립니다.</p>
                    <a href="/sub01/sub08.php" class="more">More View</a>
                </div>
            </div>
            <div class="lft">
                <div class="imgbg"></div>
                <p class="category"><!--Partners-->Estimate</p>
                <div class="wrap clearfix">
                    <h4><!--주요 협력사-->온라인 견적</h4>
                    <p class="desc">최고의 품질과 차별화된 서비스로<br>고객만족에 최선의 노력을 다하겠습니다.</p>
                    <a href="/sub07/sub02.php" class="more">More View</a>
                </div>
            </div>
            <div class="mid">
                <div class="imgbg"></div>
                <p class="category"><!--Recruit-->Careers</p>
                <div class="wrap clearfix">
                    <h4>채용안내</h4>
                    <p class="desc">흥국산업의 미래가 될<br>창의적이고 우수한 인재를 기다립니다.</p>
                    <a href="/sub06/sub04.php" class="more">More View</a>
                </div>
            </div>
            
        </section>
    </div>

<?
	include './footer.php';
?>


