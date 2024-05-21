<?php
session_start();
include ("../database/db_connect.php");

$email = $_POST["email"];
$password = $_POST["password"];

//validating the data
$query = "SELECT fullname FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $fullname = $row['fullname'];
}

//setting the session
if ($stmt->affected_rows == 1) {
    $_SESSION["myusername"] = $fullname;
    if (isset($_SESSION['myusername'])) {
        if ($_SESSION['myusername'] != null) {
            include ("../common/navigation.php");
        }
    }
    header("Location: ../auth/login_success.php");
    $conn->close();
    exit();
} else {
    echo "<div style=\"margin-top: 2%;
    margin-left: 33%; \">";
    echo "<h3 > Invalid Credentials! try again .</h3>";
    echo "<a href ='../auth/welcome.php' style=\"colorwhite;text-decoration: none;\">Click here to visit welcome page</a>";
    echo "</div><hr>";
    include ("../auth/login.php");
    exit();
}
?>