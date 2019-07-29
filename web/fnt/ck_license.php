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

$license = $_POST["license"];	// user license


if($mysqli){
	$query_str = 'select * from tbl_licensekey where license="'.$license.'"';

	if($result = mysqli_query($mysqli, $query_str)){
		$row_cnt = mysqli_num_rows($result);
		$data = '[{ "ck" : "';

		if($row_cnt == 0){
			$data = $data.'-1';	// 라이선스가 없는 경우
		}else{
			$row = mysqli_fetch_array($result);
			$end_date = $row['end_date'];

			$days = (strtotime($end_date) - strtotime(date("Y-m-d"))) / 86400;

			if($days < 0) {
				// 라이선스가 만료된 경우
				$data = $data.'1", "end_date" : "'.$end_date;
			}else {
				$data = $data.'0", "end_date" : "'.$end_date;	// 이상없음
			}
		}

		$data = $data.'" }]';

		echo json_encode(rawurlencode(iconv("CP949", "UTF-8", $data)));

		mysqli_close($mysqli);
	}else{ mysqli_close($mysqli); }
}else{ mysqli_close($mysqli); }

