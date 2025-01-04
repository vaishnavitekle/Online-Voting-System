<html>
    <head>
        <title>program to check number is prime or not</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter number">
        <input type="submit">
    </form>
    <?php
        $n=$_POST['value'];
        $sum=2;
        $f=false;
        for($sum;$sum<$n;$sum++)
        {
            if($n%$sum==0)
            {
                $f=true;
            }
        }
        if($f)
        {
            echo "<br>";
            echo "$n number is not prime";
        }
        else
        {
            echo "<br>";
            echo "$n numder is prime";
        }
        ?>
    </body>
</html>