<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
 
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Nunito Sans', sans-serif;
           background-color:#f5ecdf;
        }
             table{
                border-collapse: collapse;
                width:100%;
                position: absolute;
                top: 140px;
            }
            td{
                border:1px solid black;
                padding:10px;
            }
            tr:nth-child(odd){
                background-color: #D6EEEE;
            }
            th{
                border:1px solid black;
                padding:10px;
                font-size:16px;
               background-color:  #b3e5fc;
            }
            .req-page-h1 h1{
                color: black;
                text-align: center;
                padding: 6px;
                font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
           font-size: 30px;
           margin-top: 33px;
               
            }
            
            .all-a-tags{
   background-color:#541a2b;
   padding: 12px;
   display: flex;
   justify-content: space-evenly;
}
.all-a-tags a{
    color:white;
    text-decoration: none;
    font-size: 17px;   
}
            @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/972118/000000000000000000016ea6/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/972118/000000000000000000016ea6/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3)
            format("woff"),
          url(https://use.typekit.net/af/972118/000000000000000000016ea6/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3)
            format("opentype");
        font-weight: 700;
        font-style: normal;
        font-display: auto;
      }
      @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/320790/000000000000000000015d5b/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/320790/000000000000000000015d5b/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3)
            format("woff"),
          url(https://use.typekit.net/af/320790/000000000000000000015d5b/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3)
            format("opentype");
        font-weight: 400;
        font-style: italic;
        font-display: auto;
      }
      @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/07139b/000000000000000000016ea5/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/07139b/000000000000000000016ea5/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3)
            format("woff"),
          url(https://use.typekit.net/af/07139b/000000000000000000016ea5/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3)
            format("opentype");
        font-weight: 400;
        font-style: normal;
        font-display: auto;
      }
      @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/3fe6c5/00000000000000003b9aff70/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/3fe6c5/00000000000000003b9aff70/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3)
            format("woff"),
          url(https://use.typekit.net/af/3fe6c5/00000000000000003b9aff70/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3)
            format("opentype");
        font-weight: 500;
        font-style: normal;
        font-display: auto;
      }
            
        </style>
</head>
<body>
   
<div class="admin-nav">
<div class="all-a-tags">
        <a href="kd.php">Home</a>
            <a href="admin-insert.php">Insert</a>
            <a href="admin-update.php">Update</a>
            <a href="admin-delete.php">Delete</a>
            <a href="admin-reqpage.php">Request Page</a>
            <a href="admin-search.php">Search</a>
        </div>
        </div>
    </div>
    <div class="req-page-h1">
        <h1>Request Page</h1>
    </div>

    <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);



$sql = "SELECT * FROM subscribers";
$result = $conn->query($sql);
?>

    <table>
        <tr>
        <th>D_ID</th>  
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
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
     <td> <?php echo $row['D_ID']; ?></td> 
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
</body>
</html>