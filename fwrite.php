<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fptr = fopen("file2.txt","w"); //r mode means read only
    echo $fptr;

    //We can write to a file in PHP using fopen().
    // We need to change the argument from reading mode to writing mode. So, we will use a file pointer to open a file in write mode. 
    // Note: If we use fopen() a file that does not exist, it will create it, given that the file is opened for writing (w)
    //if File exists then it will turn that file empty and re-write it 
    // Now w will use fwrite() to write on that file.

    fwrite($fptr,"lorem aohisoiasoi asnoasoaijos sanboasbvoa jasosaoiv sacnaoips \n");
    fwrite($fptr,"hello my name is sajbhcfojsabouvbaij. \n"); // ADD it in file
    fclose($fptr);

    // Appending to a file in PHP

    $fptr = fopen("file2.txt", "a"); // a stands for append
    fwrite($fptr,"this is my wish.....");
    fclose($fptr);



    ?>
</body>
</html>