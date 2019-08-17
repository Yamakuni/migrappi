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
                            <a href="form_group.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau atelier</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">Historique</p>
                    <ul class="menu-list">
                        <li>
                            <a href="#home">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-badge-check"></i>Accueil</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
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
                            <h1 class="subtitle is-4">Accueil & ateliers de groupes</h1>
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


                    <!--------------------------------------- Information de santé ------------------------------------------>
                    <?php include('assets/php/cases/sante.php'); ?>



                    <!--------------------------------------- Identité ------------------------------------------>
                    <?php include('assets/php/cases/identite.php'); ?>



                    <!--------------------------------------- Contact ------------------------------------------>
                    <?php include('assets/php/cases/contact.php'); ?>



                    <!--------------------------------------- Situation au Maroc ------------------------------------------>
                    <?php include('assets/php/cases/situation_maroc.php'); ?>



                    <!--------------------------------------- Logement au Maroc------------------------------------------>
                    <?php include('assets/php/cases/logement.php'); ?>



                    <!------------------------------- Famille au Maroc ----------------------------------->
                    <?php include('assets/php/cases/famille_maroc.php'); ?>



                    <!-------------------------------- Famille au pays ------------------------------------>
                    <?php include('assets/php/cases/famille_pays.php'); ?>



                    <!----------------------------------- Dates ------------------------------------>
                    <?php include('assets/php/cases/dates.php'); ?>



                    <!----------------------------------- Au pays ------------------------------------>
                    <?php include('assets/php/cases/situation_pays.php'); ?>



                    <!----------------------------------- Sur le trajet ------------------------------------>
                    <?php include('assets/php/cases/situation_trajet.php'); ?>



                    <!----------------------------------- Arrivée au Maroc ------------------------------------>
                    <?php include('assets/php/cases/arrivee_maroc.php'); ?>



                    <!--------------------------------- Situation économique ---------------------------------->
                    <?php include('assets/php/cases/situation_eco.php'); ?>



                    <!--------------------------------- Éducation ---------------------------------->
                    <?php include('assets/php/cases/education.php'); ?>



                    <!--------------------------------- Experience ---------------------------------->
                    <?php include('assets/php/cases/experience.php'); ?>



                    <!----------------------------------- Perspectives -------------------------------->
                    <?php include('assets/php/cases/perspectives.php'); ?>



                    <!--------------------------------- Prise en charge ---------------------------------->
                    <?php include('assets/php/cases/prise_encharge.php'); ?>



                    <!----------- END MAIN -------->
                </div>
            </div>
        </section>
        <!----------- END WRAP -------->
    </div>

    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>
    <script src="assets/js/multiselect/form_adulte.js" type="application/javascript"></script>

</body>

</html>
