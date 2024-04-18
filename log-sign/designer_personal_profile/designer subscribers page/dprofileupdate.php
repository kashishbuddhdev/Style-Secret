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
$Expertise = $_GET['expertise'];
$Filename = $_GET['photo'];
$Address = $_GET['address'];
$Socialmedia = $_GET['Socialmedia'];


$sql =  "UPDATE subscribers SET Username='Hiral Patel' WHERE D_ID=2";



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