<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <?php

  $_SESSION["detective_name"] = $_POST["detective"];
  // echo $_SESSION["detective_name"];

  print("<p> My name is " .$_SESSION["detective_name"].
  ". This is the story on how I solved a missing person's case.

  It was a stormy night as I walked to my office… had received a notification that some poor soul needed help and that apparently the police weren’t being much help. Not surprised when it comes to this city...

  This walk feels like it’s taking forever, I stop to think what it is that I want to make this trip more bearable:
  </p>");

   ?>

   <form action="2.php" method="post">
     <input type="radio" name="choice" value="smoke">Smokes
     <input type="radio" name="choice" value="gum">Chewing Gum
     <br>
     <input type="submit">
   </form>
</body>

<footer>
</footer>

</html>
