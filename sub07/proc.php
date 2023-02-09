<?

	include "../module/class/class.DbCon.php";
	include "../module/class/class.Msg.php";

	 //error_reporting( E_ALL );
	 //ini_set( "display_errors", 1 );

	if($type == 'write'){

		$userip = $_SERVER['REMOTE_ADDR'];
		$rDate = date('Y-m-d H:i:s');
		$rTime = mktime();
		
		$sql = "insert into hk_sub72 (name,mobile,place01,d_date,d_date02,d_date03,p_status01,strong,slump,baehab,needs,userip,rTime,rDate) values";
		$sql .= "('$name','$mobile','$place01','$d_date','$d_date02','$d_date03','$p_status01','$strong','$slump','$baehab','$needs','$userip','$rTime','$rDate')";
	
		$result = mysql_query($sql);
		$msg = '접수가 완료되었습니다';

		//이동기능추가
		Msg::goMsg($msg,$next_url);

		exit;

	}
	
	elseif($type == 'del'){

		$sql = "delete from hk_sub72 where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		$msg = '삭제되었습니다';

		//이동기능추가
		Msg::goMsg($msg,$next_url);
		exit;
	}

?>