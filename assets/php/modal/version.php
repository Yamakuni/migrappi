<div class="modal" id="modal_version">
    <div class="modal-background"></div>
    <div class="modal-card version">
        <header class="modal-card-head">
            <p class="modal-card-title">Notes de versions</p>
            <button onclick="version_close()" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="version_descript">

                <div>
                    <h5 class="subtitle is-5 h5_modaltop">[2.0.0] - 01-04-2019</h5>
                    <span class="tag is-success is-small" onclick="easter_egg2()">Added</span>
                    <ul>
                        <li>Nouvelle page d'accueil</li>
                        <li>Création d'un système de formulaire pour chaque service</li>
                        <li>Module logement</li>
                        <li>Gestion des hébergements</li>
                        <li>Création d'un module historique des dossiers</li>
                        <li>Module de géneration automatique des statistiques</li>
                        <ul>
                            <li>Par programmes</li>
                            <li>Par activité</li>
                        </ul>
                    </ul>
                    <span class="tag is-warning is-small">Changed</span>
                    <ul>
                        <li>None</li>

                    </ul>
                    <span class="tag is-danger is-small">Fixed</span>
                    <ul>
                        <li>None</li>
                    </ul>
                </div>
                <div>
                    <h5 class="subtitle is-5">[1.0.0] - 01-04-2016</h5>
                    <span class="tag is-dark is-small" onclick="easter_egg1()">Ancienne version</span>
                    <p>Une légende raconte qu'un musée en conserverait une version</p>
                </div>
                <div>
                    <h5 class="subtitle is-5">[X.X.X] - 88-88-8888</h5>
                    <ul>
                        <li>1° X : Version majeures</li>
                        <li>2° X : Ajout de fonctionnalités, et changements mineurs</li>
                        <li>3° X : Corrections de bugs</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include('assets/php/easter_egg/egg1.php'); ?>
<?php include('assets/php/easter_egg/egg2.php'); ?>

<script>
    function version_open() {
        var element = document.getElementById("modal_version");
        element.classList.add("is-active");
    }

    function version_close() {
        var element = document.getElementById("modal_version");
        element.classList.remove("is-active");
    }

</script>
