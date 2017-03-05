<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <?php
    $_SESSION["choice_made"] = $_POST["choice"];

    echo $_SESSION["choice_made"];
    ?>
</body>

</html>
