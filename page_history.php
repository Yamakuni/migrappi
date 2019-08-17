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
                    <h1 class="subtitle is-4">Historique de prise en charge</h1>
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
                                <h6>Numéro de dossier</h6>
                                <p><input class="formulaire input is-small" type="text" value="C14687" disabled></p>
                            </div>
                            <div class="column">
                                <h6>Prénom</h6>
                                <p><input class="formulaire input is-small" type="text" value="Aya" disabled></p>
                            </div>
                            <div class="column">
                                <h6>Nom</h6>
                                <p><input class="formulaire input is-small" type="text" value="Nakamura" disabled></p>
                            </div>
                            <div class="column">
                                <h6>Date de naissance</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" value="09·11·1998" disabled>
                                <div data-toggle="datepicker"></div>
                            </div>
                        </div>
                    </div>


                    <!------------------------------------------ Historique ------------------------------------------>
                    <div class="case casefull">
                        <h2 class="subtitle is-6">Historique des interventions</h2>
                        <table class="table is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <th class="first_table">Date</th>
                                    <th>Centre</th>
                                    <th>Service</th>
                                    <th>Formulaire</th>
                                    <th>Contexte</th>
                                    <th>Intervenant</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="first_table">19-01-2017</td>
                                    <td>CAM</td>
                                    <td>Accueil</td>
                                    <td>Accueil</td>
                                    <td>Permanence/rdv</td>
                                    <td>Louise</td>
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
                                    <td class="first_table">21-01-2017</td>
                                    <td>CAM</td>
                                    <td>Social</td>
                                    <td>Entretien</td>
                                    <td>Permanence/rdv</td>
                                    <td>Fatiha</td>

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
                                    <td class="first_table">22-01-2017</td>
                                    <td>CAM</td>
                                    <td>Santé</td>
                                    <td>Entretien</td>
                                    <td>Permanence/rdv</td>
                                    <td>Stéphanie</td>
                                    <td><a class="formulaire button is-small is-info is-outlined" disabled>
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify" disabled>
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="first_table">30-01-2017</td>
                                    <td>CAM</td>
                                    <td>Insertion</td>
                                    <td>Visite</td>
                                    <td>Permanence/rdv</td>
                                    <td>Khadija</td>
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
                                    <td class="first_table">10-02-2017</td>
                                    <td>CAM</td>
                                    <td>Psy</td>
                                    <td>Entretien</td>
                                    <td>Urgence</td>
                                    <td>Stéphanie</td>
                                    <td><a class="formulaire button is-small is-info is-outlined" disabled>
                                            <span class="icon is-small">
                                                <i class="far fa-folder-open"></i>
                                            </span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td><a class="formulaire button is-outlined is-small modify" disabled>
                                            <span class="icon is-small">
                                                <i class="far fa-file-pdf"></i>
                                            </span>
                                            <span>Pdf</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="first_table">01-04-2017</td>
                                    <td>CAM</td>
                                    <td>Social</td>
                                    <td>Entretien</td>
                                    <td>Permanence/rdv</td>
                                    <td>Blaise</td>
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

</body>

</html>
