<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>


    <!------------------------------------------ SUBTITLE ------------------------------------------>
    <div class="title_formtop  columns">
        <div class="column is-12">
            <div class="level columns">
                <div class="column is-3 h1home">
                    <h1 class="subtitle is-4">Indicateur activité</h1>
                </div>
                <?php include('assets/php/_partials/subnav/data.php'); ?>
            </div>
        </div>
    </div>


    <!------------------------------------------ WRAP ------------------------------------------>
    <div class="wrap columns">
        <section class="bigcolumn column">
            <div class="columns">
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main main_data" class="main column is-12">

                    <!------------------------------------------ Statistiques ------------------------------------------>

                    <div class="case case_nomargin">
                        <div class="level columns data_filtres">
                            <div class="column">
                                <div class="control controlhost has-icons-left">
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">Sélection service</option>
                                            <option value="accueil">Accueil</option>
                                            <option value="sante">Santé</option>
                                            <option value="social">Social</option>
                                            <option value="educarion">Éducation</option>
                                            <option value="insertion">Insertion</option>
                                            <option value="psy">Psy</option>
                                            <option value="logement">Logement</option>
                                        </select>
                                    </div>
                                    <span class="icon is-small is-left">
                                        <i class="fal fa-user-astronaut"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control controlhost has-icons-left">
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">Sélection année</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                    <span class="icon is-small is-left">
                                        <i class="fal fa-calendar-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="colummn control controlhost has-icons-left">
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="tous">Tous les centres</option>
                                            <?php include('assets/php/lists/centre.php'); ?>
                                        </select>
                                    </div>
                                    <span class="icon is-small is-left">
                                        <i class="fal fa-city"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control controlhost has-icons-left">
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">Tous les genres</option>
                                            <option value="homme">Homme</option>
                                            <option value="femme">Femme</option>
                                            <option value="neutre">Neutre</option>
                                        </select>
                                    </div>
                                    <span class="icon is-small is-left">
                                        <i class="fal fa-venus-mars"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control controlhost has-icons-left">
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="tous">Tous les profils</option>
                                            <option value="adultes">Adultes</option>
                                            <option value="mineur">Mineur</option>
                                            <option value="mena">Mena</option>
                                        </select>
                                    </div>
                                    <span class="icon is-small is-left">
                                        <i class="fal fa-users"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="case casefull case_nomargin">
                        <h2 class="subtitle is-6">Recherche d'emploi</h2>
                        <table class="table is-fullwidth is-hoverable is-bordered">
                            <thead>
                                <tr>
                                    <th class="data_th data_thleft">Indicateur</th>
                                    <th class="data_th">Janvier</th>
                                    <th class="data_th">Février</th>
                                    <th class="data_th">Mars</th>
                                    <th class="data_th">Avril</th>
                                    <th class="data_th">Mai</th>
                                    <th class="data_th">Juin</th>
                                    <th class="data_th">Juillet</th>
                                    <th class="data_th">Août</th>
                                    <th class="data_th">Septembre</th>
                                    <th class="data_th">Octobre</th>
                                    <th class="data_th">Novembre</th>
                                    <th class="data_th">Décembre</th>
                                    <th class="data_th data_total">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">Nombre d'insertion observées</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d’insertions « autonomes »</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d’insertions « accompagnées »</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 90; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d’insertions par une structure tierce</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 30; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre de document type CV crées</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre de personnes par ateliers info</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d’ateliers infos</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre de 1° entretien</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d’entretien</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d’accompagnements</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 400; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="case casefull case_nomargin">
                        <h2 class="subtitle is-6">TPP</h2>
                        <table class="table is-fullwidth is-hoverable is-bordered">
                            <thead>
                                <tr>
                                    <th class="data_th data_thleft">Indicateur</th>
                                    <th class="data_th">Janvier</th>
                                    <th class="data_th">Février</th>
                                    <th class="data_th">Mars</th>
                                    <th class="data_th">Avril</th>
                                    <th class="data_th">Mai</th>
                                    <th class="data_th">Juin</th>
                                    <th class="data_th">Juillet</th>
                                    <th class="data_th">Août</th>
                                    <th class="data_th">Septembre</th>
                                    <th class="data_th">Octobre</th>
                                    <th class="data_th">Novembre</th>
                                    <th class="data_th">Décembre</th>
                                    <th class="data_th data_total">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">Nombre de TPP réalisés</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 700; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td class="folder_number">Montant moyen accordé</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">Nombre d'ateliers d'évaluation réalisés</td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                    <td class="data_td data_total">
                                        <?php $nb_min = 1; $nb_max = 200; $nombre = mt_rand($nb_min,$nb_max); echo $nombre; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!--------------- END MAIN ------------->
                </div>
            </div>
        </section>
        <!--------------- END WRAP ------------->
    </div>
    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>

</body>

</html>
