<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
    //logout button pe 

    session_start(); //start session
    session_unset(); // unset all variable 

    session_destroy(); // destroy sesion that mean i can not access information in session_data file 

    echo "session destroy";



    ?>
</body>
</html>