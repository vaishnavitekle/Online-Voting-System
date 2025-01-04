<?php
echo "union of two arrays";
$arr1=array(1,3,5,8,10,23,25,29);
$arr2=array(2,3,4,5,8,9,10,11);
$a1=count($arr1);
$a2=count($arr2);
$i=0;
$j=0;
while($i<=$a1 and $j<=$a2)
{
    if($arr1[$i]<$arr2[$j])
    {
      echo $arr1[$i];
      $i++;
    }
    if($arr2[$j]<$arr1[$i])
    {
        echo $arr2[$j];
        $j++;
    }
    if($arr1[$i]==$arr2[$j])
    {
        echo $arr1[$i];
        $i++;
        $j++;
    }
}
?>