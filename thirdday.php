<html>
    <head>
        <title>program to remove any charecter from string</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter string">
        <input type="text" name="val" placeholder="Enter charecter">
        <input type="submit">
    </form>
    <?php
        $str=$_POST['value'];
        $char=$_POST['val'];
        $i=0;
        while($str[$i]!=null)
        {
          if($str[$i]==$char)
          {
              $j=$i;
          }
          $i++;
        }
        echo substr($str,0,$j).substr($str,$j+1,$i);
        ?>
    </body>
</html>