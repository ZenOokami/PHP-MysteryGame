<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<div>

	</div>

	<div>
		<?php
		// Let's set some variables
		$_SESSION["story_progression"] = 0;

		?>

		<b>Hello Detective, can you give us your name?:</b><br>
		&nbsp;

		<form action="1.php" method="post">
			<input type="text" name="detective" placeholder="Please input your name">
			<input type="submit">
		</form>

	</div>

	<div>

	</div>
</body>

<footer>

</footer>

</html>
