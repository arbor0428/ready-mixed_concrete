<?
	include '../header.php';
	$topTxt01='견적요청';

	//제이쿼리 달력
	$sRange = '90';
	$eRange = '0';
	include '../module/Calendar.php';
	
	//if(!$type)	$type = 'write';

	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){

	$name = '아이웹';
	$mobile = '01012341234';
	$place01 = '서울시 마포구 매봉산로 37';
	$strong = '';
	$slump = '';
	$needs = '';
	
	}

?>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
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
			if(isFrmEmpty(form.strong,"강도를 선택해 주십시오"))	 return;
			if(isFrmEmpty(form.slump,"슬럼프를 선택해 주십시오"))	 return;
			//if(isFrmEmpty(form.needs,"필요수량을 입력해 주십시오"))	 return;

		}else if(isStatus2){
			if(isFrmEmpty(form.baehab,"배합비를 선택해 주십시오"))	 return;
			//if(isFrmEmpty(form.needs,"필요수량을 입력해 주십시오"))	 return;
		}
		
		

		if($('#p_chk').is(":checked") == false){
		alert('개인정보수집에 대한 내용에 동의해 주시기 바랍니다.');
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
	<div class="text-box">온라인견적</div>
</div>


<!-------------------로케이션 바--------------------->

<?
	include 'location.php';
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
						<p class="quo_tit_left">주문자 기본 정보 (<span style="color:red;">*</span>필수)</p>
						<p class="quo_tit_right">사정에 따라 연락이 늦어질 수 있습니다.<span>(P: 02-427-0445/0475)</span></p>
					</div>
					<div class="quo_person_info">
						<div class="row clearfix per_updown g_line">
							<div class="row_title">
								담당자<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input">
								<input type="text" placeholder="대표자를 입력해주세요 (개인은 성명 기재)" name="name" value="<?=$name?>">
								<input type="text" placeholder="연락처를 입력해주세요" name="mobile" value="<?=$mobile?>">
							</div>
						</div>
						<div class="row clearfix">
							<div class="row_title">
								납품 장소<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input">
								<input type="text" placeholder="납품 장소를 입력해주세요" name="place01" value="<?=$place01?>">
							</div>
						</div>
						<div class="row clearfix submit_date">
							<div class="row_title">
								납품 날짜<span style="margin-left:6px; color:red;">*</span>
							</div>
							<div class="row_input clearfix ">
								<div class="select_wrap" style="display:inline-block;">
									<select title="납품 날짜 년" placeholder="선택하세요" name="d_date">
										<option value="">선택하세요</option>
										<option value="2022년">2022</option>
										<option value="2023년">2023</option>
										<option value="2024년">2024</option>
										<option value="2025년">2025</option>
										<option value="2026년">2026</option>
									</select> 년 
								</div>
								&nbsp;&nbsp;
								<div class="select_wrap" style="display:inline-block;">
									<select title="납품 날짜 월" placeholder="선택하세요" name="d_date02">
										<option value="">선택하세요</option>
										<option value="01월">01</option>
										<option value="02월">02</option>
										<option value="03월">03</option>
										<option value="04월">04</option>
										<option value="05월">05</option>
										<option value="06월">06</option>
										<option value="07월">07</option>
										<option value="08월">08</option>
										<option value="09월">09</option>
										<option value="10월">10</option>
										<option value="11월">11</option>
										<option value="12월">12</option>
									</select> 월
								</div>
								&nbsp;&nbsp;
								<div class="select_wrap" style="display:inline-block;">
									<select title="납품 날짜 일" placeholder="선택하세요" name="d_date03">
										<option value="">선택하세요</option>	
										<option value="01일">01</option>
										<option value="02일">02</option>
										<option value="03일">03</option>
										<option value="04일">04</option>
										<option value="05일">05</option>
										<option value="06일">06</option>
										<option value="07일">07</option>
										<option value="08일">08</option>
										<option value="09일">09</option>
										<option value="10일">10</option>
										<option value="11일">11</option>
										<option value="12일">12</option>
										<option value="13일">13</option>
										<option value="14일">14</option>
										<option value="15일">15</option>
										<option value="16일">16</option>
										<option value="17일">17</option>
										<option value="18일">18</option>
										<option value="19일">19</option>
										<option value="20일">20</option>
										<option value="21일">21</option>
										<option value="22일">22</option>
										<option value="23일">23</option>
										<option value="24일">24</option>
										<option value="25일">25</option>
										<option value="26일">26</option>
										<option value="27일">27</option>
										<option value="28일">28</option>
										<option value="29일">29</option>
										<option value="30일">30</option>
										<option value="31일">31</option>
									</select> 일
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--==============두번째 입력 박스================-->
				<div class="quo_form02_wrap">
					<div class="quo_tit clearfix">
						<p>제품 정보 입력 (선택)</p>
					</div>
					<!--========선택버튼 wrap========-->
					<div class="q_sel_btn_wrap">
						<div class="row clearfix g_line">
							<div class="row_title">
								품명
							</div>
							<div class="row_input">
								<div class="q_select_btn">
									<div class="q_btn" style="display:inline-block;">
										<input type="radio" id="ready-mixed" name="p_status01" value="일반레미콘" onclick="tbldisplay(1)" checked> <label for="ready-mixed">일반 레미콘</label>
									</div>
									<div class="q_btn" style="display:inline-block;">
										<input type="radio" id="mortal" name="p_status01" value="몰탈" onclick="tbldisplay(2)"> <label for="mortal">몰탈</label>
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
									<div class="row_tit_50 first_h_tit">규격</div>
									<div class="row_tit_50 clearfix">
										<div class="updown_tit" >강도</div>
										<div class="updown_tit" name='slump'>슬럼프</div>
									</div>
								</div>
								<div class="row_input clearfix">
									<div class="updown_input">
										<select  title="이메일 도메인 직접선택" placeholder="선택하세요" name="strong">
											<option value="" name='strong'>선택하세요</option>
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
										<select title="슬럼프" placeholder="선택하세요" name="slump">
											<option value="" name='slump'>선택하세요</option>
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
								<div class="row_title">
									필요수량
								</div>
								<div class="row_input ness_num">
									<input type="text" name = 'needs' value="6" name="needs" placeholder ="필요수량을 입력하세요">
									㎥
									<span>* 최소수량 6㎥</span>
								</div>
							</div>
						</div>

						<div class="quo_item_info02 info_cont">
							<div class="row clearfix">
								<div class="row_title">
									배합비
								</div>
								<div class="row_input baehab">
									<select placeholder="선택하세요" name='baehab'>
										<option value="">선택하세요</option>
										<option value="1000 (1:1)" name='baehab'>1000 (1:1)</option>
										<option value="700 (1:2)" name='baehab'>700 (1:2)</option>
										<option value="550 (1:3)" name='baehab'>550 (1:3)</option>
										<option value="450 (1:4)" name='baehab'>450 (1:4)</option>
										<option value="350 (1:5)" name='baehab'>350 (1:5)</option>
									</select>
								</div>
							</div>
							<div class="row clearfix">
								<div class="row_title">
									필요수량
								</div>
								<div class="row_input ness_num">
									<input type="text" value="6" name='needs'>
									㎥
									<span>* 최소수량 6㎥</span>
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
						<p>개인정보 수집 및 이용에 대한 안내</p>
						<a href="/member/policy.php">[개인정보취급방침 전문보기]</a>
					</div>
					<div class="scroll_box" tabindex="0">
							흥국산업주식회사는 기업/단체 및 개인의 정보 수집 및 이용 등 처리에 있어 아래의 사항을 관계법령에 따라 고지하고 안내해 드립니다. <br>
							<br>
							1. 정보수집의 이용 목적 : 상담 및 진행<br>
							2. 수집/이용 항목 : 이름, 일반전화, 휴대전화, 이메일, 상담내용<br>
							3. 보유 및 이용기간 : 상담 종료후 6개월, 정보제공자의 삭제 요청시 즉시<br>
							4. 개인정보처리담당 : 전화 : 02-427-2908
					</div>
					<div class="agree_chkbox">
						<input type="checkbox" id="p_chk" name="p_chk">
						<label for="p_chk">개인정보 수집 및 이용에 동의합니다.</label>
					</div>
				</div>
				<div class="quo_sumit_wrap">
					<a href="javascript:check_form();" class="btn-pack bt-submit">견적신청</a><!-- <input type="submit" value="견적신청" class="btn-pack bt-submit"> -->
					<a href="/" class="btn-pack bt-cancel">취소하기</a>
				</div>
			</div>
		</div>
	</form>
</div>

<?
	include '../footer.php';
?>

