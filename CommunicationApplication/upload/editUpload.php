<?php
include ("../common/navigation.php");
include ("../database/db_connect.php");
include("../common/user_upload_func.php");
include ("../common/sessionChecker.php");
IsSessionEnable();
$id = $_GET['uploadId'];
$query = "SELECT * FROM uploads WHERE uploadId = '$id'";
$connect = $conn->query($query);
$row = $connect->fetch_assoc();
$label = $row['label'];
updateUploadData($id);
?>
<html>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Edit Upload Data</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="label">Label:</label>
                        <input type="text" class="form-control" value="<?php echo $label ?>" id="label"
                            name="label" required>
                    </div>
                    <input type="submit" name="save" value="Update" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
