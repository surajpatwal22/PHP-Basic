<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   $fptr = fopen("file.txt","r");
   echo $fptr;

//    //// Reading a file line by line

//    echo fgets($fptr); //give you 1st line
//    echo fgets($fptr); //gives you second line
//    ///Reading the entire file at once
//     echo"<br>";
//    while($a= fgets($fptr)){
//     echo  $a;
//    }


   // reading file character by Character
   echo"<br>";
   echo fgetc($fptr);
//    //Reading the entire file at once
//    echo"<br>";
//    while($a= fgetc($fptr)){
//     echo  $a;
//    }

// read-upto first fullstop

while($a= fgetc($fptr)){
    if ($a == "."){
        break;
    }
    echo $a;
}
echo "<br>";
    ?>
</body>
</html>