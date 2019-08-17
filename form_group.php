<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>


<body class="has-navbar-fixed-top">


    <!-------------------------------------------------- TOPNAV ------------------------------------------------------>
    <?php include('assets/php/_partials/_topnav.php'); ?>



    <!------------------------------------------ SUBTITLE ------------------------------------------>
    <div class="title_formtop  columns">
        <div class="column is-1"></div>
        <div class="column is-10">
            <div class="level columns">
                <div class="column is-9">
                    <h1 class="subtitle is-4">Formulaire d'atelier de groupe</h1>
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


    <!----------------------------------------------- WRAP --------------------------------------------------->
    <div class="wrap columns">
        <section class="column">
            <div class="columns">
                <div class="column is-1"></div>
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-10">




                    <!--------------------------------------- Information d'entretien ------------------------------------------>
                    <div class="case casetop">
                        <h2 class="subtitle is-6" id="5">Informations</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Type d'atelier</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="atelier_type" onclick="atelier_type_fc()">
                                        <option value="">--</option>
                                        <option value="accueil">Service accueil</option>
                                        <option value="insertion">Service insertion</option>
                                        <option value="psy">Service psy</option>
                                        <option value="sante">Service santé</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Date entretien</h6>
                                <input class="formulaire input is-small" data-toggle="datepicker" value="07·11·2018" disabled>
                                <div data-toggle="datepicker"></div>
                            </div>
                            <div class="column">
                                <h6>Intervenant</h6>
                                <input class="formulaire input is-small" type="text" placeholder="Text input" value="Stephanie" disabled>
                            </div>
                        </div>
                    </div>





                    <!--------------------------- SERVICE INSERTION ------------------------------>
                    <div class="atelier_typehide" id="insertionatelier" style="display:none">

                        <div class="title_form level columns">
                            <h1 class="column is-one-quarter subtitle is-4">Service Insertion</h1>
                            <div class="column">
                                <h6>Type d'intervention</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="insertionatelier_type" onclick="insertionatelier_type_fc()">
                                        <option value="">--</option>
                                        <option value="emploi">Info emploi</option>
                                        <option value="entreprenariat">Info Auto-entrepreunariat</option>
                                        <option value="evaluation">Évaluation TPP</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="insertionatelier_typehide" id="insertionatelier_case" style="display:none">
                            <div class="case">
                                <h2 class="subtitle is-6 insertionatelier_typehide" id="insertionatelier_type_emploi" style="display:none">Atelier Info emploi</h2>
                                <h2 class="subtitle is-6 insertionatelier_typehide" id="insertionatelier_type_entreprenariat" style="display:none">Info Auto-entrepreunariat</h2>
                                <h2 class="subtitle is-6 insertionatelier_typehide" id="insertionatelier_type_evaluation" style="display:none">Atelier Évaluation TPP</h2>
                                <div class="level columns">
                                    <div class="column">
                                        <h6>Date de l'atelier</h6>
                                        <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                        <div data-toggle="datepicker"></div>
                                    </div>
                                </div>
                                <div class="level columns">
                                    <div class="column">
                                        <h6>Lieu de l'atelier</h6>
                                        <div class="select is-small">
                                            <select class="formulaire" id="insertionatelier_lieu" onclick="insertionatelier_lieu_fc()">
                                                <option value="">--</option>
                                                <option value="centre">Centre</option>
                                                <option value="nocentre">Hors centre</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column is-three-quarters" id="insertionatelier_lieuchamp" style="display:none">
                                        <h6>Lieu de l'atelier</h6>
                                        <input class="formulaire input is-small is-100" placeholder="Lieu">
                                    </div>
                                </div>
                                <div class="insertionatelier_typehide" id="insertionatelier_infoemploi" style="display:none">
                                    <div class="level columns">
                                        <div class="column is-one-quarter">
                                            <h6>Personnes en formation</h6>
                                            <div class="select is-small">
                                                <select class="formulaire">
                                                    <option value="">--</option>
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <h6>Profils des usagers</h6>
                                            <div class="select is-small">
                                                <select class="formulaire" id="insertionatelier_typeactivte" onclick="insertionatelier_typeactivte_fc()">
                                                    <option value="">--</option>
                                                    <option value="diplomes">Personnes diplômés</option>
                                                    <option value="artisants">Artisants</option>
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="column is-half" id="insertionatelier_typeactivitechamp" style="display:none">
                                            <h6>Autre</h6>
                                            <input class="formulaire input is-small is-100" placeholder="Type d'activité">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case">
                                <h2 class="subtitle is-6">Participants</h2>
                                <table class="table is-hoverable is-fullwidth table_noborder">
                                    <thead>
                                        <tr class="level columns">
                                            <th class="column is-2">N° de dossier</th>
                                            <th class="column is-9">Observations</th>
                                            <th class="column">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody id="insertiongroup_list">
                                        <tr class="level columns">
                                            <td class="column is-2">
                                                <input class="formulaire input is-small" type="text" placeholder="N° de dossier">
                                            </td>
                                            <td class="column is-9 is-100">
                                                <textarea class="formulaire textarea is-small is-100" rows="1" placeholder="Observations"></textarea>
                                            </td>
                                            <td class="column"><button type="button" id="add_insertiongroup" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN SERVICE INSERTION ------------------------------>






                    <!--------------------------- SERVICE PSY ------------------------------>
                    <div class="atelier_typehide" id="psyatelier" style="display:none">

                        <div class="title_form level columns">
                            <h1 class="column is-one-quarter subtitle is-4">Service Psy</h1>
                            <div class="column">
                                <h6>Type d'intervention</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="psyatelier_type" onclick="psyatelier_type_fc()">
                                        <option value="">--</option>
                                        <option value="arttherapie">Art thérapie</option>
                                        <option value="mediation">Médiation psycho-sociale</option>
                                        <option value="parole">Groupe de parole</option>
                                        <option value="sensibilisation">Groupe de sensibilisation</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="psyatelier_typehide" id="psyatelier_case" style="display:none">
                            <div class="case">
                                <h2 class="subtitle is-6 psyatelier_typehide" id="psyatelier_type_arttherapie" style="display:none">Art thérapie</h2>
                                <h2 class="subtitle is-6 psyatelier_typehide" id="psyatelier_type_mediation" style="display:none">Médiation psycho-sociale</h2>
                                <h2 class="subtitle is-6 psyatelier_typehide" id="psyatelier_type_parole" style="display:none">Groupe de parole</h2>
                                <h2 class="subtitle is-6 psyatelier_typehide" id="psyatelier_type_sensibilisation" style="display:none">Groupe de sensibilisation</h2>
                                <div class="level columns">
                                    <div class="column">
                                        <h6>Date de l'atelier</h6>
                                        <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                        <div data-toggle="datepicker"></div>
                                    </div>
                                </div>
                                <div class="level columns">
                                    <div class="column">
                                        <h6>Lieu de l'atelier</h6>
                                        <div class="select is-small">
                                            <select class="formulaire" id="psyatelier_lieu" onclick="psyatelier_lieu_fc()">
                                                <option value="">--</option>
                                                <option value="centre">Centre</option>
                                                <option value="nocentre">Hors centre</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column is-three-quarters" id="psyatelier_lieuchamp" style="display:none">
                                        <h6>Lieu de l'atelier</h6>
                                        <input class="formulaire input is-small is-100" placeholder="Lieu">
                                    </div>
                                </div>
                                <div class="psyatelier_typehide" id="psyatelier_typeart" style="display:none">
                                    <div class="level columns">
                                        <div class="column is-one-quarter">
                                            <h6>Type d'activité</h6>
                                            <div class="select is-small">
                                                <select class="formulaire" id="psyatelier_typeactivte" onclick="psyatelier_typeactivte_fc()">
                                                    <option value="">--</option>
                                                    <option value="art_plastique">Art plastiques</option>
                                                    <option value="expression_corporelle">Expression corporelle</option>
                                                    <option value="chant">Chant</option>
                                                    <option value="rap">Rap/Slam</option>
                                                    <option value="contes">Contes</option>
                                                    <option value="theatre">Théatre</option>
                                                    <option value="respiration">respiration</option>
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="column is-one-quarter" id="psyatelier_typeactivitechamp" style="display:none">
                                            <h6>Autre</h6>
                                            <input class="formulaire input is-small" placeholder="Type d'activité">
                                        </div>
                                        <div class="column ">
                                            <h6>Thème de l'activité</h6>
                                            <input class="formulaire input is-small is-100" placeholder="Informations">
                                        </div>
                                    </div>
                                </div>
                                <div class="psyatelier_typehide" id="psyatelier_typegroup" style="display:none">
                                    <div class="level columns">
                                        <div class="column is-full">
                                            <h6>Thème de l'atelier</h6>
                                            <input class="formulaire input is-small is-100" placeholder="Informations">
                                        </div>
                                    </div>
                                </div>
                                <div class="level columns">
                                    <div class="column">
                                        <h6>Âge du groupe</h6>
                                        <div class="select is-small">
                                            <select class="formulaire">
                                                <option value="nodistinction">Sans disctinction</option>
                                                <option value="intergenerationnel">Intergénérationnel</option>
                                                <option value="mineur">Mineur</option>
                                                <option value="mena">Mena</option>
                                                <option value="adulte">Adulte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <h6>Genre du groupe</h6>
                                        <div class="select is-small">
                                            <select class="formulaire">
                                                <option value="mixte">Mixte</option>
                                                <option value="femme">Femme</option>
                                                <option value="homme">Homme</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <h6>Autres informations sur public</h6>
                                        <input class="formulaire input is-small is-100" placeholder="Informations">
                                    </div>
                                </div>
                            </div>
                            <div class="case">
                                <h2 class="subtitle is-6">Participants</h2>
                                <table class="table is-hoverable is-fullwidth table_noborder">
                                    <thead>
                                        <tr class="level columns">
                                            <th class="column is-2">N° de dossier</th>
                                            <th class="column is-9">Observations</th>
                                            <th class="column">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody id="psygroup_list">
                                        <tr class="level columns">
                                            <td class="column is-2">
                                                <input class="formulaire input is-small" type="text" placeholder="N° de dossier">
                                            </td>
                                            <td class="column is-9 is-100">
                                                <textarea class="formulaire textarea is-small is-100" rows="1" placeholder="Observations"></textarea>
                                            </td>
                                            <td class="column"><button type="button" id="add_psygroup" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN SERVICE PSY ------------------------------>





                    <!--------------------------- SERVICE SANTE ------------------------------>
                    <div class="atelier_typehide" id="santeatelier" style="display:none">
                        <div class="case">
                            <h2 class="subtitle is-6">Groupe de sensibilisation</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date de l'atelier</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column">
                                    <h6>Thème de l'atelier</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="parcours">Parcours de soin</option>
                                            <option value="prise_en_charge">Prise en charge</option>
                                            <option value="tuberculose">Parcours de soin</option>
                                            <option value="education_sexuelle">Éducation sexuelle</option>
                                            <option value="sensib_et_depistage">Sensibilisation et dépistage</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="column is-half">
                                    <h6>Informations complémentaires</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Informations">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Lieu de l'atelier</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="santeatelier_lieu" onclick="santeatelier_lieu_fc()">
                                            <option value="">--</option>
                                            <option value="centre">Centre</option>
                                            <option value="nocentre">Hors centre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters" id="santeatelier_lieuchamp" style="display:none">
                                    <h6>Lieu de l'atelier</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Lieu">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Âge du groupe</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="nodistinction">Sans disctinction</option>
                                            <option value="intergenerationnel">Intergénérationnel</option>
                                            <option value="mineur">Mineur</option>
                                            <option value="mena">Mena</option>
                                            <option value="adulte">Adulte</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Genre du groupe</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="mixte">Mixte</option>
                                            <option value="femme">Femme</option>
                                            <option value="homme">Homme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half">
                                    <h6>Autres informations sur public</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Informations">
                                </div>
                            </div>
                        </div>
                        <div class="case">
                            <h2 class="subtitle is-6">Participants</h2>
                            <table class="table is-hoverable is-fullwidth table_noborder">
                                <thead>
                                    <tr class="level columns">
                                        <th class="column is-2">N° de dossier</th>
                                        <th class="column is-9">Observations</th>
                                        <th class="column">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody id="psygroup_list">
                                    <tr class="level columns">
                                        <td class="column is-2">
                                            <input class="formulaire input is-small" type="text" placeholder="N° de dossier">
                                        </td>
                                        <td class="column is-9 is-100">
                                            <textarea class="formulaire textarea is-small is-100" rows="1" placeholder="Observations"></textarea>
                                        </td>
                                        <td class="column"><button type="button" id="add_psygroup" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--------------------------- FIN SERVICE SANTE ------------------------------>





                    <!-------------------------- VALIDATION FORMULAIRE ---------------------------->
                    <div class="typeform_hide" id="validform" style="display:none">
                        <?php include('assets/php/cases/valid_form.php'); ?>
                    </div>
                    <!------------------------- FIN VALIDATION FORMULAIRE -------------------------->





                    <!----------- END MAIN -------->
                </div>
            </div>
        </section>
    </div>

    <!----------------------------------------- SCRIPTS --------------------------------------->
    <?php include('assets/php/_partials/_script.php'); ?>
    <script src="assets/js/multiselect/form_psy.js" type="application/javascript"></script>


</body>

</html>
