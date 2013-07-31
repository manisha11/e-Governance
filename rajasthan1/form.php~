
<?php


$name = $_POST['name'];

$district = $_POST['district'];

$services = $_POST['services'];

//the data

$data = "Name:$name \n District:$district \n Add on Services: $services\n\n\n";

//open the file and choose the mode

$fh = fopen("user.txt", "a");

fwrite($fh, $data);

//close the file

fclose($fh);

print "User Submitted";

?>


