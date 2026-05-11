<?php require "helpers/header.php"?>

<link rel="stylesheet" href="/public/styles/pages/option/option.css">

<section id="option-board">
    <div class="option-card">
        <h2>Paramètres</h2>

        <div class="option-group">
            <label for="opt-nom">Nom</label>
            <input type="text" id="opt-nom" placeholder="Votre nom">
        </div>

        <div class="option-group">
            <label for="opt-prenom">Prénom</label>
            <input type="text" id="opt-prenom" placeholder="Votre prénom">
        </div>

        

        <button class="valide_button" onclick="save_options()">Sauvegarder</button>
    </div>
</section>

<script src="/public/js/option.js" type="text/javascript"></script>

<?php require "helpers/footer.php"?>
