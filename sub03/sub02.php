<?
	include '../header.php';
	$topTxt01='건축자재';
?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img09 sub-top-imgs"></div>
	<div class="text-box">사업분야</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>


<!----------------중간영역--------------------------->


<div class="content_box">
	<h2 class="title">건축자재</h2>

	<div class="pt-box">
		<div class="inr f24 txt-c">
			레미콘의 기초재료인 <span class="c2">다양한 건축자재</span>를 <span class="c2">좋은 품질</span>로 유지하겠습니다.
		</div>
	</div>

	<dl>
		<dt><span class="f30 bold">골재란</span></dt>
		<dd>
			모르타르 또는 콘크리트의 뼈대가 되는 재료로, 견고하고 화학적으로 안정된 것이어야 하며 주로 모래와 자갈을 사용하는데,
			낱알의 지름에 따라 5mm이상인 조골재(粗骨材), 5mm이하의 세골재(細骨材)로 나눈다.
		</dd>
	</dl>

	<h3 class="sub-title m-60">규격 및 용도</h3>

	<p class="tbl-wrap-p">※ 표를 좌우로 움직이시면 자세하게 보실 수 있습니다.</p>
	<div class="tbl-wrap concrete_table m-60 ">
		<table class="normalTbl tc">
			<tr>
				<th>구분</th>
				<th>품명</th>
				<th>입자 크기의 범위</th>
				<th>용도</th>
			</tr>
			<tr>
				<td rowspan='3' class='txt-c'>콘크리트용 부순 굵은골재(자갈)</td>
				<td>#57</td>
				<td>25~5mm</td>
				<td>PC 제품, PILE, 전주, R/C 제조용</td>
			</tr>
			<tr>
				<td>#67</td>
				<td>19~5mm</td>
				<td>PC 제품, PILE, 전주, R/C 제조용</td>
			</tr>
			<tr>
				<td>#78</td>
				<td>13~25mm</td>
				<td>아스팔트 표층용, 방수공사, 우물정수공사<//td>
			</tr>


			<tr>
				<td rowspan='2'>콘크리트용 부순 잔골재(모래)</td>
				<td>왕사</td>
				<td>5~3mm</td>
				<td>BLOCK 제조, 벽돌</td>
			</tr>
			<tr>
				<td>중사</td>
				<td>3~0.15mm</td>
				<td>콘크리트제조용 R/C 제조용</td>
			</tr>
			
			<tr>
				<td rowspan='2'>혼합골재</td>
				<td>기층용</td>
				<td>40mm이하<//td>
				<td>도로포장 기층용</td>
			</tr>
			<tr>
				<td>보조 기층용</td>
				<td>75mm이하</td>
				<td>도로포장 보조기층용</td>
			</tr>

			<tr>
				<td>쇄사</td>
				<td>석분</td>
				<td>8mm이하</td>
				<td>BLOCK제조, 벽돌, 혼합골재 혼합용</td>
			</tr>

		</table>
	</div>
</div>


<?
	include '../footer.php';
?>

