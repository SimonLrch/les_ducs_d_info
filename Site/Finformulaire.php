<style>
input  {
    color:white;
    background-color:black;
}
input:hover{
    background-color:white;
    color:black;
}
</style>
<?php
    if(isset($_POST['FinF']))
    {
        if($_POST['FinF']=="Retourner à la page principale")
        {
            header("Location:index.php");
        }
        if($_POST['FinF']=="Rajouter un don")
        {
            header("Location:donation-submission.php");
        }
        unset($_POST['FinF']);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mainStyle.css">
    <script defer src="script/mainScript.js"></script>
</head>
<body>
    <?php 
        session_start(); 
        include('include/mainHeader.php'); 
    ?>
    <main class="container-main">
    <p><?php echo $_SESSION['ajout']?></p>
    <form method="POST" action="Finformulaire.php">
        <input type="submit" name="FinF" value ="Retourner à la page principale">
        <input type="submit" name="FinF" value ="Rajouter un don">
    </form>
    </main>
    <?php include'include/mainFooter.php'?>
</body>
</html>