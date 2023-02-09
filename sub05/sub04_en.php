<?

	include '../header_en.php';
	$topTxt01='KS certificate';
	
	$table_id = 'table_1655712169';	

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	//게시판 환경설정
	include $boardRoot."config.php";
	$list_file = 'gallery01_en.php';
	$write_file = 'write01a.php';
	$view_file = 'view01c_en.php';

?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img05 sub-top-imgs"></div>
	<div class="text-box">Certification</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location_en.php';
?>


<!----------------중간영역--------------------------->


<div class='content_box'>

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


<?
	include '../footer_en.php';
?>

