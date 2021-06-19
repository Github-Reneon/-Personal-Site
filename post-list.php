<html>
	<?php include 'header.php' ?>
	<?php include 'connectsql.php' ?>
	<body>
		<div class="content">
			<header>
				<br>
				<h1>Posts</h1>
				<HR>
			</header>
			<main class="container-md">
				<div class="row">
				<?php
					$sql = "select posts.id, username, title  from posts inner join users on posts.author_id = users.id limit 100";
					$result = mysqli_query($db_handle, $sql);
					echo "<table class=\"table table-dark table-striped\">";
					echo "<tr><th>Title</th><th>Author</th><th>Link</th>";
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . "&#10095 " . $row['title'] . "</td>";
						echo "<td>" . $row['username'] . "</td>";
						echo "<td>" . "<a href=\"https://andrewlovick.com/post.php?id=" . $row['id'] . "\">click</a>"  . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				?>
				</div>
				<div class="row">
					<HR>
					<?php include 'footer.php'; ?>
					<?php include 'closesql.php'; ?>
				</div>
			</main>
		</div>
	</body>
</html>
