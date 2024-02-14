<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destuctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php

  //it is used to destruct the variables, properties inside the class.
  //A destructor is called when the object is destructed or the script is stopped or exited. If we create a __destruct() function, PHP will automatically call this function at the end of the script.
    class employee {
        public $name;
        public $salary;
        //constructor
        public function __construct($name,$salary){ 
            $this->name = $name; 
            $this -> salary = $salary;
        }
        //destructor
        public function __destruct(){
            echo "destruction begins $this->name <br>";
        }
    }

    $harry = new employee('Harry',3000);
    $rohan = new employee('Rohan',50000);

    echo " Salary of harry is $harry->salary <br>"; 
    echo "Salary of rohan is $rohan->salary <br>"; 

  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
