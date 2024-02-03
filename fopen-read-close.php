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
    echo var_dump($fptr); // If we print the file pointer, it will show us something like "Resource id is #3".


    //
    if(!$fptr){
        die("Unable to open this file.Please enter a valid filename");
    }

    echo filesize("file.txt"); //filesize()-> exact no of words in txt file 
    echo "<br>";
    
    // Read the content of the file
    //$content = fread($fptr, 4); --> will show only 4 words 
    $content = fread($fptr, filesize("file.txt"));
    echo "Content of the file: <br> $content " ;
    
    fclose($fptr); // kuch bhi open hoga to close bhi krna padhta hai 


    ?>
</body>
</html>