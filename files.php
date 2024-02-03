<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <?php
    // readfile() function reads a file and writes it to the output buffer.
    // The file is opened in read-only mode and the file pointer is at the beginning of the file.
    // If the file cannot be opened, readfile() will return false and generate a warning.
    // The file is read until the end is reached or until readfile() reaches the maximum length of bytes that can be read.
    // The maximum length of bytes that can be read is specified by the optional third parameter.
    // If the third parameter is not specified, readfile() will read until the end of the file is reached.
    // The readfile() function is binary-safe, meaning it can read and write any binary data.

    // Read the contents of file.txt and output it.
    readfile("file.txt");
    echo "<br>";

    // Assign the output of readfile() to variable $a.
    // The readfile() function returns the number of bytes read from the file.
    // If an error occurs, readfile() will return false.
    $a = readfile("file.txt");
    echo "<br>";

    // Output the contents of variable $a. Also give total number of words  in the file as output.
    echo $a;
    echo "<br>";

    // Read the contents of file.html and output it. 
    readfile("file.html");
    echo "<br>";

    // display image in the form of text
    readfile("1.jpeg");

    echo "<br>";
    ?>
</body>
</html>