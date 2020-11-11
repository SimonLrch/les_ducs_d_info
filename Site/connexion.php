<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>🚧 Connexion 🚧</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mainStyle.css">
    <script defer src="script/mainScript.js"></script>
</head>
<body>
    <?php include'include/mainHeader.php' ?>
    <main class="container-main">
        <section class="inner-box section-hero">
            <span>🚧 Connexion - Page en chantier 🚧</span>
        </section>
        <section class="inner-box">
            <form method="POST" action="formulaireConnexion.php">
                <div class="global-form">
                    <div class="form-step active-step" id="form-step1">
                        <label>Email</label>
                        <input type="text" name="donateur-name">
                        <label>Mot de passe</label>
                        <input type="text" name="donateur-statut">
                        <div class="container-btn-form">
                            <button type="submit">Se connecter</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>
</html>