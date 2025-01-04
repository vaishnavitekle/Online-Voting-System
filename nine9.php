<?php 
echo "move negative elements to end of array";
$arr=array(10,-1,3,-4,-5,6,8,9);
$n=count($arr);
for($i=0;$i<=$n;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        if($arr[$j]<0)
        {
            $t=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$t;
        }
    }
}
for($i=0;$i<=$n;$i++)
{
    echo $arr[$i];
}
?>