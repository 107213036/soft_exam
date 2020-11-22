<?php
require_once("dbconnect.php");

function getJobList($bossMode) {
	global $conn;
	if ($bossMode) {
		$sql = "select *from exam where 1;";
	} else {
		$sql = "select *from exam where 1;";
	}
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

// 刪除申請
function cancelJob($msgID) {
	global $conn;
	$sql = "update exam set status = 0 where Stdapplied=$msgID and status 3;";
	mysqli_query($conn,$sql);
}

// 校長核決
function PFinished($msgID) {
	global $conn;
	$sql = "update exam set Psign=1,status=1 where applied=$msgID and PSign = 0";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}
// 老師簽章
function TFinished($msgID) {
	global $conn;
	$sql = "update exam set TSign = 1 where applied=$msgID and TSign = 0;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}
// 秘書簽章
function SFinished($msgID) {
	global $conn;
	//$SExplain=mysqli_real_escape_string($conn,$_POST['SExplain']);
	$sql = "update exam set SSign=1 where applied=$msgID and SSign = 0;";
	
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}
 // 退回
function rejectJob($msgID){
	global $conn;
	$sql = "update exam set status = 0 where applied=$msgID and status = 2;";
	mysqli_query($conn,$sql);
}

// 審核通過
 function OKJob($msgID){
	global $conn;
	$sql = "update exam set status = 0 where applied=$msgID and status = 1;";
	mysqli_query($conn,$sql);
}

//儲存意見
function store($msgID){
	global $conn;
	$sql = "update exam set SExplain = $SExplain where applied=$msgID and status = 1;";
	mysqli_query($conn,$sql);
}

?>
