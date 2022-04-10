<?php
$numbers = array(0,10,80,67,60,89,91,56,45,30,95,83);
$length = count($numbers);
$max = $numbers[0];
for($i=1;$i<$length;$i++)
{
if($numbers[$i]>$max)
{
$max = $numbers[$i];
}
}
Echo "the biggest number in the array is ".$max;
?>