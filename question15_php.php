
<?php
$n=$_POST['a'];
$d=1;
$s=0;
echo "The first $n even numbers are: <br>";

for($i=1;$d<=$n;$i++)
{
if($i%2==0)
{
echo "$i<br>";
$d++;
}
}

?>
