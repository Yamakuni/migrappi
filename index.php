<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------ TOPNAV ----------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>




    <div id="voile"></div>
    <!------------------------------------------ WRAP ------------------------------------------>
    <div class="wrap columns index_base index_wrap" id="wrap">
        <section class="section column index_section">
            <div class="container columns">
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-full index_main">

                    <div class="level columns">
                        <div class="column is-half is-offset-one-quarter index_title" onclick="easter_egg3()">Migrappi</div>
                    </div>


                    <div class="level columns">
                        <a href="page_search.php" class="column notification is-white index_box">
                            <i class="fal fa-search fa-3x"></i>
                            <p>Rechercher un dossier</p>
                        </a>
                        <a href="form_newfolder.php" class="column notification is-white index_box">
                            <i class="fal fa-layer-plus fa-3x"></i>
                            <p>Créer un nouveau dossier</p>
                        </a>
                        <a href="page_wainting.php" class="column notification is-white index_box">
                            <i class="fal fa-layer-group fa-3x"></i>
                            <p>File d'attente</p>
                        </a>
                    </div>
                    <div class="level columns">
                        <a href="home_sante.php" class="column notification is-white index_box">
                            <i class="fal fa-user-md fa-3x"></i>
                            <p>Santé</p>
                        </a>
                        <a href="home_social.php" class="column notification is-white index_box">
                            <i class="fal fa-hand-receiving fa-3x"></i>
                            <p>Social</p>
                        </a>
                        <a href="home_education.php" class="column notification is-white index_box">
                            <i class="fal fa-book fa-3x"></i>
                            <p>Education</p>
                        </a>
                        <a href="home_insertion.php" class="column notification is-white index_box">
                            <i class="fal fa-wrench fa-3x"></i>
                            <p>Insertion</p>
                        </a>
                        <a href="home_psy.php" class="column notification is-white index_box">
                            <i class="fal fa-brain fa-3x"></i>
                            <p>Psy</p>
                        </a>
                        <a href="home_host.php" class="column notification is-white index_box">
                            <i class="fal fa-home fa-3x"></i>
                            <p>Logement</p>
                        </a>
                    </div>
                    <div class="level columns">
                        <a href="page_host.php" class="column notification is-white index_box">
                            <p>Hébergements</p>
                        </a>
                        <a href="form_group.php" class="column notification is-white index_box">
                            <p>Ateliers de groupes</p>
                        </a>
                        <a href="page_history.php" class="column notification is-white index_box">
                            <p>Historique</p>
                        </a>
                        <a onclick="datamenu_open()" class="column notification is-white index_box">
                            <p>Data</p>
                        </a>
                    </div>


                    <!------------------------------------------ END main ------------------------------------------>
                </div>
            </div>
        </section>
        <!------------------------------------------ END WRAP ------------------------------------------>
    </div>

    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>
    <?php include('assets/php/easter_egg/egg3.php'); ?>


</body>

</html>
