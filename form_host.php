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
                            <a href="form_host.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">Historique</p>
                    <?php include('assets/php/fake/hist_host'); ?>
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
                            <h1 class="subtitle is-4">Formulaire hébergement</h1>
                        </div>
                        <div class="column">
                            <a href="home_host.php" class="button is-outlined is-small danger-invers sw_returnforms">
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
                                        <option value="hebergement_entree">Entrée en hébergement</option>
                                        <option value="pointdossier">Point de situation</option>
                                        <option value="etudedossier">Note d'observation</option>
                                        <option value="hebergement_sortie">Sortie d'hébergement</option>
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
                                <input class="formulaire input is-small" type="text" placeholder="Intervenant" value="Blaise" disabled>
                            </div>
                        </div>
                    </div>





                    <!--------------------------- ENTRÉE HEBERGEMENT ------------------------------>
                    <div class="typeform_hide" id="hebergement_entree" style="display:none">
                        <h1 class="title_form subtitle is-4">Entrée en hébergement</h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date d'entrée prévue</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column">
                                    <h6>Nom de l'hébergement</h6>
                                    <input class="formulaire input is-small" placeholder="Nom">
                                </div>
                                <div class="column">
                                    <h6>Motif de mise à l'abri</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="seule">Femme seule</option>
                                            <option value="enceinte">Femme enceinte</option>
                                            <option value="seulenfants">Parents seuls avec enfants</option>
                                            <option value="malade">Personne malade</option>
                                            <option value="Com_min">Communauté minoritaire</option>
                                            <option value="psy">Fragilité psy</option>
                                            <option value="famille">Famille</option>
                                            <option value="recent">Arrivée récente</option>
                                            <option value="mena16">Mena de -16 ans</option>
                                            <option value="mena">Mena</option>
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
                    <!--------------------------- FIN ENTRÉE HEBERGEMENT ------------------------------>





                    <!--------------------------- ETUDE POINT ------------------------------>
                    <div class="typeform_hide" id="pointdossier" style="display:none">
                        <h1 class="title_form subtitle is-4">Point de situation</h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Observations"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN POINT SITUATION ------------------------------>





                    <!--------------------------- ETUDE DOSSIER ------------------------------>
                    <div class="typeform_hide" id="etudedossier" style="display:none">
                        <h1 class="title_form subtitle is-4">Note d'observation</h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Observations"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ETUDE DOSSIER ------------------------------>





                    <!--------------------------- SORTIE HEBERGEMENT ------------------------------>
                    <div class="typeform_hide" id="hebergement_sortie" style="display:none">
                        <h1 class="title_form subtitle is-4">Sortie d'un hébergement</h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Date de sortie</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column">
                                    <h6>Destination à la sortie</h6>
                                    <div class="select is-small"> <select class="formulaire">
                                            <?php include('assets/php/lists/host/sortiehost.php'); ?>
                                        </select> </div>
                                </div>
                                <div class="column is-half">
                                    <h6>Informations complémentaires</h6>
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
                    <!--------------------------- FIN SORTIE HEBERGEMENT ------------------------------>





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
    <script src="assets/js/multiselect/form_social.js" type="application/javascript"></script>


</body>

</html>
