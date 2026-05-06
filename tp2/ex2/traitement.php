<?php
$age = $_POST["age"];

if ($age >= 18) {
    echo "<h3>Félicitations, vous pouvez vous inscrire sur les listes électorales.</h3>";
} else {
    $attente = 18 - $age;
    echo "<h3>Vous êtes trop jeune. Revenez dans $attente ans !</h3>";
}
?>