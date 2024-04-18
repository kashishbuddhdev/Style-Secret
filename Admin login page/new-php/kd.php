<!DOCTYPE html>
<html lang="en">
<head>
<title>admin page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      *{
    margin:0px;
    padding:0px;
}
body {
    background-color: floralwhite;
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
.hello-admin h1{
    height:80px;
    width:100%;
    background-color: #541a2b;
    color:white ;
    text-align: center;
    font: 500 2.25rem/1 orpheuspro, Arial, sans-serif;
    padding-top: 40px;
}
/* left-side */
.admin-first-chart{
    width: 100%;
}
/* second-box */
.admin-second-part{
    display: flex;
    justify-content: space-evenly;   
}
.admin-revenue-cnt{
    background-color:#541a2b;
    height: 134px;
    width: 373px;
    border-radius: 15px;
    padding: 20px;
    margin-top: 10px;
}
.container-of-revenue{
    height: 134px;
    background-color:#FCC8D1;
    color:black;
    text-align: center;
}
.revenue-heading h4{
    font-size: 27px;  
    text-align: center;
    padding: 24px;
    font: 200 2.25rem/1 orpheuspro, Arial, sans-serif;
}
.btn-revenue{
    text-align: center;
}
.btn-revenue button{
    padding: 6px 20px; 
    border: none;
 }
 /* subscribers */
 .admin-no-of-sub-cnt{
    background-color: #541a2b;
    height: 134px;
    width: 373px;
    border-radius: 15px;
    padding: 20px;
    margin-top: 10px;
 }
.container-no-of-sub{
    height: 134px;
    background-color:#FCC8D1;
    color:black;
 
}
.no-of-sub h4{
    font-size: 27px;  
    text-align: center;
    padding: 27px;
    font: 200 2rem/1 orpheuspro, Arial, sans-serif;

}
.btn-to-count{
    text-align: center;
}
.btn-to-count button{
   padding: 6px 20px; 
   border: none;
} 
/* interaction */
.container-of-interaction{
   display: flex;
   justify-content: space-evenly;
}

.interaction-heading-like h4{
    font-size: 27px;  
    text-align: center;
    padding: 27px;
    font: 200 2rem/1 orpheuspro, Arial, sans-serif;
}
.interaction-heading-share h4{
    font-size: 27px;  
    text-align: center;
    padding: 27px;
    font: 200 2rem/1 orpheuspro, Arial, sans-serif;
}
.count-of-total-likes{
    height: 19px;
    width: 49px;
    background-color: white;
    margin-left: 157px;
    padding: 5px;
}
.left-like{
    height: 135px;
    background-color:#FCC8D1;
    color:black;
    text-align: center;
}
.right-shares{
    height: 134px;
    background-color:#FCC8D1;
    color:black;
    text-align: center;
}
.admin-container-of-like{
    background-color:#541a2b;
    height: 134px;
    width: 373px;
    border-radius: 15px;
    padding: 20px;
    margin-top: 10px;
}
.admin-container-of-shares{
    background-color:#541a2b;
    height: 134px;
    width: 373px;
    border-radius: 15px;
    padding: 20px;
    margin-top: 10px;
}
.count-of-total-shares{
    height: 19px;
    width: 49px;
    background-color: white;
    margin-left: 157px;
    padding: 5px;
}

/* subscribers table */
table{
    border-collapse: collapse;
    width:100%;
    position: absolute;
    top: 820px;
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

/* subscriber page */
.subscribers-page-h1 h1{
    color: black;
    text-align: center;
    padding: 32px 6px;
    font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
font-size: 30px;
margin-top: 27px;
   
}
.subscriber-page-heading h3{
    color: black;
    text-align: center;
    font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
font-size: 50px;
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
.feedback-reopt-chart{
  display: flex;
}
.feedback button{
  padding: 20px;
  color: black;
  background-color: #FCC8D1;
  width: 350px;
  font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
  margin-top: 20px;
  border:15px solid #541a2b ;
  border-radius: 7px;
  margin-right: 29px;
}
.report button{
  padding: 20px;
  color: black;
  background-color: #FCC8D1;
  width: 350px;
  font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
  margin-top: 20px;
  border:15px solid #541a2b ;
  border-radius: 7px;

}
.feedback-report-btn{
  display: flex;
  justify-content:space-evenly;
}


    </style>
    <!-- <link rel="stylesheet" href="kd.css"> -->
  </head>
<body>
      <div class="main-admin">
        <div class="hello-admin">
          <h1>Hello Admin...!</h1>
        </div>
      </div>

      <!-- ------------------------------------------------------------------------------------------------------------------ -->
<div class="admin-second-part">
    <!-- revenue generated -->
    <div class="admin-revenue-cnt">
    <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

$query="select sum(Amount) as `sumAmount` from subscribers";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);
?>  
       <div class="container-of-revenue">
        <div class="revenue-heading">
            <h4>Revenue Generated</h4>
        </div>
        <div class="btn-revenue">
            <button> <?php 
          echo ($data['sumAmount']);
?></button>   
          </div>
       </div>
    </div>

        <!-- no-of-subscribers -->
        <div class="admin-no-of-sub-cnt">
        <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);



$sql = "SELECT * FROM subscribers";
$result = $conn->query($sql);

?>

        <div class="container-no-of-sub">
          <div class="no-of-sub">
            <h4>Number Of Subscribers</h4>
          </div>
          <div class="btn-to-count">
            <button><?php 
            $rowcount = mysqli_num_rows($result);
            echo($rowcount);
            $conn->close();
?></button>
          </div>
          </div>
        </div>
</div>
<!-- interaction -->
<div class="admin-last-part-of-interaction">
<div class="container-of-interaction">
    <div class="admin-container-of-like">
    <div class="left-like">
        <div class="interaction-heading-like">
            <h4>Total Likes</h4>
        </div>
        <div class="count-of-total-likes">
          5
        </div>
    </div>
    </div>
    <!-- shares -->
    <div class="admin-container-of-shares">
        <div class="right-shares">
        <div class="interaction-heading-share">
            <h4>Total Shares</h4>
        </div>
        <div class="count-of-total-shares">
        10
        </div>

       </div>
    </div>
</div>
</div>
<!-- feedback and report button -->
<div class="feedback-report-btn">
        <div class="feedback">
          <a href="feedback.php"><button>Feedback</button></a>
        </div>
        <div class="report">
        <a href="report.php"><button>Report</button></a>
        </div>

        </div>
<!-- <-----------subscriber page--------> 
<div class="subscribers-page-h1">
        <h1>Subscriber's Page</h1>
    </div>
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
?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "designer";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    // echo "Connected successfully";  
    // $customer = $_GET["cust_name"];
    // $password = $_GET["password"];
   $mysql = "DELETE FROM `subscribers` WHERE Amount=1000000";

    if ($conn->query($mysql) === TRUE) {
        // echo "New record created successfully";
      } else {
        echo "Error: " . $mysql . "<br>" . $conn->error;
      }
    $conn->close();
?>

  </table>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
  </body>
</html>