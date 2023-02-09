<?

/*
	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
		
		$title='테스트입니다';
		$name='테스트';
		$passwd='1234';
		$data02='01012345678';
		$ment='테스트입니다.';
		
	}
*/

	if($type=='edit' && $uid){
		$sql = "select * from tb_board_list where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		$uid = $row["uid"];
		$title = $row["title"];
		$name = $row["name"];
		$email = $row["email"];
		$passwd = $row["passwd"];
		$pwd_chk = $row["pwd_chk"];
		$notice_chk = $row["notice_chk"];
		$totalNotice_chk = $row["totalNotice_chk"];
		$ment = $row["ment"];
		$data01 = $row["data01"];
		$data02 = $row["data02"];
		$data03 = $row["data03"];
		$data04 = $row["data04"];
		$data05 = $row["data05"];

		$reg_date = $row["reg_date"];

		//저장된 파일명
		$userfile01 = $row["userfile01"];
		$userfile02 = $row["userfile02"];
		$userfile03 = $row["userfile03"];
		$userfile04 = $row["userfile04"];
		$userfile05 = $row["userfile05"];

		//실제 파일명
		$realfile01 = $row["realfile01"];
		$realfile02 = $row["realfile02"];
		$realfile03 = $row["realfile03"];
		$realfile04 = $row["realfile04"];
		$realfile05 = $row["realfile05"];

		$set_ry = date('Y',$reg_date);
		$set_rm = date('m',$reg_date);
		$set_rd = date('d',$reg_date);
		$set_rh = date('H',$reg_date);
		$set_ri = date('i',$reg_date);
		$set_rs = date('s',$reg_date);

	//재단소개 > 경영공시 > 업무추진비
	}elseif($table_id == 'table_1521100078'){
		$data01 = $f_data01;

	}

	if($GBL_MTYPE == 'A'){
		if(!$name)	$name = '흥국산업';
		if(!$passwd)	$passwd = '1234';
	}


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
		$upfile01 = $row["upfile01"];
		$realfile01 = $row["realfile01"];
		$userip = $row["userip"];
		$rTime = $row["rTime"];
		$rDate = $row["rDate"];
	}


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



<script type="text/javascript" src="/smarteditor/js/HuskyEZCreator.js" charset="euc-kr"></script>

<script language='javascript'>
function check_form(){
	form = document.FRM;
	<?
		if($table_id=='table_1628232234'){
	?>
	if(!isOneCheckModal(form.check_1,"서비스 이용약관에 동의해 주십시오","fc1"))	return;
	<?
		}
	?>
	if(isFrmEmptyModal(form.title,"제목을 입력해 주십시오"))	return;
	if(isFrmEmptyModal(form.name,"작성자를 입력해 주십시오"))	return;
	if(isFrmEmptyModal(form.passwd,"비밀번호를 입력해 주십시오"))	return;

	oEditors.getById["ment"].exec("UPDATE_CONTENTS_FIELD", []);

	form.action = '<?=$boardRoot?>proc.php';
	form.submit();
}

function reg_list(){
	form = document.FRM;
	form.type.value = 'list';
	form.action = '<?=$PHP_SELF?>';
	form.submit();

}

function reg_del(){
	
	if(confirm('글을 삭제하시겠습니까?')){
		form = document.FRM;
		form.type.value = 'del'
		form.action = '<?=$boardRoot?>proc.php';
		form.submit();
	}else{
		return;
	}

}

</script>




<form name='FRM' action="<?=$PHP_SELF?>" method='post' ENCTYPE="multipart/form-data">

<!-- <input type='hidden' name='type' value='<?=$type?>'> -->
<input type='hidden' name='type' value='write'>
<input type='hidden' name='uid' value='<?=$uid?>'>
<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='field' value='<?=$field?>'>
<input type='hidden' name='word' value='<?=$word?>'>
<input type='hidden' name='strRoot' value='<?=$strRoot?>'>
<input type='hidden' name='boardRoot' value='<?=$boardRoot?>'>
<input type='hidden' name='table_id' value='<?=$table_id?>'>


