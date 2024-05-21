<?php
include ("../common/navigation.php");
include ("../common/sessionChecker.php");
IsSessionEnable();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    
    .upload {
            text-align: center;
            padding-top: 14px;
            font-family: ui-sans-serif;
        }
</style>
</head>

<body>
    <div class="container">
        <h3 class="upload">My Uploads</h3><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Label</th>
                    <th>File Name</th>
                    <th>Action</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("../database/db_connect.php");
                // Connect to your database and fetch user data
                $query = "SELECT * FROM uploads";
                $result = $conn->query($query);

                // Loop through the result and display data in table rows
                while ($row = $result->fetch_assoc()) {
                    $id = $row['uploadId'];
                    echo "<tr>";
                    echo "<td>" . $row['label'] . "</td>";
                    echo "<td>" . $row['fileName'] . "</td>";
                    echo "<td> <a href ='../upload/editUpload.php?uploadId=$id' class=\"btn btn-info\">Edit</a></td>";
                    echo "<td> <a href ='../upload/deleteUpload.php?uploadId=$id' class=\"btn btn-danger\" >Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmDeleteModal">
    <a href ='../upload/addUpload.php' style="color:white"> Upload Record</a></button>
    </div>
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body >

</html >