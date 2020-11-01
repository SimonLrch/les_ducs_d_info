<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire Stage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mainStyle.css">
</head>
<body>
    <form method="POST" action="formulaireStage.php">

        <div class="global-form" id="form-step1">
            <h2>Personnes</h2>
            <div class="container-form">
                <h3>Donateur</h3>
                <label>Don</label>
                <input type="text" name="donateur-name" />
                <label>Statut</label>
                <input type="text" name="donateur-statut" />

                <h3>Bénéficiaire</h3>
                <label>Nom</label>
                <input type="text" name="beneficiere-name" />
                <label>Statut</label>
                <input type="text" name="beneficiere-statut" />

                <h3>Donateur</h3>
                <label>Don</label>
                <input type="text" name="intermediaire-name" />
                <label>Statut</label>
                <input type="text" name="intermediaire-statut" />

                <div class="container-btn-form">
                    <button type="button">Next</button>
                </div>
            </div>
        </div>

        <div class="global-form" id="form-step2">
            <h2>Détails</h2>
            <div class="container-form">
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
                <input type="text" name="details-prix" />
                <label>Sources</label>
                <input type="text" name="details-sources" />
                <label>Natures</label>
                <textarea name="details-natures"></textarea>

                <div class="container-btn-form">
                    <button type="button">Next</button>
                </div>
            </div>
        </div>
    </form>

        <label>Date : </label>
        <input type="Date" name="date" size="20" value="date">
        <label>Heure : </label>
        <input type="time" name="heure" size="20" value="heure">
        <label>Tarif : </label>
        <input type="number" name="tarif" size="20" value="tarif" placeholder="1.0" step="0.01">

        <input type="submit" value="Valider" name="valider">
    </form>
</body>
</html>