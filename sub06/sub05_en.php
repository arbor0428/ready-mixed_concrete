<?

	include '../header_en.php';
	$topTxt01='Job Information';

	$table_id = 'table_1655453975';

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	$engChk='1';

	//제이쿼리 달력
	$sRange = '90';
	$eRange = '0';
	include '../module/Calendar.php';

	//게시판 환경설정
	include $boardRoot."config.php";

?>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img06 sub-top-imgs"></div>
	<div class="text-box">Career</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location_en.php';
?>

<!----------------중간영역--------------------------->

<div class='content_box'>
	<h2 class="title">Job Information</h2>

	<?
if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
	
	echo $write_file.'/';
	echo $list_file.'/';
	echo $view_file.'/';

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
	include '../footer_en.php';
?>

