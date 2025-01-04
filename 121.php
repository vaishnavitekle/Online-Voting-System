<?php
echo "2D assosiative array<br>";
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
        echo "<br>";
    }
?>