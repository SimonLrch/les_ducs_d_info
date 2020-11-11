<?php$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$id = $_GET["id"];

    //Création de variable
    $idsReceveurs = [];
    $nb_Don_pers = [];
    $noms_Receveurs = [];
    $fonctions_Receveurs = [];
    $nomDonneur = '';
    $fonctionDonneur = '';
    $id_dons = [];
    $nombre_don = 0;
    $lieux = [];
    $nb_Don_lieux = [];
    $dates = [];
    $nb_Don_dates = [];

    //Requête , les différentes dates
    $req = $db->query("SELECT * FROM don where date = '.$calendrier.'");
    while ($row= $req->fetch())
    {
        array_push($dates,$row['dateD']);
    }

?>

<!Doctype html>

<html>

<head>


    
</head>
    
<body>

    <label for="start">Calendrier:</label>
    <form method="post" action="DonSelonChronologie.php">
        <input type="date" id="start" name="calendrier"
               value="1400-01-01"
               min="1400-01-01" max="1600-12-31">
        <input  type="submit" id="insere" name="insereDon">
    </form>
    <?php
        $calendrier = $_POST['calendrier'];

    ?>
</body>

</html>