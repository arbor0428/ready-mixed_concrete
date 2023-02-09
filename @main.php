<?
	include './header.php';
	//include './ks_popset.php';
	include './visit.php';
?>


    <div class="visual">
        <div class="textbox">
            <h2>HeungKuk Industry</h2>
            <p>40년 이상 쌓아온 흥국산업의 기술력을 바탕으로 <br><strong><!--친환경 신소재를 개발하여-->자원 순환을 선도합니다.</strong></p>
        </div>
    </div>
    <div class="container">
        <section class="section sec01">
            <div class="s-center">
                <h3>BUSINESS AREA</h3>
                <p class="h3-detail">레미콘, 골재뿐 아니라 친환경 신소재를 개발하여 자원순환을 선도하고 있습니다.</p>
                <div class="linkBox">
                    <ul>
                        <li class="ba1">
                            <a href="#">
                                <p>Building materials</p>
                                <h4>건축자재</h4>
                                <span>다양한 건축자재를 좋은 품질로<br>유지하겠습니다.</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                        <li class="ba2">
                            <a href="#">
                                <p>Ready-mixed concrete</p>
                                <h4>레미콘</h4>
                                <span>KS인증 받을 정도로<br>빼어난 레미콘 품질 자랑합니다.</span>
                                <span class="link"><img src="images/arrow01.png" alt="자세히보기"></span>
                            </a>
                        </li>
                        <li class="ba3">
                            <a href="#">
                                <p>Geopolymer</p>
                                <h4>친환경<br>건축 소재 개발</h4>
                                <span>이산화탄소를 배출하지 않는<br>친환경·고성능 콘크리트입니다.</span>
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
							<li>
								<a href="#">
									<span class="img"><img src="images/res_b01_bg.jpg" alt=""></span>
									<span class="txWrap">
										<span lang="en" class="tx">Research Institute</span>
										<strong>연구소 소개</strong>
										<span class="arr"></span>
									</span>
								</a>

								<p class="tx">경동은 지속적인 기술개발과 투자로 국내광산 <br> 최고의 기술력을 자랑하고 있습니다. </p>

								<div class="sec_button">
									<a lang="en" class="jt_btn" href="#"><span>View More</span></a>
								</div>
							</li>

							<li>
								<a href="#">
									<span class="img"><img src="images/res_b02_bg.jpg" alt=""></span>
									<span class="txWrap">
										<span lang="en" class="tx">Research</span>
										<strong>연구 분야</strong>
										<span class="arr"></span>
									</span>
								</a>

								<p class="tx">거대한 자연을 상대로 운영되는 광산에서의 안전은<br>아무리 강조해도 지나침이 없을 것입니다.</p>

								<div class="sec_button">
									<a lang="en" class="jt_btn" href="#"><span>View More</span></a>
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
					 <?
						//인증서	
						include 'slick02.php';
					?>
            </div>
        </section>
        <section class="section sec04">
            <div class="lft">
                <div class="imgbg"></div>
                <p class="category">Partners</p>
                <div class="wrap clearfix">
                    <h4>주요 협력사</h4>
                    <p class="desc">최고의 품질과 차별하된 서비스로<br>고객만족에 최선의 노력을 다하겠습니다.</p>
                    <a href="#" class="more">More View</a>
                </div>
            </div>
            <div class="mid">
                <div class="imgbg"></div>
                <p class="category">Recruit</p>
                <div class="wrap clearfix">
                    <h4>채용안내</h4>
                    <p class="desc">흥국산업의 미래가 될<br>창의적이고 우수한 인재를 기다립니다.</p>
                    <a href="#" class="more">More View</a>
                </div>
            </div>
            <div class="rgt">
                <div class="imgbg"></div>
                <p class="category">NOTICE</p>
                <div class="wrap clearfix">
                    <h4>흥국NEWS</h4>
                    <p class="desc">흥국산업의 새로운 소식을<br>안내드립니다.</p>
                    <a href="#" class="more">More View</a>
                </div>
            </div>
        </section>
    </div>

<?
	include './footer.php';
?>