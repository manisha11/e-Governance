<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
	
    <title>E-Governance at ur Fingertips&middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
    
    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */
    table
    {
      
      border:2px solid black;
      width:100%;
      
     }
     
     
    body {
      padding-bottom: 40px;
      color: #5a5a5a;
       }
      .cont {
	        
                width: 90%;
	        margin: 10px auto;
	        background-color: #FFF;
	        padding: 10px;
	    }
       .txt
         {
            color:steelBlue;
            
           } 
        .tt
          {
            text-align:center;
            }
     </style>
    /* HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]

    Fav and touch icons--->
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("pot-holder.jpg");
</script>
<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	
          <a class="brand" href="./index.html">COMMUNITY SERVICE CENTERS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.php">Home</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>


<?php 
mysql_connect("localhost","****","****");
@mysql_select_db("rajasthan")or die("unable");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<div class="cont">
<div class="tt">
<div class="txt">

<?php
echo "<b>.....</b>";
echo $pt=$_REQUEST['InputDistrict'];
echo "<b>.....</b>";
 echo "<br>";
$data=mysql_query("SELECT address FROM data WHERE district='$pt'");
	 

?>
</div>
<html>
<body background="assets/ico/t3.jpg">
<form action="mmm.php" method="POST">


<?php
    echo "CHOOSE YOUR PLACE:<br>";
    echo "<select name=\"add1\">"; // Open your drop down box
      
// Loop through the query results, outputing the options one by one
while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['address']."'>".$row['address']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "<br>";
	
?>
<input type="submit" value="submit">
</form>
</div>
</div>

<div class="cont">
<div class="table">


<?php
$sql=mysql_query("SELECT * FROM services WHERE district LIKE '$pt'");

echo "<table>";
echo "<th bgcolor=wheat> Department Name </th>";
echo "<th bgcolor=wheat>Service Name</th>";

while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
        echo "<td>" . $row['Department_Name'] . "</td>";
        echo "<td>" . $row['Service_Name'] . "</td>";
  echo "</tr>";

}

echo "</table>";
?>

</div>
</div>
</div>
</body>
</html>
