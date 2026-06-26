<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- en-tete technique-->
<head>
<title>Formulaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="Grégoire Maréchal">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>

<!--corps-->
<body>
<h1>Création de compte</h1>
<?php
// recuperation des variables du formulaire par le tableau associatif $_POST
$email = $_POST["email"];
$categorie = $_POST["categorie"];
$abonnement = $_POST["abonnement"];

	echo "<p>Création d'un compte pour l'adresse $email</p>";
	echo "<p>Catégorie d'emploi : $categorie</p>";
	echo "<p>Abonnement à la lettre d'information : $abonnement</p>";
?>

</body>
</html>
