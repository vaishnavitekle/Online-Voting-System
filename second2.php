<html>
    <head>
        <title>program to get prime numbers n to m</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter starting range">
        <input type="number" name="val" placeholder="Enter ending range">
        <input type="submit">
    </form>
    <?php
        $n=$_POST['value'];
        $m=$_POST['val'];
        for($i=$n;$i<=$m;$i++)
        {
            $f=false;
            for($sum=2;$sum<$i;$sum++)
            {
                if($i%$sum==0)
                {
                    $f=true;
                    break;
                }
            }
            if($f==false && $i!=1)
            {
                echo "<br>".$i;
            }
        }
        ?>
    </body>
</html>