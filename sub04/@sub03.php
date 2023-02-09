<?
	include '../header.php';
	$topTxt01='제품 특성 및 장점';
?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img04 sub-top-imgs"></div>
	<div class="text-box">제품정보</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>


<!----------------중간영역--------------------------->


<style>
.box-con.pd-left-box, .box-con.pd-right-box {padding:0 40px; box-sizing:border-box;}

.box-con .tit {padding:14px 0;  background:#0a8001; color:#fff; font-size:1.5rem; text-align:center;}
.box-con .txt {font-size:1.125rem; margin:40px 0;}
.box-con .txt > p.txt-tit {position:relative; font-size:1.375rem; font-weight:600; padding-left:16px; margin-bottom:20px;}
.box-con .txt > p.txt-tit:before {content:""; display:block; position:absolute; top:50%; left:0; transform:translateY(-50%); width:6px; height:6px; background:#e4c51c;}

.res-box p.sub-tit {padding:14px 0; font-size:1.375rem; font-weight:600; background:#f4f5f8; text-align:center; border:1px solid #eee;}
.res-box p.f20 {position:relative; padding-left:16px;}
.res-box p.f20:before {content:""; display:block; position:absolute; top:50%; left:0; transform:translateY(-50%); width:6px; height:6px; background:#e4c51c;}
.res-box ol {padding-left:16px; box-sizing:border-box;}
.res-box ol li {list-style:decimal; line-height:1.5; font-size:1.125rem; padding-left:8px; margin:8px 0; box-sizing:border-box;}

.box-con div.res-img img {border:1px solid #e1e1e1; box-sizing:border-box;}
.pd-advantage {padding:0 40px; box-sizing:border-box; }
.pd-advantage div.title {max-width:560px; padding:14px 0;  background:#0a8001; color:#fff; font-size:1.5rem; text-align:center;}

.pd-advantage div.pd-advantage-img {display:flex; margin:40px 0;}
.pd-advantage div.pd-advantage-img .inr {flex:0 1 auto; max-width:440px; padding:4px; box-sizing:border-box;}
</style>

<div class="content_box">

	<h2 class="title">제품 특성 및 장점</h2>

	<div class="col2-wrap">
		<div class="box-con pd-left-box">
			<div class="tit">
				100Mpa 초고강도 콘크리트
			</div>

			<div class="txt">
				<p class="txt-tit">공동연구기관 및 참여 연구원</p>
				<p>
					서울대학교 공학연구소 소장 이교일 외 6명<br>
					- 1995년 10월 논문 발표
				</p>
			</div>

			<div class="res-box">
				<p class="sub-tit">고품질 시공을 위한 고내구성 콘크리트의<br>개발 및 실용화 연구</p>

				<p class="f20 bold1 m-20 m_20">연구내용</p>

				<ol>
					<li>
						콘크리트 구조물의 성능 저하 및 원인 규명<br>
						<span class="c2">- 구조물의 성능 저하 개념 및 성능 저하 과정, 성능 저하의 유형별 분석</span>
					</li>
					<li>
						콘크리트 구조물의 내구연한 증진 방안<br>
						<span class="c2">- 설계 기준 규정, 각국의 내구연한 사례 분석, 토목구조물의 내구연한 결성에 미치는 영향요인 분석, 내구성 증진 메커니즘 분석</span>
					</li>
					<li>
						고내구성 콘크리트의 적정 배합 도출을 위한 실험<br>
						<span class="c2">- 유동성 및 내구 특성, 강도 특성 실험, 내투수성 시험 내부식성 시험, 내황산염 시험, 동결융해 저항성 시험</span>
					</li>
					<li>
						고내구성 콘크리트의 적정 배합 도출을 위한 실험 결과 및 분석<br>
						<span class="c2">- 유통성, 강도 특성, 내투수성, 내부식성, 동결저항성, 내황산염</span>
					</li>
					<li>
						적정 배합 도출
					</li>
					<li>
						현장 적용시험
					</li>
					<li>
						결론

					</li>
				</ol>
			</div>
		</div>
		<div class="box-con pd-right-box">
			<div class="tit">
				80MPa 초고강도, 무다짐 콘크리트
			</div>

			<div class="txt">
				<p class="txt-tit">공동연구기관 및 참여 연구원</p>
				<p>
					단국대학교 시공재료연구실 실장 외 7명<br>
					- 2004년 4월 논문 발표
				</p>
			</div>

			<div class="res-img txt-c">
				<img src="/images/sub/res_img.jpg" style="max-width:100%;" alt="">
			</div>
		</div>
	</div>

	<div class="pd-advantage m-60">
		<div class="title">롯데월드 초고층 타설(국내 최대 높이)</div>

		<div class="pd-advantage-img">
			<div class="inr">
				<img src="/images/sub/pd_ad.jpg" style="max-width:100%;" alt="">
			</div>
			<div class="inr">
				<img src="/images/sub/pd_ad01.jpg" style="max-width:100%;" alt="">
			</div>
			<div class="inr">
				<img src="/images/sub/pd_ad02.jpg" style="max-width:100%;" alt="">
			</div>
		</div>
	</div>


	<h3 class="sub-title m-100">제품 관리</h3>

	<div class="m-60 m_60">
		<img src="/images/sub/sub0403_step_a.jpg" style="max-width:100%;" alt="제품관리과정">
	</div>

	<div class="pt-box">
		<div class="inr f18 txt-c lh18">
			6,500㎡의 공장 부지에 엄선된 골재를 실내 상옥시설에 적재 후 사용<br>
			<span class="c2 f22">최고 품질의 콘크리트 생산</span>
		</div>
	</div>

	<div class="m-60 txt-c">
		<img src="/images/sub/sub0403_hk.jpg" style="max-width:100%;" alt="흥국산업">
	</div>

</div>


<?
	include '../footer.php';
?>

