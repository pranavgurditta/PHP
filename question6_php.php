
<?php 
function rev($a)
{
echo "The reversed string is"; 
$r=strrev($a);
return $r;
}

$q=rev($_POST['f']);
if(strcmp($q,$_POST['f'])==0)
echo "Palindrome";
else
echo "Not palindrome";
?>
