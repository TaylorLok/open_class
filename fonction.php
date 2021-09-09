<?php
	$phrase = 'Bonjour tout le monde ! Je suis une phrase ! <br />';

	$longueur = strlen($phrase);
	 
	 
	echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase . '<br />';

	$ma_variable = str_replace('b', 'p', 'baba bebe bobo');
 
	echo $ma_variable . '<br />';

	echo '<br>';

	$chaine = 'Cette chaîne va être mélangée !';
	$chaine = str_shuffle($chaine);
 
	echo $chaine . '<br />';

	echo '<br>';

	$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
	$chaine = strtolower($chaine);
 
	echo $chaine . '<br />';

	echo '<br>';

	// Enregistrons les informations de date dans des variables

	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');

	$heure = date('H');
	$minute = date('i');

	// Maintenant on peut afficher ce qu'on a recueilli
	echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute . '<br />';

	echo '<br>';

	function DireBonjour($nom)
	{
	    echo 'Bonjour ' . $nom . ' !<br />';
	}

	DireBonjour('Taylor');
	DireBonjour('Patrice');
	DireBonjour('Edouard');
	DireBonjour('Pascale');
	DireBonjour('François');
	DireBonjour('Benoît');
	DireBonjour('Père Noël') . '<br />';

	echo '<br>';

	// Ci-dessous, la fonction qui calcule le volume du cône
	function VolumeCone($rayon, $hauteur)
	{
	   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
	   return $volume; // indique la valeur à renvoyer, ici le volume
	}

	$volume = VolumeCone(3, 1);
	echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
?>