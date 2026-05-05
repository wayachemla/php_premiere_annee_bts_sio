<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Calcul d'un total TTC</h4>

<?php
/* rcupration des donnes postes dans le formulaire */
$produit1=$_POST["produit1"];
$produit2=$_POST["produit2"];
$taxes=$_POST["taxes"];
/* affichage du total */

echo "<p>Produit 1 : $produit1</p>";
echo "<p>Produit 2 : $produit2</p>";
echo "<p>Taxes : $taxes</p>";
echo "<p>Taux TVA: 20%</p>";

$montantht=$produit1 + $produit2;
$montanttc=$montantht * (1 + 0.20);
echo "<p>Montant à payer : $montanttc</p>";

?>
</body>
</html>
