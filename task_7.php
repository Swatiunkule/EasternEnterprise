<?php
class MyCalculator
{ 
    function add($argv)
    {
       $sum = 0;
       $parts=explode(",",$argv[2]);
       $sum=array_filter($parts); 
       $arr = array_filter($parts, function($value){
            return ($value >= 1 && $value <= 1000);
        });
        echo array_sum($arr); 
    }   
}
   
$mycalc = new MyCalculator(); 
$mycalc-> add($argv); 

?>