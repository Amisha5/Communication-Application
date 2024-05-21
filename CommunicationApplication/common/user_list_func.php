<?php

//Edit UserList data
function EditUser($id)
{
    include ("../database/db_connect.php");
    if (isset($_POST['save'])) {
        $newfullname = $_POST['fullname'];
        $newemail = $_POST['email'];
        echo "fullname: $newfullname";
        $query = "UPDATE users SET fullname = '$newfullname', email = '$newemail' WHERE id = '$id'";
        $result = $conn->query($query);
        if ($result) {
            echo "saved";
            header("Location: ../user/userData.php"); // redirect
        }
    }
}

//Delete UserList data
function DeleteUser($id)
{
    include ("../database/db_connect.php");
    echo '' . $id . '';
    $query = "DELETE from users where id='$id'";
    $conn->query($query);
    header("Location: ../user/userData.php");
}

//inserting the data into the database
function InsertData()
{
    include ("../database/db_connect.php");
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    //validating the data
    if (!isset($_POST["fullname"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["confirmPassword"])) {
        echo "Please fill in all fields";
    } else if ($password != $confirmPassword) {
        include ("../auth/register.php");
        exit();
    }

    $query = "INSERT INTO users (fullname, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $fullName, $email, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $conn->close();
    } else {
        echo "Error registering user";
        echo "<button style='color:red;'><a href='../auth/register.php'>Register</a></button>";
    }

}
?>