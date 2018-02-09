<?php
include ("./include/formulaire.php");
$db=connectionPDO();

if(isset($_POST['formulaire'])){
    $tabErreur = array();
    $titre=$_POST['titre'];
    $realisateur=$_POST['real'];
    $annee=$_POST['year'];
    $genre=$_POST['genre'];


    if($_POST['titre'] == " "){
        array_push($tabErreur,"Veuillez saisir un titre de film");
    }
    if($_POST['real']== " "){
        array_push($tabErreur,"Veuillez saisir un nom de realisateur");
    }
    if($_POST['year']== 0){
        array_push($tabErreur,"Veuillez rentrer une date");
    }
    if($_POST['genre']== " "){
        array_push($tabErreur,"Veuillez saisir un genre de film");
    }






}
?>