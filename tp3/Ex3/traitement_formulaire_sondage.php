<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<?php
// recuperation des variables du formulaire par le tableau associatif $_POST
$accord = $_POST["accord"];
?>

<html>
<head>
<title>Resultat du sondage</title>
 <meta NAME="Author" CONTENT="">
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
  <!-- appel feuille de style -->
 <link href="style_1.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<?php
	if (empty($accord)) {
		echo "<br><br>Erreur : vous n'avez pas coché de réponse.";
	} else {
		echo "<br><br>Resultat du sondage : D'accord ? ".$accord;
	}
?>
</body>
</html>
