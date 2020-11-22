<?php
require("todoModel.php");
$msgID=(int)$_GET['applied'];

$act =$_GET['act'];
$msg=$msgID;
if ($msgID>0) {
	switch($act) {
		case 'psign':
			PFinished($msgID);
			break;
        case 'tsign':
            TFinished($msgID);
            break;
        case 'ssign':
            SFinished($msgID);
            break;
		case 'reject':
			rejectJob($msgID);
			break;
		case 'ok':
			OKJob($msgID);
			break;
		case 'cancel':
			cancelJob($msgID);

		default:
			$msg="Invalid action. Ignored.";
			break;
	}
}
header("Location: todoListView.php?m=$msg");
?>

