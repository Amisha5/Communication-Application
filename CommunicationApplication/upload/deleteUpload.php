<?php
include ("../common/navigation.php");
include ("../common/user_upload_func.php");
include ("../common/sessionChecker.php");
IsSessionEnable();
$id = $_REQUEST['uploadId'];
DeleteUpload($id);
?>

