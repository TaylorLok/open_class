<?php
$age = 30;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}

else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";

echo '<br>';

$autorisation_entrer = "Non";

if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    echo "Salut ! Bienvenue sur mon site !<br />";
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir <br />";
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}

echo '<br>';

$autorisation_entrer = false;

if($autorisation_entrer == true)
{
	echo "You are welcome";
}
elseif(! $autorisation_entrer)
{
	echo "Get out of here thief!";
}

echo '<br>';

$age = 8;
$langue = "français";

if ($age <= 12 AND $langue == "français")
{
    echo "Bienvenue sur mon site !";
}
elseif ($age <= 12 AND $langue == "anglais")
{
    echo "Welcome to my website! <br />";
}

echo '<br>';

$pays = "Germany";

if ($pays == "France" OR $pays == "Belgique")
{
    echo "Bienvenue !";
}
else
{
    echo "Désolés, notre service n'est pas encore disponible dans votre pays !";
}

echo '<br>';


$variable = 23;

if ($variable == 23)
{
    echo '<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !';
}


echo '<br>';

//same as above

$variable = 23;

if ($variable == 23)

{?><strong>Bravo !</strong> Vous avez trouvé le nombre mystère !<?php }


echo '<br>';

//switch

$rand = 15;

switch ($rand) {
	case '0':
		echo 'You have just a null number' ;
		break;

	case '15':
		echo'Please load more';
		break;

	case '0':
		echo'Perfect!!!!!!!! welcome';
		break;

	default:
		echo' Shame on you ! why are you here? ';
		break;
}

echo '<br>';

//ternary condition

$flat = 24;

$house = ($flat >= 18) ? true : false;

echo $house;

//similar to the above
$age = 24;

if ($age >= 18)
{
	$majeur = true;
}
else
{
	$majeur = false;
}

echo '<br>';

for ($ligne = 1 ; $ligne <= 100 ; $ligne++)
{
    if ($ligne % 2 == 0)
    {
        echo $ligne . ' : <strong>ligne paire</strong>';
    }
    else
    {
        echo $ligne . ' : <em>ligne impaire</em>';
    }
    
    echo '<br />';
}

?>