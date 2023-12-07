<?php


include("dbcon.php");

$sql = "select * from employee";
$result =mysqli_query($con,$sql);

$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
 $fn = $row['firstname'];
 $sn = $row['surname'];
 $dob = $row['dateofbirth'];
 $salary = $row['salary'];

	echo "$fn, $sn, $dob, $salary<br>";

}

mysqli_close($con);


?>
