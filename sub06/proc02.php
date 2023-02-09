<?

	//error_reporting( E_ALL );
	//ini_set( "display_errors", 1 );

	include "../module/class/class.DbCon.php";
	include "../module/class/class.Msg.php";
	include "../module/class/class.Util.php";
	include "../module/class/class.FileUpload.php";

if($type == 'write'){
		
		$tot_num = '1';	//첨부파일 최대갯수

		$UPLOAD_DIR = "../upfile/"; // 업로드 받을 폴더위치 절대로 경로 바꾸지 말것

		//첨부파일제한
		include '../module/file_filtering.php';

		//파일관련처리
		for($i=1; $i<=$tot_num; $i++){
			$file_num = sprintf("%02d",$i);
			$doc_name	= 'upfile'.$file_num;
			$db_set_file = ${'dbfile'.$file_num};
			$db_real_file = ${'realfile'.$file_num};

			if($_FILES[$doc_name][name]){
				$temp_doc = $_FILES[$doc_name][name];		

				//파일필터링
				file_strip($temp_doc);

				//이미지의 경우 자동번호 부여
				$ext = FileUpload::getFileExtension($_FILES[$doc_name][name]);
				$fileUpload = new FileUpload($UPLOAD_DIR,$_FILES[$doc_name],'S');

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

		$f_time01 = strtotime($f_date);

		$userip = $_SERVER['REMOTE_ADDR'];
		$rDate = date('Y-m-d H:i:s');
		$rTime = mktime();
		
		$sql = "insert into hk_sub65 (title01,s_date,f_date,f_time,upfile01,realfile01,ment,userip,rTime,rDate,hit,f_time01) values";
		$sql .= "('$title01','$s_date','$f_date','$f_time','$arr_new_file[1]','$real_name[1]','$ment','$userip','$rTime','$rDate','$hit','$f_time01')";
	
		$result = mysql_query($sql);
		$msg = '접수가 완료되었습니다';

		//이동기능추가
		Msg::goMsg($msg,$next_url);

		exit;

	}
	elseif($type == 'edit'){
		$sql = "update hk_sub65 set ";
		$sql .= "title01='$title01', ";
		$sql .= "s_date='$s_date', ";
		$sql .= "f_date='$f_date', ";
		$sql .= "f_time='$f_time', ";
		$sql .= "ment='$ment', ";
		$sql .= "userip='$userip', ";
		$sql .= "rTime='$rTime', ";
		$sql .= "rDate='$rDate'";
		
		$sql .= " where uid=$uid";
		$result = mysql_query($sql);

		if($arr_new_file[1] || $del_upfile01=='Y'){
			$sql .= ", upfile01='$arr_new_file[1]' ";
			$sql .= ", realfile01='$real_name[1]' ";
		}
		$msg = '수정이 완료되었습니다';
				//이동기능추가
		Msg::goMsg($msg,$next_url);

		exit;
	}
	elseif($type == 'del'){

		$sql = "select * from hk_sub65 where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		for($i=1; $i<=5; $i++){
			$file_num = sprintf("%02d",$i);
			$del_file = $row["upfile".$file_num];

			if($del_file){
				unlink($UPLOAD_DIR."/".$del_file);
//				unlink($UPLOAD_DIR."/small/s_".$del_file);
			}
		}

		$sql = "delete from hk_sub65 where uid=$uid";
		$result = mysql_query($sql);

		$msg = '삭제되었습니다';

		//이동기능추가
		Msg::goMsg($msg,$next_url);
		exit;
	}

?>

