<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Deleting Records in PHP & Limit Clause </h4>
    <?php


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";


    // Create a connection
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully! <br>";
    }


    $sql = "DELETE FROM `phptrip` WHERE `dest` = 'delhi' LIMIT 1"; 
    // LIMIT 1 is used -->  it will delete only one record that matches the condition
    // We can change value of Limit as per our Need 
    //
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo "<br>Number of affected rows: $aff <br>";

    if ($result) {
        echo "Delete successfully";
    } else {
        $err = mysqli_error($conn);
        echo "Not Delete successfully due to this error --> $err";
    }










    ?>
</body>

</html>