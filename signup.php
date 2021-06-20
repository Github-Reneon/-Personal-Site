<html>
	<?php include 'header.php' ?>
	<?php include 'connectsql.php' ?>
	<body>
		<div> 
			<header class="content">
				<br>
				<h1>Signup</h1>
				<HR>
			</header>
			<div class="container">
				<div class="row">
					<?php 
						$err = $_GET['err'];
						if ($err <> "") {
							echo "<div class=\"alert alert-danger\" role=\"alert\">" . $err . "</div>";
						} 
						$sub = $_GET['sub'];
						if ($sub <> "") {
							echo "<div class=\"alert alert-success\" role=\"alert\">" . $sub . "</div>";
						}
					?>
					<form action="submitsignup.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="height: 100%; width: 100px; align-items: flex-start;">Username</span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="Username"> 
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" style="height: 100%; width: 100px; align-items: flex-start;">Content</span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<br>
						<input type="submit" class="btn btn-dark">
					</form>
				</div>
			</div>
		</div>
	</body>
	<?php include 'closesql.php' ?>
</html>
