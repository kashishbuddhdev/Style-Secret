<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo "Connected successfully";  
    // $customer = $_GET["cust_name"];
    // $password = $_GET["password"];
   $mysql = "DELETE FROM `subscribers`WHERE D_ID=11";

    if ($conn->query($mysql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $mysql . "<br>" . $conn->error;
      }
    $conn->close();
?>