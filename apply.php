<?php
require("todoModel.php");
$StdName=mysqli_real_escape_string($conn,$_POST['StdName']);
$StdID=mysqli_real_escape_string($conn,$_POST['StdID']);
$Dad=mysqli_real_escape_string($conn,$_POST['Dad']);
$Mom=mysqli_real_escape_string($conn,$_POST['Mom']);
$FundType=mysqli_real_escape_string($conn,$_POST['FundType']);

if ($StdName) { 
	addJob($StdName, $StdID, $Dad, $Mom, $FundType);
	$msg="Message updateded";
} else {
	$msg= "Message title cannot be empty";
}
header("Location: todoListView.php?m=$msg");
?>
u