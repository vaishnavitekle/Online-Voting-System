<html>
    <head>
        <title>FIND INTERSECTION IN ARRAY</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter string">
        <input type="submit">
    </form>
    <?php
        $arr=array(10,20,30,40,50,10,50,70,80,30,10);
        $c=count($arr);
        for($i=0;$i<$c;$i++)
        {
            $t=0;
            for($j=1;$j<=$c+1;$j++)
            {
                if($i!=$j)
                {
                  if($arr[$i]==$arr[$j])
                   {
                     $t++;
                   }
                }
            }
            if($t==1)
            {
               echo $arr[$i];  
            }
            
        }
        ?>
    </body>
</html>