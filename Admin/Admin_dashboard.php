<?php
session_start();
@$connect   = mysqli_connect("localhost","root","","charity") or die("couldn't connect!");

echo "
<!DOCTYPE html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Homepage</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' charset='utf-8'></script>
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('NGO_homepage.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
}

.navbar {
  overflow: hidden;
  background-color: #3F3A39;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown_a {
  float: right;
}
.dropdown .dropbtn{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.gallery_a img{
  width:250px;
  height: 250px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  margin: 5px;
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 40px;
  /*height: 300px;*/
}

div.gallery:hover {
  border: 1px solid #777;
}

</style>

    </style>
  </head>
  <body>

    <input type='checkbox' id='check'>
    <!--header area start-->
    <header>
      <div class='left_area'>
        <h3>Admi<span>nist</span>rator</h3>
      </div>
      <label for='check'>
        <i class='fas fa-bars' id='sidebar_btn'></i>
      </label>

      <div class='right_area'>
        <a href='logout.php' class='logout_btn'>Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class='mobile_nav'>
      <div class='nav_bar'>
        <img src='1.png' class='mobile_profile_image' alt=''>
        <i class='fa fa-bars nav_btn'></i>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class='sidebar'>
      <div class='profile_info'>";
              echo '<img src="admin_pro.jpg" class="profile_image" alt=""/>';
        echo "<h4>Administrator</h4>";
      echo "</div>
      <a href='Admin_dashboard.php'><i class='fas fa-desktop'></i><span>Dashboard</span></a>
      <a href='#'><span style='color:red;font-size:20px'>Manage NGOs</span></a>
      <a href='Approve1.php'><i class='fas fa-cogs'></i><span>Approve NGO</span></a>
      <a href='#'><i class='fas fa-cogs'></i><span>Block NGO</span></a>
      <a href='#'><span style='color:red;font-size:20px'>Manage Donors</span></a>
      <a href='block_donor_1.php'><i class='fas fa-cogs'></i><span>Block Donors</span></a>
    </div>
    <!--sidebar end-->

    <div class='content'>
        
    </div>
  </body>
</html>
                           
;"
?>