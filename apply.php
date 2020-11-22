<?php
require("dbconnect.php");
$StdName=mysqli_real_escape_string($conn,$_POST['StdName']);
$StdID=mysqli_real_escape_string($conn,$_POST['StdID']);
$Dad=mysqli_real_escape_string($conn,$_POST['Dad']);
$Mom=mysqli_real_escape_string($conn,$_POST['Mom']);
$FundType=mysqli_real_escape_string($conn,$_POST['FundType']);

if ($StdName) { //if title is not empty
	$sql = "insert into exam (applied,StdName, StdID, Dad, Mom, FundType,TSign, PSign, SSign, TExplain, Fund, SExplain, status) values (NULL,'$StdName', '$StdID', '$Dad', '$Mom', '$FundType',0,0,0,'TExplain',0,'SExplain',0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "申請已新增完成! ";
} else {
	echo "請填入申請人姓名!";
}
?>

</hr>
<a href='todoListView.php'>back<a>