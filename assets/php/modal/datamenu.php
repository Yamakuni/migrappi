<div class="modal" id="modal_datamenu">
    <div class="modal-background"></div>
    <div scroll="no" class="modal-content datamenu">
        <header class="card-header">
            <p class="card-header-title" onclick="easter_egg4()">Choix du module de données</p>
            <button onclick="datamenu_close()" class="modal-close" aria-label="close"></button>
        </header>
        <a href="data_program.php" class="navbar-item">Indicateurs programme</a>
        <a href="data_activity.php" class="navbar-item">Indicateurs activité</a>
        <hr class="navbar-divider">
        <a href="" class="navbar-item">Export</a>
        <a href="" class="navbar-item">Catégorisation</a>
        <hr class="navbar-divider">
        <a href="" class="navbar-item">Statistiques v1</a>
        <a href="" class="navbar-item">Statistiques v2</a>
        <a href="" class="navbar-item">Statistiques v3</a>
    </div>
</div>
<script>
    function datamenu_open() {
        var element = document.getElementById("modal_datamenu");
        element.classList.add("is-active");
    }

    function datamenu_close() {
        var element = document.getElementById("modal_datamenu");
        element.classList.remove("is-active");
    }

</script>

<?php include('assets/php/easter_egg/egg4.php'); ?>
