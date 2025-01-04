<?php
echo "3D assosiative array<br>";
$arr=array(
    "raju"=>array(
        "r1"=>array(
            "php"=>80,
           "mad"=>87,
           "mgt"=>89
    ),
    "r2"=>array(
        "php"=>84,
         "mad"=>91,
         "mgt"=>93
    )
    ),
     "sham"=>array(
         "s1"=>array(
            "php"=>83,
            "mad"=>99,
            "mgt"=>94
         ),
         "s2"=>array(
         "php"=>84,
         "mad"=>91,
         "mgt"=>93)
     )
    );
 var_dump($arr);
    /*foreach($arr as $val)
    {
        foreach($val as $value)
        {
        print_r($value);
        echo "<br>";
        }
        echo "<br>";
    }*/
   // print_r($arr);
?>