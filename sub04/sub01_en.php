<?
	include '../header_en.php';
	$topTxt01='Product Type';
?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img04 sub-top-imgs"></div>
	<div class="text-box">Product</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location_en.php';
?>

<style>
.small-txt {display:block; font-size:1.125rem; color:#9a9a9a;}
</style>

<!----------------중간영역--------------------------->


<div class="content_box">
	<h2 class="title">Product Type</h2>

	<div class="product-top">
		<!--<div><img src="/images/sub/sub0401_top01.jpg" style="max-width:100%;" alt=""></div>
		<div><img src="/images/sub/sub0401_top03.jpg" style="max-width:100%;" alt=""></div>
		<div><img src="/images/sub/sub0401_top04.jpg" style="max-width:100%;" alt=""></div>-->

		<div><img src="/images/sub/sub0401_re01.jpg" style="max-width:100%;" alt=""></div>
		<div><img src="/images/sub/sub0401_re02.jpg" style="max-width:100%;" alt=""></div>
		<div><img src="/images/sub/sub0401_re03.jpg" style="max-width:100%;" alt=""></div>
		<div><img src="/images/sub/sub0401_re04.jpg" style="max-width:100%;" alt=""></div>
		<div><img src="/images/sub/sub0401_re05.jpg" style="max-width:100%;" alt=""></div>

	</div>

	<dl>
		<dt><span class="c2 f30">Normal Concrete</dt>
		<dd>
			A combination material that is made by kneading the cement, water, fine aggregate, and coarse aggregate, and occasionally mixing the additive into such. This concrete’s mass unit is around 2,300kg/㎥. 
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">Lightweight Concrete</dt>
		<dd>
			Concrete that is made of light weight by using light weight aggregate or adding many bubbles. This concrete’s mass unit is 2,000kg/㎥or under.
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">Mass Concrete</dt>
		<dd>
			It’s a large size concrete that is used for large structures like concrete dam or large bridge etc, which needs to be built with a consideration of heat increase from the hydration of the cement. It’s a rich mix concrete including 0.8m or thicker depth of concrete for flat plate structure of large dimension and 0.5m or thicker prestressed concrete structures for a bearing wall which bottom part is secured.
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">Watertight Concrete</span></dt>
		<dd>
			It is a highly watertight concrete or low permeable concrete that is used for the structures like various storage facility, underground structure, maintenance structure, water tank, swimming pool, water and sewage facility, tunnel etc, whose safety, durability, functionality, maintenance and change of appearance are affected by permeable water and moisture.
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">Hot Weather Concrete</span></dt>
		<dd>
			It’s a concrete that is manufactured and used for construction in the weather condition where monthly average temperature is 25℃or the highest temperature is over 30℃. It is the concrete made to solve the increased risk issues like decrease in slump, reduction of air-entrained amount, cold joint incurrence, decrease in long-term strength and decrease of closeness in concrete surface layer that are caused by the concrete’s increasing temperature. To solve such problems, this concrete is made with the consideration of material’s treatment, rubbing, delivery, pouring and curing etc.
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">Shotcrete</dt>
		<dd>
			This is the concrete or mortar that are made by spraying on the construction area with a pressured air after mixing accelerating agent to the material delivered to the nozzle through hose using the compressor or pump. This type of concrete is used to prevent the weathering, peeling, exfoliation of lining, slanted area, slope, or wall of a tunnel (including inclined shaft, vertical shaft), underground space or a large communal structure, and maintenance/reinforcement of tunnel, dam or bridge.
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">High strength concrete</dt>
		<dd>
			A concrete whose designed standard strength is 40㎫ or over in normal concrete, and 27㎫ or over in lightweight concrete. This concrete hardens in early material age which is faster than the regular strength concrete, and its hardness continues to improve till later. Standard material age is generally set as 28 days, but depending on the hardness strength, it can set to 56 days or 90 days etc as well.
		</dd>
	</dl>
	<dl>
		<dt><span class="c2 f30">Mortar</dt>
		<dd>
			It is a substance that is made from kneading cement, water and fine aggregate and sometimes mixing additive materials to such. (It is used for the finishing outdoor or exterior wall)
		</dd>
	</dl>
</div>


<?
	include '../footer_en.php';
?>


<script>
$(function(){
	$('.product-top').slick({
		infinite : true, 	//무한 반복 옵션	 
		slidesToScroll : 1,		//스크롤 한번에 움직일 컨텐츠 개수
		speed : 1000,	 // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
		arrows : true, 		// 옆으로 이동하는 화살표 표시 여부
		dots : true, 		// 스크롤바 아래 점으로 페이지네이션 여부
		autoplay : true,			// 자동 스크롤 사용 여부
		autoplaySpeed : 1000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
		pauseOnHover : true,		// 슬라이드 이동	시 마우스 호버하면 슬라이더 멈추게 설정
		vertical : false,		// 세로 방향 슬라이드 옵션
		draggable : true, 	//드래그 가능 여부 
	});
});
</script>