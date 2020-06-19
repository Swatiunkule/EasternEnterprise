<?php
class MyCalculator
{ 
    function add($argv)
    {
       $sum = 0;
       $parts=explode(",",$argv[2]);
       $sum=array_filter($parts); 
       foreach($parts as $num)
       {
         if($num > 0)
         {
            $positive[] = $num;
         }
         else
         {
            $negative[] = $num;
         }
    }
 
        $negative = implode(",",$negative);
        if (!$negative)
        echo array_sum($sum); 
        else echo "Error: Negative numbers not allowed.";       
    }   
}
   
$mycalc = new MyCalculator(); 
$mycalc-> add($argv); 