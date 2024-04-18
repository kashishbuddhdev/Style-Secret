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
    <h1>SIGN-UP SUCCESSFULLY...!</h1>
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

$Username= $_GET['Username'];
$E_mail= $_GET['Email'];
$Password= $_GET['Password'];
$Mobileno=$_GET['Mobile-no'];
$Start_date= $_GET['Start_date'];
$End_date = $_GET['End_date'];



$sql= "INSERT INTO `designer`.`subscribers` ( `Username`, `Email`,`Password`,`Mobile-no`, `Start_date`, `End_date`) 
VALUES (  '$Username', '$E_mail', '$Password', '$Mobileno','$Start_date', '$End_date');";



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