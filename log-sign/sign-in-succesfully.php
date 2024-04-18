<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal-profile-page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <header> -->
          <link href='https://fonts.googleapis.com/css?family=Montserrat:900'>
          <!-- font-awesome -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
           <!-- bootstrap-css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
          <!-- bootstrap-hero-slider-js -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
       crossorigin="anonymous"></script>
       <!-- <header--end> -->

    <link rel="stylesheet" href="desi-personal-profile.css">
    <style>
     
     @charset "utf-8";

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

/* header */
.header-main {
  background-color: #541a2b;
  display: flex;
  justify-content: space-between;
  color: white;
  align-items: center;
  padding: 2px;
}
.ss-mail {
  padding: 15px 47px;
}
.logo-txt {
  font: 500 2.25rem/1 orpheuspro, Arial, sans-serif;
  margin-top: 2px;
}
.logo-txt a{
  color:white;
  text-decoration: none;
}
.top-head-left {
  display: flex;
}
.top-head-center a{
  text-align: center;
}

/* right-svg */
.top-head-right {
  display: flex;
  gap: 65px;
}
.solid-white svg {
  height: 18px;
  width: 25px;
  fill: white;
}
.admin i{
  margin-right: 95px;
}
.admin a{
  color: white;
}
/* end-header */

/* nav */
header {
  position: sticky;
  top: 0;
  z-index: 99;
}
.nav {
  background-color: white;
  z-index: 99;
  display: flex;
  justify-content: space-evenly;
  padding: 18px;
  align-items: center;
  color: #541a2b;
}

.hcc {
  display: flex;
  gap: 100px;
  font-size: 15px;
  font-weight: bold;
}
.contact-us a{
  color: #541a2b;
  text-decoration: none;
 
}
.home a{
 color: #541a2b;
    text-decoration: none;
}
.collection span {
  padding-right: 6px;
}
.dropdown button{
  background-color: white;
  border: none;
  font-size: 15px;
  font-weight: bold;
  color: #541a2b;
  padding: 0%;
}
.dropdown button:hover{
background-color:none;
color:black ;
}
.btn:hover {
  color:transparent;
  background-color:transparent;
  border-color: transparent;
}

.dropdown-item:active {
  background-color:  #541a2b;
}
.rent-cus a{
  color: #541a2b;
  text-decoration: none;
}

/* nav-end */

 


body {
    font-family: "Roboto", sans-serif;
    background-color:rgb(245, 240, 227);
  }
  
  .designer-personal-profile-heading {
    font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
    font-size: 40px;
    text-align: center;
    padding-top: 20px;
    padding-bottom: 26px;
    margin-bottom: 50px;
    margin-top: 25px;
    letter-spacing: 5px;
    background-color:rgb(245, 240, 227);
    color:#541a2b;
  }

  .desi-personal-profile-cards
{
    display:flex;
    margin: 40px 50px;
}


.designer-personal-profile-image img{
    height: 403px;
    width:300px;
    /* margin:50px; */
}
.right-all-detils-personal-profile
{
    height: 390px;
    width:720px;
    margin: 10px 0px 0px 106px;
}
.right-all-detils-personal-profile p{
    
    line-height: 28px;
    letter-spacing:1px;
    font-weight: 400;

}
/* desi-frame */

.designer-personal-profile-image  {
  height:412px;
  width:309px;
  margin-left:50px;
  -webkit-box-shadow: inset 19px 10px 10px 4px rgba(0, 0, 0, .6);
  box-shadow: inset 9px 9px 9px 9px rgba(0, 0, 0, .1);
  border:5px inset #af7676;
}



/* .desi-personal-profile-name
{
    display: flex;
} */

.desi-personal-profile-social-icon {
    font-size: 23px;
    display: flex;
  }
  
  .desi-personal-profile-social-icon i {
    padding: 4px 56px 4px 0px;
    color:black;
  }
  .desi-personal-profile-insta-icon i{
      transition: 300ms;
  }
  .desi-personal-profile-insta-icon i:hover {
    color: #bc2a8d;
  }
  .desi-personal-profile-twitter-icon i:hover{
      color: #1DA1F2;
  }
  .desi-personal-profile-twitter-icon i{
      transition: 300ms;
  }
  .desi-personal-profile-facebook-icon i:hover{
      color: #2E51D6;
  }
  .desi-personal-profile-facebook-icon i{
      transition: 300ms;
  
  }


    /* footer */

