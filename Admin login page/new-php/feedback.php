
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        table{
    border-collapse: collapse;
    position: absolute;
    width: 99%;
}
td{
    border:1px solid black;
    padding:12px;
}
th{
    border:1px solid black;
    padding:10px;
    font-size:18px;
   color: black;
   background-color:#f1f3cf;
}
tr:nth-child(odd){
    background-color: #f5ecdf;
}
.feedback-h1{
    font: 200 1rem/1 orpheuspro, Arial, sans-serif;
    text-align: center;
    padding-top: 20px;
}

    </style>
</head>
<body>

<div class="feedback-h1">
        <h1>FEEDBACK TABLE</h1>
    </div>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);



$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

    <table>
        <tr>
        <th>SR_NO</th>  
        <th>Full_name</th>  
        <th>phone</th>
        <th>Feedback</th>
</tr>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
     <td> <?php echo $row['SR_NO']; ?></td> 
     <td><?php echo $row['Full_name']; ?> </td>
     <td><?php echo $row['phone'];?></td><br>
     <td><?php echo $row['Feedback'];?></td><br>
     

  </tr>

  <?php
  }
}
?>
    </table>
</body>
</html>
