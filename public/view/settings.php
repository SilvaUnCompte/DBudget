<link rel="stylesheet" href="/public/styles/pages/settings/settings.css">

<section id="settings-board">
    <div class="settings-card">
        <h2>Paramètres</h2>

        <div class="settings-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="input-username" value="<?= htmlspecialchars($username) ?>" placeholder="Entrez votre nom d'utilisateur">
        </div>

        <div class="settings-group">
            <label for="opt-langue">Langue</label>
            <select id="opt-langue"></select>
        </div>

        <div class="settings-group settings-group--inline">
            <label for="opt-theme">Thème sombre</label>
            <input type="checkbox" id="opt-theme">
        </div>

        <button class="valide_button" onclick="saveSettings()">Sauvegarder</button>
    </div>
</section>

<script src="/public/js/settings.js" type="text/javascript"></script>