<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Confirmation de commande</h4>

<?php
/* récupération des données postées dans le formulaire */
$nom=$_POST["nom"]; #il récupère la valeur du formulaire avec $_POST["nom"]; et il la conserve dans la variable $nom
if (empty($nom)){
    die ("erreur vous n'avez pas saisie $nom dans le champ");
}

$adresse=$_POST["adresse"]; #il récupère la valeur du formulaire avec $_POST["adresse"]; et il la conserve dans la variable $adresse
$codepostal=$_POST["codepostal"]; #il récupère la valeur du formulaire avec $_POST["codepostal"]; et il la conserve dans la variable $codepostal
$ville=$_POST["ville"]; #il récupère la valeur du formulaire avec $_POST["ville"]; et il la conserve dans la variable $ville

/* affichage de l'adresse */
echo "<p>Cher $nom</p>";
echo "<p>Votre colis sera livré à l'adresse : $adresse $codepostal $ville</p>";
?>
</body>
</html>