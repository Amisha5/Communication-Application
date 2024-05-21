<?php
include("../common/sessionChecker.php");
IsSessionEnable();
        include ("../database/db_connect.php");
        
        //session_start();

        $message = $_POST["messageRecord"];
        if (!$_SESSION['myusername']) {
            echo $_SESSION['myusername'];
        } else {
            echo $_SESSION["myusername"];
            $userName = $_SESSION["myusername"];
        }

        //validating the data
        if (!isset($_POST["messageRecord"])) {
            echo "Please fill in all fields";
        }
        $dateTime = date('Y-m-d H:i:s');
        echo $dateTime;
        //inserting the data into the database
        $query = "INSERT INTO chatrecord (userName, messageRecord,messageTiming) VALUES (?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $userName, $message, $dateTime);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: ../chat/chats.php");
        } else {
            echo "Error in sending message";
            echo "<button style='color:red;'><a href='../auth/register.php'>resend message</a></button>";
        }
?>