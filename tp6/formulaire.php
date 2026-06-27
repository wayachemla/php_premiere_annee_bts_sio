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
<h1>Concours international de Miss</h1>
<p>Pré-selection</p>

<!-- Debut du formulaire -->
<form name="formulaire1" action="traitement.php" method="post" enctype='application/x-www-form-urlencoded'>

<!-- Zones de Texte -->
<fieldset>  
      	<h4>Veuillez indiquer les scores des candidates</h4>
<?php
// boucle qui genere les 10 champs au lieu de les ecrire 10 fois
for($i=0;$i<10;$i=$i+1)
{
	$numerocandidate=$i+1 ;
	echo "<label>Miss n° $numerocandidate</label><input name='candidates[]' type='text'/>";
}
?>

</fieldset>
<!-- Bouton de validation ; la classe "envoi" sert pour la mise en page -->
<div class="envoi">
	<input type="submit" class="envoi" value="Envoyer" />
</div>
<!-- fin du formulaire -->
</form>
</body>
</html>
