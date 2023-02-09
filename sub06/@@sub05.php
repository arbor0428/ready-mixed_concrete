<?

	include '../header.php';
	$topTxt01='채용정보';
	
	//if(!$type)	$type = 'write';
/*
	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){

	$name = '아이웹';
	$mobile = '01012341234';
	$place01 = '서울시 마포구 매봉산로 37';
	$strong = '';
	$slump = '';
	$needs = '';
	
	}
*/

?>

<!--------------서브 비주얼영역---------------------->
<div class="sub_visual">
	<div class="sub-top-img07 sub-top-imgs"></div>
	<div class="text-box">인재채용</div>
</div>

<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>

<!----------------중간영역--------------------------->

<div class='content_box'>
	<h2 class="title">채용정보</h2>
<?

	if(!$type)							$type='list';
	//echo$type;
	if($type == 'list')										include 'list.php';
	elseif($type == 'view')								include 'view.php';
	elseif($type == 'write' || $type=='edit')		include 'write.php';
	//elseif($type == 'search')							include 'search.php';

?>
</div>


<?
	include '../footer.php';
?>

