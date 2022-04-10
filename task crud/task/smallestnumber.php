<?php
$numbers = array(10,80,67,60,89,9,56,45,30,95,83);
$length = count($numbers);
$max = $numbers[0];
for($i=1;$i<$length;$i++)
{
if($numbers[$i]<$max)
{
$max = $numbers[$i];
}
}
echo "the smallest number in the array is ".$max;
?>