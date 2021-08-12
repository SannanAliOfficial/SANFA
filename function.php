<?php

function check_login($database)
{

	if(isset($_SESSION['Account_number']))
	{

		$id = $_SESSION['Account_number'];
		$query = "select * from users where Account_number = '$id' limit 1";

		$result = mysqli_query($database,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
?>