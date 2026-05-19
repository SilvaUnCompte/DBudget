onload = () => {
    document.getElementById("loading-gif").style.display = "none";
}

function saveSettings() {
    const username = document.getElementById("input-username").value.trim();

    if (!username) {
        new_popup("Le nom d'utilisateur ne peut pas être vide.", "warn");
        return;
    }

    fetch("/api/update/settings", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ username: username })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            new_popup("Nom sauvegardé avec succès.", "success");
            document.getElementById("username").textContent = username;
        } else {
            new_popup("Erreur : " + data.message, "error");
        }
    })
    .catch(() => new_popup("Erreur réseau.", "error"));
}