<?php
session_start();
?>

<!DOCTYPE html> 
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<title></title>
</head>

<body>
	<?php
	$_SESSION["choice_made"] = $_POST["choice"];
	
	if($_SESSION["choice_made"] == "raise"){
		print("<p>
		Nah - Wagner still owes me for that <i><b>bowling</b></i> fiasco.
		</p>");
	}else{
		print("<p>
		Not until he pays me back for that bowling fiasco…
		</p>");
	}
	
	print("
		<p>
			I open the door slowly - giving everyone in the room a chance to notice that I’ve arrived. 
			<br>
			It works… a crying woman stares at me - eyes piercing my soul as if I’m the one who has caused her whatever caused her current emotional state.
			<br>
			She shouts at me for being late as the tears leave tracks running down her face. Sad. 
			<br>
			However, I’m not an emotional person - I remind her that I came despite it being past my hours of operations, in the rain… 
			<br>
			Wagner shoots me one hell of a glance.
			<br>
			I sit down and listen to her tale.
			<br>
			She’d gotten worried not hearing from her son for 5 days… that was about 2 weeks ago. 
			A college kid, sophomore, computer science web programmer. Apparently the university says he’s doing some specialized work for the staff before up and vanishing - they’ve been fully cooperative in the investigation started by officers, but by week 2 they seemed to simply stop searching.
			<br>
			Officers searched his dorm, the roommate was reluctant to speak about anything - he was taken in for questioning but let go when they found nothing strange about him to the case. He was later relocated to a different dorm room as to not allow tampering of evidence at the crime scene.
			<br>
			The mother’s last bit of information on the case was that she noticed a date circled on the calendar… it was the day that he was last seen. 
			<br>
			Based on the information I had 3 possible locations to start after I perform a quick look around my office to prepare:
			<br>
		</P>
	");
	
	?>
	
	<form action="4.php" method="post">
		<input type="radio" name="choice" value="csDepartment"><b>Visit the Head of the CS Department</b>
		<input type="radio" name="choice" value="roommate"><b>Visit the relocated roommate</b>
		<input type="radio" name="choice" value="crimeScene"><b>Visit the Crime Scene</b>
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

<footer>

</footer>


</html>