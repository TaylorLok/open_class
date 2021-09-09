<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <br>
            <br>
            <?php echo "Celle-ci a été écrite entièrement en <b>\"PHP\"</b>."; ?>

            <br>

            <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y H:i:s'); ?>.</p>
        </p>
    </body>

    <?php 
    	$age_du_visiteur = 23;
    	$nom_du_visiteur = "Taylor";

   	 	echo "My name is <b>$nom_du_visiteur</b>, i am <b>$age_du_visiteur</b> and will never stop learning." .'<br>';

   	 	echo'<br>';

   	 	echo $nom_du_visiteur . 'Le visiteur a ' . $age_du_visiteur . ' ans';


   	 	echo'<br>';
    ?>
</html>
