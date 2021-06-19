<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" >
	</head>
	<body>
		<div class="content">
			<main class="container-sm">
				<br>
				<br>
				<br>
				<?php 
					$error = $_GET['err'];
					if ($error == '')
						$error = 'Unspecified';
					echo '<h1>Error: ' . $error . '</h1>';
				?>
				<HR>
				<img src="pix/blue-marvel.png" class="img-fluid rounded"> 
				<HR>
				<p>Try again next time...</p>
			</main>
		</div>
	</body>
</html>
