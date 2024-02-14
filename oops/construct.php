<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php
    class employee {
        public $name;
        public $salary;
        //constructor without argument
        // public function __construct(){
        //     echo "this is  a constructor";
        // }
        // constructor witgh Parameter

        public function __construct($name,$salary){ // $name $ $salary are aregument which we are going to pass when we create new object

            $this->name = $name; // Here name is object Variable and if i write name1 it will throw error 
            $this -> salary = $salary;
        }
    }

    // $harry = new employee();
    $harry = new employee('Harry',3000);
    $rohan = new employee('Rohan',50000);

    echo " Salary of harry is $harry->salary <br>"; 
    echo "Salary of rohan is $rohan->salary"; 

  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
