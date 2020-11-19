<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增工作</title>
</head>
<body>
<h1>Add New Message</h1>
<form method="post" action="apply.php"><!--action 應該要更改-->

      申請人： <input name="StdName" type="text" id="StdName" /> <br>

      學號： <input name="StdID" type="text" id="StdID" /> <br>

      父親名： <input name="Dad" type="text" id="Dad" /> <br>

      母親名： <input name="Mom" type="text" id="Mom" /> <br>

      申請類別： <select name="FundType" Type="text" id="FundType">
        <option>低收入戶</option>
        <option>中低收入戶</option>
        <option>家庭突發因素</option>
        </select>
        </br>

      <input type="button" value="取消" onclick="location.href='todoListView.php'">

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>


