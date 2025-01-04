<html>
    <head>
        <title>program to  check second largest number</title>
    </head>
    <body>
    <form method="POST">
        <input type="number" name="value" placeholder="Enter first number">
        <br>
        <input type="number" name="val" placeholder="Enter second number">
        <br>
        <input type="number" name="v" placeholder="Enter third number">
        <br>
        <input type="submit">
    </form>
    <?php
        $n1=$_POST['value'];
        $n2=$_POST['val'];
        $n3=$_POST['v'];
        if($n1==$n2&&$n2==$n3)
        {
            echo "Numbers are equal";
        }
        else if($n1==$n2||$n1==$n3||$n2==$n3)
        {
            if($n1==$n2)
            {
                if($n1>$n3)
                {
                echo "second larg=$n3";
                }
                else
                {
                    echo "second larg=$n1";   
                }
            }
            else if($n2==$n3)
            {
                if($n2>$n1)
                {
                echo "second larg=$n1";
                }
                else
                {
                    echo "second larg=$n2";   
                }
            }
            else if($n3==$n1)
            {
                if($n3>$n2)
                {
                echo "second larg=$n2";
                }
                else
                {
                    echo "second larg=$n3";   
                }
            }
        }
        else
        {
         if($n1>$n2&&$n1>$n3)
         {
             if($n2>$n3)
             {
                 echo "second larg=$n2";
             }
             else
             {
                 echo "second larg=$n3";
             }
         }
         else if($n2>$n1&&$n2>$n3)
         {
             if($n1>$n3)
             {
                 echo "second larg=$n1";
             }
             else
             {
                 echo "second larg=$n3";
             }
         }
        }
        ?>
    </body>
</html>