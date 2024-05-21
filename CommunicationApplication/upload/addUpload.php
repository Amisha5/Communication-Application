<?php 
include ("../common/navigation.php");
include ("../common/sessionChecker.php");
IsSessionEnable();
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Upload Document</h2>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    <div class="form-group">
                        <label for="label">File Description:</label>
                        <input type="text" class="form-control" id="label" name="label" required>
                    </div>
                    <div class="form-group">
                        <label for="userfile">Choose File :</label>
                        <input type="file" id="userfile" name="userfile">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">upload File</button>
                        <button class="btn btn-secondary"><a href="../upload/manageDocument.php"
                                style="color: white;font-style: normal;">Cancle</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include ("../common/uploadfilecommon.php");
if(isset($_POST["label"]) && isset($_FILES['userfile']['name']))
{
if ($_FILES['userfile']['error'] > 0) {
    switch ($_FILES['userfile']['error']) {
        case 1:
            echo "File exceeded upload_max_file_size";
            break;

        case 2:
            echo "File exceeded upload max_file_size";
            break;

        case 3:
            echo "File only partially uploaded";
            break;

        case 4:
            echo "no file uploaded";
            break;
    }
}

$document_path = $_SERVER["DOCUMENT_ROOT"] . "/uploads/" . $_FILES['userfile']['name'];
$label = $_POST['label'];
uploadFile($document_path);
savetoDatabase($_FILES['userfile']['name'], $label);
}
?>
