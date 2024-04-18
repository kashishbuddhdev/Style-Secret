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

$sql = "SELECT * FROM subscribers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
             table{
                border-collapse: collapse;
                width:100%;
                top: 30px;
                position: absolute;
                /* border-radius: 50%; */
            }
            tr:nth-child(odd){
                background-color: #D6EEEE;
            }
            td{
                border:1px solid black;
                padding:10px;
                text-align: center;
            }
            th{
                border:1px solid black;
                padding:10px;
                font-size:20px;
                background-color: #b3e5fc;
                
            }
            body{
                margin: 0;
                padding: 0;
            }
        </style>
</head>
<body>
    <table>
        <tr>
        <th>Username</th>
        <th>Email</th>
        <th>password</th>
        <th>Mobile-no</th>
        <th>Start_date</th>
        <th>End_date</th>
        <th>Amount</th>
</tr>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
     <td><?php echo $row['Username']; ?> </td>
     <td><?php echo $row['Email'];?></td><br>
     <td><?php echo $row['Password'];?></td><br>
     <td><?php echo $row['Mobile-no'];?></td><br>
     <td><?php echo $row['Start_date'];?></td><br>
     <td><?php echo $row['End_date'];?></td><br>
     <td><?php echo $row['Amount'];?></td><br>


  </tr>
 
  <?php
  }
}

$conn->close();
?>
    </table>