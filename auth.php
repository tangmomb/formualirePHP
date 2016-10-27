<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>page avec php</title>
  <link rel="stylesheet" href="style.css">
  </head>
<body>
	<?php 
	$login="eric";
	$pwd="cire";
	
	if($login == $_POST['pseudo'] && $pwd == $_POST["password"] )
	{ {
			echo "bienvenue";
		} else {
			echo "nope";
		} } else {
	echo "mais y'a r";
		}
	?>
</body>
</html>