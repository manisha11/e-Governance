<?php
$con = mysql_connect("localhost","root","1112");
if (!$con)
{
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("rajasthan", $con);

$q = strtoupper($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT State as State from `finaldata1` where State LIKE '%$q%'";
$sql2 = "select DISTINCT District as District from `finaldata1` where District LIKE '%$q%'";

$st = mysql_query($sql);
$dist = mysql_query($sql2);

if($st)
{while($rs = mysql_fetch_array($st)) {
	$cname = $rs['State'];
	echo "$cname\n";}
}
if($dist)
{while($rs = mysql_fetch_array($dist))
   {$cname = $rs['District'];
	echo "$cname\n";}
}
?>
