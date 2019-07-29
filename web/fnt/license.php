<?php
/* 작업일자 : 2019-02-14
 * 작업자 : LukeHan
 */

$uidx = $_POST["uidx"]; // user index
$order_idx = $_POST["order_idx"]; // order index
$term = $_POST["term"]; // license deadline

// DB
$host = '127.0.0.1';
$user = 'hkrme_support';
$pw = 'exitem08EXITEM)*';
$dbName = 'hkrme_subscription';
$mysqli = mysqli_connect($host, $user, $pw, $dbName);


/************ fnt *************/
// generaterString
function generaterString($length){
	$chars = '0123456789';
	$chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

	$license = '';
	$loop_length = $length;

	while($loop_length--){
		$license .= $chars[rand(0, (strlen($chars)-1))];
	}

	return $license;
}


if($mysqli){

	// create license
	$license = "";
	$license_ck = true;

	while($license_ck){
		$license = generaterString(25);

		$str_query = "select count(*) as cnt from tbl_licensekey where license='".$license."'";

		$result = mysqli_query($mysqli, $str_query);
		$row = mysqli_fetch_array($result);
		$cnt = $row["cnt"];

		if($cnt == 0) $license_ck = false;
	}


	// insert license
	$str_query = "insert into tbl_licensekey (uidx, order_idx, license, end_date) values (".$uidx.", ".$order_idx.", '".$license."', date_add(now(), interval ".$term." year))";

	if(mysqli_query($mysqli, $str_query)){
		echo $license;
		mysqli_close($mysqli);
	}else{
		echo "fail";
		mysqli_close($mysqli);
	}
}else{
	echo "check the Databases";
	mysqli_close($mysqli);
}

