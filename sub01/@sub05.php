<?
	include '../header.php';
	$topTxt01='비전';
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

<style>
.vision-img-box {text-align:center; background:#f0f2dc; padding:34px 0;}
.vision-box {display:flex; margin-top:50px;}
.vision-box div {width:calc(33.33% - 20px); font-size:1.125rem; line-height:1.5; text-align:center; margin:10px; padding:24px 0; border:1px solid #e1e1e1; background:#f7f7f7; box-sizing:border-box;}
</style>

<div class="content_box">
	<h2 class="title">비전</h2>
	<div class="vision-img-box">
		<img src="/images/sub/vision.png" alt="흥국산업 비전">
	</div>
	
	<div class="vision-box">
		<div>
			<p class="f26 c2 m_24 bold1">TECHNICAL SKILLS</p>
			흥국산업은 기술발전에 한계를 두지 않으며,<br>
			보다 나은 기술력을 보유하기 위해<br>
			항상 노력하고 있습니다.
		</div>
		<div>
			<p class="f26 c3 m_24 bold1">CREATIVITY</p>
			흥국산업은 창의적인 사고를 가진<br>
			임직원으로 구성되어 있으며,<br>
			혁신적인 아이디어를 통해<br>
			人類共榮(인류공영)에 이바지 할 것입니다.
		</div>
		<div>
			<p class="f26 c4 m_24 bold1">VALUE CREATION</p>
			흥국산업은 환경친화적인 미래를 위해<br>
			노력하는 회사이며,<br>
			고객과 흥국의 가치를 창조하기 위해<br>
			나아갈 것입니다.
		</div>
	</div>
</div>


<?
	include '../footer.php';
?>

