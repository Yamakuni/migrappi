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
                        <div class="column is-9 h1home">
                            <h1 class="subtitle is-4">Enregistrement d'une nouvelle année</h1>
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
                                <h6>Type d'année</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="eduyearform" onclick="eduyearform_fc()">
                                        <option value="">--</option>
                                        <option value="scolaire">Scolaire</option>
                                        <option value="formation">Formation</option>
                                    </select>
                                </div>
                            </div>

                            <div class="column">
                                <h6>Date création</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" value="<?php $date = date(" d·m·Y"); Print("$date"); ?>" disabled>
                                <div data-toggle="datepicker"></div>
                            </div>
                            <div class="column">
                                <h6>Intervenant</h6>
                                <input class="formulaire input is-small" type="text" placeholder="Intervenant" value="Blaise" disabled>
                            </div>
                        </div>
                    </div>



                    <!--------------------------- ECOLE ------------------------------>
                    <div class="eduyearform_hide" id="scolaire" style="display:none">
                        <h1 class="title_form subtitle is-4"> Année scolaire </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Année scolaire</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/education/anneescolaire.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column ">
                                    <h6>Classe actuelle</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/education/niveauclasse.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column">
                                    <h6>Date d'inscription</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column">
                                    <h6>Type d'école</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="public">Publique</option>
                                            <option value="enf">Éducation non formelle</option>
                                            <option value="prive">Privé</option>
                                            <option value="privesocial">Privée social</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Nom de l'école</h6>
                                    <p><input class="formulaire input is-small" type="text" placeholder="Nom"></p>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column">
                                    <h6>Présence</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="regulier">Régulier</option>
                                            <option value="nonregulier">Non régulier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Notation semestre 1</h6>
                                    <p><input class="formulaire input is-small" type="text" placeholder="Note"></p>
                                </div>
                                <div class="column">
                                    <h6>Notation semestre 2</h6>
                                    <p><input class="formulaire input is-small" type="text" placeholder="Note"></p>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column">
                                    <h6>Appréciation de l'école sur le comportement</h6>
                                    <textarea class="formulaire textarea is-small" rows="3" placeholder="Commentaires"></textarea>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Bilan année</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="bilanscolaire" onclick="bilanscolaire_fc()">
                                            <option value="">--</option>
                                            <option value="classesup">Passe en classe supérieure</option>
                                            <option value="redoublement">Redoublement</option>
                                            <option value="desinscription">Désinscription</option>
                                            <option value="diplome">Obtention diplôme final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column bilanscolaire_hide" id="desinscription_scolairedate" style="display:none">
                                    <h6>Date de désinscription</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column bilanscolaire_hide" id="desinscription_scolairemotif" style="display:none">
                                    <h6>Motif de désinscription</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="motifselect_scolaire" onclick="motifselect_scolaire_fc()">
                                            <?php include('assets/php/lists/education/motifdesinscription.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="desinscription_scolaireautre" style="display:none">
                                    <h6>Autre</h6>
                                    <input class="formulaire input is-small" placeholder="Motif">
                                </div>
                                <div class="column bilanscolaire_hide" id="affectationsup_scolaire" style="display:none">
                                    <h6>Affectation année suivante</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="classesup">Passe en classe supérieure</option>
                                            <option value="redoublement">Redoublement</option>
                                            <option value="desinscription">Désinscription</option>
                                            <option value="diplome">Obtention diplôme final</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Observation"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ECOLE ------------------------------>





                    <!--------------------------- FORMATION ------------------------------>
                    <div class="eduyearform_hide" id="formation" style="display:none">
                        <h1 class="title_form subtitle is-4">Année de formation</h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Année de formation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/education/anneescolaire.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Secteur de formation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/domainepro.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Date d'inscription</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column">
                                    <h6>Lieu de formation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="lieuformation" onclick="lieuformation_fc()">
                                            <option value="">--</option>
                                            <option value="caritas">Caritas</option>
                                            <option value="exterieur">Exterieur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="lieuformation_ext" style="display:none">
                                    <h6>Nom de l'établissement</h6>
                                    <p><input class="formulaire input is-small" type="text" placeholder="Nom"></p>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Centre conventionnée avec</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="conventioncentre" onclick="conventioncentre_fc()">
                                            <?php include('assets/php/lists/education/centreconventionne.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="conventioncentre_autre" style="display:none">
                                    <h6>Nom de l'institution</h6>
                                    <p><input class="formulaire input is-small" type="text" placeholder="Nom"></p>
                                </div>
                            </div>

                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Durée formation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/education/dureeformation.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Date de fin de formation (prévue)</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Résultat</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="bilanformation" onclick="bilanformation_fc()">
                                            <option value="">--</option>
                                            <option value="classesup">Passe en année supérieure</option>
                                            <option value="desinscription">Interruption</option>
                                            <option value="diplome">Obtention diplôme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column bilanformation_hide" id="desinscription_formationdate" style="display:none">
                                    <h6>Date d'interruption</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column bilanformation_hide" id="desinscription_formationmotif" style="display:none">
                                    <h6>Motif d'interruption'</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="motifselect_formation" onclick="motifselect_formation_fc()">
                                            <?php include('assets/php/lists/education/motifdesinscription.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="desinscription_formationautre" style="display:none">
                                    <h6>Autre</h6>
                                    <input class="formulaire input is-small" placeholder="Motif">
                                </div>
                                <div class="column bilanformation_hide" id="affectationsup_formation" style="display:none">
                                    <h6>Affectation année suivante</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="poursuiteformation">Poursuite de la formation</option>
                                            <option value="stage">Stage</option>
                                            <option value="emploiformel">Emploi formel</option>
                                            <option value="emploiinformel">Emploi informel</option>
                                            <option value="agr">AGR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Activité suite à la formation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="tpp">TPP</option>
                                            <option value="Coopérative">coopérative</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-two-thirds">
                                    <h6>Informations complémentaires</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Informations">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN FORMATION ------------------------------>





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
            select: '#rencontres_edu'
        })


        new SlimSelect({
            showSearch: false,
            select: '#structures_edu'
        })

    </script>

</body>

</html>
