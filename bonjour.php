<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>LEARNING URL</title>

		<?php include("inclure/entete.php"); ?>
	</head>
		<?php include("inclure/menu.php"); ?>
	<body>

		<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles 
			<script type="text/javascript">alert('Taylor')</script> !
		</p>

		<p>
    		Cette page ne contient que du HTML.<br />
    		Veuillez taper votre prénom :
		</p>

		<form action="cible.php" method="post">
			<p>
			    <input type="text" name="prenom" />
			    <input type="submit" value="Valider" />
			</p>
		</form>

		
	</body>

	<?php include("inclure/pied_de_page.php"); ?>

</html>