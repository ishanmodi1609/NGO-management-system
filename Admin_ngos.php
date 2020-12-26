<?php
session_start();
echo "
<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'
        integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link rel='stylesheet' href='style2.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' charset='utf-8'></script>


    <title>Covid-19 NGOs</title>
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
      <a href='#'><i class='fas fa-cogs'></i><span>Block Donors</span></a>
    </div>
    <!--sidebar end-->

    <div class='content'>";
                  echo  "
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='Admin_dashboard.php'>Home</a></li>
                    <li class='breadcrumb-item'><a href='Approve1.php'>NGOs</a></li>   
";
@$connect = mysqli_connect("localhost","root","","charity") or die("couldn't connect!");

@$submit1 = $_POST['submit1'];
@$submit2 = $_POST['submit2'];
@$submit3 = $_POST['submit3'];
@$submit4 = $_POST['submit4'];
@$submit5 = $_POST['submit5'];
@$submit6 = $_POST['submit6'];
if($submit1)
{
	echo "
	        <li class='breadcrumb-item'><a href='Admin_ngos.php'>COVID-19</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <center>
        <h3 style='font-family: 'Times New Roman', Times, serif; color: tomato;'> We Rise by Lifting Others. </h3>
    </center>
    <br>
    <br>
    
";

	@$value = 'Covid-19';
	@$q = mysqli_query($connect , "SELECT * FROM `ngo_details` WHERE `type` = '$value' AND `Permission`='0'");
	$length =0;
	while(@$row = mysqli_fetch_assoc(@$q))
	{
		$length = $length + 1;
		@$dbemail = $row['email'];
		@$dbname = $row['name'];
		@$dbdesc = $row['description'];
		@$q1 = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `email`='$dbemail'");
		while (@$row1 = mysqli_fetch_assoc(@$q1))
		{
			@$url = 'uploaded_photos/'.$row1['name'];
		}
		echo "
		<div class='card mb-3' style='max-width: 2000px;'>
	        <div class='row no-gutters'>
	            <div class='col-md-4'>";
	    echo "
	              <img src='".$url."' class='card-img' alt='...' height='100%'>
            	</div>
            <div class='col-md-8'>
            <div class='card-body'>
                    <h5 class='card-title'>".$dbname."</h5>
                    <p class='card-text'>".$dbdesc."</p>
                    <br><br><br>
                    <form action='Covid-19_1.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='".$length."' value='Donate'>
                    </form>
            </div>
          	</div>
        </div>
    </div>
    
    ";
	}

}


