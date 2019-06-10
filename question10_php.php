
<?php

$servername = "localhost";
$username = "id1070683_userdata";
$password = "userdata";
$db="id1070683_userdata";

$conn = new mysqli($servername, $username, $password, $db);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$r=$_POST['choice'];
$p=$_POST['pass'];
$e=$_POST['email'];
$sql="";
$q=100;
if(strcmp($r,"sponsor")==0)
{
$sql = "SELECT * FROM sponsor WHERE email='$e' AND password='$p'";
$q=1;
header('Refresh: 2; url="wallsponsor.php"');
}
else
{
$q=0;
$sql = "SELECT * FROM society WHERE email='$e' AND password='$p'";
header('Refresh: 2; url="wallsociety.php"');
}
if (mysqli_num_rows($conn->query($sql))==1) 
{
    echo "Welcome, You have successfully logged in ,wait while you will be  redirected ";
}


else {
    echo "You have entered an invalid email and password";
}
$conn->close();
?>
