<?php 

	include 'connectsql.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$username = $_POST['username'];
		$password = $_POST['password'];
	} else {
		header("Location: https://andrewlovick.com/error.php?err=403");
	}

	$sql = "select count(username) from users where username=?";

	$stmnt = $db_handle->prepare($sql);

	$stmnt->bind_param("s", $username);

	$stmnt->execute();

	$result = $stmnt->get_result();

	$vals = mysqli_fetch_assoc($result);

	$count = $vals['count(username)'];
	
	if ($count != "1") {
		header("Location: https://andrewlovick.com/newpost.php?err=Incorrect username. ");
	}
	else {

		$sql = "select id, password from users where username=?";
		
		$stmnt = $db_handle->prepare($sql);

		$stmnt->bind_param("s", $username);

		$stmnt->execute();

		$result = $stmnt->get_result();

		$vals = mysqli_fetch_assoc($result);

		$password = trim($password);

		$hashed_pass = $vals['password'];
		
		if (strlen($title) > 3) {
			if (password_verify($password, $hashed_pass)){
				$id = $vals['id'];
				$sql = "insert into posts (author_id, title, content) values (?,?,?)";
				$stmnt = $db_handle->prepare($sql);
				$stmnt->bind_param("sss", $id, $title, $content);
				if ($stmnt->execute()) {
					include 'closesql.php';
					header("Location: https://andrewlovick.com/newpost.php?sub=Success!");		
				} else {
					echo $stmnt->error;
				}
			} else {
				header("Location: https://andrewlovick.com/newpost.php?err=Incorrect password.");
			}
		} else {
			header("Location: https://andrewlovick.com/newpost.php?err=Title too short.");
		}
	}
?>
