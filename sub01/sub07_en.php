<?
	include '../header_en.php';
	$topTxt01='Location and Contact Information';
?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img01 sub-top-imgs"></div>
	<div class="text-box">About HK</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location_en.php';
?>


<!----------------중간영역--------------------------->



<div class="content_box">

	<h2 class="title">Location and Contact Information</h2>

	<div class="maps">
		<!-- * 카카오맵 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1642262790629" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>

		<!--
			2. 설치 스크립트
			* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1642262790629",
				"key" : "28tg7",
				//"mapWidth" : "640",
				"mapHeight" : "460"
			}).render();
		</script>
	</div>

	<dl class="p-36 loca">
		<dt><span class="f24">Address or Phone number</span></dt>
		<dd>20, Chogwangsandan-ro, Hanam-si, Gyeonggi-do, Republic of Korea<br> <span class="c2">TEL</span>&nbsp; 1899-8001 <!--(02-427-0445 / 02-427-0475)-->(Sales Management #1 02-427-0445, Sales Management #2 02-427-0475)<br><span class="c2 ">FAX</span>&nbsp; 02-427-2840</span></dd>

	</dl>
	<dl class="p-36 loca">
		<dt><span class="f24">Directions</span></dt>
		<dd>
			<div class="loca-box">
				<div class="icons bus"></div>
				<div class="txt">
					<span class="c2 f20 bold">By bus</span><br>
					<span style="font-weight:700;">Sang-il elementary school:</span>Get on bus at Sang-il elementary school bus stop (Local town bus Choi-01) → Get off at Songrim town gate bus stop<br>
					<span style="font-weight:700;">Gangdong station: </span>Take bus at Gangdong station bus stop (Direct bus 1113) → Get off at Sang-il elementary school bus stop → Transfer at Sang-il elementary bus stop(local town bus Choi-01) → Get off at Songrim town gate bus stop
				</div>
			</div>
			<div class="loca-box">
				<div class="icons car"></div>
				<div class="txt">
					<span class="c2 f20 bold">By car</span><br>
					<span style="font-weight:700;">Sang-il elementary school :</span> CHeungkuknho-daero (0.1km) → Gamcho-ro (2.1km) → Chogwangsan-danseo-ro(0.4km)<br>
					 <span style="font-weight:700;">Gangdong station : </span>CHeungkuknho-daero (4.0km) → Gamcho-ro(2.1km) → Cho-gwangsan-danseo-ro(0.4km)<br>
					 <span style="font-weight:700;">Seo-hanam IC : </span>Seo-hanam-ro(0.3km) → Gamcho-ro(1.8km) → Cho-gwangsan-danseo-ro (0.4km)
				</div>
			</div>
		</dd>
	</dl>
</div>


<?
	include '../footer_en.php';
?>

