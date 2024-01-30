<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        $title = "function";
        echo strtoupper( $title)
        ?>
    </title>
</head>
<body>
    

<?php 

echo "<h1> Functions in php</h1>";
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i=1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];

$anyone =[12,34,56,78,88,78];

$sumMarks = processMarks($rohanDas);
$totalSum = processMarks($anyone);

$avgRohanMarks = avgMarks($rohanDas);
$avgAnyoneMarks = avgMarks($anyone);

// calling the function using variable
echo "Total Marks of Rohan Das: ". $sumMarks . "and Avg marks is". $avgRohanMarks .  "<br>" ;
echo "Total Marks of anyone:". $totalSum . "and Avg marks is". $avgAnyoneMarks .  "<br>" ;



//In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

//When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

function add_five($value) {
    return $value += 5;
 }

 $num = 2;
 $new = add_five($num);
 echo $new;
 echo "<br>";
 echo $num;
 echo "<br>";



 //  Using reference variables in functions.

 function add_six(&$value) {
    return $value += 6;
 }

 $no = 4;
 echo add_six($no)."<br>";
 echo $no."<br>";


 //spread operator in argument 
 //By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments.

 function sumOfNumber(...$x){
    //spread operator will convert $x into an array
    
    $n = 0;
    echo var_dump($x);
    echo "<br>";
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
 }

 $a = sumOfNumber(5, 2, 6, 2, 7, 7);
echo "Total of  the numbers given is:".$a ."<br>";


//The variadic-spread argument must be the last argument in a function definition, and it can only be used once per function definition. and pass it to the function as an array 

function myfamily($lastname , ...$firstname){
    $txt = "";
    echo var_dump($firstname);
    echo "<br>";
    $len = count($firstname);
    echo $len ."<br>";
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
}

$b = myFamily("Doe", "Jane", "John", "Joey");
echo $b . "<br>";


//To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.


//<?php declare(strict_types=1);




//  Date Function

//H - 24-hour format of an hour (00 to 23)
//h - 12-hour format of an hour with leading zeros (01 to 12)
//i - Minutes with leading zeros (00 to 59)
//s - Seconds with leading zeros (00 to 59)
//a - Lowercase Ante meridiem and Post meridiem (am or pm) 
//A - Uppercase Ante meridiem and Post meridiem (AM or PM)
//j - Day of the month without leading zeros 1-31
//d - Day of the month with leading zeros 01 to 31
//n - Month without leading zeros 1-12
//m - Month with leading zeros 01 to 12
//M - A short textual representation of a month (three letters)
//F - A full textual representation of a month (full name)
//Y - Four digit year
//y - Two digit year ex: 07 for 2007



echo date("l");
echo "<br>";
echo date("jS F Y H   ") ;

// Prints something in this format : Monday 8th of August 2005 03:12:46 PM
echo  "<hr />";

echo date (" l jS \of F Y h:i:s A")



?>

</body>
</html>