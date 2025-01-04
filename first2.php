<html>
    <head>
        <title>Enter string to check wheather string is palindrom or not</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter number">
        <input type="submit">
    </form>
    <?php
        $n=$_POST['value'];
        $str=$n;
        $sum=0;
        while(floor($n))
        {
          $r=$n%10;
          $sum=$sum*10+$r;
          $n=$n/10;
        }
        if($str==$sum)
        {
            echo "<br>";
            echo "$str string is palindrom";
        }
        else{
            echo "<br>";
            echo "$str string is not palindrom";
        }
        ?>
    </body>
</html>