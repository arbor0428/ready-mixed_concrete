<?
	include '../header.php';
	$topTxt01='입사지원';

	//error_reporting( E_ALL );
	//ini_set( "display_errors", 1 );

	/*
	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
		
		$name = '(주)아이웹';
		$e_name = 'iwebcde';
		$birth = '2022-02-13';
		$country = '한국';
		$h_field = 'IT(아이티)';
		$addr01 = '서울시 마포구 매봉산로37';
		$s_phone = '010-9876-5432';
		$t_phone = '02-3678-1247';
		$military = '현역';
		$email = 'iwebzone@naver.com';
		$army = '해군';
		$a_class = '병장';
		$e_reason = '인대파열';
		$m_period = '2021-01-25';
		$m_period02 = '2022-01-25';
		$motive = '지원동기는요';
		$skill = '보유기술은요';
		$task01 = '수행과제는요';
		$pfmce = '강점은요';
		$advantage = '강점은요';
		$task02 = '세부입니다';
		$writer01 = '아이웹이다';
		$writer02 = '아이웹이다';
		$b_name = '아이웹이다';
		$writer03 = '아이웹이다';
		$writer04 = '아이웹이다';

	}
	*/

	//제이쿼리 달력
	$sRange = '90';
	$eRange = '0';
	include '../module/Calendar.php';

?>

<script language='javascript'>

