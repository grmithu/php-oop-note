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