<?php
		@$submit1 = $_POST['submit1'];
		if(@$submit1)
		{
			@$q1 = mysqli_query($connect , "DELETE FROM `donor_reg` WHERE `donor_reg`.`email` = '$email'");
			echo "<script>
				alert('User Blocked..');
				location = 'block_donor_1.php';
			</script>";
		}
?>