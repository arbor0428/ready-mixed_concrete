<?

	include '../header.php';
	$topTxt01='지식재산권';
	
	$table_id = 'table_1642307954';	

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	//게시판 환경설정
	include $boardRoot."config.php";
	$list_file = 'gallery01.php';
	$write_file = 'write01bb.php';
	$view_file = 'view01bb.php';

?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img02 sub-top-imgs"></div>
	<div class="text-box">기술연구소</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>


<!----------------중간영역--------------------------->


<div class='content_box'>
	<!--<h2 class="title">지식재산권</h2>-->

	<div class="tab_wrap">
		<a href="/sub02/sub06.php">국내외 특허</a>
		<a href="/sub02/sub06_1.php" class="active">학술지 게제</a>
	</div>
	<?

		if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
		/*
			echo $type.'<br>';
			echo$write_file.'<br>';
			echo$list_file.'<br>';
			echo$view_file.'<br>';
		*/
		}

		switch($type){
			case 'write' :
			case 'edit' :
								include $boardRoot.$write_file;
								break;

			case 'list' :
								include $boardRoot.'query.php';	//게시판 내용 쿼리
								include $boardRoot.$list_file;	//게시판 리스트
								include $boardRoot.'pageNum.php';	//게시판 페이지번호
								break;

			case 'view' :
								include $boardRoot.$view_file;
								break;

			case 're_write' :
			case 're_edit' :
								include $boardRoot.'re_write.php';
								break;

			case 're_view' :
								include $boardRoot.'re_view.php';
								break;
		}
	?>
</div>


<?
	include '../footer.php';
?>

