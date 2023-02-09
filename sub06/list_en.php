<?
	
	$nTime = mktime();
	
	$record_count = 30;  //한 페이지에 출력되는 레코드수

	$link_count = 10; //한 페이지에 출력되는 페이지 링크수

	if(!$record_start){
		$record_start = 0;
	}

	$current_page = ($record_start / $record_count) + 1;

	$group = floor($record_start / ($record_count * $link_count));

	//쿼리조건
	$query_ment = "";

	if($f_name)$query_ment .= " where $f_field like '%$f_name%'"; // 담당자
	//if($f_cmp_name)		$query_ment .= " and cmp_name like '%$f_cmp_name%'"; // 기업명
	//if($f_name)		$query_ment .= " and name like '%$f_name%'"; // 담당자
	
	//정렬방식
	$sort_ment = "order by uid asc";

	$query = "select * from hk_sub65 $query_ment $sort_ment";

	$result = mysql_query($query) or die("연결실패");

	$total_record = mysql_num_rows($result);

	$total_page = (int)($total_record / $record_count);

	if($total_record % $record_count){
		$total_page++;
	}

	$query2 = "select * from hk_sub65 $query_ment $sort_ment limit $record_start, $record_count";

	$result = mysql_query($query2);

?>

<script language='javascript'>

	function goSearch(){

	form = document.frm01;
	form.type.value = '';
	form.record_start.value = 0;
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();

	}

	function cwrite(){
		form = document.frm01;
		form.type.value = 'write';
		form.target = '';
		form.action = 'sub05.php';
		form.submit();
	}

	function cedit(uid){
		form = document.frm01;
		form.type.value = 'view';
		form.uid.value = uid;
		form.target = '';
		form.action = 'sub05.php';
		form.submit();
	}
	
	function ifra_xls(){
		
		form = document.frm01;
		
		form.type.value = '';
		
		form.target = '';
		
		form.action = 'excel01.php';
		
		form.submit();

	}

</script>

<form name='frm01' method='post' action='<?=$PHP_SELF?>'>
	<input type="text" style="display: none;">  <!-- 텍스트박스 1개이상 처리.. 자동전송방지 -->
	<input type='hidden' name='type' value=''>
	<input type='hidden' name='uid' value=''>
	<input type='hidden' name='mCade01' value=''>
	<input type='hidden' name='mCade02' value=''>
	<input type='hidden' name='passChk' value=''><!-- 미승인 상품도 확인할 수 있도록하는 변수 -->
	<input type='hidden' name='record_start' value='<?=$record_start?>'>
	<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<!--<h2 class="title">채용정보</h2>-->
		<!-- <a href="javascript:ifra_xls();" class="big cbtn red">엑셀다운로드</a> -->

		<!--
		<td align='right'>
			<select name="f_field" class='selectBox' style='width:100px;padding-left:10px;' title="검색구분">
				<option value='status' <?if($f_field == 'status') echo 'selected';?>>구분</option>
				<option value='cmp_name' <?if($f_field == 'cmp_name') echo 'selected';?>>기업명</option>
				<option value='name' <?if($f_field == 'name') echo 'selected';?>>담당자</option>
				<!-- <option value='email' <?if($f_field == 'email') echo 'selected';?>>이메일</option> 
			</select>

			<input type="text"  name="" class="textBox01" style='width:200px;padding:5px;' value="" onkeypress="if(event.keyCode==13){goSearch();}" title="검색어">
			<a href="javascript:goSearch();" class="small cbtn black">검색</a>
		</td>		
		-->

		<td align='right' style="padding-bottom:1%;">
			<select name="field" class="board-select">
				<option value='status' <?if($f_field == 'status') echo 'selected';?>>구분</option>
				<option value='cmp_name' <?if($f_field == 'cmp_name') echo 'selected';?>>기업명</option>
				<option value='name' <?if($f_field == 'name') echo 'selected';?>>담당자</option>
			</select>
			<input name="word" type="text" class="board-input" value='<?=$word?>' onkeypress="if(event.keyCode==13){goSearch();}"> <a href="javascript:goSearch();" class="btn blk">검색</a>
		</td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style='margin-top:10px;'>
	<tr>						
		<td>
			<table cellpadding='0' cellspacing='0' border='0' width='100%' class='gTable2'>
				<tr>
					<th width="5%">번호</th>
					<th width="30%">제목</th>
					<th width="15%">점수시작일</th>
					<th width="15%">접수마감일</th>
					<th width="15%">마감시간</th>
					<th width="10%">조회수</th>
					<th width="10%">진행상황</th>
				</tr>



<?

if($total_record != '0'){
	$i = $total_record - ($current_page - 1) * $record_count;

	while($row = mysql_fetch_array($result)){

		$uid = $row["uid"]; //번호
		$title01 = $row["title01"]; //제목
		$s_date = $row["s_date"];	// 접수시작일
		$f_date = $row["f_date"];	// 접수마감일
		$f_time = $row["f_time"];	// 마감시간
		$hit = $row["hit"];	// 조회수
		$hitTxt = number_format($hit);
		$f_time01 = $row["f_time01"];
			
			// 진행상황
			$periodBtn = '';

			if($f_time01 > $nTime){
						$periodBtn = "모집중";
						//$periodChk = "접수기간이 아닙니다.\\n".$row['aDate01']." ~ ".$row['aDate02'];

			}elseif($f_time01 < $nTime){
						$periodBtn = "모집마감";
						//$periodChk = "접수기간이 아닙니다.\\n".$row['aDate01']." ~ ".$row['aDate02'];
					}




		//시설별 색상(/www/module/login/head.php 에서 정의)
		if($site)	$siteTxt = "<span class='".$siteClass[$site]."'>".$site."</span>";
		else		$siteTxt = '';

		if($status=='접수')						$statusTxt = "<span class='ico01'>접수</span>";

?>
				<tr onmouseover="this.style.backgroundColor='#f9f9f9'" onmouseout="this.style.backgroundColor='#ffffff'" style='cursor:pointer;' onclick="cedit('<?=$uid?>');">
					<td><?=$i?></td>
					<td><?=$title01?></td>
					<td><?=$s_date?></td>
					<td><?=$f_date?></td>
					<td><?=$f_time?></td>
					<td><?=$hitTxt?></td>
					<td><?=$periodBtn?></td>
				</tr>
<?
		$i--;
	}
}else{
?>
				<tr> 
					<td colspan="7" align='center' height='50'>접수된 대관신청 내역이 없습니다.</td>
				</tr>
<?
}
?>
			</table>									
		</td>
	</tr>
</table>

</form>
<?
	if($GBL_MTYPE == 'A') {
?>
		<a href="javascript:cwrite();" class="big cbtn blue">등록</a>

<?
	}		
?>
<?
	$fName = 'frm01';
	include '../../module/pageNum.php';
?>