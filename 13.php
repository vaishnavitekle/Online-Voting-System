<?php
echo "3D Array<br>";
$arr=array(
    array(
        array(10,20,30),
        array(40,50,60),
        array(70,80,90)
    ),
    array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    )
    );
foreach($arr as $val)
{
    foreach($val as $value)
    {
        foreach($value as $ele)
        { 
          echo $ele;
           echo " ";
        }
        echo "<br>";
    }
    echo "<br>";
}
?>