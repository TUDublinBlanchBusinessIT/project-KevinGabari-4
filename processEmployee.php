<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$sal = $_POST['salary'];

include("dbcon.php");

$sql = "insert into employee((firstname, surname, dateofbirth, salary) Values
('$fn','$sn','$dob',$sal)";
echo $sql;
//mysqli_query($con,$sql);
//mysqli_close();
?>