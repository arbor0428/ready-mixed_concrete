<?

	include "./module/class/class.DbCon.php";



	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){


		
		$query = "desc tb_board_list ";
		$result = mysql_query($query);

		//$query = "desc hk_sub65";
		//$result = mysql_query($query);

		$num = mysql_num_rows($result);
		echo$num.'<br>';
		while($row = mysql_fetch_array($result) ){

			for($i=0;$i<8;$i++){
				echo $row[$i].' / ';
			}

				echo '<br>';
		}

	} 
?>