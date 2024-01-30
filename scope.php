<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>
    <?php
//Local Variables in Php
//ocal variables are the variables declared inside a function. The scope of these variables is limited to that function only; therefore, they are called local variables. In other words, local variables cannot be accessed outside the function.

$var1= 80;
 echo $var1."<br>" ;
function local_variables()
{   
    $var1 = 40;
    echo "local = $var1 ";
}

local_variables();


//Global Variables

//Global variables are declared outside the functions and are available to direct access globally.
//Keep in mind that the local variables cannot be accessed outside the function, but PHP provides a function “global” to access the global variables inside the function.

$num = 20;
// $num2 = 40;
function global_variable()
{
    $num2 = 230;
    global $num ;
    echo "<br> num variable inside function : $num and $num2 <br>";
    echo $GLOBALS["num"];
    echo"<br>";
};

global_variable();
echo "num variable outside function : $num   <br>"; // if use $num2 here it will give error



//$GLOBALS is an array that contains all global variables. We can also use this array to get or set any global variable.




?>
</body>
</html>