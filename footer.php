<style>


/* 관리자 로그인시 로그아웃 버튼 노출 */
#admLogout {display:inline-block; color:#e88402;}

@media screen and (max-width:1230px) {
.main-footer .times {text-align:center;}
.main-footer .times li:not(:first-child) {display:block;}
.main-footer .times li:first-child {margin-top:12px;}
.main-footer .times li:nth-child(2) {margin-top:4px;}
.main-footer .times li:nth-child(2):after {display:none;}
}

@media screen and (max-width:1024px) {
	.foot-wrap {/*padding: 4rem 5% 2rem;*/ display:block;}
	.main-footer .logo {float:none; margin: 0 auto 4%;}
	.main-footer .call-area, .main-footer .foot-txt {width: 100%;line-height: 1.8; margin:0 0;}
	.main-footer .call-area {text-align: center;}
}

@media screen and (max-width:768px) {
	.main-footer .container {padding:0;}
}
</style>


<script>
$(document).ready(function(){
		//스크롤버튼
		$(".top_btn").hide();

		$(window).scroll(function(){

			if($(this).scrollTop()>350){
				$(".top_btn").fadeIn();
			}else{
				$(".top_btn").fadeOut();
			}

		});

		//TOP버튼 클릭시 맨위로
		$(".top_btn a").click(function(){
			$("html,body").animate({scrollTop:"0"});
			return false;
		});
});
</script>

    <footer id="footer" class="footer">
        <div class="footer_inner">
            <span class="logo"><img src="/images/logo_f.png" alt=""></span>

            <div class="link_box">
                <ul class="link_list clearfix">
                    <li class="privacy"><a href="/member/policy.php" class="link">개인정보 처리방침</a></li>
                    <!--<li><a href="#" class="link">이용약관</a></li>-->
                    <li><a href="/member/emailCollectionRefuse.php" class="link">이메일무단수집거부</a></li>
					<?if($GBL_USERID){?>
					<li><a href="/module/login/logout_proc.php" id="admLogout" class="link">관리자 로그아웃</a></li>
					<?}?>
                </ul>
				
                <a id="familySite" class="family_site" href="/sub07/sub02.php">
                    <button type="button" id="btnFamilySite" class="btn_family_site"><span class="engFont">온라인견적</span></button>
                </a>
            </div>

            <div class="info_box">
                <div>
                    <dl class="contact">
                        <dt>대표전화</dt>
                        <dd>1899.8001</dd>
                        <dt>FAX</dt>
                        <dd>02.427.2840</dd>
                    </dl>
                </div>
                <div class="info">
                    <p>경기도 하남시 초광산단로 20</p>
                    <p>사업자 등록번호 : 101-81-61162</p>
                    <p class="copy">Copyright © <span class="hanwhaFont">HEUNGKUK IND.CO.,LTD.</span> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>



<!-- 알림 메세지 -->
<a id="GblNotice_open" class="GblNotice_open"></a>

<div id="GblNotice" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali" id="alertCloseBtn"><button class="GblNotice_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif" alt="알림"></div><div class="pop_ttl0">알림</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="alertTxt" ></span></div>
		<div class="btn_ali_pop2" id="alertBtn"><input type ="button" class="btn_notice_reg GblNotice_close" value="확인" /></div>
	</div>
</div>

<!-- confirm창 -->
<a id="conFirm_open" class="conFirm_open"></a>
<div id="conFirm" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="conFirm_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif" alt="확인"></div><div class="pop_ttl0">확인</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="confirmTxt" ></span></div>
		<a class="conFirm_close" href="#">
			<div class="btn2_wrap">
				<div class="btn_ali_pop3" id="confirmCancelBtn"><input type="button" class="btn_notice_reg_cancel" value="취소" /></div>
				<div class="btn_ali_pop3" id="confirmBtn"><input type="button" class="btn_notice_reg_add" value="확인"></div>
			</div>
		</a>
	</div>
</div>


<a id="multiBox_open" class="multiBox_open"></a>
<div id="multiBox" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="multiBox_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="write_it">
			<div id='multiFrame' style="margin:30px 0 0 0;background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>


<!-- 팝업 스크립트 -->
<script>
$(document).ready(function () {
	$('#GblNotice,#conFirm,#multiBox').popup({
		transition: 'all 0.3s',
		blur: false,
		escape:false,
		scrolllock: false
	});

	//숫자만 입력받기
	$('.numberOnly').keydown(function(e){
		fn_Number($(this),e);
	}).keyup(function(e){
		fn_Number($(this),e);
	}).css('imeMode','disabled');


	//input필드 자동완성기능
	jQuery('input').attr("autocomplete","off");
});
</script>
<!-- 팝업 스크립트 -->

<!-- <form name='frm_down' method='post' action='/module/download2.php'>다운로드 폼
<input type='hidden' name='file_name' value="">
<input type='hidden' name='file_rename' value="">
<input type='hidden' name='downfiledir' value="/home/ansanyouth/www/upfile/">
</form> -->

<iframe name='ifra_gbl' src='about:blank' width='0' height='0' frameborder='0' scrolling='no' style='display:none;'></iframe>

</body>
</html>