<style>
select#data01 {
width: 200px;
padding: .6rem .5rem;
border: 1px solid #e1e1e1;
font-family: inherit;
/*background: url("/images/arrow.jpg") no-repeat 100%;*/
background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat;
 border-radius: 0.35rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

}

.tbl-st {border-top:1px solid #ddd;}
.tbl-st-row {display:table; width:100%; min-height:50px; border-bottom:1px solid #ddd; background:#f5f5f5;}
.tbl-st-row .tbl-st-col {display:table-cell; vertical-align:middle;}

.tbl-st-row .tbl-st-col input[type="text"], .tbl-st-row .tbl-st-col input[type="password"] {
	/*display: block;*/
    width: 100%;
    min-width: inherit;
   /* max-width: 29.2em;*/
    height: 2.53333em;
    background-color: #fff;
    /*font-size: 0.9375em;*/
    padding: 0 1.4em;
    border: 1px solid #e1e1e1;
    border-radius: 0.35rem;
	box-sizing:border-box;
	-webkit-appearance: none;
}

select#data01:focus, .tbl-st-row .tbl-st-col input[type="text"]:focus, .tbl-st-row .tbl-st-col input[type="password"]:focus {
	background-color: #fff;
	outline: 0;
	box-shadow: 0 0 0 0.125rem rgba(196, 216, 206, .5);
}

.tbl-st-row .col-1 {width:18%; padding-left:2%; box-sizing:border-box; color:#070b09; font-size:0.875rem;}
.tbl-st-row .col-2 {width:82%; padding-left:2%; background:#fff; box-sizing:border-box;}

.tbl-st-row-wrap .tbl-st-row {float:left; width:50%}
.tbl-st-row-wrap .tbl-st-row .col-1 {width:36%; padding-left:4%; box-sizing:border-box;}
.tbl-st-row-wrap .tbl-st-row .col-2 {width:64%;padding-left:4%; box-sizing:border-box;}


@media screen and (max-width:768px){
.tbl-st-row-wrap .tbl-st-row {width:100%;}
.tbl-st-row-wrap .tbl-st-row .col-1 {width:18%; padding-left:2%;}
.tbl-st-row-wrap .tbl-st-row .col-2 {width:82%; padding-left:2%;}

.tbl-st-row select {-webkit-appearance: none; -moz-appearance: none; padding:0 4px; margin:4px 0;}
}

@media screen and (max-width:640px){
#smart_editor2 {min-width:100% !important; outline:1px solid red;}
}
</style>

<!--등록-->





<div class="tbl-st">
	<?
	if($GBL_MTYPE == 'A'){
	?>
		<div class="tbl-st-row clearfix"> 
			<div class="tbl-st-col col-1">공지</div>
			<div class="tbl-st-col col-2"> <input name="notice_chk" type="checkbox" value='1' <?if($notice_chk=='1') echo 'checked';?>> 체크하실 경우 리스트의 최상단에 출력됩니다</div>
		</div>
	<?
	}else{
	?>
		<input type='hidden' name='notice_chk' value='<?=$notice_chk?>'>
	<?
	}
	?>

	<div class="tbl-st-row clearfix"> 
		<div class="tbl-st-col col-1">제목</div>
		<div class="tbl-st-col col-2"><input type="text" name="title01" value="<?=$title01?>" style="width:99%;"></div>
	</div>
	

	<div class="tbl-st-row-wrap clearfix">
		<div class="tbl-st-row clearfix"> 
			<div class="tbl-st-col col-1">접수 시작일<span style="margin-left:6px; color:red;">*</span></div>
			<div class="tbl-st-col col-2"><input type="text" name="s_date" id="" value="<?=$s_date?>" class="fpicker" placeholder="날짜 선택" autocomplete="off" style="width:97%;"></div>
		</div>
		<div class="tbl-st-row clearfix"> 
			<div class="tbl-st-col col-1">접수 마감일<span style="margin-left:6px; color:red;">*</span></div>	
			<div class="tbl-st-col col-2">
				<input type="text" name="f_date" id="" value="<?=$f_date?>" class="fpicker" placeholder="날짜 선택" autocomplete="off" style="width:97%;">
			</div>
		</div>
	</div>

	<div class="tbl-st-row clearfix"> 
		<div class="tbl-st-col col-1">마감시간<span style="margin-left:6px; color:red;">*</span></div>
		<div class="tbl-st-col col-2">
			<div class="select_wrap" style="display:inline-block;" value="<?=$f_time?>">
				<select title="마감시간" placeholder="시간 선택" name="f_time" value="<?=$f_time?>" class="board-select">
					<option value="<?=$f_time?>">==</option>
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

	

	<div class="tbl-st-row-wrap clearfix">
		<div class="tbl-st-row clearfix"> 
			<div class="tbl-st-col col-1">작성자</div>
			<div class="tbl-st-col col-2"><input name="name" id="user_name" type="text" style='width:98%;' value="<?=$name?>"></div>
		</div>
		<div class="tbl-st-row clearfix"> 
			<div class="tbl-st-col col-1">비밀번호</div>	
			<div class="tbl-st-col col-2">
				<input name="passwd" type="password" style='width:50%;' value="<?=$passwd?>">&nbsp;
						
				<input type='radio' name='pwd_chk' value='' <?if(!$pwd_chk) echo 'checked';?>>공개
				<input type='radio' name='pwd_chk' value='1' <?if($pwd_chk) echo 'checked';?>>비공개
			
			</div>
		</div>
	</div>

	<?

		if($GBL_MTYPE == 'A'){
	?>
		<div class="tbl-st-row clearfix">
			<div class="tbl-st-col col-1">등록일시</div>
			<div class="tbl-st-col col-2">
				<select name='set_ry' style='height:30px; border:1px solid #e1e1e1; border-radius:4px; margin-right:4px;'>
				<?
					for($i=date('Y')+1; $i>=2016; $i--){
						if($i == $set_ry)	$chk = 'selected';
						else					$chk = '';

						echo ("<option value='$i' $chk>$i</option>");
					}
				?>
				</select>년
				<select name='set_rm' style='height:30px; border:1px solid #e1e1e1; border-radius:4px; margin-right:4px;'>
				<?
					for($i=1; $i<=12; $i++){
						$set_rm_no = sprintf('%02d',$i);
						if($i == $set_rm)	$chk = 'selected';
						else					$chk = '';

						echo ("<option value='$i' $chk>$i</option>");
					}
				?>
				</select>월
				<select name='set_rd' style='height:30px; border:1px solid #e1e1e1; border-radius:4px; margin-right:4px;'>
				<?
					for($i=1; $i<=31; $i++){
						$set_rd_no = sprintf('%02d',$i);
						if($i == $set_rd)	$chk = 'selected';
						else					$chk = '';

						echo ("<option value='$i' $chk>$i</option>");
					}
				?>
				</select>일&nbsp;&nbsp;

				<select name='set_rh' style='height:30px; border:1px solid #e1e1e1; border-radius:4px; margin-right:4px;'>
				<?
					for($i=0; $i<=23; $i++){
						$set_rh_no = sprintf('%02d',$i);
						if($i == $set_rh)	$chk = 'selected';
						else					$chk = '';

						echo ("<option value='$i' $chk>$i</option>");
					}
				?>
				</select>시
				<select name='set_ri' style='height:30px; border:1px solid #e1e1e1; border-radius:4px; margin-right:4px;'>
				<?
					for($i=0; $i<=59; $i++){
						$set_ri_no = sprintf('%02d',$i);
						if($i == $set_ri)	$chk = 'selected';
						else					$chk = '';

						echo ("<option value='$i' $chk>$i</option>");
					}
				?>
				</select>분
				<select name='set_rs' style='height:30px; border:1px solid #e1e1e1; border-radius:4px; margin-right:4px;'>
				<?
					for($i=0; $i<=59; $i++){
						$set_rs_no = sprintf('%02d',$i);
						if($i == $set_rs)	$chk = 'selected';
						else					$chk = '';

						echo ("<option value='$i' $chk>$i</option>");
					}
				?>
				</select>초&nbsp;&nbsp;
				<input type='button' name='btn_set' value='현재시간' onclick='setToDate(this.form);' style='padding:0 10px; height:30px; border:1px solid #e1e1e1; border-radius:4px; cursor:pointer;'>
			</div>
		</div>
	<?
		}
	?>


<?
	for($i=1; $i<=$upload_chk; $i++){
		$file_num = sprintf("%02d",$i);

		$upfile = ${'userfile'.$file_num};
		$realfile = ${'realfile'.$file_num};

		if($list_mod == '갤러리형' || $list_mod == '블로그형'){
			if($i == 1)	$fileTitle = "썸네일";
			else			$fileTitle = "첨부파일 #".($i-1);

		}else{
			$fileTitle = "첨부파일 #".$i;
		}
?>

	<div class="tbl-st-row clearfix">
			<div class="tbl-st-col col-1"><?=$fileTitle?></div>
			<div class="tbl-st-col col-2">
				<div class="file_input">
					<input type="text" readonly title="File Route" id="file_route<?=$file_num?>" style="width:290px;padding:0 0 0 10px;">
					<label>찾아보기<input type="file" name="upfile<?=$file_num?>" onchange="javascript:document.getElementById('file_route<?=$file_num?>').value=this.value"></label>
				</div>
			</div>
			<?
				if($upfile){
			?>
			
					<div class="enable_btn">
						<div class="squaredThree">
							<input type="checkbox"  id="squaredDel<?=$file_num?>" type="checkbox" name="del_upfile<?=$file_num?>" value="Y" />
							<label for="squaredDel<?=$file_num?>"></label>										
						</div>
						<p style='margin:0 0 0 25px;'>삭제&nbsp;&nbsp;(<?=$realfile01?>)</p>
					</div>
			
			<?
				}
			?>
	</div>
<?
	}								
?>

	<div>
		<div style='padding:5px 0px;'><textarea name="ment" id="ment" style='width:100%;height:400px;'><?=$ment?></textarea></div>
	</div>

	<div class="con clearfix">
		<table style="float:right;">
		<?
		if($type == 'write'){
		?>
			<tr>
				<td align='right' height='50'>
					<a href="javascript:check_form();" class="btn blk">등록</a>&nbsp;
					<a href="javascript:reg_list();" class="btn gry"><!--<a href="javascript:reg_list();">-->취소</a>
				</td>
			</tr>
		<?
		}else{
		?>
			<tr>
				<td align='right' height='50'>
					<!--<a href="javascript:check_form();" class="btn grn">수정</a>&nbsp;-->
					<a href="javascript:reg_modify();" class="btn grn">수정</a>&nbsp;
					<a href="javascript:reg_del();" class="btn red">삭제</a>&nbsp;
					<a href="javascript:reg_list();" class="btn blk">목록보기</a>
				</td>
			</tr>
		<?
		}
		?>
					
		</table>
	</div>
</div>


</form>

<script type="text/javascript">

var oEditors = [];

nhn.husky.EZCreator.createInIFrame({

    oAppRef: oEditors,

    elPlaceHolder: "ment",

    sSkinURI: "/smarteditor/SmartEditor2Skin.html",

	/* 페이지 벗어나는 경고창 없애기 */
	htParams : {
		bUseToolbar : true,
		bUseVerticalResizer : false,
		fOnBeforeUnload : function(){},
		fOnAppLoad : function(){}
	}, 

    fCreator: "createSEditor2"

});

</script>