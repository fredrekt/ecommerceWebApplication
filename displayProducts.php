<?php
$conn = mysqli_connect("localhost","root","","freddb");
$qry = "SELECT * FROM products";
$qryA = "SELECT * FROM products LIMIT 10";
$res = mysqli_query($conn,$qry);
$res2 = mysqli_query($conn,$qryA);

if (!$conn) {
	echo "User Denied Access!";
}
echo "<form method='post'><center><table id ='Products'>";
while ($row = mysqli_fetch_assoc($res)) {
	echo "<tr><td><input type='checkbox' name='chkbox'></td></tr>";
	echo "<tr>";
	echo "<td> <img width = '200px' src ='".$row['prod_pic']."'</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>" .$row['prod_name']."</td>";
	echo "</tr>";
}
echo "<tr>";
	echo "<td><input type='submit' value='Buy'></td>";
	echo "</tr>";
echo "</form></table></center>";
?>