.footer {
  display: inline-block;
  background-color: #541a2b;
  color: white;
  width: 100%;
  margin-top: 30px;
}

.footer-divs {
  height: 299px;
  display: flex;
  justify-content: space-around;
  padding: 58px 39px;
}
.footer p {
  font-size: 20px;
  text-align: center;

}

.Aboutus-footer h5 {
  margin-top: 20px;
  margin-bottom: 25px;
  letter-spacing: 3px;
  font-size: 25px;
  text-align: center;
}

.Aboutus-footer a{
  font-size: 12px;
  text-align: center;
  margin: 0px;
  margin: 7px;
  letter-spacing: 3px;
  color: white;
  text-decoration: none;
}
.contectus-footer p {
  font-size: 12px;
  text-align: center;
  margin: 15px;
  letter-spacing: 3px;
}
.contectus-footer h5 {
  margin-top: 20px;
  text-align: center;
  margin-bottom: 31px;
  letter-spacing: 3px;
  font-size: 25px;
}
.footer-map iframe {
  width: 300px;
  height: 200px;
}
.social-icon {
  font-size: 23px;
  display: flex;
}

.social-icon i {
  padding: 0px 25px;
}
.insta-icon-footer i{
    transition: 300ms;
}
.insta-icon-footer i:hover {
  color: #bc2a8d;
}
.twitter-icon-footer i:hover{
    color: #1DA1F2;
}
.twitter-icon-footer i{
    transition: 300ms;
}
.facebook-icon-footer i:hover{
    color: #2E51D6;
}
.facebook-icon-footer i{
    transition: 300ms;

}

.style-secret{
  padding: 12px 20px;
  display: flex;
  justify-content: space-between;
  letter-spacing: 3px;
}
.style-secret h3 a{
  color: white;
  text-decoration: none;
}
.hover-box:hover {
  .hover-box2{
    display:block;
  }
}
    </style>
    <!-- <link rel="stylesheet" href="style.css" > -->
