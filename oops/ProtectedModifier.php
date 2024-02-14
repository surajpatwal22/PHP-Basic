<?php
 class staff{
    public $name ;
    public  $salary;

    public function __construct($name, $salary){
        $this->name = $name ;
        $this->salary = $salary ;
        // $this->description(); class kai andar mai function use kar skta hu
    }
    protected function description(){
        echo "I am a Staff member named ". $this->name ." and I work for ".$this->salary." dollars per hour.<br>";
    }
 }


 class programer extends staff{
    public $lang ;
    public function __construct($name, $salary ,$lang){
        $this->name = $name ;
        $this->salary = $salary ;
        $this->lang = $lang ;
        // $this->description(); //error dega agar function  definition hoi to aise call krskta hu
        $this->description();
    }}
//object create krna h
 $ace = new staff("ace",20000);
//  echo $ace->name;
// echo $ace->description(); for private and protected this will give error 
$rohit = new programer("rohit",20000, "PHP");
?>