<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

$Username= $_GET['Username'];
$E_mail= $_GET['Email'];
$Password= $_GET['Password'];
$Mobileno=$_GET['Mobile-no'];
$Start_date= $_GET['Start_date'];
$End_date = $_GET['start'];
$Amount= $_GET['Amount'];



$sql= "INSERT INTO `designer`.`subscribers` ( `Username`, `Email`,`Password`,`Mobile-no`, `Start_date`, `End_date`,`Amount`) 
VALUES (  '$Username', '$E_mail', '$Password', '$Mobileno','$Start_date', '$End_date','$Amount');";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>