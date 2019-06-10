<?php
$a=$_POST['f'];
$b=$_POST['g'];
if(strlen(strchr($a,$b))>0)
echo "found";
else 
echo "not found";
?>
