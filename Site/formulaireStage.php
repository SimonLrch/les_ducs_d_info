<?php
    // On commence par récupérer les champs
    if(isset($_POST['date']))      $date=$_POST['date'];
    else      $date= null;

    if(isset($_POST['heure']))      $heure=$_POST['heure'];
    else      $heure= null;

    if(isset($_POST['tarif']))      $tarif=$_POST['tarif'];
    else      $tarif="";

    // connexion à la base
    $db = mysqli_connect('localhost', 'root', '') or die('Erreur de connexion ' . mysqli_error());

    // sélection de la base
    mysqli_select_db($db,'golf') or die('Erreur de selection ' . mysqli_error());

    // on écrit la requête sql
    $sql = "INSERT INTO stage(date_debut, heure_debut, tarif_stage) VALUES('$date','$heure','$tarif')";

    // on insère les informations du formulaire dans la table
    mysqli_query($db, $sql) or die('Erreur SQL !' . $sql . '<br>' . mysqli_error());

    // on affiche le résultat pour le visiteur
    echo 'Les Stages ont bien été mis à jours';

    mysqli_close($db);  // on ferme la connexion

echo '
<!DOCTYPE html>
<html lang="fr">
    <body>
        <a href="./InterfaceformulaireStage.html">Revenir au Formulaire</a>

    </body>

</html>
';

