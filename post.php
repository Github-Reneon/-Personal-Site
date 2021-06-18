<html>
	<?php include 'header.php' ?>
	<body>
		<?php 
			$content = $_GET['content'];
			if ($content == ""){
				header("Location: https://andrewlovick.com/404.php");
			}
			$contentfile = glob("content/" . $content . ".*", GLOB_BRACE);
		        if (count($contentfile) <> 1){
				header("Location: https://andrewlovick.com/404.php");
			}
		?>
		<div class="content">
			<header>	
				<br>
				<h1><?php echo $content ?></h1>
				<HR>
			</header>
			<main class="container-md">
				<div class="row">
					<div style="text-align: left;">
						<?php include $contentfile[0] ?>
						<HR>
					</div>
					<?php include 'footer.php' ?>
					<?php echo '.' ?>
				</div>
			</main>
		</div>
	</body>
</html>
