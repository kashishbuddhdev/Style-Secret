<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>successfull...!!</title>
    <style>
        h1{
            color: #541a2b;
            text-align: center;
        }
        .h-btn{
            text-align: center;
        }
        .h-btn button{
            padding: 10px;
            width: 80px;
            background-color:#541a2b;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <h1>YOUR FEEDBACK IS RECEIVED...!</h1>
    <div class="h-btn">
   <a href="../index.html"><button>Home</button></a>
   </div>
</body>
</html>


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

$Full_name= $_GET['Full_name'];
$phone=$_GET['phone'];
$Feedback= $_GET['Feedback'];




$sql= "INSERT INTO `designer`.`feedback` (`Full_name`,`Feedback`,`phone`) 
VALUES ('$Full_name', '$Feedback','$phone');";

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