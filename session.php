<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
// What is a session?
// Used to manage information across difference pages

session_start(); // session start ho gaya 

//$_SESSION --> GLOBAL VARIABLE HAI 
// validation 
$_SESSION["username"] ="suraj";
$_SESSION["favCategory"] = "Book";

echo "session saved";





    ?>

</body>
</html>