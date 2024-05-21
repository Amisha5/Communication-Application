<?php 
function IsSessionEnable()
{
    session_start();
    if($_SESSION['myusername'] == null){
        header("location:../auth/welcome.php");
    }
}
?>