<?php
$dbhoost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "adminlogin";

$conn = mysqli_connect($dbhoost,$dbuser,$dbpass,$db);

if(!$conn){
    die ("connection failed" .mysqli_connect_error());
}
echo "connected";

$Email_ID = $_POST['email'];
$Password = $_POST['password'];

$sql ="select * from adminvarification where Email_ID='$Email_ID' and Password='$Password';"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count == 1){
  header("Location:new-php/kd.php");
}
if($count == 0 || $count>1)
{
  header("Location:../index.php");
}
$conn->close();
?>