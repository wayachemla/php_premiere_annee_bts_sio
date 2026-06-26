<html>
<head>
<title>DAB</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Contrôle du code secret</h4>

<?php
/* récupération des données postées dans le formulaire */
$codesecret = $_POST["codesecret"];

if ($codesecret == "1234")
{
    echo "<p>Code correct. Veuillez saisir le montant.</p>";
?>

    <!-- Formulaire montant : affiché uniquement si le code est correct -->
    <form name="retrait" action="retrait.php" method="post">
        <input type="hidden" name="codesecret" value="<?php echo $codesecret; ?>" />
        <fieldset>
            <h4>Montant du retrait</h4>
            <label>Montant : </label>
            <input name="montant" type="text" />
            <div class="envoi">
                <input type="submit" class="envoi" value="Retirer" />
            </div>
        </fieldset>
    </form>

<?php
}
else
{
    echo "<p>Code incorrect. Accès refusé.</p>";
}
?>

</body>
</html>
