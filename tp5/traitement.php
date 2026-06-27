<html>
<!-- en-tete technique-->
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Exemple de formulaire">
	<meta name="keywords" lang="fr" content="html,formulaire,boutons">
	<meta name="Author" content="">
	<!-- appel de la feuille de style externe -->
	 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
<h4>Billet Train</h4>

<?php
/* récupération des données postées dans le formulaire */

$classe=$_POST["classe"] ; 
$periode=$_POST["periode"] ;
$type_billet=$_POST["type_billet"] ;
$age=$_POST["age"] ;
$prix=0 ; // initialisation à zéro

// calcul du prix de l'aller simple en fonction de la classe et de la période
if($classe == 1)
{
	if($periode == 'bleue')
	{
		$prix = 200;
	}
	else 
	{
			if($periode == 'blanche')
			{
				$prix = 250;
			}
			else  // ni bleue ni blanche donc rouge
			{
				$prix = 300;
			}
	}
}
else // $classe ne vaut pas 1, donc 2
{
	if($periode == 'bleue')
	{
		$prix = 150;
	}
	else 
	{
			if($periode == 'blanche')
			{
				$prix = 180;
			}
			else  // ni bleue ni blanche donc rouge
			{
				$prix = 200;
			}
	}
}

// si aller-retour, prix x2
if($type_billet == 'retour')
{
	$prix = $prix * 2;
}

// réductions non cumulables : priorité à la réduction senior
if($age == 'senior')
{
	$prix = $prix * 0.8; // 20% de réduction
}
else
{
	// réduction aller-retour, sauf période rouge
	if($type_billet == 'retour' AND $periode != 'rouge')
	{
		$prix = $prix * 0.9; // 10% de réduction
	}
}

echo "Prix à payer pour votre billet en classe $classe en période $periode : $prix €";

?>

</body>
</html>
