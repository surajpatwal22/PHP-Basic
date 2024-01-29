<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string method</title>
</head>
<body>
<?php 
//  string method in PHP
$name = "suraj";
$fullname = "suraj patwal" ;
$namewithspace = "    suraj patwal     ";
echo $name;
echo "<br>";


//  strlen() - returns the length of a string
echo strlen($name);
echo "<br>";
echo "<h2>name of user is $name </h2>"  ;
echo "length of name is " .  strlen($name) ;

// str_word_count
echo "<br>";
echo str_word_count($name);  // return number of words in a string
echo "<br>";
echo str_word_count($fullname);

// strrev() - returns string in reverse order
echo "<br>";
echo strrev("Hello World");   // Hello World -> dlroW olleH

//strpos() - want to know positon of certain word (in form of index)

echo "<br>";
echo strpos($fullname , "patwal");

//str_replace() - replace certain words in a string
echo "<br>";
echo str_replace("patwal" , "singh" , $fullname);

// str_repeat() -  repeat any string n no. of times

echo "<br>";
echo str_repeat($name , 134);

//strtoupper() -  uppercase letter

echo "<br>";
echo strtoupper($name);

//trim() -  remove white spaces from both direction
//ltrim() && rtrim() - remove space from left and right

echo "<br>";
echo trim($namewithspace);

echo "<p>sgujaghsiochoas
sahchsaho
hsaoichiosa
</p> ";

echo "<pre>sgujaghsiochoas
sahchsaho
hsaoichiosa
</pre> ";

//explode()- convert sting into an array

$x = "Hello World!";
$y = explode(" ", $x);

print_r($y);
echo  "</br>";

echo var_dump($y);


//concatinating string 
echo  "</br>";
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;


// substr() - similar to slice in javascript
echo  "</br>";
$xyz = "Hello World!";
echo substr($xyz, 6,5); //Start the slice at index 6 and end the slice 5 positions later
echo  "</br>";

echo substr($xyz, 6) ; // run unltil last 

//want to select from last
echo  "</br>";
echo substr($xyz,-4,3);

// starting from the "W" in "World" (index 5) and continue until 1 characters from the end.
echo substr($xyz, 5, -1);


//escape charater
echo  "</br>";
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?>
</body>
</html>