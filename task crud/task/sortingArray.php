<?php

$array=array('25','74','8','55','10','17','62','91','107','31');

echo "Unsorted array is: ";
echo "<br />";
print_r($array);
echo "<br />";



  for($j = 0; $j < count($array); $j ++) {
	  for($i = 0; $i < count($array)-1; $i ++){
    

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;<?php
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
        }       
    }
}

echo "Sorted Array is: ";
echo "<br />";
print_r($array);

?>