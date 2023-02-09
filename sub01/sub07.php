<?
	include '../header.php';
	$topTxt01='위치 및 연락처';
?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img01 sub-top-imgs"></div>
	<div class="text-box">회사소개</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>


<!----------------중간영역--------------------------->



<div class="content_box">

	<h2 class="title">위치 및 연락처</h2>

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
		<dt><span class="f24">주소</span></dt>
		<dd>경기도 하남시 초광산단로 20<br> <span class="c2">TEL</span>&nbsp; 1899-8001 <!--(02-427-0445 / 02-427-0475)-->(영업관리 1번 02-427-0445, 영업관리2번 02-427-0475)<br><span class="c2 ">FAX</span>&nbsp; 02-427-2840</span></dd>

	</dl>
	<dl class="p-36 loca">
		<dt><span class="f24">오시는 길</span></dt>
		<dd>
			<div class="loca-box">
				<div class="icons bus"></div>
				<div class="txt">
					<span class="c2 f20 bold">대중교통</span><br>
					상일초교 : 상일초등학교정류장 승차(마을버스 초이-01) → 송림마을입구정류장 하차<br>
					강동역 : 강동역정류장 승차(직행버스1113) → 상일초등학교정류장 하차 →<br>
					<span class="txtindent" style="display:inline-block; text-indent:69px;">상일초등학교정유장 환승(마을버스 초이-01) → 송림마을입구정류장 하차</span>
				</div>
			</div>
			<div class="loca-box">
				<div class="icons car"></div>
				<div class="txt">
					<span class="c2 f20 bold">자가용</span><br>
					 상일초교 : 천호대로(0.1km) → 감초로(2.1km) → 초광산단서로(0.4km)<br>
					 강동역 : 천호대로(4.0km) → 감초로(2.1km) → 초광산단서로(0.4km)<br>
					 서하남IC : 서하남로(0.3km) → 감초로(1.8km) → 초광산단서로(0.4km)
				</div>
			</div>
		</dd>
	</dl>
</div>


<?
	include '../footer.php';
?>

