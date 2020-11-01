<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire Stage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mainStyle.css">
    <script defer src="script/mainScript.js"></script>
</head>
<body>
    <div class="container-main">
        <form method="POST" action="formulaireStage.php">
            <div class="title-form">
                <h2>Ajout d'un don</h2>
                <div class="steps-title">
                    <h3>Personnes</h3>
                    <h3>Détails</h3>
                </div>
            </div>
            <div class="global-form">
                <div class="form-step active-step" id="form-step1">
                    <h4>Donateur</h4>
                    <label>Don</label>
                    <input type="text" name="donateur-name" />
                    <label>Statut</label>
                    <input type="text" name="donateur-statut" />

                    <h4>Bénéficiaire</h4>
                    <label>Nom</label>
                    <input type="text" name="beneficiere-name" />
                    <label>Statut</label>
                    <input type="text" name="beneficiere-statut" />

                    <h4>Donateur</h4>
                    <label>Don</label>
                    <input type="text" name="intermediaire-name" />
                    <label>Statut</label>
                    <input type="text" name="intermediaire-statut" />

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
                        <option value="joyaux-vaiselle">Joyaux et vaiselle</option>
                    </select>
                    <label>Date</label>
                    <input type="date" name="details-date" />
                    <label>Lieu</label>
                    <input type="text" name="details-lieu" />
                    <label>Formes</label>
                    <input type="text" name="details-formes" />
                    <label>Poids</label>
                    <input type="text" name="details-poids" />
                    <label>Prix</label>
                    <input type="number" name="details-prix" />
                    <label>Sources</label>
                    <input type="text" name="details-sources" />
                    <label>Natures</label>
                    <textarea name="details-natures"></textarea>

                    <div class="container-btn-form">
                        <button class="previous-button" type="button">Précédent</button>
                        <button type="submit">Confirmer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>