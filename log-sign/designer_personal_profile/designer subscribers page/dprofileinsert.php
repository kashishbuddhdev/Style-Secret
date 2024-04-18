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
$E_mail= $_GET['E-mail'];
$Password= $_GET['Password'];
$Mobileno=$_GET['Mobile-no'];
$Start_date= $_GET['Start_date'];
$End_date = $_GET['End_date'];
$Amount= $_GET['Amount'];
$Expertise = $_GET['expertise'];
$Filename = $_GET['photo'];
$Address = $_GET['address'];
$Socialmedia = $_GET['Socialmedia'];


$sql= "INSERT INTO `designer`.`drequest` ( `Username`, `E-mail`,`Password`,`Mobile-no`, `Start_date`, `End_date`,`Amount`,`expertise`,`photo`,`address`,`Socialmedia`) 
VALUES (  '$Username', '$E_mail', '$Password', '$Mobileno','$Start_date', '$End_date','$Amount','$Expertise','$Filename','$Address','$Socialmedia');";



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