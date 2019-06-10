<?php
$fi= $_POST['f'];
$se=$_POST['s'];
$th=$_POST['t']; 


function f($f,$s,$t)
{

$g=$t;
if($f>$s && $f>$t)
$g=$f;
else if($f<$s && $t<$s)
$g=$s;
echo "The largest number is $g";
}

f($fi,$se,$th);

?>

