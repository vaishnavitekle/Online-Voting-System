<?php
$arr=array(2,4,6,8,10);
$c=count($arr);
echo "array in anti-clockwise direction<br>";
$n=$arr[0];
for($i=0;$i<$c-1;$i++)
{
    $arr[$i]=$arr[$i+1];
}
$arr[$c-1]=$n;
for($i=0;$i<$c;$i++)
{
    echo $arr[$i]; //4,6,8,10,2
}
?>