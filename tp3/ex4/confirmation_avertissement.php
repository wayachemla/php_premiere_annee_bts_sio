<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- en-tete technique-->
<head>
<title>Confirmation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>

<!--corps-->
<body>
<h1>Confirmation</h1>
<?php
// recuperation des variables
$marque = $_POST["marque"];
$modele = $_POST["modele"];
$avertissement = $_POST["avertissement"];

if ($avertissement == "oui") {
	echo "<p>Vous serez averti lorsque le modèle $modele de la marque $marque sera disponible</p>";
} else {
	echo "<p>Vous avez choisi de ne pas être averti.</p>";
}
?>

</body>
</html>
