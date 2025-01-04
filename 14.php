<html>
 <head>
     <title>find elements from array whose addition is equal to entered number!</title>
 </head>
 <body>
   <form method="post" action="">
    <input type="number" name="v1">
    <input type="submit">
   </form>
 <?php
 $s1=$_POST['v1'];
 $a=array(1,6,9,3,10,40,36,25,33,22,21);
 $c=count($a);
 $t=0;
 for($i=0;$i<$c;$i++)
 {
     $t=$a[$i];
     for($j=$i+1;$j<$c;$j++)
     {
         $t=$t+$a[$j];
         if($t>$s1)
         {
             break;
         }
         if($t<$s1)
         {
             for($k=$j+1;$k<$c;$k++)
             {
                 $t=$t+$a[$k];
                 if($t>$s1)
                 {
                     break;
                 }
                 if($t==$s1)
                 {
                     echo "numbers are $a[$i] $a[$j] $a[$k]";
                 }
             }
         }
     }
 }
 ?>
 </body>
 </html>