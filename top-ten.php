<?php
	include 'connectsql.php';
	
	echo "<table class=\"table table-dark table-striped\">";
	
	$sql = "select posts.id, username, title from posts inner join users on posts.author_id = users.id order by id desc limit 10";
	
	$result = mysqli_query($db_handle, $sql);
	echo "<tr><th>Name</th><th>Author</th><th>Link</th>";

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . "&#10095 " . $row['title'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . "<a href=\"https://andrewlovick.com/post.php?id=" . $row['id'] . "\">click</a>"  . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	include 'closesql.php';	
?>
