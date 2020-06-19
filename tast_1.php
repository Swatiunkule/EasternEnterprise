<?php
class MyCalculator
{ 
    function add($argv)
    {
       $sum = 0;
       $parts=explode(",",$argv[2]);
       $sum=array_filter($parts); 
       echo array_sum($sum);
    }   
}
   
$mycalc = new MyCalculator(); 
$mycalc-> add($argv); 

?>