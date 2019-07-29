<?php
/* 작업일시 : 2019-02-14
 * 작성자 : LukeHan
 */

// DB
$host = '127.0.0.1';
$user = 'hkrme_support';
$pw = 'exitem08EXITEM)*';
$dbName = 'hkrme_subscription';
$mysqli = mysqli_connect($host, $user, $pw, $dbName);

$uidx = $_POST["uidx"];	// user idx


if($mysqli){
	$query_str = 'select * from tbl_licensekey where uidx="'.$uidx.'"';

	if($result = mysqli_query($mysqli, $query_str)){
		$data = '[';
		$row_cnt = 0;
		while($row = mysqli_fetch_array($result)){
			if($row_cnt++ != 0) $data = $data.', ';
			$data = $data.'{ "order_idx" : "'.$row['order_idx'].'", "license" : "'.$row['license'].'", "end_date" : "'.$row['end_date'].'" }';
		}
		$data = $data.']';

		echo json_encode(rawurlencode(iconv("CP949", "UTF-8", $data)));

		mysqli_close($mysqli);
	}else{ mysqli_close($mysqli); }
}else{ mysqli_close($mysqli); }

