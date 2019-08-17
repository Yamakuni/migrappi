<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">
    
    
    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>


    <!------------------------------------------ SUBTITLE ------------------------------------------>
    <div class="title_formtop  columns">
        <div class="column is-1 gouttiere"></div>
        <div class="column is-10">
            <div class="level columns">
                <div class="column is-half">
                    <h1 class="subtitle is-4">Gestion des hébergement</h1>
                </div>
                <a href="form_host.php" class="formulaire button is-outlined is-small success">
                    <span class="icon is-small">
                        <i class="far fa-plus"></i>
                    </span>
                    <span>Ajouter un dossier</span>
                </a>
                <div class="control controlhost has-icons-left">
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="">Choisir un centre</option>
                            <?php include('assets/php/lists/centre.php'); ?>
                        </select>
                    </div>
                    <span class="icon is-small is-left">
                        <i class="fal fa-city"></i>
                    </span>
                </div>
                <div class="control controlhost has-icons-left">
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="tous">Tous les âges</option>
                            <option value="mena">Mena</option>
                            <option value="adultes">Adultes</option>
                        </select>
                    </div>
                    <span class="icon is-small is-left">
                        <i class="fal fa-users"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------------ WRAP ------------------------------------------>
    <div class="wrap columns">
        <section class="bigcolumn column">
            <div class="columns">
                <div class="column is-1"></div>
                <!------------------------------------------ MAIN ------------------------------------------>
                <div id="main" class="main column is-10">

                    <!------------------------------------------ Gestion des hébergements ------------------------------------------>
                    <div class="case casefull casetop">
                        <h2 class="subtitle is-6">Hébergement MENA</h2>
                        <table class="table is-fullwidth is-hoverable">
                            <thead>
                                <tr>
                                    <th class="folder_number">Dossier</th>
                                    <th>Genre</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Âge</th>
                                    <th>N° de télehone</th>
                                    <th>Logement</th>
                                    <th>Date d'entrée</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Homme</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Mena 2</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Homme</td>
                                    <td>Mireille</td>
                                    <td>Mathieu</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Mena 1</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Homme</td>
                                    <td>Fela</td>
                                    <td>Kutti</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Mena 1</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Homme</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Mena 2</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Homme</td>
                                    <td>Toyota</td>
                                    <td>Camry</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Mena 1</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Homme</td>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Mena 2</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="case casefull">
                        <h2 class="subtitle is-6">Hébergement adulte</h2>
                        <table class="table is-fullwidth is-hoverable">
                            <thead>
                                <tr>
                                    <th class="folder_number">Dossier</th>
                                    <th>Genre</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Âge</th>
                                    <th>N° de télehone</th>
                                    <th>Logement</th>
                                    <th>Date d'entrée</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Homme</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Les lilas</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Homme</td>
                                    <td>Mireille</td>
                                    <td>Mathieu</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Les roses</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Homme</td>
                                    <td>Fela</td>
                                    <td>Kutti</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Les lilas</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Homme</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Les lilas</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Homme</td>
                                    <td>Toyota</td>
                                    <td>Camry</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Les roses</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Homme</td>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>Mineur</td>
                                    <td>+212 678909881</td>
                                    <td>Les roses</td>
                                    <td>18-09-2017</td>
                                    <td><a href="home_host.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span class="buttontxt">Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a href="form_host.php" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-door-open"></i></span>
                                            <span class="buttontxt">Sortie</span>
                                        </a>
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