function check_form(){

	form = document.FRM;
	
	if(isFrmEmpty(form.name,"기본사항에 한글성명을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.e_name,"기본사항에 영문성명을 입력해 주십시오"))	return;
	if(isFrmEmpty(form.birth,"기본사항에 생년월일을 입력해 주십시오"))	return;
	//if(isFrmEmpty(form.country,"기본사항에 국적을 입력해 주십시오"))	return;
	if(isFrmEmpty(form.h_field,"기본사항에 희망분야를 입력해 주십시오"))	return;
	if(isFrmEmpty(form.addr01,"기본사항에 현주소를 입력해 주십시오"))	return;
	if(isFrmEmpty(form.s_phone,"기본사항에 휴대전화를 입력해 주십시오"))	return;
	if(isFrmEmpty(form.t_phone,"기본사항에 자택번호를 입력해 주십시오"))	return;
	if(isFrmEmpty(form.email,"기본사항에 이메일 주소를 입력해 주십시오"))	return;
	//if(isFrmEmpty(form.military,"기본사항에 병역구분을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.army,"기본사항에 군별을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.a_class,"기본사항에 계급을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.e_reason,"기본사항에 면제사유를 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.m_period,"기본사항에 복무기간을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.m_period02,"기본사항에 복무기간을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.motive,"자기소개서에  지원동기를 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.skill,"자기소개서에  보유기술을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.task01,"자기소개서에  주요수행과제를 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.pfmce,"자기소개서에  논문실적을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.advantage,"자기소개서에  본인의 강점을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.task02,"자기소개서에 세부수행과제 및 성과를 입력해 주십시오")) return;
	if(isFrmEmpty(form.w_date01,"작성일을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.w_date02,"작성일을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.w_date03,"작성일을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.writer01,"작성자를 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.writer02,"서명을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.b_name,"본인 이름을 입력해 주십시오"))	 return;
	
	if($('#agree-cir02').is(":checked") == '1'){
		alert('개인정보 수집 및 이용에 동의해주시기 바랍니다.');
		return;
	}
	
	if(isFrmEmpty(form.a_date01,"동의일을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.a_date02,"동의일을 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.a_date03,"동의일을 입력해 주십시오"))	 return;
	//if(isFrmEmpty(form.writer03,"동의자를 입력해 주십시오"))	 return;
	if(isFrmEmpty(form.writer04,"서명을 입력해 주십시오"))	 return;
	
	form.type.value='write';
	//form.ment.value = SubmitHTML();

	form.action = './proc.php';
	
	form.submit();
	
}

//주소 스크립트
function locChk01(){
	c1 = $('#loc01').find('option:selected').val();

	//2차지역
	$.post('./loc01.php',{'c1':c1}, function(c2){

		//2차지역 selectbox 초기화
		$('#loc02').empty();

		clist2 = c2.split('/');
		maxNum = clist2.length;

		$('#loc02').append("<option value=''>:: 시군구선택 ::</option>");

		//2차지역 selectbox 옵션설정
		for(i=0; i<maxNum; i++){
			txt = clist2[i];
			option = $("<option value='"+txt+"'>"+txt+"</option>");
			$('#loc02').append(option);
		}
	});
}

//학력사항
function optAdd1(no){

	var num = parseInt($('#num1').val()); //문자를 숫자로 바꿔서 값을 가져온다
	num++;

	if(num>4){
		alert('5개까지만 가능합니다.');
		return false;
	}

	$('#num1').val(num); // 아이디 num의 값을 가져온다.
	

	//추가할 html 소스들을 집어넣는다.
	text='<div class="school_info clearfix" style="margin-top:10px;" id="hk'+num+'">';	
	text+='<div class="row clearfix g_line ff25">';	
	text+='<div class="row_title">구분</div>';
	text+='<div class="row_input">';
	text+='<select title="학교 구분" placeholder="선택하세요" name="gubun[]">';
	text+='<option value="">선택하세요</option>';
	text+='<option value="고등학교">고등학교</option>';
	text+='<option value="대학교(학사)">대학교(학사)</option>';
	text+='<option value="대학원(석사)">대학원(석사)</option>';
	text+='<option value="대학원(박사)">대학원(박사)</option>';
	text+='</select>';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff25">';
	text+='<div class="row_title">학교명</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="학교명" name="s_name[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff25">';
	text+='<div class="row_title">전공</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="전공" name="major[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff25">';
	text+='<div class="row_title">지역</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="지역" name="area01[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff100">';
	text+='<div class="row_title">기간</div>';
	text+='<div class="row_input">';
	text+='<input type="text" name="h_date01[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';
	text+='<span class="mulgeol">';
	text+='~';
	text+='</span>';
	text+='<input type="text" name="h_date02[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">주야</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="주간/야간" name="jhselect[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">학점</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="학점" name="c_credit[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">졸업구분</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="졸업/재학" name="j_gubun[]">';
	text+='</div>';
	text+='</div>';
	text+='</div>';
	//text+='</div>';

	

	//html소스와 클래스 또는 아이디를 플러스 플러스 한다
		$('.f-wrap1').append(text);
			calendarReady();
			console.log(num);
}

//직무자격
function optAdd2(no){

	var num = parseInt($('#num2').val()); //문자를 숫자로 바꿔서 값을 가져온다
	num++;

	if(num>4){
		alert('5개까지만 가능합니다.');
		return false;
	}

	$('#num2').val(num); // 아이디 num의 값을 가져온다.
	

	//추가할 html 소스들을 집어넣는다.
	text='<div class="certifi_info clearfix" style="margin-top:10px;" id="hk'+num+'">';
	text+='<div class="row clearfix g_line fff50">';	
	text+='<div class="row_title">직무 자격증</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" placeholder="자격증 명" name="license[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">등급</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="rank[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">취득일</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="a_date011[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">유효일</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="v_date01[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';	
	text+='</div>';	
	text+='</div>';	
	text+='</div>';	
	text+='</div>';	
	//text+='</div>';	
	
	//html소스와 클래스 또는 아이디를 플러스 플러스 한다
		$('.f-wrap2').append(text);
			calendarReady();
			console.log(num);
}

//어학(회화)
function optAdd3(no){

	var num = parseInt($('#num3').val()); //문자를 숫자로 바꿔서 값을 가져온다
	num++;

	if(num>4){
		alert('5개까지만 가능합니다.');
		return false;
	}

	$('#num3').val(num); // 아이디 num의 값을 가져온다.
	

	//추가할 html 소스들을 집어넣는다.
	text='<div class="langc_info clearfix" style="margin-top:10px;" id="hk'+num+'">';
	text+='<div class="row clearfix g_line fff50">';
	text+='<div class="row_title">외국어</div>';
	text+='<div class="row_input">';	
	text+='<input type="text" name="language[]">';
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';
	text+='<div class="row_title"  style="font-family: "Lato"; font-weight:700;">TEST명</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="t_name[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">성적</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="grade[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">취득일</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="a_date022[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';	
	text+='</div>';
	text+='</div>';	
	text+='</div>';	
	text+='</div>';

	//html소스와 클래스 또는 아이디를 플러스 플러스 한다
		$('.f-wrap3').append(text);
			calendarReady();
			console.log(num);
}

//경력사항
function optAdd4(no){

	var num = parseInt($('#num4').val()); //문자를 숫자로 바꿔서 값을 가져온다
		num++;

	if(num>4){
		alert('5개까지만 가능합니다.');
		return false;
	}

	$('#num4').val(num); // 아이디 num의 값을 가져온다.

	//추가할 html 소스들을 집어넣는다.
	text='<div class="comp_info clearfix" style="margin-top:10px;" id="hk'+num+'">';
	text+='<div class="row clearfix g_line ff100">';	
	text+='<div class="row_title">근무기간</div>';
	text+='<div class="row_input">';
	text+='<input type="text" name="w_date011[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';
	text+='<span class="mulgeol">';
	text+='~';
	text+='</span>';
	text+='<input type="text" name="w_date022[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix fff50">';
	text+='<div class="row_title">직장명</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="직장명" name="n_work[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix fff50">';
	text+='<div class="row_title">지역</div>';
	text+='<div class="row_input">';
	text+='<input type="text" name="area02[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">직급</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="직급" name="position[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title" style="font-family: "Lato"; font-weight:700;">Status</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="재직 중/퇴사" name="status[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">직무(담당업무)</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="직무(담당업무)" name="job[]">';
	text+='</div>';
	text+='</div>';
	text+='</div>';
	text+='</div>';
	
	//html소스와 클래스 또는 아이디를 플러스 플러스 한다
		$('.f-wrap4').append(text);
			calendarReady();
			console.log(num);
}


function optDel(no){
	$('#school'+no).remove();		
}

function calendarReady() {
	$(".fpicker" ).datepicker({
		
//		dateFormat: 'yy-mm-dd (DD)',
		dateFormat: 'yy-mm-dd',
		prevText: '이전 달',
		nextText: '다음 달',
		monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		dayNames: ['일','월','화','수','목','금','토'],
		dayNamesShort: ['일','월','화','수','목','금','토'],
		dayNamesMin: ['일','월','화','수','목','금','토'],
		showMonthAfterYear: true,
		changeMonth: true,
		changeYear: true,
		yearSuffix: '년',
		yearRange: '<?=$yearRange?>', // 년도 선택 셀렉트박스를 현재 년도에서 이전, 이후로 얼마의 범위를 표시할것인가

		beforeShowDay: function(day) {
			var result;
			var holiday = holidays[$.datepicker.formatDate("yymmdd",day)];
 
			// exist holiday?
			if (holiday){
				result =  [true, "date-holiday", holiday];
			}
 
			if(!result) {
				switch (day.getDay()) {
					case 0: // is sunday?
						result = [true, "date-sunday"];
						break;
					case 6: // is saturday?
						result = [true, "date-saturday"];
						break;
					default:
						result = [true, ""];
						break;
				}
			}
 
			return result;
		}
	});	
}
$(function(){
	$("#name").keyup(function(){

		$('#writer03').val($(this).val());
		$('#b_name').val($(this).val());
		$('#writer01').val($(this).val());
		$('#writer02').val($(this).val());

	});
});



</script>



<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img06 sub-top-imgs"></div>
	<div class="text-box">인재채용</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
?>

<!----------------중간영역--------------------------->


<div class="content_box">

<!--==============폼태그 이걸로 ↓ 여기서 부터 적용하세여================-->
	<form name="FRM" action="<?=$PHP_SELF?>" method="post" ENCTYPE="multipart/form-data">
		<!--=====input type="hidden" ? 태그 여기 넣으세여======-->
		<input type='hidden' name='type' value='<?=$type?>'>
		<input type='hidden' name='uid' value='<?=$uid?>'>
		<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
		<input type='hidden' name='record_start' value='<?=$record_start?>'>
		<input type='hidden' name='field' value='<?=$field?>'>
		<input type='hidden' name='word' value='<?=$word?>'>
		<input type='hidden' name='strRoot' value='<?=$strRoot?>'>
		<input type='hidden' name='boardRoot' value='<?=$boardRoot?>'>
		<input type='hidden' name='table_id' value='<?=$table_id?>'>

		<!-- html 추가추가 할때 필요한 hidden값 문자 num id의 값 3 -->
		<input type='hidden' name='num1' id='num1' value="0">
		<input type='hidden' name='num2' id='num2' value="0">
		<input type='hidden' name='num3' id='num3' value="0">
		<input type='hidden' name='num4' id='num4' value="0">

		<div id="apply_wrap">
			<div class='sub-wrap clearfix'>
				<!--<h2 class="tit1">인재채용</h2>-->
				<h2 class="title">입사지원</h2>


				<!--***********************기본 사항(시작)*****************************************-->
				<div class="basic_info_wrap">
					<h3 class="tit2">기본 사항</h3>
					<div class="row clearfix g_line">
						<div class="row_title">
							성명
						</div>
						<div class="row_input clearfix">
							<div class="row_input_50 clearfix">
								<span>한글</span>
								<input type="text" placeholder="한글 이름" name ="name" value="<?=$name?>" id = "name">
							</div>
							<div class="row_input_50 clearfix">
								<span>영문</span>
								<input type="text" placeholder="영문 이름" name="e_name" value="<?=$e_name?>" id="e_name">
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="row clearfix ff50">
							<div class="row_title">
								생년월일
							</div>
							<div class="row_input">
								<input type="text" name="birth" id="" value="<?=$birth?>" class="fpicker" placeholder="날짜 선택" autocomplete="off">
							</div>
						</div>
						<div class="row clearfix ff50">
							<div class="row_title">
								국적
							</div>
							<div class="row_input">
								<input type="text" name="country" value="<?=$country?>">
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="row_title">
							희망분야
						</div>
						<div class="row_input p_d_chan">
							<input type="text" placeholder="희망분야" name="h_field" value="<?=$h_field?>">
						</div>
					</div>
					<div class="row clearfix">
						<div class="row_title">
							현주소
						</div>
						<div class="row_input p_d_chan">
							<input type="text" placeholder="주소를 입력해주세요" name="addr01" value="<?=$addr01?>">
						</div>
					</div>
					<div class="row clearfix">
						<div class="row_title">
							연락처
						</div>
						<div class="row_input clearfix">
							<div class="row_input_30 clearfix">
								<span>휴대폰</span>
								<input type="text" placeholder="휴대폰 번호" name="s_phone" value="<?=$s_phone?>">
							</div>
							<div class="row_input_30 clearfix">
								<span>자택</span>
								<input type="text" placeholder="자택 연락처" name="t_phone" value="<?=$t_phone?>">
							</div>
							<div class="row_input_30 clearfix b_b_none">
								<span  style="font-family: 'Lato'; font-weight:700;">E-Mail</span>
								<input type="text" placeholder="E-Mail" name="email" value="<?=$email?>">
							</div>
						</div>
					</div>
					<div class="row clearfix hgt3">
						<div class="row_title hgt3">
							병역사항
						</div>
						<div class="row_input clearfix">
							<div class="row_input_30 clearfix">
								<span>병역구분</span>
								<input type="text" name="military" value="<?=$military?>">
							</div>
							<div class="row_input_30 clearfix">
								<span>군별</span>
								<input type="text" name="army" value="<?=$army?>">
							</div>
							<div class="row_input_30 clearfix">
								<span>계급</span>
								<input type="text" name="a_class" value="<?=$a_class?>">
							</div>
							<div class="row_input_100 clearfix bt_line p_d_chan">
								<span>면제사유</span>
								<input type="text" placeholder="병역면제시에만 작성하시기 바랍니다." name="e_reason" value="<?=$e_reason?>">
							</div>
							<div class="row_input_100 flno clearfix">
								<span>복무기간</span>
									<input type="text" name="m_period" id="" value="<?=$m_period?>" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
									<span class="mulgeol">
									~
									</span>
									<input type="text" name="m_period02" id="" value="<?=$m_period02?>" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
							</div>
						</div>
					</div>
				</div>
				<!--***********************기본 사항(끝)*****************************************-->



				<!--***********************학력 사항(시작)*****************************************-->
				<div class="school_info_wrap clearfix" >
					<h3 class="tit2">학력 사항</h3>
					<!--추가추가 시 입력 되어야 하는 클래스-->	
					<div class="f-wrap f-wrap1">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="school_info clearfix" style="margin-top:10px;" id="hk1">
							<div class="row clearfix g_line ff25">
								<div class="row_title">구분</div>
								<div class="row_input">
									<select title="학교 구분" placeholder="선택하세요" name="gubun[]">
										<option value="">선택하세요</option>
										<option value="고등학교">고등학교</option>
										<option value="대학교(학사)">대학교(학사)</option>
										<option value="대학원(석사)">대학원(석사)</option>
										<option value="대학원(박사)">대학원(박사)</option>
									</select>
								</div>
							</div>
							<div class="row clearfix ff25">
								<div class="row_title">학교명</div>
								<div class="row_input">
									<input type="text" placeholder="학교명" name="s_name[]">
								</div>
							</div>
							<div class="row clearfix ff25">
								<div class="row_title">전공</div>
								<div class="row_input">
									<input type="text" placeholder="전공" name="major[]">
								</div>
							</div>
							<div class="row clearfix ff25">
								<div class="row_title">지역</div>
								<div class="row_input">
									<input type="text" placeholder="지역" name="area01[]">
								</div>
							</div>
							<div class="row clearfix ff100">
								<div class="row_title">기간</div>
								<div class="row_input">
									<input type="text" name="h_date01[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
									<span class="mulgeol">
									~
									</span>
									<input type="text" name="h_date02[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">주야</div>
								<div class="row_input">
									<input type="text" placeholder="주간/야간" name="jhselect[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">학점</div>
								<div class="row_input">
									<input type="text" placeholder="학점" name="c_credit[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">졸업구분</div>
								<div class="row_input">
									<input type="text" placeholder="졸업/재학" name="j_gubun[]">
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->
					
					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd1();">
					<span class="lnr lnr-cross"></span>추가하기</div>
					<!--============추가버튼===========-->
				</div>
				<!--***********************학력 사항(끝)*****************************************-->



				<!--***********************자격 사항(시작)***************************************-->
				<div class="certifi_info_wrap clearfix">
					<h3 class="tit2">직무 자격</h3>
					<!--추가추가시 필요한 클래스-->
					<div class="f-wrap f-wrap2">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="certifi_info clearfix" style="margin-top:10px;" id="hk2">
							<div class="row clearfix g_line fff50">
								<div class="row_title">직무 자격증</div>
								<div class="row_input">
									<input type="text" placeholder="자격증 명" name="license[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">등급</div>
								<div class="row_input">
									<input type="text" name="rank[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">취득일</div>
								<div class="row_input">
									<input type="text" name="a_date011[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">유효일</div>
								<div class="row_input">
									<input type="text" name="v_date01[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->

					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd2();">
					<span class="lnr lnr-cross" ></span>추가하기</div>
					<!--============추가버튼===========-->
				</div>
				<!--***********************자격 사항(끝)***************************************-->


				<!--***********************어학 사항(시작)***************************************-->
				<div class="langc_info_wrap clearfix">
					<h3 class="tit2">어학(회화)</h3>
					<!--추가추가시 필요한 클래스-->
					<div class="f-wrap f-wrap3">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="langc_info clearfix" style="margin-top:10px;" id="hk3">
							<div class="row clearfix g_line fff50">
								<div class="row_title">외국어</div>
								<div class="row_input">
									<input type="text" name="language[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title"  style="font-family: 'Lato'; font-weight:700;">TEST명</div>
								<div class="row_input">
									<input type="text" name="t_name[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">성적</div>
								<div class="row_input">
									<input type="text" name="grade[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">취득일</div>
								<div class="row_input">
									<input type="text" name="a_date022[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->


					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd3();"><span class="lnr lnr-cross"></span>추가하기</div>
				</div>
				<!--***********************어학 사항(끝)***************************************-->


				<!--***********************경력 사항(시작)***************************************-->
				<div class="comp_info_wrap clearfix">
					<h3 class="tit2">경력 사항</h3>
					<!--추가추가시 필요한 클래스-->
					<div class="f-wrap f-wrap4">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="comp_info clearfix" style="margin-top:10px;" id="hk4">
							<div class="row clearfix g_line ff100">
								<div class="row_title">근무기간</div>
								<div class="row_input">
									<input type="text" name="w_date011[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
									<span class="mulgeol">
									~
									</span>
									<input type="text" name="w_date022[]" id="" value="" class="fpicker" placeholder="날짜 선택" autocomplete="off" readonly="">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">직장명</div>
								<div class="row_input">
									<input type="text" placeholder="직장명" name="n_work[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">지역</div>
								<div class="row_input">
									<input type="text" name="area02[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">직급</div>
								<div class="row_input">
									<input type="text" placeholder="직급" name="position[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title" style="font-family: 'Lato'; font-weight:700;">Status</div>
								<div class="row_input">
									<input type="text" placeholder="재직 중/퇴사" name="status[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">직무(담당업무)</div>
								<div class="row_input">
									<input type="text" placeholder="직무(담당업무)" name="job[]">
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->


					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd4();"><span class="lnr lnr-cross"></span>추가하기</div>
					<!--============추가버튼===========-->
				</div>
				<!--***********************경력 사항(끝)***************************************-->


				<!--***********************자기소개서(시작)***************************************-->
				<div class="self_intro_wrap">
						<h3 class="tit2">자기소개서</h3>
					<div class="self_info mt40">
						<h4 class="tit3">1. 지원동기(이직사유), 입사 후 포부</h4>
						<textarea name="motive"><?=$motive?></textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">2. 보유기술 (핵심역량)</h4>
						<textarea name="skill"><?=$skill?></textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">3. 주요 수행과제, 본인 역할/기여도요약 <span>※'세부 수행과제 및 성과'에 상세하게 작성</span></h4>
						<textarea  name="task01"onclick="this.value=''" placeholder="예시)
							(1) FBGA Set-up ('00년 ~ '00년): FBGA Mold Machine Set-up 및 Mold 공정 안정화 업무.
							(2)MUF Set-up ('00년 ~ '00년) : Vacuum mold parameter 개선을 통한 MUF under fill void 00% 감소, Internal Void 00%감소, MUF mold 표면 오염 00% 개선 (연간 0억원 절감)">
							<?=$task01?>
						</textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">4. 논문실적, 특허출원내역, 수상내역</h4>
						<textarea  name="pfmce" onclick="this.value=''" placeholder="예시) 
							1. SCI급 0개 (주저자 0개)
							-논문명 1
							-논문명 2

							2. 특허 0개(해외 0, 국재 0) : A급 0개, B급 0개
							-특허명(출원번호)1
							-특허명 2"><?=$pfmce?>							
					</textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">5. 본인의 강점, 보완점 (업무, 성격 등)</h4>
						<textarea name="advantage"><?=$advantage?></textarea>
					</div>
				</div>
				<!--***********************자기소개서(끝)***************************************-->


				<!--***********************세부 수행과제 및 성과(시작)**************************-->
				<div class="detail_doc_wrap">
						<h3 class="tit2">세부 수행과제 및 성과</h3>
						<textarea onclick="this.value=''" name="task02" placeholder="※근무기간 中 수행하신 과제내역 및 성과(재무적/기술적)를 작성해 주시길 바랍니다.(석/박사 학위자는 논문, 저널 등 연구과제 포함) 공란이 부족할 경우 별도 자유양식의 경력기술서를 첨부해 주시기 바랍니다."><?=$task02?></textarea>
				</div>
				<!--***********************세부 수행과제 및 성과(끝)**************************-->

<?

	for($i=1; $i<=1; $i++){
		$file_num = sprintf("%02d",$i);

		$upfile = ${'upfile'.$file_num};
		$realfile = ${'realfile'.$file_num};

		//if($i==1)			$fileTitle = "썸네일이미지";
		//elseif($i==2)		$fileTitle = "다운로드 파일";

?>
<!-- placeholder="pdf,ppt,hwp,doc,docx 파일만 등록가능" -->
				<!--============첨부 파일 버튼(시작)===========-->
				<div class="uploadWrap">
					<input type="text" class="textBox02"  readonly title="File Route"  id="file_route<?=$file_num?>" autocomplete="off">
					<label>업로드<input type="file" name="upfile<?=$file_num?>" onchange="javascript:document.getElementById('file_route<?=$file_num?>').value=this.value" autocomplete="off"></label>
				</div>
<?
	}
?>
				<!--============첨부 파일 버튼(끝)===========-->

				<!--***********************개인 정보 동의(시작)************************************-->
				<div class="agree_info_wrap">
					<p class="a_s01_tit">지원서상 모든 기재사항은 사실과 다름없음을 확인합니다.</p>
					<div class="agree_sign01_wrap clearfix">
						<div class="sign30">
							<span>작성일 :</span>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="w_date01" value="<?=date('Y')?>" readonly>년
							</div>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="w_date02" value="<?=date('m')?>" readonly>월
							</div>
							<div class="select_wrap" style="display:inline-block;">
							<input type="text"name="w_date03" value="<?=date('d')?>" readonly>일
							</div>
						</div>
						<div class="sign30">
							<span>작성자 :</span>
							<input type="text" placeholder="(이름)" name="writer01" value="<?=$writer01?>" id="writer01" readonly>
						</div>
						<div class="sign30">
							<span>서명 :</span>
							<input type="text" placeholder="(이름)" name="writer02"value="<?=$writer02?>" id="writer02" readonly>
						</div>
					</div>
					<div class="agree_sign02_wrap">
						<p class="lh18">본인<input type="text" placeholder="(이름)" name="b_name" value="<?=$b_name?>" id="b_name" readonly>은 흥국산업 주식회사(이하 "회사"라 함)가 다음과 같이 회사업무에 반드시 필요한 범위 내에서 개인정보보호법 등 관련 법령상의 개인정보보호 규정을 준수하여 본인의 개인정보를 수집, 이용, 제공하는 데 동의합니다.</p>
					</div>
					<div class="agree_sign03_wrap">
						<h4 class="tit4">개인정보 수집. 이용 제공 동의서</h4>
						<div class="agree_detail_wrap" style="color:#183728; font-size:0.875rem;">
							<p style="margin-bottom:10px; font-weight:700; font-size:1rem; color:#000;">■ 수집항목 . 이용목적 및 보유 . 이용기간</p>
							<p style="margin-bottom:10px;">- 수집항목</p>
							<table style="margin-bottom:10px;" class="agree_detail_tbl">
								<tbody>
									<tr>
										<th style="width:20%;">구 분</th>
										<th style="width:80%;">항 목</th>
									</tr>
									<tr>
										<td style="width:20%;">일반정보</td>
										<td style="width:80%;">성명(한글,한자,영문), 주소, 연락처(핸드폰, 자택, 비상), 이메일 주소, 국적, 생년월일, 병역사항, 학력사항, 경력사항, 자격/어학</td>
									</tr>
								</tbody>
							</table>
							<p style="margin-bottom:10px;">- 수집. 이용목적</p>
							<p style="margin-bottom:10px; padding-left:2%; ">채용전형의 진행, 진행단계별 결과 등 채용관련 정보 안내 및 인재데이터 구성</p>
							<p style="margin-bottom:10px;">- 보유. 이용기간</p>
							<p style="margin-bottom:30px; padding-left:2%;">회사의 인재채용을 위한 인재데이터로 활용할 예정으로 작성자의 삭제 요청시까지 보관</p>
							<p style="margin-bottom:30px; font-weight:700; font-size:1rem; color:#000;">■ 회사는 개인정보의 보유 및 이용 기간이 경과하면 지체없이 개인정보를 파기합니다.</p>
							<p style="margin-bottom:30px; font-weight:700; font-size:1rem; color:#000;">■ 다만, 회사는 "다른 법령에 따라 보존하여야 하는 경우"에는 보유 및 이용 기간이 경과한 개인정보를 파기하지 아니하고 보존할 수 있습니다.</p>
							<p style="margin-bottom:10px;">※정보주체는 본 동의서에 따른 개인정보 수집. 이용에 대하여 필요한 최소한의 정보 외에는 동의하지 아니할 권리가 있습니다. 다만, 동의하지 아니하는 경우에는 회사의 채용관련 정보안내 대상에서 배제될 수 있습니다.</p>
						</div>
						<p class="fin_agree_p" style="text-align:center;">본인은 위 내용을 확인하였으며, 위와 같이 개인정보 제공 및 귀사의 인재데이터 등록에 동의합니다.</p>
						<div class="yesornot clearfix" style="text-align:center;">
							<div class="ag_wrap">
								<input type="radio" id="agree-cir01" name="agree-cir">예
								<!-- <label for="agree-cir01">예</label> -->
							</div>
							<div class="ag_wrap">
								<input type="radio" id="agree-cir02" name="agree-cir" value='1' checked>아니오
								<!-- <label for="agree-cir02">아니오</label> -->
							</div>
						</div>
						<p class="fin_agree_p" style="text-align:center;">본인은 위의 모든 사항을 자세히 읽고 위와 같이 본 동의서를 제출합니다.</p>
					</div>
					<div class="agree_sign04_wrap clearfix">
						<div class="agree30">
							<span>동의일 :</span>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="a_date01" value="<?=date('Y')?>" readonly>년
							</div>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="a_date02" value="<?=date('m')?>" readonly>월
							</div>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="a_date03" value="<?=date('d')?>" readonly>일
							</div>
						</div>
						<div class="agree30">
							<span>동의자 :</span>
							<input type="text" placeholder="(이름)" name="writer03" value="<?=$writer03?>" id="writer03" readonly>
						</div>
						<div class="agree30">
							<span>서명 :</span>
							<input type="text" placeholder="(이름)"name="writer04" value="<?=$writer04?>">
						</div>
					</div>
				</div>
				<!--***********************개인 정보 동의(끝)************************************-->
				<div class="quo_sumit_wrap">
					<a href="javascript:check_form();" class="btn-pack bt-submit">채용신청</a>
					<!-- <a href="javascript:check_form();"><input type="submit" value="채용신청" class="btn-pack bt-submit"> -->
					<a href="/" class="btn-pack bt-cancel">취소하기</a>
				</div>
			</div>
		</div>
	</form>
</div>


<?
	include '../footer.php';
?>
