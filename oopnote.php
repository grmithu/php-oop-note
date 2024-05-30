<!--============================== 
Class, Object 
===============================-->

<?php

// class create
class MyClass{

    //property
    public $name = "Golam Rabbani";
    
    //method
    public function info(){
        echo "Software Engineer";
    }

    public function brac($year){
        return $year;
    }

}

// object create
$obj = new MyClass;

echo $obj->name;
echo $obj->info();
echo $obj->brac(2024);

?>



<!--============================== 
Constructor
===============================-->

<?php
 
class MyClass{

    // Contructor
    // function __construct(){
    //     echo "I am contructor";
    // }


    // Constructor parameter
    function __construct($msg){
        echo "$msg";
    }

}

// $obj = new MyClass();

$obj = new MyClass("Hello Would");

?>



<!--============================== 
Static methods/ properties
===============================-->

<?php
 
class MyClass{

    // static methods
    static function book(){
        echo "Cloud IT Solution";        
    }

    // static properties
    public static $cityList = array(
        'Dhaka',
        'Rangpur',
        'Rajshahi'
    );

}

MyClass::book();

echo MyClass::$cityList[1];

?>


<!--============================== 
Inheritance
===============================-->


<?php
 

class Father{
    function addTwo(){
        $num1=10;
        $num2=20;
        $num3=$num1+$num2;
        echo $num3;
    }
}    

class Son extends Father{

}

$obj = new Son();
$obj->addTwo(); 


?>


<!--============================== 
Inheritance Overide
===============================-->

<?php
 

class Father{
    function addTwo(){
        $num1=10;
        $num2=10;
        $num3=$num1+$num2;
        echo $num3;
    }
}    

class Son extends Father{

    // method overriding (parent value change)
    function addTwo(){
        $num1=30;
        $num2=40;
        $num3=$num1+$num2;
        echo $num3;
    }
}

$obj = new Son();
$obj->addTwo(); 


?>


<!--============================== 
Inheritance - Abstract class
===============================-->

<?php
 
// jodi kono class k abstract kare dei tahole oi class k r object kara jabe nah
abstract class Father{
    function addTwo(){
        $num1=10;
        $num2=10;
        $num3=$num1+$num2;
        echo $num3;
    }
}    

class Son extends Father{

}

$obj = new Son();
$obj->addTwo(); 


?>



<!--============================== 

===============================-->

