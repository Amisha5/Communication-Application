<?php 
function uploadFile($uploaded_file_path)
{
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaded_file_path)) { // ?
            echo "Problem: Could not move file to destination directory";
            exit;
        }
    } else {
        echo "Problem: Possible file upload attack. Filename:";
        echo $_FILES['userfile']['name'];
        exit;
    }
}

function savetoDatabase($uploaded_file_path, $label)
{
    include("../common/user_upload_func.php");
    upload_File($uploaded_file_path,$label);
}
?>