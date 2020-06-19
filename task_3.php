<?php
class MyCalculator
{ 
    function add($argv)
    {
       $sum = 0;
       $value = preg_replace("/[n]/",",",$argv[2]); 
       $parts=explode(",",$value);
       $sum=array_filter($parts); 
       echo array_sum($sum);
    }   
}
   
$mycalc = new MyCalculator(); 
$mycalc-> add($argv); 

?>