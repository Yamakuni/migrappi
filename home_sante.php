<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>


    <!----------------------------------------- WRAP ------------------------------------------>
    <div class="wrap columns">
        <!----------------------------------------- LEFTNAV ------------------------------------------>
        <aside class="column is-2">
            <div class="sidebar">
                <div class="menu">
                    <ul class="menu-list">
                        <li>
                            <a href="form_sante.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">Historique</p>
                    <?php include('assets/php/fake/hist_global.php'); ?>
                </div>
            </div>
        </aside>
        <!------------------------------------------ END LEFTNAV ------------------------------------------>



        <section class="column">
            <div class="columns">
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-full">



                    <!------------------------------------------ SUBTITLE ------------------------------------------>
                    <div class="title_home level columns">
                        <div class="column is-2 folder_block">
                            <span class="folder_line"><span class="folder_number">C14687</span><br />NAKAMURA Aya</span>
                        </div>
                        <div class="column is-7 h1home">
                            <h1 class="subtitle is-4">Service santé</h1>
                        </div>
                        <?php include('assets/php/_partials/subnav/home.php'); ?>
                    </div>
                    <div class="casetop"></div>



                    <!--------------------------------------- Informations ------------------------------------------>
                    <?php include('assets/php/cases/infos.php'); ?>



                    <!--------------------------------------- Identité ------------------------------------------>
                    <?php include('assets/php/cases/identite.php'); ?>



                    <!--------------------------------------- Situation au Maroc ------------------------------------------>
                    <?php include('assets/php/cases/situation_maroc.php'); ?>



                    <!--------------------------------------- Information de santé ------------------------------------------>
                    <?php include('assets/php/cases/sante.php'); ?>



                    <!--------------------------------------- Information de santé ------------------------------------------>
                    <?php include('assets/php/cases/sante_hist.php'); ?>



                    <!--------------------------------------- Contact ------------------------------------------>
                    <?php include('assets/php/cases/contact.php'); ?>



                    <!----------------------------------- Arrivée au Maroc ------------------------------------>
                    <?php include('assets/php/cases/arrivee_maroc.php'); ?>



                    <!----------- END MAIN -------->
                </div>
            </div>
        </section>
        <!----------- END WRAP -------->
    </div>

    <!--------------- SCRIPTS ------------->

    <?php include('assets/php/_partials/_script.php'); ?>

</body>

</html>
