<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //A cookie is often used to identify a user.
    // A cookie is a small file that the server embeds on the user's computer to identify him next time whenever we visit the website. 
    //setcookie ( name , value ,expiration time , path = "");


    //($_COOKIE) is Global Variable
    
    // setcookie("category","book", time() + 86400 , "/"); 
    // echo "The cookie is set<br>";
    
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }


    // want to edit write setcokkies again

    //want to delete 
    //To delete a cookie, use the setcookie() function with an expiration date in the past:


    ?>
</body>

</html>