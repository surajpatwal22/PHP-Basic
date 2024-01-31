<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Database connection</h4>
    <?php
    /* There  are two ways to connect to database 
    1 -  Using PDO (PHP Data Objects) , can connect to multiple databases,
    it's more secure and recommended way to connect with the database.
    2 -   Using MySQLi (MySQL Improved), it's also a good option but not as secure as PDO. Can only be Used with MYSQL.
    */

    // Connecting to the Database
    $servername = "localhost";
    $username = "root"; // by default it is root
    $password = "";  // no password for root user
 
    
    // Create a connection
    
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully! <br>";
    }


    //Creating a Database
    
    //Write this Querry --> CREATE DATABASE mydb;
    

    $sql = "CREATE DATABASE  mydb";
    $result = mysqli_query($conn, $sql);   // need two parameter connection Variable and 2nd database creation variable also check on phpMyadmin 
    
    // If User want to check whether data base is created or not we can use result variable 
    // result variable gives  us the output of our query i.e true or false
    
    // Check for the database creation success
    
    if ($result) {
        echo "Database created successfully <br>";
    } else {
        echo "Database not created due to " . mysqli_error($conn);
    }

    // mysqli_close($conn);


    //Creating a Database Table


 



    ?>
</body>

</html>