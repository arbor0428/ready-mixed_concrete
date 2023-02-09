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
?>

<script language='javascript'>
 
	function reg_list(){
		form = document.FRM;
		form.type.value = 'list';
		form.target = '';
		form.action = 'sub05.php';
		form.submit();

	}
	
	function reg_modify(){
		
		form = document.FRM;
		form.type.value = 'edit';
		form.target = '';
		form.action = 'sub05.php';
		form.submit();

	}

	function reg_del(){
		
		form = document.FRM;
		form.type.value = 'del';
		//form.target = 'ifra_gbl';
		form.target = '';
		form.action = 'proc02.php';
		form.submit();

	}
	
	function file_down(f1,f2){
		form = document.frm_down;		
		form.file_name.value = f1;
		form.file_rename.value = f2;
		form.submit();
		
	}
	
</script>

<!-- 다운로드 폼 -->
<form name='frm_down' method='post' action='appDown.php'>
	<input type='hidden' name='file_name' value="">
	<input type='hidden' name='file_rename' value="">
</form>

 
<style>

.content_box div.link_go{width: 100%; margin-top: 70px;}
.content_box div.link_go ul{width: 60%; display: flex; margin: 0 auto; justify-content: space-around;} 
.content_box div.link_go ul li{width: 100%; margin: 0 2%; text-align:center; transition: all ease-in-out 0.3s; box-sizing:border-box; cursor: pointer;}
.content_box div.link_go ul li>a{display: block; font-size: 20px; font-weight: 500; width: 100%; height: 55px; line-height: 55px; color: #fff; background-color: #666666; box-sizing: border-box; transition: all ease-in-out 0.3s;}
.content_box div.link_go ul li>a:hover{box-shadow: 3px 3px 5px #999;}
.tit1 {margin-bottom:50px; color: #222; text-align:center; font-size:30px;}
.content_box .form01Wrap .quote_row {height:45px; color: #777; font-size:14px; border-bottom:1px solid #ccc;}
.content_box .form01Wrap .quote_row:first-child {border-top:1px solid #ccc;}
.content_box .form01Wrap .quote_row h4 {float:left; width:22%; height:100%; background-color:#f9f9f9; line-height:45px; text-align:center; border-left:1px solid #ccc; border-right:1px solid #ccc; box-sizing:border-box;}
.content_box .form01Wrap .quote_row .subcon {float:left; padding-left:30px; border-right:1px solid #ccc; width:78%; height:100%; line-height:45px; box-sizing:border-box;}

</style>
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
	<input type='hidden' name='dbfile01' value='<?=$upfile01?>'>
	<input type='hidden' name='realfile01' value='<?=$realfile01?>'>


	<div class='clearfix'>
		<div class="form01Wrap">
			<div class="quote_row clearfix">
				<h4>제목</h4>
				<div class="subcon"><?=$title01?></div>
			</div>
			<div class="quote_row clearfix">
				<h4>접수시작일</h4>
				<div class="subcon"><?=$s_date?></div>
			</div>
			<div class="quote_row clearfix">
				<h4>접수마감일</h4>
				<div class="subcon"><?=$f_date?></div>
			</div>
			<div class="quote_row  clearfix">
				<h4>마감시간</h4>
				<div class="subcon"><?=$f_time?></div>
			</div>
			<div class="quote_row  clearfix">
				<h4>첨부파일</h4>
				<?if($upfile01){?>
				<div class="subcon">
					<a href='javascript:file_down("<?=$upfile01?>","<?=$realfile01?>");' class="dwload_btn">다운로드</a>
				</div>
				<?}?>
			</div>
			<div class="quote_row  clearfix">
				<h4>내용</h4>
				<div class="subcon"><?=$ment?></div>
			</div>
		</div>

		<!--
		<div class="link_go">
			<ul>
				<li><a href="javascript:reg_list()">목록으로</a></li>
				<li><a href="javascript:reg_del()" class="tab_link link1" style='background:#aaaaaa'>삭제하기</a></li>
				<li><a href="javascript:reg_modify()" class="tab_link link1" style='background:#aaaaaa'>수정하기</a></li>
			</ul>
		</div>
		-->
		<div class="board-right-btns">
			<a href="javascript:reg_modify();" class="btn grn">수정</a>
			<a href="javascript:reg_del();" class="btn red">삭제</a>
			<a href="javascript:reg_list();" class="btn blk">목록보기</a>
		</div>
	</div>


</form>

