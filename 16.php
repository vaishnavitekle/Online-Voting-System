<?php
$arr=array(1,3,5,7,9);
$c=count($arr);
echo "array in clock wise direction<br>";
$n=$arr[$c-1];
for($i=$c-1;$i>0;$i--)
{
    $arr[$i]=$arr[$i-1];
}
$arr[0]=$n;
for($i=0;$i<$c;$i++)
{
    echo $arr[$i];//9 1 3 5 7
}
?>