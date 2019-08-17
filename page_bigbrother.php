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
                <div class="column is-9">
                    <h1 class="subtitle is-4">Historique des interventions</h1>
                </div>
                <a class="formulaire button is-outlined is-small modify">
                    <span class="icon is-small">
                        <i class="far fa-file-pdf"></i>
                    </span>
                    <span>Pdf</span>
                </a>
            </div>
        </div>
    </div>


    <!------------------------------------------ WRAP ------------------------------------------>
    <div class="wrap columns">
        <section class="column">
            <div class="columns">
                <div class="column is-1"></div>
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-10">


                    <!--------------------------------------- Information d'entretien ------------------------------------------>
                    <div class="case casetop">
                        <h2 class="subtitle is-6">Informations</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Prénom</h6>
                                <p><input class="formulaire input is-small" type="text" value="Winston" disabled></p>
                            </div>
                            <div class="column">
                                <h6>Nom</h6>
                                <p><input class="formulaire input is-small" type="text" value="Smith" disabled></p>
                            </div>
                            <div class="column">
                                <h6>CaritasID</h6>
                                <p><input class="formulaire input is-small" type="text" value="w.smith" disabled></p>
                            </div>
                            <div class="column">
                                <h6>Dernière activité</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" value="09·11·2017" disabled>
                                <div data-toggle="datepicker"></div>
                            </div>
                        </div>
                    </div>


                    <!------------------------------------------ Historique ------------------------------------------>
                    <div class="case casefull">
                        <h2 class="subtitle is-6">Historique</h2>
                        <table class="table is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <th class="first_table">Date</th>
                                    <th>Heure</th>
                                    <th>Dossier</th>
                                    <th>Type document</th>
                                    <th>Nom document</th>
                                    <th>Formulaire</th>
                                    <th>Service</th>
                                    <th>Adresse IP</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>19-01-2017</td>
                                    <td>12:38</td>
                                    <td>Page</td>
                                    <td>Consultation</td>
                                    <td>Visite</td>
                                    <td>Social</td>
                                    <td><a href="https://www.talosintelligence.com/reputation_center/lookup?search=113.786.78.356" target="_blank" class="formulaire ip_user">113.786.78.356</a></td>
                                    <td><a onclick="fingerprint_open()" class="formulaire button is-small is-link is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-fingerprint"></i>
                                            </span>
                                            <span>Fingerprint</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify">
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>19-01-2017</td>
                                    <td>12:38</td>
                                    <td>Formulaire</td>
                                    <td>Création</td>
                                    <td>Visite</td>
                                    <td>Social</td>
                                    <td><a href="https://www.talosintelligence.com/reputation_center/lookup?search=113.786.78.356" target="_blank" class="formulaire ip_user">113.786.78.356</a></td>
                                    <td><a onclick="fingerprint_open()" class="formulaire button is-small is-link is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-fingerprint"></i>
                                            </span>
                                            <span>Fingerprint</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify">
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>19-01-2017</td>
                                    <td>12:38</td>
                                    <td>Formulaire</td>
                                    <td>Consultation</td>
                                    <td>Visite</td>
                                    <td>Social</td>
                                    <td><a href="https://www.talosintelligence.com/reputation_center/lookup?search=113.786.78.356" target="_blank" class="formulaire ip_user">113.786.78.356</a></td>
                                    <td><a onclick="fingerprint_open()" class="formulaire button is-small is-link is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-fingerprint"></i>
                                            </span>
                                            <span>Fingerprint</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify">
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>19-01-2017</td>
                                    <td>12:38</td>
                                    <td>Formulaire</td>
                                    <td>Consultation</td>
                                    <td>Visite</td>
                                    <td>Social</td>
                                    <td><a href="https://www.talosintelligence.com/reputation_center/lookup?search=113.786.78.356" target="_blank" class="formulaire ip_user">113.786.78.356</a></td>
                                    <td><a onclick="fingerprint_open()" class="formulaire button is-small is-link is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-fingerprint"></i>
                                            </span>
                                            <span>Fingerprint</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify">
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>19-01-2017</td>
                                    <td>12:38</td>
                                    <td>Formulaire</td>
                                    <td>Consultation</td>
                                    <td>Visite</td>
                                    <td>Social</td>
                                    <td><a href="https://www.talosintelligence.com/reputation_center/lookup?search=113.786.78.356" target="_blank" class="formulaire ip_user">113.786.78.356</a></td>
                                    <td><a onclick="fingerprint_open()" class="formulaire button is-small is-link is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-fingerprint"></i>
                                            </span>
                                            <span>Fingerprint</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify">
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!----------- END SECTION -------->
        </section>
        <!----------- END WRAP -------->
    </div>

    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>
    <?php include('assets/php/modal/fingerprint.php'); ?>

</body>

</html>
