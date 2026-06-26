<html>
<!-- en-tete technique-->
<head>
<title>DAB</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Contrôle de l'âge</h4>



<?php
/* récupération des données postées dans le formulaire */
$age=$_POST["age"];

if($age >= 18)
{
	echo "<p>Vous pouvez vous inscrire</p>";
}
else // ceci est le cas où la personne est mineure
{
	echo "<p>Vous ne pouvez pas vous inscrire</p>";
}
?>


</body>
</html>
