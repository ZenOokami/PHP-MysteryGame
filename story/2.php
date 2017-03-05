<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

    <?php
    $_SESSION["choice_made"] = $_POST["choice"];
    //echo $_SESSION["choice_made"];
	
	
	if($_SESSION["choice_made"] == "smoke"){
		$_SESSION["hp"] -= 5;
		print("<p>
			*Detective lights up*
			<br>
			Nothing like a smoke when it’s when raining.
		</p>");
	}else{
		print("<p>
			*Detective reluctantly consumes a piece of gum*
			<br>
			Not as great as smoking in the rain, but it beats having my lungs feel like I’m 75 years old...
		</p>");
	}
	
	print("
		<p>
			I’d made it up to my office. Lights on, I could see my assistant Wagner trying his hardest to fit an important role as I watched the silhouettes move as they converse. He’s simply paid to answer the phone… but I guess keeping clients preoccupied is a plus. 
			<br>
			Perhaps I should give him a Pay Raise...:
		</p>
	");
	
    ?>
	
	<form action="3.php" method="post">
		<input type="radio" name="choice" value="raise"><b>Give Raise</b>
		<input type="radio" name="choice" value="noRaise"><b>Don't Give raise</b>
		<br>
		<input type="submit">
		
	</form>
	<br>
	<table>
		<tr>
			<td><b>Health:</b><?php echo $_SESSION["hp"] ?></td>
			<td><b>Stamina:</b><?php echo $_SESSION["stamina"] ?></td>
			<td><b>Money:</b><?php echo $_SESSION["money"] ?></td>
		</tr>
	</table>
</body>

</html>
