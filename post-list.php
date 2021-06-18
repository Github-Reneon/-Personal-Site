<html>
	<?php include 'header.php' ?>
	<body>
		<div class="content">
			<header>
				<br>
				<h1>Posts</h1>
				<HR>
			</header>
			<main class="container-md">
				<div class="row">
					<?php include 'footer.php'; ?>
					<HR>
				</div>
				<div class="row">
				<?php
					$files = glob("content/*", GLOB_BRACE);
					if (count($files) > 0) {
						echo "<table class=\"table table-dark table-striped\">";
						for($i = 0; $i < count($files); ++$i) {
							echo "<tr> ";
							$fileinfo = pathinfo($files[$i]);
							echo "<td>" . "&#9989 " . $fileinfo['filename'] . "</td>";
							echo "<td>" . "<a href=\"post.php?content=" . $fileinfo['filename'] . "\">" . "link" . "</a>" . "</td>";
							echo "</tr>";
						}	
						echo "</table>";
					}
				?>
				</div>
				<div class="row">
					<HR>
					<?php include 'footer.php'; ?>
				</div>
			</main>
		</div>
	</body>
</html>
