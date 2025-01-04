<html>
    <head>
        <title>program to remove any charecter from string</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter string">
        <input type="number" name="val" placeholder="Enter string">
        <input type="submit">
    </form>
    <?php
        $n1=$_POST['value'];
        $n2=$_POST['val'];
        echo "n1=".$n1;
        echo "n2=".$n2;
        function swap($s,$n)
        {
           $t=$s;
           $s=$n;
           $n=$t;
           echo "n1=".$s;
           echo "n2=".$n;
        }
        swap($n1,$n2);
        echo "n1=".$n1;
        echo "n2=".$n2;
        ?>
    </body>
</html>