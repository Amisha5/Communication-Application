<?php
include ("../common/navigation.php");
include ("../common/user_list_func.php");
include ("../common/sessionChecker.php");
IsSessionEnable();
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    
    .user {
            text-align: center;
            padding-top: 14px;
            font-family: ui-sans-serif;
        }
</style>
</head>

<body>
    <div class="container">
        <h2 class="user">Users</h2><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("../database/db_connect.php");
                // Connect to your database and fetch user data
                $query = "SELECT * FROM users";
                $result = $conn->query($query);

                // Loop through the result and display data in table rows
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td> <a href ='../user/editUser.php?id=$id' class=\"btn btn-info\">Edit</a></td>";  
                    echo "<td> <a href ='../user/deleteUser.php?id=$id' class=\"btn btn-danger\">Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body >

</html >

