<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>


    <div class="wrap columns">
        <!----------------------------------------- LEFTNAV ------------------------------------------>
        <aside class="column is-2">
            <div class="sidebar">
                <div class="menu">
                    <ul class="menu-list">
                        <li>
                            <a href="form_host.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label"> Historique</p>
                    <?php include('assets/php/fake/hist_host.php'); ?>
                </div>
            </div>
        </aside>
        <!------------------------------------------ END LEFTNAV ------------------------------------------>

        <!------------------------------------------ WRAP ------------------------------------------>
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
                            <h1 class="subtitle is-4">Information d'hébergement</h1>
                        </div>
                        <?php include('assets/php/_partials/subnav/home.php'); ?>
                    </div>



                    <!--------------------------------------- Informations de prise en charge ------------------------------------------>
                    <div class="case casetop">
                        <h2 class="subtitle is-6" id="5">Informations de prise en charge</h2>
                        <div class="level columns field is-grouped is-grouped-multiline">
                            <div class="column control">
                                <div class="tags has-addons">
                                    <span class="tag is-light">MENA</span>
                                    <span class="tag is-danger">Non</span>
                                </div>
                            </div>
                            <div class="column control">
                                <div class="tags has-addons">
                                    <span class="tag is-light">Demande asile</span>
                                    <span class="tag is-success">Oui</span>
                                </div>
                            </div>
                            <div class="column control">
                                <div class="tags has-addons">
                                    <span class="tag is-light">Hébergement</span>
                                    <span class="tag is-success">Oui</span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--------------------------------------- Identité ------------------------------------------>
                    <?php include('assets/php/cases/identite.php'); ?>



                    <!--------------------------------------- Information de santé ------------------------------------------>
                    <?php include('assets/php/cases/sante.php'); ?>



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
