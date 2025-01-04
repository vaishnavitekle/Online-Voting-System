<html>
    <head>
        <title>prorram to revers array</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter string">
        <input type="submit">
    </form>
    <?php
        $arr=array(10,20,30,40,50,10,50,70,80,30,10);
        $c=count($arr);
        for($i=$c;$i<=0;$i--)
        {
          echo $arr[$i];
        }
    ?>