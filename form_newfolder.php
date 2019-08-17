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
                    <h1 class="subtitle is-4">Création d'un nouveau dossier</h1>
                </div>
                <a class="formulaire button is-outlined is-small danger-invers sw_returnforms">
                    <span class="icon is-small">
                        <i class="far fa-arrow-left"></i>
                    </span>
                    <span>Retour</span>
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
                        <h2 class="subtitle is-6">Information d'entretien</h2>
                        <div class="level columns">
                            <div class="column is-one-third">
                                <h6>N° de dossier</h6>
                                <p><input class="formulaire input is-small" type="text" name="folder_number" value="C14687" disabled></p>
                            </div>
                            <div class="column">
                                <h6>Intervenant</h6>
                                <p><input class="formulaire input is-small" type="text" value="Myriam" disabled></p>
                            </div>

                            <div class="column">
                                <h6>Date création dossier</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" value="<?php $date = date(" d·m·Y"); Print("$date"); ?>" disabled>
                                <div data-toggle="datepicker"></div>
                            </div>
                        </div>
                    </div>

                    <!--------------------------------------- Identité ------------------------------------------>
                    <div class="case">
                        <h2 class="subtitle is-6">Identité de l'usager</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Prénom</h6>
                                <p><input class="formulaire input is-small" type="text" name="first_name" placeholder="Prenom"></p>
                            </div>
                            <div class="column">
                                <h6>Nom</h6>
                                <p><input class="formulaire input is-small" type="text" name="name" placeholder="Nom"></p>
                            </div>
                            <div class="column">
                                <h6>Nationalité</h6>
                                <div class="select is-small"><select>
                                        <?php include('assets/php/lists/pays.php'); ?>
                                    </select></div>
                            </div>
                        </div>

                        <div class="level columns">
                            <div class="column is-one-third">
                                <h6>Genre</h6>
                                <div class="select is-small"><select class="formulaire">
                                        <option value="neutre">Neutre</option>
                                        <option value="homme">Homme</option>
                                        <option value="femme">Femme</option>
                                    </select></div>
                            </div>
                            <div class="column">
                                <h6>Date de naissance</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                <div data-toggle="datepicker"></div>
                            </div>
                            <div class="column">
                                <h6>Langue principale</h6>
                                <div class="select is-small"><select class="formulaire">
                                        <option value="french">Français</option>
                                        <option value="english">Anglais</option>
                                        <option value="spanish">Espagnol</option>
                                        <option value="darija">Darija</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>


                    <!------------------------------------------ Spécificité ------------------------------------------>
                    <div class="case">
                        <h2 class="subtitle is-6">Spécificité</h2>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>MENA</h6>
                                <div class="select is-small"><select class="formulaire">
                                        <option value="non">Non</option>
                                        <option value="oui">Oui</option>
                                    </select></div>
                            </div>
                            <div class="column">
                                <h6>Cadre entretien</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="ouverturedossier" onclick="ouverturedossier_fc()">
                                        <option value="permanence">Permanence</option>
                                        <option value="urgence">Urgence</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="motifurgence" style="display:none">
                                <h6>Motif urgence</h6>
                                <div class="select is-small multiple">
                                    <select class="formulaire" id="motifurgence_select" multiple>
                                        <?php include('assets/php/lists/motifsurgence.php'); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------------------------------------- Contact ------------------------------------------>
                    <div class="case">
                        <h2 class="subtitle is-6">Contact</h2>
                        <div class="level columns">
                            <div class="column is-one-third">
                                <h6>Télephone personnel</h6>
                                <p><input class="formulaire input is-small" type="text" name="personnal_tel_number" placeholder="N° de télephone personnel"></p>
                            </div>
                            <div class="column">
                                <h6>Télephone d'un ami</h6>
                                <p><input class="formulaire input is-small" type="text" name="friend_tel_number" placeholder="N° de télephone d'un ami"></p>
                            </div>
                            <div class="column">
                                <h6>Télephone au pays</h6>
                                <p><input class="formulaire input is-small" type="text" name="country_tel_number" placeholder="N° de télephone au pays"></p>
                            </div>
                        </div>
                    </div>


                    <!--------------------------------------- Situation ------------------------------------------>
                    <div class="case">
                        <h2 class="subtitle is-6">Situation</h2>
                        <div class="level columns">
                            <div class="column is-two-fifths">
                                <div class="level columns">
                                    <div class="column is-half">
                                        <h6>Ville de résidence</h6>
                                        <div class="select is-small"><select class="formulaire" id="citylist" onclick="citylist_fc()">
                                                <?php include('assets/php/lists/ville.php'); ?>
                                            </select></div>
                                    </div>
                                    <?php include('assets/php/lists/quartiers.php'); ?>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Document d'identité</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="haveid" onclick="haveid_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-two-fifths haveid_hide" id="idtype" style="display:none">
                                <div class="columns">
                                    <div class="column is-half">
                                        <h6>Document principal</h6>
                                        <div class="select is-small">
                                            <select class="select">
                                                <?php include('assets/php/lists/idlist.php'); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <h6>Date de fin de validité</h6>
                                        <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                        <div data-toggle="datepicker"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-------------------------- VALIDATION FORMULAIRE ---------------------------->
                    <div class="case casevalid">
                        <h2 class="subtitle is-6" id="6">Validation du formulaire</h2>
                        <p class="buttons">
                            <a class="button is-success is-outlined is-small">
                                <span class="icon is-small">
                                    <i class="far fa-check"></i>
                                </span>
                                <span>Valider et continuer</span>
                            </a>
                            <a class="button is-info is-outlined is-small sw_waitingfolder">
                                <span class="icon is-small">
                                    <i class="far fa-pause"></i>
                                </span>
                                <span>Mettre en attente</span>
                            </a>
                            <a class="button is-danger is-outlined is-small sw_erasefolder">
                                <span>Annuler le formulaire</span>
                                <span class="icon is-small">
                                    <i class="far fa-times"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                    <!------------------------- FIN VALIDATION FORMULAIRE -------------------------->


                    <!----------- END MAIN -------->
                </div>

            </div>
        </section>
        <!----------- END WRAP -------->
    </div>

    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>
    <script src="assets/js/multiselect/form_newfolder.js" type="application/javascript"></script>

</body>

</html>
