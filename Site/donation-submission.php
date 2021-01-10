<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mainStyle.css">
    <script defer src="script/mainScript.js"></script>
</head>
<body>
    <?php include'include/mainHeader.php' ?>
    <main class="container-main">
    <?php if(isset($_SESSION['type']) && $_SESSION['type']=='Administrateur')
            {
                echo'
                    <section class="inner-box section-hero">
                        <span class="titreSection">Ajout d\'un don</span>
                    </section>
                    <section class="inner-box">
                    <form method="POST" action="formulaireDon.php">
                        <div class="title-form">
                            <div class="steps-title">
                                <h3 class="active-title"><span>1</span>Personnes</h3>
                                <h3><span>2</span>Détails</h3>
                            </div>
                        </div>
                        <div class="global-form">
                            <div class="form-step active-step" id="form-step1">
                                <h4>Donateur</h4>
                                <label>Nom</label>
                                <input type="text" name="donateur-name" />
                                <label>Statut</label>
                                <input type="text" name="donateur-statut" />
                                <h4>Bénéficiaire</h4>
                                <label>Nom</label>
                                <input type="text" name="beneficiaire-name" />
                                <label>Statut</label>
                                <input type="text" name="beneficiaire-statut" />
                                <h4>Intermédiaire</h4>
                                <label>Nom</label>
                                <input type="text" name="intermediaire-name" placeholder="Aucune mention"/>
                                <label>Statut</label>
                                <input type="text" name="intermediaire-statut" placeholder="Aucune mention"/>
                                <div class="container-btn-form">
                                    <button class="next-button" type="button">Suivant</button>
                                </div>
                            </div>
                            <div class="form-step" id="form-step2">
                                <label for="details-typeDon">Type de don</label>
                                <select id="details-typeDon" name="details-typeDon">
                                    <option value="pensions">Pensions</option>
                                    <option value="animaux">Animaux</option>
                                    <option value="vetement-draps">Vêtements et draps</option>
                                    <option value="joyaux-vaisselle">Joyaux et vaisselle</option>
                                </select>
                                <label>Date</label>
                                <input type="date" name="details-date" />
                                <label>Lieu</label>
                                <input type="text" name="details-lieu" placeholder="Aucune mention"/>
                                <label>Formes</label>
                                <input type="text" name="details-formes" placeholder="Aucune mention"/>
                                <label>Poids</label>
                                <input type="text" name="details-poids" placeholder="Aucune mention"/>
                                <label>Prix</label>
                                <input type="text" name="details-prix" placeholder="Aucune mention"/>
                                <label>Sources</label>
                                <input type="text" name="details-sources" placeholder="Aucune mention"/>
                                <label>Natures</label>
                                <textarea name="details-natures" placeholder="Aucune mention particulière"></textarea>
                                <div class="container-btn-form">
                                    <button class="previous-button" type="button">Précédent</button>
                                    <button type="submit">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>';
            }
            else
            {
                echo '<div class="grid-list">
                        <h1>Vous ne pouvez accéder à cette page sans être connecté en tant qu\'Administrateur</h1>
                        <a href="connexion.php" class="restitutionDon-a">Cliquez ici pour vous connecter</a>
                    </div>
                ';
            }
        ?>
    </main>
    <?php include'include/mainFooter.php' ?>
</body>
</html>