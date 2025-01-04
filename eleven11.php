<?php
$str="my name is vaishnavi";
$i=0;
$j=0;
while($str!=null)
{
  $i++;
  if($str==" ")
  {
    $j++;
  }
}
echo $i;
echo "no of words=".$j;
?>