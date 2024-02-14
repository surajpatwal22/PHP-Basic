<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    //Inheritance means to receive something from one’s parents or ancestors. In object-oriented programming (OOP), inheritance is a mechanism that allows classes to inherit properties and method of prev. class

    //“Inheritance is the ability to define a new class(child class) that is a modified version of an existing class(parent class)”


    class parent_class{
        // <!-- code -->
    }
    class child_class extends parent_class{
        // <!-- code -->
    }


    class Office {
        public $name ="ravi";
        private $salary = 12000;

        function set_salary($salary){
            $this->salary = $salary;
        }

        function get_salary(){
            echo " salary of $this->name is $this->salary <br>";
        }
    }

    // Inheriting a new class Programmer from Office

    class Programmer extends Office {
        private $language = "php";

        function set_lang($lang){
            $this->language = $lang;
        }
        function get_lang(){
             echo $this->language;
        }
    }

    $rohan = new Office();
    $rohan ->set_salary(2000);
    $rohan->get_salary();
    $rohan->name ="rohan";
    echo "name is $rohan->name" ;

    $ritu = new Programmer();
    $ritu->name ="ritu";
    echo "Name :".$ritu->name."<br>";
    echo $ritu->set_salary(200);
    echo $ritu->get_salary();
    // $ritu->set_lang("java"); 
    echo  $ritu->set_lang("java");
    echo  $ritu->get_lang();

    


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>