<?php
session_start();
@$connect = mysqli_connect("localhost","root","","charity") or die("couldn't connect!");
@$t = 'Old Age Home';
@$q = mysqli_query($connect,"SELECT * FROM `ngo_details` WHERE `type`='$t' AND `Permission`='0'");
@$length = 1; 

while (@$row = mysqli_fetch_assoc($q))
{
	if(isset($_POST["".$length.""]))
	{
		@$email = $row['email'];
		@$q1 = mysqli_query($connect,"UPDATE `ngo_details` SET `approve` = '1' WHERE `ngo_details`.`email` = '$email'");
		echo "
		<script>
			location = 'median.php';
		</script>";
	}
				@$length = @$length + 1;
}
?>