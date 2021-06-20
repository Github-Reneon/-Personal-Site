<?php
	include 'connectsql.php';

	$accepting = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}	
		
	$sql = "select count(username) from users where username=?";

	$stmnt = $db_handle->prepare($sql);

	$stmnt->bind_param("s", $username);

	$stmnt->execute();

	$result = $stmnt->get_result();

	$val = mysqli_fetch_assoc($result);	

	$count = (string) $val['count(username)'];
	

	if ($accepting){
		if (strlen($username) < 4) {
			header("Location: https://andrewlovick.com/signup.php?err=Username too short! Please make one that is five characters or longer.");	
		}
		else {
			if (strlen($password) < 6) {
				header("Location: https://andrewlovick.com/signup.php?err=Password too short! Please make one that is seven characters or longer.");	
			}
			else 
			{

				if ($count !== "0") {
					header("Location: https://andrewlovick.com/signup.php?err=Username already exists!");	
				}
				else
				{

					$sql = "insert into users (username, password) values (?,?)";

					$stmnt = $db_handle->prepare($sql);

					$hashed_pass = password_hash($password, PASSWORD_DEFAULT);

					$stmnt->bind_param("ss", $username, $hashed_pass);

					if ($stmnt->execute())
					{
						include 'closesql.php';
						header("Location: https://andrewlovick.com/signup.php?sub=Success!");
					} else {
						echo $stmnt->error;
					}
				}

			}
		}
	} else {
		header ("Location: https://andrewlovick.com/signup.php?err=Not accepting new users. Please try again later.");
	}
?>
