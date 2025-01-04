<html>
    <head>
        <title>fibonacci series</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter end of fibonacci series">
        <input type="submit">
    </form>
    <?php
        $n=$_POST['value'];
        $f2=1;
        $f1=0;
        echo "$f1  $f2";
        $f=1;
        while($f<$n)
        {
         echo $f;
         $f1=$f2;
         $f2=$f;
         //$f=$f1;
         $f=$f1+$f2;
        }
        ?>
    </body>
</html>