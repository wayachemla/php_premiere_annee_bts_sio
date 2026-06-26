<html>
<!-- en-tete technique-->
<head>
<title>Coiffeur</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Calcul des frais de coiffeur</h4>



<?php
/* récupération des données postées dans le formulaire */
$couleur = $_POST["couleur"];
$soin = $_POST["soin"];

/* calcul du prix total */
$prix = 40; // tarif de base : coupe + brushing

if($couleur == "oui")
{
	$prix = $prix + 30;
}

if($soin == "oui")
{
	$prix = $prix + 10;
}

echo "<p>Le prix total à payer est : " . $prix . " €</p>";
?>


</body>
</html>
