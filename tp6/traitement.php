<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
<!-- en-tete technique-->
<head>
<title>Formulaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>

<!--corps-->
<body>
<h1>Récapitulatif des scores</h1>
<?php
// recuperation des variables du formulaire par le tableau associatif $_POST
$candidates=array();  // les "checkbox" sont un tableau, "array" en anglais
$candidates=$_POST["candidates"];


for($i=0;$i<10;$i=$i+1)
{
	$numerocandidate=$i+1 ; // rappel : le numéro est décalé de 1 par rapport à l'indice qui commence à zéro
	echo "<p>Score candidate numéro $numerocandidate : $candidates[$i]</p>";  

}


?>


</body>
</html>
