<?

	//error_reporting( E_ALL );
	//ini_set( "display_errors", 1 );

	include "../module/class/class.DbCon.php";
	include "../module/class/class.Msg.php";
	include "../module/class/class.FileUpload.php";
	include "../module/class/class.Util.php";

if($type == 'write'){

	$tot_num = '1';	//첨부파일 최대갯수

		$UPLOAD_DIR = "../upfile/"; // 업로드 받을 폴더위치 절대로 경로 바꾸지 말것

		//첨부파일제한
		//include '../module/file_filtering.php';

		//파일관련처리
		for($i=1; $i<=$tot_num; $i++){
			$file_num = sprintf("%02d",$i);
			$doc_name	= 'upfile'.$file_num;
			$db_set_file = ${'dbfile'.$file_num};
			$db_real_file = ${'realfile'.$file_num};

			if($_FILES[$doc_name][name]){
				$temp_doc = $_FILES[$doc_name][name];		

				//파일필터링
				//file_strip($temp_doc);

				//이미지의 경우 자동번호 부여
				$ext = FileUpload::getFileExtension($_FILES[$doc_name][name]);
				$fileUpload = new FileUpload($UPLOAD_DIR,$_FILES[$doc_name],'P');

				if($db_set_file){
					unlink($UPLOAD_DIR."/".$db_set_file);
					if(is_file($UPLOAD_DIR."/small/s_".$db_set_file))	unlink($UPLOAD_DIR."/small/s_".$db_set_file);
				}

				if($fileUpload->uploadFile()){
					$arr_new_file[$i] = $fileUpload->fileInfo[rename];
				}else{
					Msg::backMsg("파일을 다시 선택해 주십시오");
					exit();
				}

				if(in_array($ext, array('jpg','jpeg','gif','bmp'))){

/*
				##### 썸네일 생성관련 #####

					$Thumb_size = '250';

					$file_path = './upfile/';
					$Thumb_name = 's_'.$arr_new_file[$i];
					$copy_file = copy($file_path.$arr_new_file[$i], $file_path.'small/'.$Thumb_name);

					if(!$copy_file){
						echo ("file copy error");
					}else{
						//작은이미지
						$file = $file_path.$arr_new_file[$i];
						$saveDir = $file_path.'small/'; // 저장할 경로
						$saveName = $Thumb_name; // 이미지명
						$sFactor = $Thumb_size; // 허용이미지 사이즈
						$s_img = imgThumbo($file, $saveName, $sFactor, $saveDir);

					}

				###################

*/
				}

				$real_name[$i] = $temp_doc;

			}else{
				if($_POST["del_".$doc_name]=='Y'){
					unlink($UPLOAD_DIR."/".$db_set_file);
					if(is_file($UPLOAD_DIR."/small/s_".$db_set_file))	unlink($UPLOAD_DIR."/small/s_".$db_set_file);
					$arr_new_file[$i] = '';
					$real_name[$i] = '';
				}else{
					$arr_new_file[$i] = $db_set_file;
					$real_name[$i] = $db_real_file;
				}
			}

		}


	
	
		$userip = $_SERVER['REMOTE_ADDR'];
		$reg_date = date('Y-m-d H:i:s');
		$rTime = mktime();

		//기본사항
		$sql = "insert into hk_sub661 (name,e_name,birth,country,h_field,addr01,s_phone,t_phone,email,military,army,a_class,e_reason,m_period,m_period02,motive,skill,task01,pfmce,advantage,task02,upfile01,realfile01,w_date01,w_date02,w_date03,writer01,writer02,b_name,a_date01,a_date02,a_date03,writer03,writer04,userip,rTime,reg_date) values";
		$sql .= "('$name','$e_name','$birth','$country','$h_field','$addr01','$s_phone','$t_phone','$email','$military','$army','$a_class','$e_reason','$m_period','$m_period02','$motive','$skill','$task01','$pfmce','$advantage','$task02','$arr_new_file[1]','$real_name[1]','$w_date01','$w_date02','$w_date03','$writer01','$writer02','$b_name','$a_date01','$a_date02','$a_date03','$writer03','$writer04','$userip','$rTime','$reg_date')";
		$result = mysql_query($sql);

		$sql = "select * from hk_sub661 order by uid desc";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		$uid = $row['uid'];

		// 학력사항
		for($i=0; $i<count($s_name); $i++){
			if($s_name[$i]){
				$sql = "insert into hk_sub662 (gubun,s_name,major,area01,h_date01,h_date02,jhselect,c_credit,j_gubun,puid) values ('$gubun[$i]','$s_name[$i]','$major[$i]','$area01[$i]','$h_date01[$i]','$h_date02[$i]','$jhselect[$i]','$c_credit[$i]','$j_gubun[$i]','$uid')";
				$result = mysql_query($sql);
				
			}
		}

		// 직무자격 
		for($i=0; $i<count($license); $i++){
			if($license[$i]){

				$sql = "insert into hk_sub663 (license,rank,a_date011,v_date01,puid) values ('$license[$i]','$rank[$i]','$a_date011[$i]','$v_date01[$i]','$uid')";
				$result = mysql_query($sql);
				
			}
		}

		// 어학(회화)
		for($i=0; $i<count($language); $i++){
			if($language[$i]){

				$sql = "insert into hk_sub664 (language,t_name,grade,a_date022,puid) values ('$language[$i]','$t_name[$i]','$grade[$i]','$a_date022[$i]','$uid')";
				$result = mysql_query($sql);
				
			}
		}

			//경력사항
			for($i=0; $i<count($n_work); $i++){
				if($n_work[$i]){

				$sql = "insert into hk_sub665 (w_date011,w_date022,n_work,area02,positon,status,job,puid) values ('$w_date011[$i]','$w_date022[$i]','$n_work[$i]','$area02[$i]','$positon[$i]','$status[$i]','$job[$i]','$uid')";
				$result = mysql_query($sql);

				}
			}

		$msg = '접수가 완료되었습니다';
		
		//이동기능추가
		Msg::goMsg($msg,$next_url);

	}

?>