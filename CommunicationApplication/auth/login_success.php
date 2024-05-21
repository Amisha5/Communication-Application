<?php
include ("../common/navigation.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <div class="container" style="position:absolute;top:18%;left:10%">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <br><br>
                    <h2>Login Successful</h2>
                    <?php
                    if (!$_SESSION['myusername']) {
                        echo $_SESSION['myusername'];
                        //header("location:login.php");
                    } else {
                        echo "Welcome \t" . $_SESSION["myusername"] . "!";
                    }
                    ?>
                    <br><a href='../auth/welcome.php'>Click to return to home page</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>