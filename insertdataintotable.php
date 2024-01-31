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

    //Inserting Data into Database Table
    
    $name = "raghu";
    $designation = "delhi";

    // $sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ( 'anuj', 'dev');";

    $sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ( '$name', '$designation');";
    $result = mysqli_query($conn, $sql);

    //check

    if ($result) {
        echo " <br> Data  inserted successfully";
    }else{
        echo "Error inserting Data : ".mysqli_error($conn). "<br>" ;
    }


   
 
    



    ?>
</body>

</html>