<?php
	$nombre_de_lignes = 1;

	while ($nombre_de_lignes <= 10)
	{
	    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
	    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
	}

	$nombre_de_lignes = 1;

	while ($nombre_de_lignes <= 15)
	{
	    echo 'Ceci est la ligne n°' .  $nombre_de_lignes . ' WHILE avec concatenation' .'<br />';
	    $nombre_de_lignes++;
	}

	for ($nombre_de_lignes = 1; $nombre_de_lignes <= 20; $nombre_de_lignes++)
	{
    	echo 'Ceci est la ligne n°' . $nombre_de_lignes .  ' essaye avec de FOR boucle ou loop'. '<br />';
	}

?>