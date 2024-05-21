<?php
include ("../common/user_list_func.php");
InsertData();
?>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="position:absolute;top:18%;left:10%">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Registration Successful</h3>
                <hr>
                <h4>Login for exploring application</h4> <br>
                <button class="btn btn-primary"><a href='../auth/login.php'
                        style="color:white;text-decoration:none;">Login</a></button>
            </div>
        </div>
    </div>
</body>

</html>