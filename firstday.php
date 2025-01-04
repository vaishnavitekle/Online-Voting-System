<html>
    <head>
        <title>Enter string to check wheather string is palindrom or not</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter string">
        <input type="submit">
    </form>
    <?php
        $str=$_POST['value'];
        $revers=strrev($str);
        if($str==$revers)
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