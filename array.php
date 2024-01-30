<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
<?php 
$pageTitle = "Array";
echo  $pageTitle; ?>
    </title>
</head>
<body>
    <a href="index.php" >Back to Home Page</a><br />
<?php
echo  "<h2>" . $pageTitle . "</h2> <br>";
// Indexed arrays - Arrays with a numeric index , isme index number mai he hoga 
// Associative arrays - Arrays with string based index (key) , isme key value pair mahega
// Multidimensional arrays - Arrays inside arrays , mein outer array pe inner array se kaha hai



//You can create arrays by using the array() function:
 
$variable = array("x","y","z");
$cars = ["Volvo", "BMW", "Toyota"];


// Arrays in PHP are ordered collections of values that can be accessed using an index number (starting from zero).

$arr  = array("apple", "banana", "cherry"); // create an array with three elements
echo  $arr[0]. "<br>";
echo  $arr[1] . "<br>" ;
echo  $arr[2] . "<br>";

//Loop Through an Indexed Array

foreach ($arr as $x) {
  echo "$x <br>";
}

//update array
$arr[2] = "blueberry" ;
echo $arr[2]. "<br>" ;
echo var_dump($arr);



//add element in the array using [] operator
$arr[] = "grape";
var_dump($arr);
echo "<br>";

//or
echo "<br>";
array_push($arr,"grapes","kiwi"); // add multiple elements at once
var_dump($arr);


echo count($arr) . "<br>";

//  Associative Arrays 
// key can be integer also , jo bhi hum denge
$person = array("rahul"=> "developer","ram"=>"designer", "ravi"=>"app" ,8=>"number" );


//Access an item by referring to its key name
echo    "rahul is a ". $person["rahul"] ."<br>";
echo   "Ram is a ". $person["ram"]. "<br>";
echo   "8 is a ". $person["8"]. "<br>";


//Loop Through an Associative Array
foreach ($person as $key => $value) {
    echo "$key => $value.<br>";
}


//update
$person['rahul']="manager";
echo "After update : rahul is a ". $person["rahul"] . "<br>";
echo var_dump($person);
echo "<br>";



//Remove Array Item

$cars = array("zolvo", "BMW", "Toyota");

//sort()  function sorts the array in ascending order.
sort($cars);
echo var_dump($cars)."<br>";
rsort($cars);
echo var_dump($cars)."<br>";

//asort() - sort associative arrays in ascending order, according to the value
//ksort() - sort associative arrays in ascending order, according to the key


//arsort() - sort associative arrays in descending order, according to the value
//krsort() - sort associative arrays in descending order, based on the key


//unset($cars[1]); remove 1 

unset($cars[0], $cars[1]); // remove multiple
echo var_dump($cars);




//Multi-dimensional array

// Printing the contents of a 2 dimensional array

echo "<br>" ;

$multidim = array(
    array(2,3,4,5),
    array(6,7,8,9),
    array(2,3,6,9),
    array(0,4,5,6)
);

echo $multidim[0][2]; 
echo "<br>";

echo var_dump($multidim[0][2]);

for ($i=0; $i < count($multidim); $i++) { 
        echo var_dump($multidim[$i]);
         echo "<br>";
    }

for ($i=0; $i < count($multidim) ; $i++) { 
     for ($j=0; $j <  count($multidim[$i]) ; $j++) { 
        echo $multidim[$i][$j];
        echo " ";
     }
     echo "<br>";
}


// Printing the contents of a 3 dimensional array

$threedim = array(
    array(
        array('a', 'b'),
        array('c', 'd'),22,12
    ),
    array(
        array('e', 'f'),
        array('h', 'g'),2,1
    ),
    array(
        array('i', 'k'),
        array('n', 'l'),6,7
    )
    );

    echo  $threedim[0][0][0]."<br>"; 

    

// foreach ($threedim as $key => $value) {
//    if (is_array($value)) {
//        foreach ($value as $subkey => $subvalue) {
//            printf("Key: %s\n", $subkey);
//            printf("Value: %s\n", implode(", ", $subvalue));
//        }
//    } else {
//        printf("Key: %s\n", $key);
//        printf("Value: %s\n", $value);
//    }
?>

    
</body>
</html>