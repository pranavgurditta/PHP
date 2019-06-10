<?php
function fac($a)
{ $ans=1;
for($i=1;$i<=$a;$i++)
{
$ans=$ans*$i;
}
echo "The factorial of $a is $ans";
}
fac($_POST['f']);

?>
