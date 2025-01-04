<html>
    <head>
        <title>prorram to delete element from array</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter position">
        <input type="submit">
    </form>
    <?php
        $arr=array(10,20,30,40,50,10,50,70,80,30,10);
        $c=count($arr);
        $p=$_POST['value'];
        for($i=0;$i<=$c;$i++)
        {
            if($i==$p-1)
            {
                $arr[$i]=$arr[$i+1];
            }
        }
        for($i=0;$i<$c;$i++)
        {
            echo $arr[$i];
        }
    ?>