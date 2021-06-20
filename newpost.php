<html>
	<?php include 'header.php' ?>
	<?php include 'connectsql.php' ?>
	<body>
		<div> 
			<header class="content">
				<br>
				<h1>New Post</h1>
				<HR>
			</header>
			<?php
				$err = $_GET['err'];
				if ($err <> "") {
					echo $err;
				}
				$sub = $_GET['sub'];
				if ($sub <> "") {
					echo $sub;
				}
			?>
			<div class="container">
				<div class="row">
					<form action="submitpost.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="height: 100%; width: 100px; align-items: flex-start;">Username</span>
							</div>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="height: 100%; width: 100px; align-items: flex-start;">Password</span>
							</div>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="height: 100%; width: 100px; align-items: flex-start;">Title</span>
							</div>
							<input type="text" name="title" class="form-control" placeholder="Give it a descriptive name"> 
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" style="height: 100%; width: 100px; align-items: flex-start;">Content</span>
							</div>
							<textarea name="content" class="form-control"></textarea>
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
