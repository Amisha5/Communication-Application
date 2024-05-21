<?php

include ("../common/user_list_func.php");
function DeleteUpload($id)
{
    include ("../database/db_connect.php");
    echo '' . $id . '';
    $query = "DELETE from uploads where uploadId='$id'";
    $conn->query($query);
    header("Location: ../upload/manageDocument.php");
}

function updateUploadData($id)
{
    include ("../database/db_connect.php");
    if (isset($_POST['save'])) {
        $newlabel = $_POST['label'];
        $query = "UPDATE uploads SET label = '$newlabel' WHERE uploadId = '$id'";
        $result = $conn->query($query);
        if ($result) {
            header("Location: ../upload/manageDocument.php"); // redirect
        }
    }
}

function upload_File($uploaded_file_path,$label)
{
    include("../database/db_connect.php");
    $query = "INSERT INTO uploads (label, fileName) VALUES (?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_Param("ss", $label, $uploaded_file_path);
    $stmt->execute();
    if(!$stmt)
    {
        echo "Error: File not saved to database";
    }
    else
    {
        echo "File uploaded successfully";
        header("Location: ../upload/manageDocument.php");
    }
}
?>