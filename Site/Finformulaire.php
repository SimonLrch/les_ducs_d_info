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
        <section class="inner-box">
            <form method="POST" action="Finformulaire.php">
                <div class="global-form">
                    <div class="form-step active-step">
                        <span><?php echo $_SESSION['ajout']?></span>
                        <span><?php if(isset($error)) {echo $error;} ?></span>
                        <div class="container-btn-form">
                            <button type="submit" name="FinF">Page principale</button>
                            <button type="submit" name="FinF">Rajouter un don</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <?php include'include/mainFooter.php'?>
</body>
</html>