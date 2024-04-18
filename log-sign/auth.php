<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
        p{
            font-size:20px;
        }
    </style>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
<?php      
      $host = "localhost";  
      $user = "root";  
      $password = '';  
      $db_name = "style";  
        
      $con = mysqli_connect($host, $user, $password, $db_name);  
      if(mysqli_connect_errno()) {  
          die("Failed to connect with MySQL: ". mysqli_connect_error());  
      }  
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
        $sql = "select * from profile where user = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $query = " select * from profile where user = '$username' and password='$password'";
            $result = mysqli_query($con, $query);
            // $data = mysqli_fetch_assoc($result) 
            while($data = mysqli_fetch_assoc($result)) {
        ?>
        <img src="image/<?php echo $data['filename']; ?>"> 
        <p> <?php echo $data['name'];?> </p>
        <p> <?php echo $data['description'];?></p>
        <?php
            }
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";   //  header("location:login.php"); 
        }     
?>  
</body>
</html>