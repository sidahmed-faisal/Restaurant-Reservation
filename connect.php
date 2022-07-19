<?php
$name=$_POST['name'];
$count=$_POST['count'];
$date=$_POST['date_input'];
$time=$_POST['time'];
$user="localhost";
$db="wepdp";
$user_pass="root";



 $conn =  new mysqli("localhost", "root", "", "wepdp");

 $sql = "INSERT INTO res (name, count, date, time)
 VALUES('$name','$count','$date','$time')";
 $result = $conn->query($sql); 
 if($result === TRUE)
 {
     echo("<script>alert('reserve complete')</script>");
 }
 else {
     echo("<script>alert('reserve not complete')</script>");
 }
 mysqli_close($conn);

?>