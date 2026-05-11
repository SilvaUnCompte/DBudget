onload = () => {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/get_option_user.php", false);
    xhr.onload = () => {
        if (xhr.status == 200) {
            let data = JSON.parse(xhr.responseText);

            // Pré-remplir les champs avec les données BDD (split sur l'espace)
            let parts = data.username.split(" ");
            document.getElementById("opt-nom").value = parts[0] ?? "";
            document.getElementById("opt-prenom").value = parts.slice(1).join(" ");
            document.getElementById("opt-theme").checked = data.theme == 1;

            // Remplir le select des langues
            let select = document.getElementById("opt-langue");
            select.innerHTML = "";
            data.langues_list.forEach(langue => {
                let opt = document.createElement("option");
                opt.value = langue;
                opt.textContent = langue;
                if (langue === data.langue) opt.selected = true;
                select.appendChild(opt);
            });
        } else {
            new_popup("Erreur lors du chargement des options", "error");
        }
    };
    xhr.send();

    document.getElementById("loading-gif").style.display = "none";
}

function save_options() {
    let nom = document.getElementById("opt-nom").value.trim();
    let prenom = document.getElementById("opt-prenom").value.trim();
    let username = (nom + " " + prenom).trim();
    let langue = document.getElementById("opt-langue").value;
    let theme = document.getElementById("opt-theme").checked ? 1 : 0;

    if (nom === "") {
        new_popup("Le nom ne peut pas être vide", "warn");
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("GET", `/controler/updating_elements/option.php?username=${encodeURIComponent(username)}&langue=${encodeURIComponent(langue)}&theme=${theme}`, true);
    xhr.onload = () => {
        if (xhr.status == 200) {
            new_popup("Options sauvegardées", "success");
            // Mettre à jour le nom affiché dans le header
            document.getElementById("username").textContent = username;
        } else {
            new_popup("Erreur lors de la sauvegarde", "error");
        }
    };
    xhr.send();
}
