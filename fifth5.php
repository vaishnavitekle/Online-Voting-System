<html>
    <head>
        <title>program to sort array</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter string">
        <input type="submit">
    </form>
    <?php
        $arr=array(10,20,30,40,50,10,50,70,80,30,10);
        $c=count($arr);
        $s=$arr[0];
        for($i=0;$i<$c;$i++)
        {
          for($j=$i+1;$j<$c;$j++)
          {
            if($arr[$i]>$arr[$j])
            {
                $t=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$t;
            } 
          }
        }
        for($k=0;$k<=$c;$k++)
        {
            echo $arr[$k];
        }
        ?>
    </body>
</html>