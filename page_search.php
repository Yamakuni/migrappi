<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>



    <!------------------------------------------ SUBTITLE ------------------------------------------>
    <div class="title_formtop  columns">
        <div class="column is-1"></div>
        <div class="column is-10">
            <div class="level columns">
                <div class="column is-8">
                    <h1 class="subtitle is-4">Recherche de dossiers</h1>
                </div>
                <button class="button is-outlined is-small is-rounded info-invers sw_fastfolder">
                    <span>Dossier rapide</span>
                    <span class="icon is-small">
                        <i class="far fa-shipping-fast"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>


    <!----------------------------------------------- WRAP --------------------------------------------------->
    <div class="wrap columns">
        <section class="column">
            <div class="columns">
                <div class="column is-1"></div>
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-10">


                    <!--------------------------------------- Paramètres de recherche ---------------------------------------------->
                    <div class="case casetop">
                        <div class="columns">
                            <div class="column is-12">
                                <h2 class="subtitle is-6">
                                    <div class="th2">Informations</div>
                                </h2>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-10">
                                <div class="level columns">
                                    <div class="column">
                                        <h6>Prénom</h6>
                                        <p><input class="formulaire input is-small" type="text" name="first_name" placeholder="Prenom" /></p>
                                    </div>
                                    <div class="column ">
                                        <h6>Nom</h6>
                                        <p><input class="formulaire input is-small" type="text" name="name" placeholder="Nom" /></p>
                                    </div>
                                    <div class="column ">
                                        <h6>Genre</h6>
                                        <div class="select is-small">
                                            <select class="formulaire">
                                                <optgroup label="Genre">
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                    <option value="neutre">Neutre</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column ">
                                        <h6>Date de naissance</h6>
                                        <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                        <div data-toggle="datepicker"></div>
                                    </div>
                                </div>

                                <div class="level columns">
                                    <div class="column ">
                                        <h6>Nationalité</h6>
                                        <div class="select is-small">
                                            <select class="formulaire">
                                                <optgroup label="Nationalité">
                                                    <?php include('assets/php/lists/pays.php'); ?>
                                                </optgroup>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="column ">
                                        <h6>Télephone personnel</h6>
                                        <p><input class="formulaire input is-small" type="text" placeholder="N° de télephone" /></p>
                                    </div>
                                    <div class="column ">
                                        <h6>Télephone d'un ami</h6>
                                        <p><input class="formulaire input is-small" type="text" placeholder="N° de télephone" /></p>
                                    </div>
                                    <div class="column ">
                                        <h6>Télephone au pays</h6>
                                        <p><input class="formulaire input is-small" type="text" placeholder="N° de télephone" /></p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-2">
                                <a href="form_newfolder.php" class="is-info search_box">
                                    <i class="fal fa-search  fa-2x"></i>
                                    <p>Rechercher</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--------------------------------------- FIN Paramètres de recherche ----------------------------------->




                    <!--------------------------------------- Résultats de recherche ---------------------------------------------->
                    <div class="case casefull">
                        <h2 class="subtitle is-6">
                            <div class="th2">Résultats</div>
                        </h2>
                        <table class="table is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <th class="folder_number">Dossier</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Naissance</th>
                                    <th>Nationalité</th>
                                    <th>N° personnel</th>
                                    <th>N° au pays</th>
                                    <th>Accueil</th>
                                    <th>Ouvrir</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>16 02 1965</td>
                                    <td>Mali</td>
                                    <td>+212 67898675</td>
                                    <td>+33 678766783</td>
                                    <td>18 janv 17</td>
                                    <td>
                                        <a href="#home" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Mireille</td>
                                    <td>Mathieu</td>
                                    <td>15 05 1963</td>
                                    <td>Argentine</td>
                                    <td>+212 678909881</td>
                                    <td>+252 635278298</td>
                                    <td>18 janv 17</td>
                                    <td>
                                        <a href="#home" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Fela</td>
                                    <td>Kutti</td>
                                    <td>06 08 1945</td>
                                    <td>Corée du Sud</td>
                                    <td>+212 678657893</td>
                                    <td>+49 687675634</td>
                                    <td>18 janv 17</td>
                                    <td>
                                        <a href="#home" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>16 02 1965</td>
                                    <td>Mali</td>
                                    <td>+212 67898675</td>
                                    <td>+33 678766783</td>
                                    <td>18 janv 17</td>
                                    <td>
                                        <a href="#home" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Tiken Jah</td>
                                    <td>Fakoly</td>
                                    <td>13 02 1902</td>
                                    <td>Chine</td>
                                    <td>+212 678909881</td>
                                    <td>+252 635278298</td>
                                    <td>18 janv 17</td>
                                    <td>
                                        <a href="#home" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Jamel</td>
                                    <td>Demouze</td>
                                    <td>15 06 1789</td>
                                    <td>Groenland</td>
                                    <td>+212 678657893</td>
                                    <td>+49 687675634</td>
                                    <td>18 janv 17</td>
                                    <td>
                                        <a href="#home" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--------------------------------------- FIN Résultats de recherche ------------------------------------->

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
