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
                            <a href="form_psy.php">
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
                        <div class="column is-9 h1home">
                            <h1 class="subtitle is-4">Formulaire psy</h1>
                        </div>
                        <div class="column">
                            <a href="home_psy.php" class="button is-outlined is-small danger-invers sw_returnforms">
                                <span class="icon is-small">
                                    <i class="far fa-arrow-left"></i>
                                </span>
                                <span>Retour</span>
                            </a>
                        </div>
                    </div>


                    <!--------------------------------------- Information d'entretien ------------------------------------------>
                    <div class="case casetop">
                        <h2 class="subtitle is-6" id="5">Informations</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Type d'intervention</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="typeform" onclick="typeform_fc()">
                                        <option value="">--</option>
                                        <option value="entretien">Soutien psy</option>
                                        <option value="visite">Visite</option>
                                        <option value="accompagnement">Accompagnement</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Date intervention</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" value="<?php $date = date(" d·m·Y"); Print("$date"); ?>" disabled>
                                <div data-toggle="datepicker"></div>
                            </div>
                            <div class="column">
                                <h6>Intervenant</h6>
                                <input class="formulaire input is-small" type="text" placeholder="Text input" value="Stephanie" disabled>
                            </div>
                        </div>
                    </div>



                    <!--------------------------- SOUTIEN ------------------------------>
                    <div class="typeform_hide" id="entretien" style="display:none">
                        <h1 class="title_form subtitle is-4"> Soutien psy</h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Cadre entretien</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="ouverturedossier" onclick="ouverturedossier_fc()">
                                            <option value="permanence">Permanence/Rdv</option>
                                            <option value="urgence">Urgence</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="motifurgence" style="display:none">
                                    <h6>Motif urgence</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="motifurgence_select" multiple>
                                            <?php include('assets/php/lists/psy/motifsurgence.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Type d'appui</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="premiereconsult">1° consultation</option>
                                            <option value="suivi">Suivi psychiatrique</option>
                                            <option value="therapie">Thérapie individuelle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarter">
                                    <h6>Orientation</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="orientation" multiple>
                                            <?php include('assets/php/lists/orientation.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Observations"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN SOUTIEN ------------------------------>





                    <!--------------------------- VISITE ------------------------------>
                    <div class="typeform_hide" id="visite" style="display:none">
                        <h1 class="title_form subtitle is-4"> Visite </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Date de lavisite</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Lieu de la visite</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="domicile">A domicile</option>
                                            <option value="police">Police</option>
                                            <option value="tribunal">Tribunal</option>
                                            <option value="lieudesoin">Lieu de soin</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters">
                                    <h6>Informations sur le lieu</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Lieu">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Motif de la visite</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="psyvisite_motif" onclick="psyvisite_motif_fc()">
                                            <option value="">--</option>
                                            <option value="accompagnateur">Accompagnateur</option>
                                            <option value="maintiensuivi">Maintien du suivi</option>
                                            <option value="evaluation">Évaluation de la vulnérabilité</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarter psyvisite_motifhide" id="psyvisite_motifcolab" style="display:none">
                                    <div class="level columns">
                                        <div class="column is-one-third">
                                            <h6>Collaboration avec</h6>
                                            <div class="select is-small">
                                                <select class="formulaire">
                                                    <option value="">--</option>
                                                    <option value="social">Service social</option>
                                                    <option value="sante">Service santé</option>
                                                    <option value="education">Service éducation</option>
                                                    <option value="insertion">Service insertion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="column is-two-thirds">
                                            <h6>Motif</h6>
                                            <input class="formulaire input is-small is-100" placeholder="Informations">
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-three-quarters psyvisite_motifhide" id="psyvisite_motifchamp" style="display:none">
                                    <h6>Autre</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Motif">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Observations"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN VISITE ------------------------------>








                    <!--------------------------- ACCOMPAGNEMENT ------------------------------>
                    <div class="typeform_hide" id="accompagnement" style="display:none">
                        <h1 class="title_form subtitle is-4"> Accompagnement </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date d'accompagnement</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Lieu d'accompagnement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="psyacc_lieu" onclick="psyacc_lieu_fc()">
                                            <?php include('assets/php/lists/psy/structures_acc.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters psyacc_lieuhide" id="psyacc_associationchamp" style="display:none">
                                    <h6>Nom et adresse de l'association</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Nom">
                                </div>
                                <div class="column is-three-quarters psyacc_lieuhide" id="psyacc_lieuchamp" style="display:none">
                                    <h6>Autre</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Lieu">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Observations"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ACCOMPAGNEMENT ------------------------------>





                    <!-------------------------- VALIDATION FORMULAIRE ---------------------------->
                    <div class="typeform_hide" id="validform" style="display:none">
                        <?php include('assets/php/cases/valid_form.php'); ?>
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
    <script>
        new SlimSelect({
            showSearch: false,
            select: '#motifurgence_select'
        })

        new SlimSelect({
            showSearch: false,
            select: '#orientation'
        })

    </script>

</body>

</html>
