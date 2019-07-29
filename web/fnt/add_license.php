<?php
/* 작업일자 : 2019-02-14
 * 작업자 : LukeHan
 */

// DB
$host = '127.0.0.1';
$user = 'hkrme_support';
$pw = 'exitem08EXITEM)*';
$dbName = 'hkrme_subscription';
$mysqli = mysqli_connect($host, $user, $pw, $dbName);


// massage txt
/* 한글 전송이 안됨
$add_license = array(
	'db_conn_err'=>'등록할 수 없습니다. 잠시뒤 다시 이용해 주시기 바랍니다.',
	'success'=>'등록이 완료되었습니다.\n만료일 : ',
	'invalid_license'=>'잘못 입력하셨습니다.',
	'License_Not_Registered'=>'유효하지 않은 라이선스 입니다.',
	'used_license'=>'이미 등록처리된 라이선스 입니다. 다른 라이선스를 입력해 주시기 바랍니다.',
	'expired_license'=>'인증기간이 만료되었습니다.\n만료일 : '
);
*/

$add_license = array(
	'db_conn_err'=>'-1',
	'success'=>'1:',
	'invalid_license'=>'-2',
	'License_Not_Registered'=>'-3',
	'used_license'=>'-4',
	'expired_license'=>'-5:'
);

function send_fnt($success, $msg){
	echo json_encode(rawurlencode(iconv("CP949", "UTF-8", '[{ "success" : "'.$success.'", "msg" : "'.$msg.'" }]')));
	exit;
}

// user index
$license = $_POST["license"];
$res_success = "false";

// 라이선스 값 체크
if(strlen($license) != 25) send_fnt($res_success, $add_license['invalid_license']);


if($mysqli){

	// 라이선스 유무 확인
	$query_str = 'select * from tbl_licensekey where license="'.$license.'"';

	if($result = mysqli_query($mysqli, $query_str)){
		$cnt = mysqli_num_rows($result);

		//라이선스가 없는 경우
		if($cnt < 1) send_fnt($res_success, $add_license['License_Not_Registered']);

		$row = mysqli_fetch_array($result);
		$end_date = $row['end_date'];

		// 등록여부 확인 - add_date == update_date -> 등록하지 않음	
		if($row['regist'] == 'Y') send_fnt($res_success, $add_license['used_license']);


		// 인증기간 확인
		$days = (strtotime($end_date) - strtotime(date("Y-m-d"))) / 86400;
		if($days < 0) send_fnt($res_success, $add_license['expired_license'].$end_date);


		// 라이선스 등록
		$query_str = 'update tbl_licensekey set regist="Y", update_date=now() where license="'.$license.'"';

		if($result = mysqli_query($mysqli, $query_str)){
			// 등록완료
			$res_success = "true";
			send_fnt($res_success, $add_license['success'].$end_date);

		}else{
			echo send_fnt($res_success, $add_license['db_conn_err']);
			mysqli_close($mysqli);
		}
	}else{
		echo send_fnt($res_success, $add_license['db_conn_err']);
		mysqli_close($mysqli);
	}
}else{
	echo send_fnt($res_success, $add_license['db_conn_err']);
	mysqli_close($mysqli);
}

