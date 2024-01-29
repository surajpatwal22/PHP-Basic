<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        $title = "operator";
        echo strtoupper( $title)
        ?>
    </title>
</head>
<body>
    
<!-- //Opertator in PHP -->
<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$x=3;
$y=56;

echo  "<h1>Arithmetic Operators:</h1>";
echo "Value of x is : " . ($x);
echo "<br>" ;
echo $x + $y ;
echo "<br>" ;
echo $x % $y ;
echo "<br>" ;
echo $x / $y ; 

 $x += 5;
 echo "<hr><h1>Assignment Operators:</h1>";
 echo "After adding 5 to x , Value of x is : ".($x)."<br>";

// if-else
 echo "<hr> <h1>If-Else condition</h1>" ;

 if ( $x > 20) {
    echo "yes , the value of x is greater than 20.";
 } else {
    echo "No, the value of x is not greater than 20.";
 };

 // 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
// and less than or equal to 65

$age = 45 ;
if ( $age >= 25 && $age <= 65) {
 echo  "<h3>Yes! You can drive</h3>";
} else {
    echo "<h3>Sorry! you are not eligible for driving</h3>";
};


// for loop

for ($i=0; $i <= 3 ; $i++) { 
    if( $i = 1){
        echo "*" . "<br>";
    }
    if($i = 2){
        echo "**" . "<br>" ;
    }
    if($i = 3){
        echo "***" . "<br>" ;
    }
};

echo " for loop ended" ;

//for-each loop 


$arr  = array("red","Blue", "Green","Yellow","Pink");
foreach ($arr as $value){
    echo "$value <br>";
}






 

?>

</body>
</html>