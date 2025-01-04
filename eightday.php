<html>
    <head>
        <title>fibonacci series using recursion</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter end of fibonacci series">
        <input type="submit">
    </form>
    <?php
        $n=$_POST['value'];
        $i=0;
        while($i<=$n)
        {
        $f=fibo($i);
        echo $f;
        $i++;
        }
        function fibo($n)
        {
            if($n==0)
            {
                return 0;
            }
            elseif($n==1)
            {
                return 1;
            }
            else
            {
                return (fibo($n-1)+fibo($n-2));
            }
        }
        ?>
    </body>
</html>