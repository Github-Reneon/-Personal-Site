<?php 
	$files = glob("content/*", GLOB_BRACE);
	
	$size = 10;

	if ($size > count($files)) {
		$size = count($files);
	}
	
	if ($size <> 0) {
		echo "<br>";
		echo "<h1>Example Posts</h1>";
		echo "<table style=\"width:100%\" class=\"table table-dark table-striped\">";
		echo "<tr> <th>Name</th> <th>Link</th> </tr>";
		for($i = 0; $i < count($files); ++$i) {
			$fileinfo = pathinfo($files[$i]);
			echo "<tr>";
			echo "<td>" . "&#9989 " . $fileinfo['filename'] . "</td>";
			echo "<td>" . "<a href=\"post.php?content=" . $fileinfo['filename'] . "\">". "link" . "</a>" . "</td>"; 
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "I've not made an editorial yet. Come back soon!";
	}
?>
