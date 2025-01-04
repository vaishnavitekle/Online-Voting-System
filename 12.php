<?php
echo "two 2d array<br>";
$arr=array(
    "raju"=>array(
        "php"=>80,
        "mad"=>87,
        "mgt"=>89
    ),
     "sham"=>array(
         "php"=>84,
         "mad"=>91,
         "mgt"=>93
     )
    );
foreach($arr as $val)
{
    print_r($val);
    foreach($val as $value)
    {
    echo $value;
    echo " ";
    }
    echo "</br>";
}
    print_r($arr);

?>