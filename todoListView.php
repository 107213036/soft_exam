<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 
if ($_SESSION['uID']=='secretary'){
	$bossMode = 2;
}
else if ($_SESSION['uID']=='teacher'){
	$bossMode = 3;
}
else if ($_SESSION['uID']=='principal'){
	$bossMode = 4;
}
else {
	$bossMode=0;
}
require("todoModel.php");
$result=getJobList($bossMode);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>my Todo List !! </p>
<a href="loginForm.php">login</a> | <?php if ($bossMode==0)  echo "<a href='applyForm.php'> 申請 </a>" ?> <br>
<table width="1000" border="1">
  <tr>
    <td>編號</td>
    <td>姓名</td>
    <td>學號</td>
	<td>爸爸</td>
    <td>媽媽</td>
	<td>申請種類</td>
	<td>老師蓋章</td>
    <td>校長蓋章</td>
    <td>秘書蓋章</td>
    <td>老師備註</td>
    <td>金額</td>
    <td>秘書備註</td>
    <td>狀態</td>
    <td>送出</td>
  </tr>
<?php

while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" , htmlspecialchars($rs['applied']), "</td>";
    echo "<td>" , htmlspecialchars($rs['StdName']), "</td>";
	echo "<td>" , htmlspecialchars($rs['StdID']), "</td>";
	echo "<td>" , htmlspecialchars($rs['Dad']), "</td>";
    echo "<td>" , htmlspecialchars($rs['Mom']), "</td>";
    echo "<td>" , htmlspecialchars($rs['FundType']), "</td>";
    if ($bossMode==0){
        echo "<td>" , htmlspecialchars($rs['TSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['PSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['TExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['Fund']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['status']), "</td>";
    }
    else if ($bossMode==4){
        echo "<td>" , htmlspecialchars($rs['TSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['PSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['TExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['Fund']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['status']), "</td>";
        echo "<td>","<a href='todoSetControl.php?act=psign&applied={$rs['applied']}'>通過</a>  ","</td>";
    }
    else if ($bossMode==2){
        echo "<td>" , htmlspecialchars($rs['TSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['PSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['TExplain']), "</td>";
        echo "<td>" , "<select name='Fund' Type='text' id='Fund'>
                        <option>0</option>
                        <option>3000</option>
                        <option>5000</option>
                        <option>1000</option></select>", "</td>";
        echo "<td>" , htmlspecialchars($rs['SExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['status']), "</td>";
        echo "<td>" , "<a href='todoSetControl.php?act=ssign&applied={$rs['applied']}'>簽名</a> ", "</td>";
    }
    else if ($bossMode==3){
        echo "<td>" , htmlspecialchars($rs['TSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['PSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SSign']), "</td>";
        echo "<td>" , htmlspecialchars($rs['TExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['Fund']), "</td>";
        echo "<td>" , htmlspecialchars($rs['SExplain']), "</td>";
        echo "<td>" , htmlspecialchars($rs['status']), "</td>";
        echo "<td>" , "<a href='todoSetControl.php?act=tsign&applied={$rs['applied']}'>簽名</a>  ", "</td>";

    }

    echo "</td></tr>";
}
?>
</table>
</body>
</html>
