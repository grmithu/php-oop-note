<?php

class Product{
    public function __call($name, $param){
        print_r($param);
    }

    public static function __callStatic($name, $param){
        print_r($param);
    }
}

$Obj = new Product();
$Obj->OverloadingMethod(4,7,8,);

$Obj::OverloadingStaticMethod("A", "B", "C");

?>