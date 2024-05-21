<?php
include ("../common/navigation.php");
//session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .refresh {
            margin-left: 613px;
            margin-top: -4.7%;
        }

        .groupChat {
            text-align: center;
            padding-top: 14px;
            font-family: ui-sans-serif;
        }
    </style>
    <script>
        function clearTextbox() {
            document.getElementById("messageRecord").value = ""; // Clearing the textbox value
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 class="groupChat">Group Chat</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <?php
                include ("../database/db_connect.php");
                include("../common/sessionChecker.php");
                IsSessionEnable();
                // Connect to your database and fetch user data
                $query = "SELECT * FROM chatrecord";
                $result = $conn->query($query);

                // Loop through the result and display data in table rows
                while ($row = $result->fetch_assoc()) {
                    echo "[" . $row['messageTiming'] . "] " . $row['userName'] . ":" . $row['messageRecord'] . "<br>";
                }
                echo "<br>";
                ?>
                <form method="post" enctype="multipart/form-data" action="../chat/insertChat.php">
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-2">
                                <?php
                                if (isset($_SESSION['myusername'])) {
                                    if (!$_SESSION['myusername']) {
                                        echo "user not logedIn" . $_SESSION['myusername'];
                                    } else {
                                        echo "<h4 style=\"margin-left: -18px;\">" . $_SESSION["myusername"] . "</h4>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-md-9"><input type="text" class="form-control" id="messageRecord"
                                    name="messageRecord" placeholder="Message" required></div>
                            <div class="col-md-1"><button type="submit" class="btn btn-primary">Send</button></div>

                        </div>
                    </div>
                </form>

            </div>
            <div class=" refresh">
                <button class="btn btn-primary" onclick="clearTextbox()">Refresh</button>
            </div>
        </div>
    </div>
</body>

</html>