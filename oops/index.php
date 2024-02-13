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

    class Player
    {

        // class Myclass{
        //       method --> variables 
        //      properties --> function
        //    
        // }
        public $name;
        public $speed = 3;

        //method define
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_speed($speed)
        {
            if (is_numeric($speed)) {
                $this->speed = $speed;
            } else {
                echo "Invalid speed value";
            }
        }
    }

    $player1 = new Player();
    $player1->set_name("suraj");
    echo $player1->get_name();


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>