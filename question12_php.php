
<?php  
$dd=$_POST['d'];

$mm=$_POST['m'];


$yy=$_POST['y'];
    $target_days = mktime(0,0,0,$mm,$dd,$yy);  
    $today = time();  
    $diff_days = ($target_days - $today);  
    $days = (int)($diff_days/86400);  
    print "Days till next birthday: $days days!"."\n";  
    ?>  
