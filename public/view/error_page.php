<link rel="stylesheet" href="/public/styles/pages/page_error/page_error.css">

<section id="section-error">
    <div class="error-box">
        <h1 class="error-code"><?= $error_code ?></h1>
        <p class="error-message"><?= $error_message ?></p>
        <p class="error-description"><?= $error_description ?></p>
        <a href="/app/home" class="valide_button">Retour à l'accueil</a>
    </div>
</section>

<script src="/public/js/error.js" type="text/javascript"></script>