</head>
<body>
<!-- header -->
<div class="header-main">
        <!-- left -->
        <div class="top-head-left">
          <div class="ss-mail">
            <i class="fa-regular fa-envelope"></i> stylesecret10@gmail.com
          </div>
        </div>
        <!-- center -->
        <div class="top-head-center">
          <div class="logo-txt">
            <a href="../index.php">Style Secret</a></div>
        </div>
        <!-- right -->
        <div class="top-head-right">
          <!-- search -->
          <!-- user -->
          <div class="user solid-white">
            <a href="../log-sign/sign-up.html"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
              <path
                d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
            </svg></a>
          </div>
          <!-- heart -->
          <div class="heart solid-white">
            <a href="../wishlist/wishlist.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.62436 4.4241C3.96537 5.18243 2.75 6.98614 2.75 9.13701C2.75 11.3344 3.64922 13.0281 4.93829 14.4797C6.00072 15.676 7.28684 16.6675 8.54113 17.6345C8.83904 17.8642 9.13515 18.0925 9.42605 18.3218C9.95208 18.7365 10.4213 19.1004 10.8736 19.3647C11.3261 19.6292 11.6904 19.7499 12 19.7499C12.3096 19.7499 12.6739 19.6292 13.1264 19.3647C13.5787 19.1004 14.0479 18.7365 14.574 18.3218C14.8649 18.0925 15.161 17.8642 15.4589 17.6345C16.7132 16.6675 17.9993 15.676 19.0617 14.4797C20.3508 13.0281 21.25 11.3344 21.25 9.13701C21.25 6.98614 20.0346 5.18243 18.3756 4.4241C16.7639 3.68739 14.5983 3.88249 12.5404 6.02065C12.399 6.16754 12.2039 6.25054 12 6.25054C11.7961 6.25054 11.601 6.16754 11.4596 6.02065C9.40166 3.88249 7.23607 3.68739 5.62436 4.4241ZM12 4.45873C9.68795 2.39015 7.09896 2.10078 5.00076 3.05987C2.78471 4.07283 1.25 6.42494 1.25 9.13701C1.25 11.8025 2.3605 13.836 3.81672 15.4757C4.98287 16.7888 6.41022 17.8879 7.67083 18.8585C7.95659 19.0785 8.23378 19.292 8.49742 19.4998C9.00965 19.9036 9.55954 20.3342 10.1168 20.6598C10.6739 20.9853 11.3096 21.2499 12 21.2499C12.6904 21.2499 13.3261 20.9853 13.8832 20.6598C14.4405 20.3342 14.9903 19.9036 15.5026 19.4998C15.7662 19.292 16.0434 19.0785 16.3292 18.8585C17.5898 17.8879 19.0171 16.7888 20.1833 15.4757C21.6395 13.836 22.75 11.8025 22.75 9.13701C22.75 6.42494 21.2153 4.07283 18.9992 3.05987C16.901 2.10078 14.3121 2.39015 12 4.45873Z"
                fill="#fff" />
            </svg></a>
          </div>
          <!-- cart -->
          <div class="admin solid-white">
            <a href="../Admin login page/admin-loginpage.html"> <i class="fa-solid fa-a"></i></a>
          </div>
        </div>
      </div>
      <!-- header-end -->
    
      <!-- navbar -->
      <header>
        <div class="navigation-bar">
          <div class="nav">
            <div class="hcc">
              <!-- home -->
              <div class="home"><a href="../index.php">HOME</a></div>
              <!-- about-us -->
              <div class="dropdown">
                <button class="btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  ABOUT US
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="../ss-about/our-story.html">Our Story</a></li>
                  <li><a class="dropdown-item" href="../ss-about/our-team.html">Our Team</a></li>
                </ul>
              </div>
              <!-- collection -->
              <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  COLLECTION 
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="../product-gallery/productpage.php">Our Gallery</a></li>
                  <li><a class="dropdown-item" href="../Designer-protfolio/desi-porfolio.php">Designers Porfolio</a></li>
                  <li><a class="dropdown-item" href="../designer profile/desi-profile.html">Designers profile</a></li>
                </ul>
              </div>
              <!-- rent-custom -->
              <div class="rent-cus">
                <a href="../rent-custom/rent-custom.php">RENT/CUSTOM</a></div>
            <!-- contact-us -->
              <div class="contact-us"><a href="../cont us/contact.html">CONTACT US</a>
              </div>
            </div>
            </div>
    
      </header>
      <!-- header-end -->
