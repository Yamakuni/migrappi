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
                            <a href="form_eduyear.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouvelle année</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="form_education.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">Années</p>
                    <?php include('assets/php/fake/hist_eduyear'); ?>
                    <p class="menu-label">Historique</p>
                    <?php include('assets/php/fake/hist_global'); ?>
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
                            <h1 class="subtitle is-4">Formulaire éducation</h1>
                        </div>
                        <div class="column">
                            <a href="home_education.php" class="button is-outlined is-small danger-invers sw_returnforms">
                                <span class="icon is-small">
                                    <i class="far fa-arrow-left"></i>
                                </span>
                                <span>Retour</span>
                            </a>
                        </div>
                    </div>


                    <!--------------------------------------- Information d'entretien ------------------------------------------>
                    <div class="case casetop">
                        <h2 class="subtitle is-6">Informations</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Type d'intervention</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="typeform" onclick="typeform_fc()">
                                        <option value="">--</option>
                                        <option value="entretien">Entretien</option>
                                        <option value="visite">Visite</option>
                                        <option value="accompagnement">Accompagnement</option>
                                        <option value="etudedossier">Étude de dossier</option>
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
                                <input class="formulaire input is-small" type="text" placeholder="Text input" value="Blaise" disabled>
                            </div>
                        </div>
                    </div>





                    <!--------------------------- ENTRETIEN ------------------------------>
                    <div class="typeform_hide" id="entretien" style="display:none">
                        <h1 class="title_form subtitle is-4"> Éntretien </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column">
                                    <h6>Type d'entretien</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="physique">Physique</option>
                                            <option value="telephonique">Télephonique</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-two-thirds">
                                    <h6>Personne présentes à l'entretien</h6>
                                    <div class="select is-small multiple"><select class="formulaire" id="famille_entretien_edu" multiple>
                                            <?php include('assets/php/lists/famille.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Orientation</h6>
                                    <div class="select is-small multiple"><select class="formulaire" id="orientation_entretien_edu" multiple>
                                            <?php include('assets/php/lists/education/orientation_edu.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ENTRETIEN ------------------------------>



                    <!--------------------------- VISITE ------------------------------>
                    <div class="typeform_hide" id="visite" style="display:none">
                        <h1 class="title_form subtitle is-4"> Visite </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date de la visite</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-two-third">
                                    <h6>Personne rencontrées</h6>
                                    <div class="select is-small multiple"><select class="formulaire" id="rencontres_edu" multiple>
                                            <?php include('assets/php/lists/education/rencontres_edu.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-one-third">
                                    <h6>Autre</h6>
                                    <input class="formulaire input is-small" placeholder="Personne">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
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
                                    <h6>Date de l'accompagnement</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Lieu d'accompagnement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/education/structures_edu.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters">
                                    <h6>Informations complémentaires</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Informations">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ACCOMPAGNEMENT ------------------------------>





                    <!--------------------------- ETUDE DOSSIER ------------------------------>
                    <div class="typeform_hide" id="etudedossier" style="display:none">
                        <h1 class="title_form subtitle is-4"> Étude de dossier </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ETUDE DOSSIER ------------------------------>





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
            select: '#famille_entretien_edu'
        })

        new SlimSelect({
            showSearch: false,
            select: '#orientation_entretien_edu'
        })

        new SlimSelect({
            showSearch: false,
            select: '#rencontres_edu'
        })

    </script>

</body>

</html>
