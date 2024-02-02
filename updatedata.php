<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Updating Records in PHP & Where Clause </h4>
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


    $sql = "SELECT * FROM `phptrip` WHERE `dest`='pune'";
    $result = mysqli_query($conn, $sql);

    // Usage of WHERE Clause to fetch data from the database
    $num = mysqli_num_rows($result);
    echo $num . " records found in the DataBase<br>";
    $no = 1;
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $no . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];  // $no variable is liye use hva hai kyu ki $row["sno"] -> random pattern dega
            echo "<br>";
            $no = $no + 1;
        }
    }



    // Usage of WHERE Clause to Update Data
    $sql = "UPDATE `phptrip` SET `name` = 'shimla ka ashok' WHERE `dest` = 'shimla'";
    $result = mysqli_query($conn, $sql);
    echo var_dump($result);
    $aff = mysqli_affected_rows($conn); // $aff  will hold the number of rows affected by last query.
    echo "<br>Number of affected rows: $aff <br>";
    if ($result) {
        echo "We updated the record successfully";
    } else {
        echo "We could not update the record successfully";
    }

    ?>
</body>

</html>