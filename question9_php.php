
<?php
$n=$_POST['a'];
$d=1;
$s=0;
for($i=1;$d<=$n;$i++)
{
if($i%2!=0)
{
$s=$s+$i;
$d++;
}
}
echo "<br> The sum of first $n odd numbers is  $s";

?>