if($submit2)
{
	echo "
	        <li class='breadcrumb-item'><a href='#'>Education</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <center>
        <h3 style='font-family: 'Times New Roman', Times, serif; color: tomato;'> We Rise by Lifting Others. </h3>
    </center>
    <br>
    <br>
";
	$length = 0;
	@$value = 'Education';
	@$q = mysqli_query($connect , "SELECT * FROM `ngo_details` WHERE `type` = '$value'");
	while(@$row = mysqli_fetch_assoc(@$q))
	{
		$length = $length + 1;
		@$dbemail = $row['email'];
		@$dbname = $row['name'];
		@$dbdesc = $row['description'];
		@$q1 = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `email`='$dbemail'");
		while (@$row1 = mysqli_fetch_assoc(@$q1))
		{
			@$url = 'uploaded_photos/'.$row1['name'];
		}
		echo "
		<div class='card mb-3' style='max-width: 2000px;'>
	        <div class='row no-gutters'>
	            <div class='col-md-4'>";
	    echo "
	              <img src='".$url."' class='card-img' alt='...' height='100%'>
            	</div>
            <div class='col-md-8'>
            <div class='card-body'>
                    <h5 class='card-title'>".$dbname."</h5>
                    <p class='card-text'>".$dbdesc."</p>
                    <br><br><br>
                    <form action='Education_1.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='".$length."' value='Donate'>
                    </form>
            </div>
          	</div>
        </div>
    </div>";
	}
}
if($submit3)
{
	echo "
	        <li class='breadcrumb-item'><a href='#'>Food Distribution</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <center>
        <h3 style='font-family: 'Times New Roman', Times, serif; color: tomato;'> We Rise by Lifting Others. </h3>
    </center>
    <br>
    <br>
";
	@$length = 0;
	@$value = 'Food Distribution';
	@$q = mysqli_query($connect , "SELECT * FROM `ngo_details` WHERE `type` = '$value'");
	while(@$row = mysqli_fetch_assoc(@$q))
	{
		$length = $length + 1;
		@$dbemail = $row['email'];
		@$dbname = $row['name'];
		@$dbdesc = $row['description'];
		@$q1 = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `email`='$dbemail'");
		while (@$row1 = mysqli_fetch_assoc(@$q1))
		{
			@$url = 'uploaded_photos/'.$row1['name'];
		}
		echo "
		<div class='card mb-3' style='max-width: 2000px;'>
	        <div class='row no-gutters'>
	            <div class='col-md-4'>";
	    echo "
	              <img src='".$url."' class='card-img' alt='...' height='100%'>
            	</div>
            <div class='col-md-8'>
            <div class='card-body'>
                    <h5 class='card-title'>".$dbname."</h5>
                    <p class='card-text'>".$dbdesc."</p>
                    <br><br><br>
                    <form action='Food_distribution_1.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='".$length."' value='Donate'>
                    </form>
            </div>
          	</div>
        </div>
    </div>";
	}
}
if($submit4)
{
	echo "
	        <li class='breadcrumb-item'><a href='#'>Shelter Home</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <center>
        <h3 style='font-family: 'Times New Roman', Times, serif; color: tomato;'> We Rise by Lifting Others. </h3>
    </center>
    <br>
    <br>
";
	$length = 0;
	@$value = 'Shelter Home';
	@$q = mysqli_query($connect , "SELECT * FROM `ngo_details` WHERE `type` = '$value'");
	while(@$row = mysqli_fetch_assoc(@$q))
	{
		$length = $length + 1;
		@$dbemail = $row['email'];
		@$dbname = $row['name'];
		@$dbdesc = $row['description'];
		@$q1 = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `email`='$dbemail'");
		while (@$row1 = mysqli_fetch_assoc(@$q1))
		{
			@$url = 'uploaded_photos/'.$row1['name'];
		}
		echo "
		<div class='card mb-3' style='max-width: 2000px;'>
	        <div class='row no-gutters'>
	            <div class='col-md-4'>";
	    echo "
	              <img src='".$url."' class='card-img' alt='...' height='100%'>
            	</div>
            <div class='col-md-8'>
            <div class='card-body'>
                    <h5 class='card-title'>".$dbname."</h5>
                    <p class='card-text'>".$dbdesc."</p>
                    <br><br><br>
                    <form action='Shelter_home_1.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='".$length."' value='Donate'>
                    </form>
            </div>
          	</div>
        </div>
    </div>";
	}
}
if($submit5)
{
	echo "
	        <li class='breadcrumb-item'><a href='#'>Old Age Home</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <center>
        <h3 style='font-family: 'Times New Roman', Times, serif; color: tomato;'> We Rise by Lifting Others. </h3>
    </center>
    <br>
    <br>
";
	$length = 0;
	@$value = 'Old Age Home';
	@$q = mysqli_query($connect , "SELECT * FROM `ngo_details` WHERE `type` = '$value'");
	while(@$row = mysqli_fetch_assoc(@$q))
	{
		$length = $length + 1;
		@$dbemail = $row['email'];
		@$dbname = $row['name'];
		@$dbdesc = $row['description'];
		@$q1 = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `email`='$dbemail'");
		while (@$row1 = mysqli_fetch_assoc(@$q1))
		{
			@$url = 'uploaded_photos/'.$row1['name'];
		}
		echo "
		<div class='card mb-3' style='max-width: 2000px;'>
	        <div class='row no-gutters'>
	            <div class='col-md-4'>";
	    echo "
	              <img src='".$url."' class='card-img' alt='...' height='100%'>
            	</div>
            <div class='col-md-8'>
            <div class='card-body'>
                    <h5 class='card-title'>".$dbname."</h5>
                    <p class='card-text'>".$dbdesc."</p>
                    <br><br><br>
                    <form action='Old_age_home_1.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='".$length."' value='Donate'>
                    </form>
            </div>
          	</div>
        </div>
    </div>";
	}
}
if($submit6)
{
	echo "
	        <li class='breadcrumb-item'><a href='#'>Health Care</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <center>
        <h3 style='font-family: 'Times New Roman', Times, serif; color: tomato;'> We Rise by Lifting Others. </h3>
    </center>
    <br>
    <br>
";
	$length = 0;
	@$value = 'Health Care';
	@$q = mysqli_query($connect , "SELECT * FROM `ngo_details` WHERE `type` = '$value'");
	while(@$row = mysqli_fetch_assoc(@$q))
	{
		$length = $length + 1;
		@$dbemail = $row['email'];
		@$dbname = $row['name'];
		@$dbdesc = $row['description'];
		@$q1 = mysqli_query($connect,"SELECT `name` FROM `ngo_image` WHERE `email`='$dbemail'");
		while (@$row1 = mysqli_fetch_assoc(@$q1))
		{
			@$url = 'uploaded_photos/'.$row1['name'];
		}
		echo "
		<div class='card mb-3' style='max-width: 2000px;'>
	        <div class='row no-gutters'>
	            <div class='col-md-4'>";
	    echo "
	              <img src='".$url."' class='card-img' alt='...' height='100%'>
            	</div>
            <div class='col-md-8'>
            <div class='card-body'>
                    <h5 class='card-title'>".$dbname."</h5>
                    <p class='card-text'>".$dbdesc."</p>
                    <br><br><br>
                    <form action='Health_care_1.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='".$length."' value='Donate'>
                    </form>
            </div>
          	</div>
        </div>
    </div>";
	}
}


?>