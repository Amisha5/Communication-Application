<?php
//session_start();
?>
<html>

<head></head>

<body>
    <?php
    include ("../auth/welcome.php");
    ?>
    <div style="position:absolute ;top:60%;left:45%">
        <h4>Logout Successful</h4>
        <?php
        session_start();
        echo "You have been logged out";
        session_destroy();
        ?>

    </div>
</body>

</html>