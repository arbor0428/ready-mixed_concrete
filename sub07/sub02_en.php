<?
	include '../header_en.php';
	$topTxt01='Estimate request';

	//제이쿼리 달력
	$sRange = '90';
	$eRange = '0';
	include '../module/Calendar.php';
	
	//if(!$type)	$type = 'write';

	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){

	$name = 'iweb';
	$mobile = '01012341234';
	$place01 = '37, Maebongsan-ro, Mapo-gu, Seoul, Republic of Korea';
	$strong = '';
	$slump = '';
	$needs = '';
	
	}

?>

<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>
<script language='javascript'>

	//주소 함수
	function openDaumPostcode() {
		new daum.Postcode({
			oncomplete: function(data) {
				// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

				// 각 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var fullAddr = ''; // 최종 주소 변수
				var extraAddr = ''; // 조합형 주소 변수

				// 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
				if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
					fullAddr = data.roadAddress;

				} else { // 사용자가 지번 주소를 선택했을 경우(J)
					fullAddr = data.jibunAddress;
				}

				// 사용자가 선택한 주소가 도로명 타입일때 조합한다.
				if(data.userSelectedType === 'R'){
					//법정동명이 있을 경우 추가한다.
					if(data.bname !== ''){
						extraAddr += data.bname;
					}
					// 건물명이 있을 경우 추가한다.
					if(data.buildingName !== ''){
						extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
					}
					// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
					fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
				}

				// 우편번호와 주소 정보를 해당 필드에 넣는다.
				document.getElementById('zipcode').value = data.zonecode; //5자리 새우편번호 사용 주소를 일렬로 나오게 할 경우 VALUE값을 다 더해본다
				document.getElementById('addr01').value = fullAddr;
				document.getElementById('addr02').focus();
			}
		}).open();
	}

	function check_form(){
		
		form = document.FRM;
/*		
		if(isFrmEmpty(form.name,"견적요청에 담당자를 입력해 주십시오"))	 return;
		if(isFrmEmpty(form.mobile,"연락처를 입력해 주십시오"))	return;
		if(isFrmEmpty(form.place01,"납품장소를 입력해 주십시오"))	return;
		if(isFrmEmpty(form.d_date,"납품날짜를 입력해 주십시오"))	return;
		if(isFrmEmpty(form.d_date02,"납품날짜를 입력해 주십시오"))	return;
		if(isFrmEmpty(form.d_date03,"납품날짜를 입력해 주십시오"))	return;
*/
		var isStatus = $('#ready-mixed').is(":checked");
		var isStatus2 = $('#mortal').is(":checked");

		if(isStatus){
			if(isFrmEmpty(form.strong,"please select strength"))	 return;
			if(isFrmEmpty(form.slump,"please select slump"))	 return;
			//if(isFrmEmpty(form.needs,"필요수량을 입력해 주십시오"))	 return;

		}else if(isStatus2){
			if(isFrmEmpty(form.baehab,"please select mixing ratio"))	 return;
			//if(isFrmEmpty(form.needs,"필요수량을 입력해 주십시오"))	 return;
		}
		
		

		if($('#p_chk').is(":checked") == false){
		alert('Please agree to the terms of collection of personal information.');
		return;
		}

		form.type.value='write';
		//form.ment.value = SubmitHTML();

		form.action = './proc.php';
		
		form.submit();
		
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

</script>

<!--------------서브 비주얼영역---------------------->

<div class="sub_visual">
	<div class="sub-top-img07 sub-top-imgs"></div>
	<div class="text-box">Contact</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location_en.php';
?>

<!----------------중간영역--------------------------->

<div class="content_box">
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
		
		<div id="quote_wrap">
			<div class='sub-wrap clearfix'>
				<!--<h2 class="title">견적요청</h2>-->

				<!--==============첫번째 입력 박스================-->
				<div class="quo_form01_wrap">
					<div class="quo_tit clearfix">
						<p class="quo_tit_left">Requester Information (<span style="color:red;">*</span>Required)</p>
						<p class="quo_tit_right">We might contact you later than expected.<span>(P: 02-427-0445/0475)</span></p>
					</div>
					<div class="quo_person_info">
						<div class="row clearfix per_updown g_line">
							<div class="row_title dp_f dp_c dp_cc">
								The person in charge<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input">
								<input type="text" placeholder="Please write the name of the company’s representative. (Individuals, please write name)" name="name" value="<?=$name?>">
								<input type="text" placeholder="Please write the contact number. " name="mobile" value="<?=$mobile?>">
							</div>
						</div>
						<div class="row clearfix">
							<div class="row_title dp_f dp_c dp_cc">
								Delivery location<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input">
								<input type="text" placeholder="Please write the location to receive the product." name="place01" value="<?=$place01?>">
							</div>
						</div>
						<div class="row clearfix submit_date">
							<div class="row_title dp_f dp_c dp_cc">
								Delivery date<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input clearfix ">
								<div class="select_wrap" style="display:inline-block;">
									<select title="year" placeholder="Please select the date.(year)" name="d_date">
										<option value="">year</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
									</select> .
								</div>
								&nbsp;&nbsp;
								<div class="select_wrap" style="display:inline-block;">
									<select title="month" placeholder="Please select the date." name="d_date02">
										<option value="">month</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select> .
								</div>
								&nbsp;&nbsp;
								<div class="select_wrap" style="display:inline-block;">
									<select title="date" placeholder="Please select the date." name="d_date03">
										<option value="">date</option>	
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--==============두번째 입력 박스================-->
				<div class="quo_form02_wrap">
					<div class="quo_tit clearfix">
						<p>Product Information (Optional)</p>
					</div>
					<!--========선택버튼 wrap========-->
					<div class="q_sel_btn_wrap">
						<div class="row clearfix g_line">
							<div class="row_title dp_f dp_c dp_cc">
								Product Name
							</div>
							<div class="row_input">
								<div class="q_select_btn">
									<div class="q_btn" style="display:inline-block;">
										<input type="radio" id="ready-mixed" name="p_status01" value="Normal Concrete" onclick="tbldisplay(1)" checked> <label for="ready-mixed">Normal Concrete</label>
									</div>
									<div class="q_btn" style="display:inline-block;">
										<input type="radio" id="mortal" name="p_status01" value="Mortar" onclick="tbldisplay(2)"> <label for="mortal">Mortar</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--===해당 버튼 눌렀을때  나오는 content==-->
					<div class="quo_item_info_wrap">
						<div class="quo_item_info01 info_cont">
							<div class="row clearfix quo_size_row">
								<div class="row_title clearfix">
									<div class="row_tit_50 first_h_tit">Size</div>
									<div class="row_tit_50 clearfix">
										<div class="updown_tit" >Strength</div>
										<div class="updown_tit" name='slump'>Slump</div>
									</div>
								</div>
								<div class="row_input clearfix">
									<div class="updown_input">
										<select  title="select e-mail" placeholder="Please select." name="strong">
											<option value="" name='strong'>Please select.</option>
											<option value="18" name='strong'>18</option>
											<option value="21" name='strong'>21</option>
											<option value="24" name='strong'>24</option>
											<option value="27" name='strong'>27</option>
											<option value="30" name='strong'>30</option>
											<option value="35" name='strong'>35</option>
											<option value="40" name='strong'>40</option>
											<option value="45" name='strong'>45</option>
											<option value="50" name='strong'>50</option>
											<option value="55" name='strong'>55</option>
											<option value="60" name='strong'>60</option>
										</select>
									</div>
									<div class="updown_input">
										<select title="slump" placeholder="Please select. " name="slump">
											<option value="" name='slump'>Please select.</option>
											<option value="80" name='slump'>80</option>
											<option value="120" name='slump'>120</option>
											<option value="150" name='slump'>150</option>
											<option value="180" name='slump'>180</option>
											<option value="210" name='slump'>210</option>
											<option value="+500" name='slump'>+500</option>
											<option value="+600" name='slump'>+600</option>
											<option value="+700" name='slump'>+700</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="row_title dp_f dp_c dp_cc">
									Needed amount 
								</div>
								<div class="row_input ness_num">
									<input type="text" name = 'needs' value="6" name="needs" placeholder ="Please put the minimum amount.">
									㎥
									<span>* Minimum amount 6㎥</span>
								</div>
							</div>
						</div>

						<div class="quo_item_info02 info_cont">
							<div class="row clearfix">
								<div class="row_title dp_f dp_c dp_cc">
									mixing ratio
								</div>
								<div class="row_input baehab">
									<select placeholder="Please select" name='baehab'>
										<option value="">Please select</option>
										<option value="1000 (1:1)" name='baehab'>1000 (1:1)</option>
										<option value="700 (1:2)" name='baehab'>700 (1:2)</option>
										<option value="550 (1:3)" name='baehab'>550 (1:3)</option>
										<option value="450 (1:4)" name='baehab'>450 (1:4)</option>
										<option value="350 (1:5)" name='baehab'>350 (1:5)</option>
									</select>
								</div>
							</div>
							<div class="row clearfix">
								<div class="row_title dp_f dp_c dp_cc">
									Needed amount
								</div>
								<div class="row_input ness_num">
									<input type="text" value="6" name='needs'>
									㎥
									<span>* Minimum amount 6㎥</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>

					    //cont2 tab
						$(".q_select_btn > .q_btn").on("click",function(event){

							//event.preventDefault();

							let tabNumber = $(this).index();

							//$(".q_select_btn > .q_btn").children("input:checkbox[name='f_product']").prop("checked", false);
							//$(this).children("input:checkbox[name='f_product']").prop("checked", true);

							$(".quo_item_info_wrap .info_cont").stop().fadeOut(400);
							$(".quo_item_info_wrap .info_cont").eq(tabNumber).stop().fadeIn(500);

						});

				</script>

				<!--==============개인정보 수집 및 이용==============-->
				<div class="agreebox_wrap">
					<div class="agree_top clearfix">
						<p>Notification of Collection and Usage of Personal Information</p>
						<a href="/member/policy_en.php">[Personal Information Handling Policy (View All)]</a>
					</div>
					<div class="scroll_box" tabindex="0">
							HEUNGKUK Industry informs and notifies of the following information abided by the relevant law regarding the management including the collection and use of enterprise/group and personal information.<br>
							<br>
							1. Use of collected information: consultation and processing<br>
							2. Collected/Used Item: Name, Phone number, Mobile number, Email, Consulting details<br>
							3. Storage and Use Period: 6 month after the consultation completion, and immediately if the informant should requests deletion of such<br>
							4. Personal information manager: Phone : 02-427-2908
					</div>
					<div class="agree_chkbox">
						<input type="checkbox" id="p_chk" name="p_chk">
						<label for="p_chk">I agree the company to collect and use my personal information.</label>
					</div>
				</div>
				<div class="quo_sumit_wrap">
					<a href="javascript:check_form();" class="btn-pack bt-submit">Estimate Request </a><!-- <input type="submit" value="견적신청" class="btn-pack bt-submit"> -->
					<a href="/" class="btn-pack bt-cancel">Cancel</a>
				</div>
			</div>
		</div>
	</form>
</div>

<?
	include '../footer_en.php';
?>

