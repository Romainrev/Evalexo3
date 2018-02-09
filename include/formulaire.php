<?php
include_once ("./function/ConnectionPDO.php");
$db=connectionPDO();
?>

<form method = "post" name="formulaire" action ="form.inc.php">
    <ul>

        <label for="titre" name="titre">Titre du film :</label><input type="text">
        <br>
        <label for="real" name="real">Realisateur :</label><input type="text">
        <br>
        <label for="year" name="year">Date de sortie :</label><input type="date">
        <br>
        <label for="genre" name="genre">Genre du film :</label><input type="text">
        <br>
        <label for="scenario" name="resume">Résumé :</label><input type="text">
        <br>
        <label for="annonce" name="annonce">Bande-Annonce :</label>
        <br>
        <input type="submit" value="Valider" name="valider">
    </ul>


</form>
