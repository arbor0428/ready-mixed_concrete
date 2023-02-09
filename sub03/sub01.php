<?
	include '../header.php';
	$topTxt01='레미콘';
?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img03 sub-top-imgs"></div>
	<div class="text-box">사업분야</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>


<!----------------중간영역--------------------------->


<div class="content_box">
	<h2 class="title">레미콘</h2>

	<div class="txt-c">
		<img src="/images/sub/bus_top01a.jpg" alt="레미콘 상단이미지">
	</div>

	<dl>
		<dt><span class="f30 bold">레미콘 정의</span></dt>
		<dd>
			<!--
			아직 굳지 않은 상태로 배달되는 콘크리트. 재료 기타 보통의 콘크리트와 같음.<br>
			믹서로 다 비빈 다음 교반(攪拌) 하면서 운반하는 것, 어느 정도 비비고 운반 도중에 비빔을 끝내는 것,<br>
			운반 도중에 비비기 시작하여 배달하는 것. <br>
			-->
			콘크리트 제조 공장에서 아직 굳지 않은 상태로 차에 실어 그 속에서 뒤섞으며 현장으로 운반하는 콘크리트.

			<!--<span class="f16">* 콘크리트_틀 안에서 골재(조약돌, 자갈, 모래)와 물을 경화제(시멘트 또는 석회)로 혼합하여 굳힌 물질. <br>&nbsp; 압축을 견디는 물질.</span>-->
		</dd>
	</dl>
	<dl>
		<dt><span class="f30 bold">콘크리트 정의</span></dt>
		<dd>
			시멘트에 모래와 자갈, 골재 따위를 적당히 섞고 물에 반죽한 혼합물. 만드는 방법이 간단하고 내구성이 커서 토목 공사나 건축의 주요 재료로 쓰임.
		</dd>
	</dl>

	<dl>
		<dt><span class="f30 bold">제조공정</span></dt>
		<dd>
			<div class="rm-step">
				<div class="inr">
					<div class="rm-step-icon"><img src="/images/sub/rm_step01.png" alt=""></div>
					<p class="f18">재료저장</p>
				</div>
				<div class="inr">
					<div class="rm-step-icon"><img src="/images/sub/rm_step02.png" alt=""></div>
					<p class="f18">계량</p>
				</div>
				<div class="inr">
					<div class="rm-step-icon"><img src="/images/sub/rm_step03.png" alt=""></div>
					<p class="f18">혼합</p>
				</div>
				<div class="inr">
					<div class="rm-step-icon"><img src="/images/sub/rm_step04.png" alt=""></div>
					<p class="f18">운반</p>
				</div>
			</div>
		</dd>
	</dl>


	<div class="tbl-wrap m-80">
		<table class="normalTbl ciment_tbl">
			<tr>
				<th>재료저장</th>
				<td>
					<ul class="list-st">
						<li>시멘트</li>
						<li>물과 반응하여 경화하는 광물질을 말하며, 일반적으로 레미콘 제조용으로 1종 보통 포틀랜드 시멘트를 사용하고 있으며, 기타 시멘트의 경우 특수 목적으로 사용한다.</li>
						<li>물</li>
						<li>물은 깨끗하고 기름 산, 유기물 등이 포함되지 않아야 한다.</li>
						<li>잔골재</li>
						<li>5mm체를 통과하고 0.08mm체에 남는 골재(염분0.04% 이하)</li>
						<li>굵은 골재</li>
						<li>골재 최대치수(20mm, 25mm, 40mm)를 통과하고 5mm체에 잔류하는 골재</li>
						<li>혼화재</li>
						<li>일반적으로 사용량이 시멘트 중량비 5% 이상인 첨가제(플라이애시, 고로슬래그 미분말, 실리카퓸 등)</li>
						<li>혼화제</li>
						<li>일반적으로 시멘트 중랑비 1% 미만인 첨가제(AE제, AE감수제, 고성능 감수제, 유동화제 등)</li>
					</ul>
				</td>
			</tr>
			<tr>
				<th>계량</th>
				<td>레미콘 1대(6m³) 당 투입되는 원재료(시멘트, 골재, 혼화제)의 양을 정확하게 계량하는 공정</td>
			</tr>
			<tr>
				<th>혼합</th>
				<td>계량된 재료가 분리되지 않도록 충분히 혼합(Mix)하여 균일하게 배출시키는 공정</td>
			</tr>
			<tr>
				<th>운반</th>
				<td>계량과 혼합 공정을 마친 굳지 않은 콘크리트를 믹스트럭(Mixer Truck)으로 운반하여 90분 이내에 공사현장에 타설을 완료하여야 하는 공정</td>
			</tr>
		</table>
	</div>
</div>


<?
	include '../footer.php';
?>

