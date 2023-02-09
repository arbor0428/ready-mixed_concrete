<?
exit;
include "./class/class.DbCon.php";
include "./class/class.Msg.php";
include "./class/class.FileUpload.php";
include "./class/class.Util.php";

$path = '../board/upfile/';	//첨부파일 경로

$t1 = 'table_1642307954';	//원본 게시판
$t2 = 'table_1655712336';	//복사 게시판

$sql = "select * from tb_board_list where table_id='".$t1."' order by uid";
$result = mysql_query($sql);
$num = mysql_num_rows($result);

for($i=0; $i<$num; $i++){
	$row = mysql_fetch_array($result);

	$pid = $row['pid'];
	$userid = $row['userid'];
	$table_id = $t2;
	$cade03 = $row['cade03'];
	$mtype = $row['mtype'];
	$title = addslashes($row['title']);
	$name = $row['name'];
	$company = $row['company'];
	$email = $row['email'];
	$price = $row['price'];
	$passwd = $row['passwd'];
	$pwd_chk = $row['pwd_chk'];
	$notice_chk = $row['notice_chk'];
	$notice_chk2 = $row['notice_chk2'];
	$totalNotice_chk = $row['totalNotice_chk'];
	$data01 = $row['data01'];
	$data01_1 = $row['data01_1'];
	$data02 = $row['data02'];
	$data03 = $row['data03'];
	$data04 = $row['data04'];
	$data05 = $row['data05'];
	$sData01 = $row['sData01'];
	$sData02 = $row['sData02'];
	$sData03 = $row['sData03'];
	$sData04 = $row['sData04'];
	$sData05 = $row['sData05'];
	$sData06 = $row['sData06'];
	$sData07 = $row['sData07'];
	$ment = addslashes($row['ment']);
	$hit = $row['hit'];
	$ip = $row['ip'];
	$userfile01 = $row['userfile01'];
	$realfile01 = $row['realfile01'];
	$userfile02 = $row['userfile02'];
	$realfile02 = $row['realfile02'];
	$userfile03 = $row['userfile03'];
	$realfile03 = $row['realfile03'];
	$userfile04 = $row['userfile04'];
	$realfile04 = $row['realfile04'];
	$userfile05 = $row['userfile05'];
	$realfile05 = $row['realfile05'];
	$reg_date = $row['reg_date'];
	$rDate = $row['rDate'];
	$data06 = $row['data06'];

	//첨부파일복사(기존 파일명 앞에 'C' 추가)
	for($f=1; $f<=5; $f++){
		$fno = sprintf('%02d',$f);
		$fName = ${'userfile'.$fno};
		if($fName){
			if(is_file($path.$fName)){
				copy($path.$fName, $path.'C'.$fName);
				${'userfile'.$fno} = 'C'.$fName;
			}
		}
	}

	$query = "insert into tb_board_list (pid,userid,table_id,cade03,mtype,title,name,company,email,price,passwd,pwd_chk,notice_chk,notice_chk2,totalNotice_chk,data01,data01_1,data02,data03,data04,data05,sData01,sData02,sData03,sData04,sData05,sData06,sData07,ment,hit,ip,userfile01,realfile01,userfile02,realfile02,userfile03,realfile03,userfile04,realfile04,userfile05,realfile05,reg_date,rDate,data06) values ('$pid','$userid','$table_id','$cade03','$mtype','$title','$name','$company','$email','$price','$passwd','$pwd_chk','$notice_chk','$notice_chk2','$totalNotice_chk','$data01','$data01_1','$data02','$data03','$data04','$data05','$sData01','$sData02','$sData03','$sData04','$sData05','$sData06','$sData07','$ment','$hit','$ip','$userfile01','$realfile01','$userfile02','$realfile02','$userfile03','$realfile03','$userfile04','$realfile04','$userfile05','$realfile05','$reg_date','$rDate','$data06')";
	$res = mysql_query($query);
}

//복사된 테이블의 레코드 수
$sql = "select * from tb_board_list where table_id='".$t2."'";
$result = mysql_query($sql);
$cNum = mysql_num_rows($result);

echo $num.' / '.$cNum;
?>