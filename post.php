<html>
	<?php include 'header.php' ?>
	<?php include 'connectsql.php' ?>
	<body>
		<?php 
			$content = $_GET['id'];
			if ($content == ""){
				header("Location: https://andrewlovick.com/error.php?err=404");
			}
			if (is_numeric($content) <> true) {
				header("Location: https://andrewlovick.com/error.php?err=Nice try");
			}	
			$sql = "select title, content from posts where id = " . $content;
			$result = mysqli_query($db_handle, $sql);
			$row = mysqli_fetch_assoc($result);
		?>
		<div class="content">
			<header class="sticky-top" style="background: #3c3c3c;">	
				<br>
				<h1><?php echo $row['title'] ?></h1>
				<HR>
			</header>
			<main class="container-md">
				<div class="row">
					<div style="text-align: left;">
						<div class="col" style="hyphens: auto;">
							<?php echo $row['content'] ?>
						</div>
						<HR>
					</div>
					<?php include 'footer.php' ?>
					<?php include 'closesql.php' ?>
				</div>
			</main>
		</div>
	</body>
</html>
