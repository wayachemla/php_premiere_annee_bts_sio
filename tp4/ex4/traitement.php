<html>
<!-- en-tete technique-->
<head>
<title>Hôtel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Calcul des frais de réservation</h4>



<?php
/* récupération des données postées dans le formulaire */
$nuits = $_POST["nuits"];
$personnes = $_POST["personnes"];
$petitdej = $_POST["petitdej"];

/* calcul du prix total */
$prix = $nuits * 50; // tarif de base : 50 € la nuit

if($petitdej == "oui")
{
	$prix = $prix + ($nuits * $personnes * 7);
}

echo "<p>Le prix total à payer est : " . $prix . " €</p>";
?>


</body>
</html>