<?php      
      $host = "localhost";  
      $user = "root";  
      $password = '';  
      $db_name = "designer";  
        
      $con = mysqli_connect($host, $user, $password, $db_name);  
      if(mysqli_connect_errno()) {  
          die("Failed to connect with MySQL: ". mysqli_connect_error());  
      }  
        $Email = $_POST['E-mail'];  
        $Password = $_POST['Password'];  
        $sql = "select * from subscribers where Email = '$Email' and Password = '$Password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $query = " select * from subscribers where Email = '$Email' and Password='$Password'";
            $result = mysqli_query($con, $query);
            // $data = mysqli_fetch_assoc($result) 
            while($data = mysqli_fetch_assoc($result)) {
        ?>

    <div class="main-bg-img-profile">
    
    <h1 class="designer-personal-profile-heading">Designers Profile</h1>
    <div class="designer-personal-profile-section">
        <div class="all-personal-profiles-designers">
          <div class="desi-personal-profile-cards">
            <div class="left-images-personal-profile">
        <div class="designer-personal-profile-image">
            <img src="<?php echo $data['Filename']; ?>"> 
         </div> 
        </div>
        <div class="right-all-detils-personal-profile">
        <div class="desi-personal-profile-name">
          <p><b>Designer ID:     </b> <?php echo $data['D_ID'];?></p>
            </div> 
         <div class="desi-personal-profile-name">
          <p><b>Designer Name:     </b> <?php echo $data['Username'];?></p>
            </div> 
          <div class="desi-personal-profile-exprtise">
            <p><b>Expertise:</b> <?php echo $data['Expertise'];?></p>
          </div>
          <div class="desi-personal-profile-address">
            <p><b>Address:</b> <?php echo $data['Address'];?></p>
            </div>
          <div class="desi-personal-profile-email">
            <p><b>Email:</b> <?php echo $data['Email'];?></p>
            </div>
            <div class="desi-personal-profile-contectno">
              <p><b>Contact No: </b><?php echo $data['Mobile-no'];?></p>
              </div>
              <div class="desi-personal-profile-social-media">
                <div class="desi-personal-profile-social-icon">

                  <div class="desi-personal-profile-insta-icon">
                <a href="<?php echo $data['Socialmedia'];?>"> <i class="fa-brands fa-instagram"></i></a>
                  </div>
                  <div class="desi-personal-profile-twitter-icon">
                    <a href="https://www.instagram.com/annus_creation/"> <i class="fa-brands fa-twitter"></i></a>
                  </div>
                  <div class="desi-personal-profile-facebook-icon">
                    <a href="https://www.instagra
                    m.com/annus_creation/"><i class="fa-brands fa-facebook"></i></a>
                  </div>
                  <!-- <div class="updatelink">
                  <a href="designer-subscribers-page/designer-update-page.html" style="text-decoration:none; color:black; padding:10px; background-color:grey; color:white; border-radius:25px;">Update</a>
                  </div>
                  <a href="designer_personal_profile/designer subscribers page/designer-delete-page.html" style="margin-left:10px; text-decoration:none; color:black; padding:0px 10px; line-height:2; background-color:grey; color:white; border-radius:25px; margin-top:-5px;">Delete</a>
                  <a href="designer_personal_profile/designer subscribers page/designer-delete-page.html" style="margin-left:10px; text-decoration:none; color:black; padding:0px 10px; line-height:2; background-color:grey; color:white; border-radius:25px; margin-top:-5px;">Product</a>
                  <div class="hover-box" style="background-color:grey; color:white; margin-left:10px; border-radius:25px; padding-left:10px; padding-right:10px; line-height:1.5;">
                </div> -->
                </div>
            </div>
                </div>
                </div>
  </div>
  </div>
       


        
        
        
<!-- ----------------------------------------------------------------------- -->
        <?php
            }
        }  
        else{  
             echo "<h1> Login failed. Invalid username or password.</h1>";
             
        }     
?>  
<!-- footer -->
<footer>
      <div class="footer">
        <div class="footer-divs">
          <div class="Aboutus-footer">
            <h5>Our Policy</h5>
            <p><a href="../ss-policy/Customer_services.html">Customer services</a></p>
            <p><a href="../ss-policy/Terms_condition.html">Terms & Conditions</a></p> 
             <p><a href="../ss-policy/privacy_policy.html">Privacy Policy</a></p>
             <p><a href="../ss-policy/Cancellation_refund.html">Cancellation & Refund Policy</a></p>
          </div>
            <div class=contectus-footer>
              <h5>Contact Us</h5>
              <p>+91 7862877687</p>
              <p>+91 7698100903</p>
              <p>stylesecret10@gmail.com</p>
          </div>
          <div class="footer-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d430480.1255612798!2d72.34366293488395!3d23.187896386419236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848ac8a7faf3%3A0xc49f901866d2abd5!2sShri%20Chimanbhai%20Patel%20Institute%20of%20Management%20%26%20Research!5e0!3m2!1sen!2sin!4v1705661599835!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
          </div>
        </div>
        <hr>
  
        <div class="style-secret">
          <h3><a href="../index.html"> @Style Secret</a></h3>
          <div class="social-icon">
            <div class="insta-icon-footer">
            <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="twitter-icon-footer">
            <i class="fa-brands fa-twitter"></i>
            </div>
            <div class="facebook-icon-footer">
            <i class="fa-brands fa-facebook"></i>
            </div>
          </div>
        </div>
      
  
    </footer>
</body>
</html>