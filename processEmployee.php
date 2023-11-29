<?php
$fn = $_Post['fname'];
$sn = $_Post['sname'];
$dob = $_Post['dob'];
$sal = $_Post['salary'];

include("dbcon.php");

$sql = "insert into employee((firstname, surname, dateofbirth, salary) VALUES
('$fn','$sn','$dob',$sal)";
echo $sql;
//mysqli_query($con,$sql);
//mysqli_close();
?>