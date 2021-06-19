<?php
	$conndeetsfile = '/usr/local/share/conndeets';
	if (file_exists($conndeetsfile)){
		$data = file_get_contents($conndeetsfile);
		$data = trim($data);
		$info = explode(',', $data, 3);
	} else {
		header('Location: https://andrewlovick.com/error.php?err=Database Not Working');
	}	
	$db_handle = mysqli_connect($info[0], $info[1], $info[2]);
	if (mysqli_connect_errno()){
		header('Location: https://andrewlovick.com/error.php?err=Database Not Working');
	}
	$database = "personal_site";
	$db_found = mysqli_select_db($db_handle, $database);
	if ($db_found <> true) {
		header('Location: https://andrewlovick.com/error.php?err=Database Not Working');
	}
?>
