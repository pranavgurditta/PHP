<?php
function prime($a)
{
echo "The number entered is $a";
echo "<br>";
if($a<=1)
echo "It is not a prime number";
else
{
$c=1;
for($i=2;$i<=($a/2);$i++)
{
if($a%$i==0)
$c=0;
}

if($c==1)
echo"It is a prime number";
else
echo"IT is not a prime number";

}
}
prime($_POST['f']);
?>

