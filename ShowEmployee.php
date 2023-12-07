<?php


include("dbcon.php");

$sql = "select * from employee";
$result =mysqli_query($con,$sql);


echo "<Table border ='1'>";
while($row = mysqli_fetch_assoc($result)) {
	 $fn = $row['firstname'];
	 $sn = $row['surname'];
	 $dob = $row['dateofbirth'];
	 $salary = $row['salary'];

	echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$dob</TD><TD>$salary</TD></TR>";

}
echo "</Table>";

mysqli_close($con);


?>
