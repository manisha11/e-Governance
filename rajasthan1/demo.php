<html>
<body>
<?php
$con = mysql_connect("localhost","****","****");
if (!$con)
{
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("rajasthan", $con);

session_start();
$State=$_SESSION['Stat'];
$District=$_SESSION['Dist'];

$Village = $_POST['Village'];
$CSC_Name = $_POST['CSC_Name'];
$CSC_Address=$_POST['CSC_Address'];
$email= $_POST['email'];

$Contact= $_POST['Contact'];
$Services  = $_POST['Services'];

$sql="INSERT INTO collectdata (State,District,Village,CSC_Name,CSC_Address,email,Contact,Services) VALUES('$State','$District','$Village','$CSC_Name','$CSC_Address','$email','$Contact','$Services')";

if (!mysql_query($sql,$con))
{
 die('Error: ' . mysql_error());
 }
 echo "1 record added";

mysql_close($con)
?>
</body>
</html>
