<link rel="stylesheet" href="/public/styles/pages/settings/settings.css">

<section id="settings-board">
    <div class="settings-card">
        <h2>Paramètres</h2>

        <div class="settings-group">
            <label for="opt-nom">Nom</label>
            <input type="text" id="opt-nom" placeholder="Votre nom">
        </div>

        <div class="settings-group">
            <label for="opt-prenom">Prénom</label>
            <input type="text" id="opt-prenom" placeholder="Votre prénom">
        </div>

        <div class="settings-group">
            <label for="opt-langue">Langue</label>
            <select id="opt-langue"></select>
        </div>

        <div class="settings-group settings-group--inline">
            <label for="opt-theme">Thème sombre</label>
            <input type="checkbox" id="opt-theme">
        </div>

        <button class="valide_button" onclick="">Sauvegarder</button>
    </div>
</section>

<script src="/public/js/settings.js" type="text/javascript"></script>