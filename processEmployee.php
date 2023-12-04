<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$sal = $_POST['salary'];

include("dbcon.php");

$sql = "INSERT INTO employee (firstname, surname, dateofbirth, salary) VALUES ('$fn', '$sn', '$dob', $sal)";
mysqli_query($con, $sql);
mysqli_close($con);

echo "Employee inserted";
?>
