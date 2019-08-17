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
                    <h1 class="subtitle is-4">Administration</h1>
                </div>
                <a href="form_host.php" class="formulaire button is-outlined is-small link-invers">
                    <span class="icon is-small">
                        <i class="far fa-plus"></i>
                    </span>
                    <span>Ajouter un intervenant</span>
                </a>
                <a class="formulaire button is-outlined is-small modify" id="modifyuser_ask" onclick="AskModifyUser()">
                    <span class="icon is-small">
                        <i class="far fa-pen"></i>
                    </span>
                    <span>Modifier des informations</span>
                </a>
                <a class="formulaire button is-outlined is-small success-invers" id="modifyuser_valid" style="display:none" onclick="ValidModifyUser()">
                    <span class="icon is-small">
                        <i class="far fa-check"></i>
                    </span>
                    <span>Modifier des informations</span>
                </a>
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
                        <h2 class="subtitle is-6">Rabat · Centre accueil Migrants</h2>
                        <table class="table is-fullwidth is-hoverable">
                            <thead>
                                <tr>
                                    <th class="head_user">Centre</th>
                                    <th class="head_user">Prénom</th>
                                    <th class="head_user">Nom</th>
                                    <th class="head_user">Caritas ID</th>
                                    <th class="head_user">Dernière activité</th>
                                    <th class="head_user">Accés</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="centre_user">
                                        <div class="select is-small">
                                            <select class="formulaire">
                                                <option value="siege">Siège</option>
                                                <option value="cam">CAM</option>
                                                <option value="sam">SAM</option>
                                                <option value="tam">TAM</option>
                                                <option value="amm">AMM</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <input class="formulaire input is-small" type="text" placeholder="Prénom" value="Jean-Claude">
                                    </td>
                                    <td class="info_user">
                                        <input class="formulaire input is-small" type="text" placeholder="Nom" value="Van Damme">
                                    </td>
                                    <td class="info_user">
                                        <input class="formulaire input is-small" type="text" placeholder="Mail" value="jc.vandamme">
                                    </td>
                                    <td class="date_user">
                                        <input class="input is-small" data-toggle="datepicker" value="18-09-2017" disabled>
                                        <div data-toggle="datepicker"></div>
                                    </td>
                                    <td class="access_user">
                                        <div class="is-100">
                                            <div class="select is-small multiple">
                                                <select class="formulaire" id="admin_access" multiple>
                                                    <option value="base">Base</option>
                                                    <option value="sante">Santé</option>
                                                    <option value="social">Social</option>
                                                    <option value="education">Éducation</option>
                                                    <option value="insertion">Insertion</option>
                                                    <option value="psy">Psy</option>
                                                    <option value="logement">Logement</option>
                                                    <option value="all">Tous</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="spadmin">SuperAdmin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="history_user btn_user">
                                        <span title="Historique">
                                            <a href="page_bigbrother.php" class="formulaire button is-small is-link is-outlined">
                                                <span class="icon is-small"><i class="far fa-history"></i></span></a>
                                        </span>
                                    </td>
                                    <td class="archive_user btn_user" style="display:none">
                                        <span title="Archiver le profil">
                                            <a class="formulaire button is-small is-danger is-outlined">
                                                <span class="icon is-small"><i class="far fa-user-minus"></i></span></a>
                                        </span>
                                    </td>
                                    <td class="btn_user">
                                        <span title="Changer password">
                                            <a onclick="ValidModifyUser()" class="formulaire button is-small is-link is-outlined">
                                                <span class="icon is-small"><i class="far fa-key-skeleton"></i></span></a>
                                        </span>
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


    <script>
        new SlimSelect({
            showSearch: false,
            select: '#admin_access'
        })

    </script>


</body>

</html>
