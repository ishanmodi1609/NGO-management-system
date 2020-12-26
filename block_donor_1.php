<?php
session_start();
@$connect   = mysqli_connect("localhost","root","","charity") or die("couldn't connect!");


echo "<!DOCTYPE html>
<html>
<head>
	<title>Donor_list</title>
	    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Homepage</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' charset='utf-8'></script>
	<style>
		body {
		  	background-image: url('Donar_list.jpg');
		  	background-repeat: no-repeat;
		  	background-attachment: fixed;
		  	background-size: 100% 100%;
		}
		.f2:hover{
	        background-color: #87CEFA;
	    }
	    .btn {
    display: inline-block;
    font-weight: 400;
    color: white;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #007bff;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

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
	<br><br>
	<center>
		<br>
		<form action='Block_Donor.php' method='POST'> 
			Enter the e-mail id of user&emsp;:
			<input type='email' name='demail'>
			<br><br>
			<input type='submit' name='submit' class='btn btn-primary' value='Go'>
		</form>
	</center>
    </div>

</body>
</html>";
?>