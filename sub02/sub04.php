<?
	include '../header.php';
	$topTxt01='연구 과제';

	$table_id = 'table_1641910847';

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	//게시판 환경설정
	include $boardRoot."config.php";
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
	<h2 class="title">연구 과제</h2>

	<div class="tab_wrap">
		<a href="/sub02/sub04.php" class="active">수행과제</a>
		<a href="/sub02/sub05.php">연구성과</a>
	</div>

	<div class="tab_content">
		<?
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
</div>


<?
	include '../footer.php';
?>

