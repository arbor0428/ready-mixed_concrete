<?
	include '../header_en.php';
	$topTxt01='Recruitment';

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
	text+='<div class="row_title">Category</div>';
	text+='<div class="row_input">';
	text+='<select title="학교 구분" placeholder="Please select one" name="gubun[]">';
	text+='<option value="">Please select one</option>';
	text+='<option value="고등학교">고등학교</option>';
	text+='<option value="대학교(학사)">대학교(학사)</option>';
	text+='<option value="대학원(석사)">대학원(석사)</option>';
	text+='<option value="대학원(박사)">대학원(박사)</option>';
	text+='</select>';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff25">';
	text+='<div class="row_title">Name of the school</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Name of the school" name="s_name[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff25">';
	text+='<div class="row_title">Major</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Major" name="major[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff25">';
	text+='<div class="row_title">Location</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Location" name="area01[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff100">';
	text+='<div class="row_title">Period</div>';
	text+='<div class="row_input">';
	text+='<input type="text" name="h_date01[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';
	text+='<span class="mulgeol">';
	text+='~';
	text+='</span>';
	text+='<input type="text" name="h_date02[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">Day/Night</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Day/Night" name="jhselect[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">GPA</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="GPA" name="c_credit[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">Graduate</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Graduated/Attending Student" name="j_gubun[]">';
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
	text+='<div class="row_title">Job Qualification</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" placeholder="Job Qualification" name="license[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">Job license-name of the license/Level</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="rank[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">Acquired Date</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="a_date011[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">Expiration Date</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="v_date01[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';	
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
	text+='<div class="row_title">Foreign language</div>';
	text+='<div class="row_input">';	
	text+='<input type="text" name="language[]">';
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';
	text+='<div class="row_title"  style="font-family: "Lato";">TEST name</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="t_name[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">Score</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="grade[]">';	
	text+='</div>';	
	text+='</div>';	
	text+='<div class="row clearfix fff50">';	
	text+='<div class="row_title">Acquired Date</div>';	
	text+='<div class="row_input">';	
	text+='<input type="text" name="a_date022[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';	
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
	text+='<div class="row_title">Duration of Employment</div>';
	text+='<div class="row_input">';
	text+='<input type="text" name="w_date011[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';
	text+='<span class="mulgeol">';
	text+='~';
	text+='</span>';
	text+='<input type="text" name="w_date022[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix fff50">';
	text+='<div class="row_title">Company name</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Company name" name="n_work[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix fff50">';
	text+='<div class="row_title">Location</div>';
	text+='<div class="row_input">';
	text+='<input type="text" name="area02[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">Position</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Position" name="position[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title" style="font-family: "Lato";">Status</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Currently employed/quit" name="status[]">';
	text+='</div>';
	text+='</div>';
	text+='<div class="row clearfix ff30">';
	text+='<div class="row_title">Task (Job details)</div>';
	text+='<div class="row_input">';
	text+='<input type="text" placeholder="Task (Job details)" name="job[]">';
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
	<div class="text-box">Career</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location_en.php';
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
				<h2 class="title">Apply Basic information</h2>


				<!--***********************기본 사항(시작)*****************************************-->
				<div class="basic_info_wrap">
					<h3 class="tit2">Basic information</h3>
					<div class="row clearfix g_line">
						<div class="row_title">
							Name
						</div>
						<div class="row_input clearfix">
							<div class="row_input_50 clearfix">
								<span>Korean</span>
								<input type="text" placeholder="Korean Name" name ="name" value="<?=$name?>" id = "name">
							</div>
							<div class="row_input_50 clearfix">
								<span>English</span>
								<input type="text" placeholder="English Name" name="e_name" value="<?=$e_name?>" id="e_name">
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="row clearfix ff50">
							<div class="row_title">
								Select a date
							</div>
							<div class="row_input">
								<input type="text" name="birth" id="" value="<?=$birth?>" class="fpicker" placeholder="DATE" autocomplete="off">
							</div>
						</div>
						<div class="row clearfix ff50">
							<div class="row_title">
								Nationality 
							</div>
							<div class="row_input">
								<input type="text" name="country" value="<?=$country?>">
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="row_title">
							Position
						</div>
						<div class="row_input p_d_chan">
							<input type="text" placeholder="Position" name="h_field" value="<?=$h_field?>">
						</div>
					</div>
					<div class="row clearfix">
						<div class="row_title">
							Current address
						</div>
						<div class="row_input p_d_chan">
							<input type="text" placeholder="Please enter the address" name="addr01" value="<?=$addr01?>">
						</div>
					</div>
					<div class="row clearfix">
						<div class="row_title">
							Contact information
						</div>
						<div class="row_input clearfix">
							<div class="row_input_30 clearfix">
								<span>Mobile Phone</span>
								<input type="text" placeholder="Mobile Phone" name="s_phone" value="<?=$s_phone?>">
							</div>
							<div class="row_input_30 clearfix">
								<span>Home Phone</span>
								<input type="text" placeholder="Home Phone" name="t_phone" value="<?=$t_phone?>">
							</div>
							<div class="row_input_30 clearfix b_b_none">
								<span  style="font-family: 'Lato';">E-Mail</span>
								<input type="text" placeholder="E-Mail" name="email" value="<?=$email?>">
							</div>
						</div>
					</div>
					<div class="row clearfix hgt3">
						<div class="row_title hgt3">
							Military
						</div>
						<div class="row_input clearfix">
							<div class="row_input_30 clearfix">
								<span>Military category</span>
								<input type="text" name="military" value="<?=$military?>">
							</div>
							<div class="row_input_30 clearfix">
								<span>Division</span>
								<input type="text" name="army" value="<?=$army?>">
							</div>
							<div class="row_input_30 clearfix">
								<span>Rank</span>
								<input type="text" name="a_class" value="<?=$a_class?>">
							</div>
							<div class="row_input_100 clearfix bt_line p_d_chan">
								<span>Reason for exemption</span>
								<input type="text" placeholder="Only write here if you were exempted from the military duty." name="e_reason" value="<?=$e_reason?>">
							</div>
							<div class="row_input_100 flno clearfix">
								<span>Duration of Service</span>
									<input type="text" name="m_period" id="" value="<?=$m_period?>" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
									<span class="mulgeol">
									~
									</span>
									<input type="text" name="m_period02" id="" value="<?=$m_period02?>" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
							</div>
						</div>
					</div>
				</div>
				<!--***********************기본 사항(끝)*****************************************-->



				<!--***********************학력 사항(시작)*****************************************-->
				<div class="school_info_wrap clearfix" >
					<h3 class="tit2">Education</h3>
					<!--추가추가 시 입력 되어야 하는 클래스-->	
					<div class="f-wrap f-wrap1">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="school_info clearfix" style="margin-top:10px;" id="hk1">
							<div class="row clearfix g_line ff25">
								<div class="row_title">Category</div>
								<div class="row_input">
									<select title="학교 구분" placeholder="Please select one" name="gubun[]">
										<option value="">Please select one</option>
										<option value="고등학교">고등학교</option>
										<option value="대학교(학사)">대학교(학사)</option>
										<option value="대학원(석사)">대학원(석사)</option>
										<option value="대학원(박사)">대학원(박사)</option>
									</select>
								</div>
							</div>
							<div class="row clearfix ff25">
								<div class="row_title">Name of the school</div>
								<div class="row_input">
									<input type="text" placeholder="Name of the school" name="s_name[]">
								</div>
							</div>
							<div class="row clearfix ff25">
								<div class="row_title">Major</div>
								<div class="row_input">
									<input type="text" placeholder="Major" name="major[]">
								</div>
							</div>
							<div class="row clearfix ff25">
								<div class="row_title">Location</div>
								<div class="row_input">
									<input type="text" placeholder="Location" name="area01[]">
								</div>
							</div>
							<div class="row clearfix ff100">
								<div class="row_title">Period</div>
								<div class="row_input">
									<input type="text" name="h_date01[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
									<span class="mulgeol">
									~
									</span>
									<input type="text" name="h_date02[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">Day/Night</div>
								<div class="row_input">
									<input type="text" placeholder="Day/Night" name="jhselect[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">GPA</div>
								<div class="row_input">
									<input type="text" placeholder="GPA" name="c_credit[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">Graduate</div>
								<div class="row_input">
									<input type="text" placeholder="Graduated/Attending Student" name="j_gubun[]">
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->
					
					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd1();">
					<span class="lnr lnr-cross"></span>Add</div>
					<!--============추가버튼===========-->
				</div>
				<!--***********************학력 사항(끝)*****************************************-->



				<!--***********************자격 사항(시작)***************************************-->
				<div class="certifi_info_wrap clearfix">
					<h3 class="tit2">Job Qualification </h3>
					<!--추가추가시 필요한 클래스-->
					<div class="f-wrap f-wrap2">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="certifi_info clearfix" style="margin-top:10px;" id="hk2">
							<div class="row clearfix g_line fff50">
								<div class="row_title">Job Qualification</div>
								<div class="row_input">
									<input type="text" placeholder="Job Qualification " name="license[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Job license-name of the license/Level</div>
								<div class="row_input">
									<input type="text" name="rank[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Acquired Date</div>
								<div class="row_input">
									<input type="text" name="a_date011[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Expiration Date</div>
								<div class="row_input">
									<input type="text" name="v_date01[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->

					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd2();">
					<span class="lnr lnr-cross" ></span>Add</div>
					<!--============추가버튼===========-->
				</div>
				<!--***********************자격 사항(끝)***************************************-->


				<!--***********************어학 사항(시작)***************************************-->
				<div class="langc_info_wrap clearfix">
					<h3 class="tit2">Language (Speaking)</h3>
					<!--추가추가시 필요한 클래스-->
					<div class="f-wrap f-wrap3">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="langc_info clearfix" style="margin-top:10px;" id="hk3">
							<div class="row clearfix g_line fff50">
								<div class="row_title">Foreign language</div>
								<div class="row_input">
									<input type="text" name="language[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title"  style="font-family: 'Lato';">TEST name</div>
								<div class="row_input">
									<input type="text" name="t_name[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Score</div>
								<div class="row_input">
									<input type="text" name="grade[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Acquired Date</div>
								<div class="row_input">
									<input type="text" name="a_date022[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->


					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd3();"><span class="lnr lnr-cross"></span>Add</div>
				</div>
				<!--***********************어학 사항(끝)***************************************-->


				<!--***********************경력 사항(시작)***************************************-->
				<div class="comp_info_wrap clearfix">
					<h3 class="tit2">Experience</h3>
					<!--추가추가시 필요한 클래스-->
					<div class="f-wrap f-wrap4">

						<!--======추가되어야하는 태그(시작)======-->
						<div class="comp_info clearfix" style="margin-top:10px;" id="hk4">
							<div class="row clearfix g_line ff100">
								<div class="row_title">Duration of Employment</div>
								<div class="row_input">
									<input type="text" name="w_date011[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
									<span class="mulgeol">
									~
									</span>
									<input type="text" name="w_date022[]" id="" value="" class="fpicker" placeholder="DATE" autocomplete="off" readonly="">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Company name</div>
								<div class="row_input">
									<input type="text" placeholder="Company name" name="n_work[]">
								</div>
							</div>
							<div class="row clearfix fff50">
								<div class="row_title">Location</div>
								<div class="row_input">
									<input type="text" name="area02[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">Position</div>
								<div class="row_input">
									<input type="text" placeholder="Position" name="position[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title" style="font-family: 'Lato'; font-weight:700;">Status</div>
								<div class="row_input">
									<input type="text" placeholder="Currently employed/quit" name="status[]">
								</div>
							</div>
							<div class="row clearfix ff30">
								<div class="row_title">Task (Job details)</div>
								<div class="row_input">
									<input type="text" placeholder="Task (Job details)" name="job[]">
								</div>
							</div>
						</div>
					</div>
					<!--=======추가되어야하는 태그(끝)=======-->


					<!--============추가버튼===========-->
					<div class="row_addBtn" onclick = "javascript:optAdd4();"><span class="lnr lnr-cross"></span>Add</div>
					<!--============추가버튼===========-->
				</div>
				<!--***********************경력 사항(끝)***************************************-->


				<!--***********************자기소개서(시작)***************************************-->
				<div class="self_intro_wrap">
						<h3 class="tit2">Cover letter</h3>
					<div class="self_info mt40">
						<h4 class="tit3">1. Reason for application – (job transfer), What do you wish to accomplish if you are hired</h4>
						<textarea name="motive"><?=$motive?></textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">2. Skills (core ability)</h4>
						<textarea name="skill"><?=$skill?></textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">3. Mainly executed task, and your role/contribution summary</span></h4>
						<textarea  name="task01"onclick="this.value=''" placeholder="예시)
							(1) FBGA Set-up ('00년 ~ '00년): FBGA Mold Machine Set-up 및 Mold 공정 안정화 업무.
							(2)MUF Set-up ('00년 ~ '00년) : Vacuum mold parameter 개선을 통한 MUF under fill void 00% 감소, Internal Void 00%감소, MUF mold 표면 오염 00% 개선 (연간 0억원 절감)">
							<?=$task01?>
						</textarea>
					</div>
					<div class="self_info">
						<h4 class="tit3">4. Write detailed information on detailed task performance and its outcome / thesis performance, patent registration details, awards</h4>
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
						<h4 class="tit3">5. Your strength and what you need improvement (Job task, personality etc.)/detailed task performance and its outcome</h4>
						<textarea name="advantage"><?=$advantage?></textarea>
					</div>
				</div>
				<!--***********************자기소개서(끝)***************************************-->


				<!--***********************세부 수행과제 및 성과(시작)**************************-->
				<div class="detail_doc_wrap">
						<h3 class="tit2">Please write the details of the project you executed during your employment and its outcome (financial/technical) </h3>
						<textarea onclick="this.value=''" name="task02" placeholder="※Please write the details of the project you executed during your employment and its outcome (financial/technical)"><?=$task02?></textarea>
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
					<label>Upload<input type="file" name="upfile<?=$file_num?>" onchange="javascript:document.getElementById('file_route<?=$file_num?>').value=this.value" autocomplete="off"></label>
				</div>
