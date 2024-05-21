<?php
include ("../common/navigation.php");
include ("../database/db_connect.php");
include ("../common/user_list_func.php");
include ("../common/sessionChecker.php");
IsSessionEnable();


$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
$connect = $conn->query($query);
$row = $connect->fetch_assoc();
$fullname = $row['fullname'];
$email = $row['email'];

//Edit user data
EditUser($id);
?>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Edit User Data</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="fullname" class="form-control" value="<?php echo $fullname ?>" id="fullname"
                            name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" value="<?php echo $email ?>" id="email" name="email" required>
                    </div>
                    <input type="submit" name="save" value="Update" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
</body>

</html>