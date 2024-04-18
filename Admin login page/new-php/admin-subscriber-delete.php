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
   $sql = "DELETE FROM `subscribers` WHERE D_ID=27";

    if ($conn->query($sql) === TRUE) {
        echo "New record deleted successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>