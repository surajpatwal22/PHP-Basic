<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Selecting and Displaying Data From MySQL Using MySQLi </h4>
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


    $sql = "SELECT * FROM `phptrip`";
    $result = mysqli_query($conn, $sql);

    //access to our database --> done
    
    // Find the number of records returned
    
    $num = mysqli_num_rows($result);
    echo "<b>Number of Rows in phptrip table : " . $num . "</b><br />"; // number of rows display 
    
    // Display the rows returned by the sql query
    
    if ($num > 0) {
        // $row = mysqli_fetch_array($result);
        // $row = mysqli_fetch_assoc($result); //mysqli_fetch_assoc fetch data one by one  as an associative array
        // echo var_dump($row);
        // echo "<br>";
        // $row = mysqli_fetch_assoc($result); // 2nd row ka data display hoga 
        // echo var_dump($row);
        // echo "<br>";

        // but what if we have million data --> then we cant use it this way 
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
            echo "<br>";

        }

    }






    ?>
</body>

</html>