<?
	if($uid){

		//조회수증가
		$sql = "update hk_sub65 set hit = hit + 1 where uid='$uid'";
		$result = mysql_query($sql);

		$sql = "select * from hk_sub65 where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		$title01 = $row["title01"];
		$s_date = $row["s_date"];
		$f_date = $row["f_date"];
		$f_time = $row["f_time"];
		$ment = $row["ment"];
		$upfile01 = $row["upfile01"];
		$realfile01 = $row["realfile01"];
		$userip = $row["userip"];
		$rTime = $row["rTime"];
		$rDate = $row["rDate"];
	}

	$ment = Util::textareaDecodeing($ment);


	//제이쿼리 달력
	$sRange = '90';
	$eRange = '0';
	include '../module/Calendar.php';
	
	if(!$type)	$type = 'write';
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

<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>
<script language='javascript'>

	function check_form(){
		
		form = document.FRM;
		
		if(isFrmEmpty(form.title01,"채용정보에 제목을 입력해 주십시오"))	 return;
		if(isFrmEmpty(form.s_date,"채용정보에 접수시작일을 선택해 주십시오"))	return;
		if(isFrmEmpty(form.f_date,"채용정보에 접수마감일을 선택해 주십시오"))	return;

//		form.type.value='write';
		//form.ment.value = SubmitHTML();

		form.action = './proc02.php';
		
		form.submit();
		
	}
	


</script>


<div class="content_box">
	<form name='FRM' action="<?=$PHP_SELF?>" method='post' ENCTYPE="multipart/form-data">

		<input type='hidden' name='type' value='<?=$type?>'>
		<input type='hidden' name='uid' value='<?=$uid?>'>
		<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
		<input type='hidden' name='record_start' value='<?=$record_start?>'>
		<input type='hidden' name='field' value='<?=$field?>'>
		<input type='hidden' name='word' value='<?=$word?>'>
		<input type='hidden' name='strRoot' value='<?=$strRoot?>'>
		<input type='hidden' name='boardRoot' value='<?=$boardRoot?>'>
		<input type='hidden' name='table_id' value='<?=$table_id?>'>
		
		<div id="quote_wrap">
			<div class='sub-wrap clearfix'>
				<!--==============첫번째 입력 박스================-->
				<div class="quo_form01_wrap">
					<div class="quo_person_info">
						<div class="row clearfix">
							<div class="row_title">
								제목<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input">
								<input type="text" name="title01" value="<?=$title01?>" style="width:98%;">
							</div>
						</div>
						<div class="row clearfix submit_date">
							<div class="row_title">
								접수 시작일<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input clearfix ">
								<div class="select_wrap" style="display:inline-block;">
									<input type="text" name="s_date" id="" value="<?=$s_date?>" class="fpicker" placeholder="날짜 선택" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row clearfix submit_date">
							<div class="row_title">
								접수 마감일<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input clearfix ">
								<div class="select_wrap" style="display:inline-block;">
									<input type="text" name="f_date" id="" value="<?=$f_date?>" class="fpicker" placeholder="날짜 선택" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row clearfix submit_date">
							<div class="row_title">
								마감시간<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input clearfix ">
								<div class="select_wrap" style="display:inline-block;" value="<?=$f_time?>">
									<select title="마감시간" placeholder="시간 선택" name="f_time" value="<?=$f_time?>">
										<option value="<?=$f_time?>"></option>
										<option value="01:00">01:00</option>
										<option value="02:00">02:00</option>
										<option value="03:00">03:00</option>
										<option value="04:00">04:00</option>
										<option value="05:00">05:00</option>
										<option value="06:00">06:00</option>
										<option value="07:00">07:00</option>
										<option value="08:00">08:00</option>
										<option value="09:00">09:00</option>
										<option value="10:00">10:00</option>
										<option value="11:00">11:00</option>
										<option value="12:00">12:00</option>
										<option value="13:00">13:00</option>
										<option value="14:00">14:00</option>
										<option value="15:00">15:00</option>
										<option value="16:00">16:00</option>
										<option value="17:00">17:00</option>
										<option value="18:00">18:00</option>
										<option value="19:00">19:00</option>
										<option value="20:00">20:00</option>
										<option value="21:00">21:00</option>
										<option value="22:00">22:00</option>
										<option value="23:00">23:00</option>
										<option value="24:00">24:00</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

<?

	for($i=1; $i<=1; $i++){
		$file_num = sprintf("%02d",$i);

		$upfile = ${'upfile'.$file_num};
		$realfile = ${'realfile'.$file_num};

		//if($i==1)			$fileTitle = "썸네일이미지";
		//elseif($i==2)		$fileTitle = "다운로드 파일";

?>

				<!--==============두번째 입력 박스================-->
				<div class="quo_form02_wrap">
					<!--========선택버튼 wrap========-->
					<div class="q_sel_btn_wrap">
					</div>
					<!--===해당 버튼 눌렀을때  나오는 content==-->
					<div class="quo_item_info_wrap">
						<div class="quo_item_info01 info_cont">
							<div class="row clearfix">
								<div class="row_title">
									첨부파일
								</div>
								<div class="row_input ness_num">
									<input type="text" class="textBox02"  value="<?=$upfile01?>"readonly title="File Route"  id="file_route<?=$file_num?>" autocomplete="off">
									<label><input type="file" name="upfile<?=$file_num?>" onchange="javascript:document.getElementById('file_route<?=$file_num?>').value=this.value" autocomplete="off"></label>
								</div>
<?
	}
?>
							</div>
							<div class="row_title">
								내용<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_title">
								<textarea name="ment" style="resize:none; width:100%; height:100px;"><?=$ment?></textarea>
							</div>
							
						</div>
					</div>
				</div>
<?
	if($type == 'write') {
?>
				<div class="quo_sumit_wrap">
					<a href="javascript:check_form();" class="btn-pack bt-submit">등록하기</a><!-- <input type="submit" value="견적신청" class="btn-pack bt-submit"> -->
					<a href="/" class="btn-pack bt-cancel">취소하기</a>
				</div>
<?
	} elseif($type == 'edit') {
?>				
				<div class="quo_sumit_wrap">
					<a href="javascript:check_form();" class="btn-pack bt-submit">수정하기</a><!-- <input type="submit" value="견적신청" class="btn-pack bt-submit"> -->
					<a href="/" class="btn-pack bt-cancel">취소하기</a>
				</div>
<?
	}
?>

			</div>
		</div>
	</form>
</div>