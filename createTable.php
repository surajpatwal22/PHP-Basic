<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Database Table</h4>
    <?php
   
    // Connecting to the Database
    $servername = "localhost";
    $username = "root"; 
    $password = "";  
    $database = "mydb"; // created last time
 
    
    // Create a connection
    
    $conn = mysqli_connect($servername, $username, $password , $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully! to ".$database. " <br>";
    }

    //Creating a Database Table
    //CREATE TABLE `mydb`.`employee` (`Sno` INT(11) NOT NULL , `Name` VARCHAR(11) NOT NULL , `Role` VARCHAR(11) NOT NULL , `Designation` VARCHAR(11) NOT NULL , PRIMARY KEY (`Sno`)) ENGINE = InnoDB;

    $sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

    $result = mysqli_query($conn, $sql);

    //check

    if ($result) {
        echo " <br> Table created successfully";
    }else{
        echo "Error creating table: ".mysqli_error($conn). "<br>" ;
    }


   
    



    ?>
</body>

</html>