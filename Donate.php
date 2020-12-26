<?php
session_start();
@$connect = mysqli_connect("localhost","root","","charity") or die("couldn't connect!");
@$q = mysqli_query($connect,"SELECT * FROM `ngo_details` WHERE `approve`='1' AND `Permission`='1'");
while(@$row = mysqli_fetch_assoc($q))
{
echo "
<!DOCTYPE html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Covid-19</title>

    <link rel='stylesheet' href='style1.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' charset='utf-8'></script>
    <style>
    .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
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
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('NGO_homepage.jpg');
    background-repeat:repe;    
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

  </head>
  <body>

    <input type='checkbox' id='check'>
    <!--header area start-->
    <header>
      <div class='left_area'>
        <h3>National <span>Relief</span> Fund</h3>
      </div>
      <label for='check'>
        <i class='fas fa-bars' id='sidebar_btn'></i>
      </label>
      <script>
        function goto()
        {
          location = '1234.php';
        }
      </script>
      <div class='right_area'>
        <button class='logout_btn' onclick='goto()'>Home Page</button>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class='mobile_nav'>
      <div class='nav_bar'>
        <img src='1.png' class='mobile_profile_image' alt=''>
        <i class='fa fa-bars nav_btn'></i>
      </div>
<!--      <div class='mobile_nav_items'>
        <a href='#'><i class='fas fa-desktop'></i><span>Dashboard</span></a>
        <a href='#'><i class='fas fa-cogs'></i><span>Components</span></a>
        <a href='#'><i class='fas fa-table'></i><span>Tables</span></a>
        <a href='#'><i class='fas fa-th'></i><span>Forms</span></a>
        <a href='#'><i class='fas fa-info-circle'></i><span>About</span></a>
        <a href='#'><i class='fas fa-sliders-h'></i><span>Settings</span></a>
      </div>-->
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class='sidebar'>
      <div class='profile_info'>";
          @$var =$row['email'];
          @$name = $row['name'];

          @$result = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `ngo_image`.`email`='$var'");
          @$numrows = mysqli_num_rows($result);
          if(@$numrows != 0)
          {
            while(@$row1 = mysqli_fetch_assoc(@$result))
            {
              echo '<img src="uploaded_photos/'.$row1['name'].'" class="profile_image" alt=""/>';
            }
          }                            
        echo "<h4>".$name."</h4>";
      echo "</div>
      <a href='123.php'><i class='fas fa-desktop'></i><span>Dashboard</span></a>
      <a href='profile_ngo_1.php'><i class='fas fa-desktop'></i><span>Profile</span></a>
      <a href='#'><span style='color:red;font-size:20px'>Document</span></a>
      <a href='add-remove_document_2.php'><i class='fas fa-cogs'></i><span>Documents List</span></a>

      <a href='#'><span style='color:red;font-size:20px'>Donate</span></a>
      <a href='Donate.php'><i class='fas fa-th'></i><span>Donate here</span></a>
    </div>
    <!--sidebar end-->

    <div class='content'>
    <br><br>
    <center>
      <div class='container'>
      <form action='Donate.php' method='POST'>
      <h2 style='margin-top:200px;'>Enter the Amount Which you want to donate:
      <input type='number' name='amt' style='width:250px;height:20px;'>
      <br><br><br><input type='submit' name='submit' class='btn btn-primary' value='Go To Payment'>
      </form>
      </center>
    </div>";
    @$N_email = $row['email'];
    @$D_email = $_SESSION['email'];
    @$amount = $_POST['amt'];
    @$submit = $_POST['submit'];
    if(@$submit && @$amount)
    {
    	@$q2 = mysqli_query($connect,"INSERT INTO `donations` (`id`,`D_email`, `N_email`,`Amount`) VALUES ('', '$D_email', '$N_email', '$amount')");
    	@$q3 =mysqli_query($connect,"SELECT * FROM `donor_reg` WHERE `email`='$D_email'");
    	while (@$row1 = mysqli_fetch_assoc(@$q3))
    	{
    		@$past = $row1['donated'];
    	}
    	if(@$past != '0')
    	{
    		@$past1 = @$past + @$amount;
    		@$q3 = mysqli_query($connect,"UPDATE `donor_reg` SET `donated`= '$past1' WHERE `email` ='$D_email'");
    	}
    	else
    	{
    		@$q3 = mysqli_query($connect,"UPDATE `donor_reg` SET `donated`= '$amount' WHERE `email` ='$D_email'");    		
    	}
    	echo "<script>
    	location = 'Payment.php';
    	</script>";
    }
    echo "<script type='text/javascript'>
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
                           
";
}
?>