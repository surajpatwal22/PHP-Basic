<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datatype</title>
</head>
<body>
    <?php 

    // string
    /*
    integer
    float
    object
    Array
    Null
    */
    $str = "Hello World!";
    $name = "arun";
    $income = 456 ;
    $x = true;
    echo "Name of user is  $name and his salary is Rs $income ";
    echo "<br>";
    echo var_dump($x);

    $x =  NULL;
    echo "<br>" ;
    echo var_dump($x) ;
   

    ?>
</body>
</html>