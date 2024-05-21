<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <nav class="nav nav-pills navbar-expand-lg nav-justified">
        <a class="nav-item nav-link" href="../chat/chats.php">Group Chat</a>
        <a class="nav-item nav-link " href="../user/userData.php">Manage Users</a>
        <a class="nav-item nav-link" href="../upload/manageDocument.php">Manage Documents</a>
        <a class="nav-item nav-link" href="../auth/logout.php">Logout</a>
        <?php 
        if(isset($_SESSION['myusername'])){
            if (!$_SESSION['myusername']) {
                echo $_SESSION['myusername'];
               //header("location:login.php");
            } else {
                echo "<h2 style=\"color: white;
                font-size: 16px;
                font-weight: 400;
                line-height: 1.5;
                margin-top: 10px;\">".$_SESSION['myusername']."! </h2>";
            }
        }
        ?>
    </nav>
    </div>
    <!-- <?php
    // $email = $_POST["email"];
    // echo "$email, Welcome to User Management!"
    ?> -->
</body>
</html>
