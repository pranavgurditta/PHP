
<?php
function myf($e1)
{
if(ctype_lower($e1))
echo "The string is in lowercase";
else
echo "The string is not in lowercase";
}
myf($_POST['f']);
?>


