<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Start the session and get the data
session_start();
if (isset($_SESSION["username"])) {
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your favorite category is ". $_SESSION['favCategory'];
    echo "<br>";
}else {
    echo " login again";
}


    ?>
</body>
</html>