<?
	}
?>
				<!--============첨부 파일 버튼(끝)===========-->

				<!--***********************개인 정보 동의(시작)************************************-->
				<div class="agree_info_wrap">
					<p class="a_s01_tit">I confirm that all the information stated in the application are true to the best of my knowledge.</p>
					<div class="agree_sign01_wrap clearfix">
						<div class="sign30">
							<span>Date :</span>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="w_date01" value="<?=date('Y')?>" readonly>.
							</div>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="w_date02" value="<?=date('m')?>" readonly>.
							</div>
							<div class="select_wrap" style="display:inline-block;">
							<input type="text"name="w_date03" value="<?=date('d')?>" readonly>
							</div>
						</div>
						<div class="sign30">
							<span>Applicant  :</span>
							<input type="text" placeholder="(Name)" name="writer01" value="<?=$writer01?>" id="writer01" readonly>
						</div>
						<div class="sign30">
							<span>Signature :</span>
							<input type="text" placeholder="(Name)" name="writer02"value="<?=$writer02?>" id="writer02" readonly>
						</div>
					</div>
					<div class="agree_sign02_wrap">
						<p class="lh18">I<input type="text" placeholder="(Name)" name="b_name" value="<?=$b_name?>" id="b_name" readonly> agree HEUNGKUK Industry (hereafter “Company”) to collect, use, and provide my personal information in the strictly necessary for the company tasks abided by the personal information protection regulation on the related law including personal information protection law etc.</p>
					</div>
					<div class="agree_sign03_wrap">
						<h4 class="tit4">Agreement to Collect, Provide Personal Information </h4>
						<div class="agree_detail_wrap" style="color:#183728; font-size:0.875rem;">
							<p style="margin-bottom:10px; font-weight:700; font-size:1rem; color:#000;">■ Collected items, Purpose of Use and Storage, Usage Period</p>
							<p style="margin-bottom:10px;">- Collected Item</p>
							<table style="margin-bottom:10px;" class="agree_detail_tbl">
								<tbody>
									<tr>
										<th style="width:20%;">Category</th>
										<th style="width:80%;">Items</th>
									</tr>
									<tr>
										<td style="width:20%;">General Information</td>
										<td style="width:80%;">/Name (Korean, Chinese, English), address, Contact number (Mobile, Home, Emergency Contact), Email address, Nationality, Date of Birth, Military Record, Education, Work Experience, License/Language</td>
									</tr>
								</tbody>
							</table>
							<p style="margin-bottom:10px;">- Purpose of Collection and Use</p>
							<p style="margin-bottom:10px; padding-left:2%; ">To inform recruitment information including the recruitment process, result in each stage, and to build talent data</p>
							<p style="margin-bottom:10px;">- Storage, Usage Period</p>
							<p style="margin-bottom:30px; padding-left:2%;">The information will be used for talent data for the company’s recruitment and will be kept until the write requests it to be removed.</p>
							<p style="margin-bottom:30px; font-weight:700; font-size:1rem; color:#000;">■ The Company immediately delete the personal information once the storage and usage period has expired.</p>
							<p style="margin-bottom:30px; font-weight:700; font-size:1rem; color:#000;">■ However, “in case the storage is required by the other law”, the Company may keep the personal information even if the storage and usage period has expired.</p>
							<p style="margin-bottom:10px;">※ In relation to this agreement, information holder has the right to not agree to the collection, usage of personal information except for the required minimum information. However, if you do not agree, you could be removed from the Company’s recruitment announcement recipient list.</p>
						</div>
						<p class="fin_agree_p" style="text-align:center;">I have read the above, and I agree to provide my personal information and to be on your company’s talent data base.</p>
						<div class="yesornot clearfix" style="text-align:center;">
							<div class="ag_wrap">
								<input type="radio" id="agree-cir01" name="agree-cir">Yes
								<!-- <label for="agree-cir01">예</label> -->
							</div>
							<div class="ag_wrap">
								<input type="radio" id="agree-cir02" name="agree-cir" value='1' checked>No
								<!-- <label for="agree-cir02">아니오</label> -->
							</div>
						</div>
						<p class="fin_agree_p" style="text-align:center;">I have thoroughly read all the items above and submit this consent as in the above.</p>
					</div>
					<div class="agree_sign04_wrap clearfix">
						<div class="agree30">
							<span>Consented Date :</span>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="a_date01" value="<?=date('Y')?>" readonly>.
							</div>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="a_date02" value="<?=date('m')?>" readonly>.
							</div>
							<div class="select_wrap" style="display:inline-block;">
								<input type="text"name="a_date03" value="<?=date('d')?>" readonly>
							</div>
						</div>
						<div class="agree30">
							<span>Agreed by :</span>
							<input type="text" placeholder="(Name)" name="writer03" value="<?=$writer03?>" id="writer03" readonly>
						</div>
						<div class="agree30">
							<span>Signature :</span>
							<input type="text" placeholder="(Name)"name="writer04" value="<?=$writer04?>">
						</div>
					</div>
				</div>
				<!--***********************개인 정보 동의(끝)************************************-->
				<div class="quo_sumit_wrap">
					<a href="javascript:check_form();" class="btn-pack bt-submit">Apply </a>
					<!-- <a href="javascript:check_form();"><input type="submit" value="채용신청" class="btn-pack bt-submit"> -->
					<a href="/" class="btn-pack bt-cancel">Cancel</a>
				</div>
			</div>
		</div>
	</form>
</div>


<?
	include '../footer_en.php';
?>
