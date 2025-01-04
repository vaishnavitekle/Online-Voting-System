<html>
    <head>
        <title>subarray with given sum</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="enter sum">
        <input type="submit">
    </form>
    <?php
        $sum=$_POST['value'];
        $arr=array(1,3,5,9,10,22,21,6,17,20);
        $n=count($arr);
        $i=0;
        $t=0;
        for($i=0;$i<=$n;$i++)
        {
          $t=$arr[$i];
          for($j=$i+1;$j<=$n;$j++)
            {
              $t=$t+$arr[$j];
               if($t>$sum)
               {
                   break;
               }
               if($t==$sum)
               {
                echo "array=$i $j";
                   break;
               }
            }
        }

    ?>
    </body>
</html>