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
                            <a href="form_insertion.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">Recherhe d'emploi</p>
                    <?php include('assets/php/fake/hist_emploi.php'); ?>
                    <p class="menu-label">Tpp</p>
                    <?php include('assets/php/fake/hist_tpp.php'); ?>
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
                            <h1 class="subtitle is-4">Formulaire insertion</h1>
                        </div>
                        <div class="column">
                            <a href="home_insertion.php" class="button is-outlined is-small danger-invers sw_returnforms">
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
                                        <option value="entretien">Recherche d'emploi</option>
                                        <option value="tpp">TPP</option>
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
                                <input class="formulaire input is-small" type="text" placeholder="Text input" value="Mouna" disabled>
                            </div>
                        </div>
                    </div>




                    <!--------------------------- INSERTION ------------------------------>
                    <div class="typeform_hide" id="entretien" style="display:none;">

                        <div class="title_form level columns">
                            <h1 class="column is-one-quarter subtitle is-4">Recherche d'emploi</h1>
                            <div class="column">
                                <h6>Type d'intervention</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="insertiontype" onclick="insertiontype_fc()">
                                        <option value="">--</option>
                                        <option value="inser_entretien">Entretien</option>
                                        <option value="inser_cv">Création CV</option>
                                        <option value="inser_acc">Accompagnement</option>
                                    </select>
                                </div>
                                <label class="checkbox first_entretien insertiontype_int_hide" id="inser_firstentretien_champ" style="display:none;">
                                    <input type="checkbox" id="inser_firstentretien_ask" onclick="inser_firstentretien_ask_fc()">1° entretien
                                </label>
                            </div>
                        </div>
                        <div class="case insertiontype_int_hide" id="inser_entretien" style="display:none;">
                            <h2 class="subtitle is-6">
                                <div class="th2">Situation des besoins</div>
                            </h2>
                            <div class="level columns">
                                <div class="column is-half">
                                    <h6>Diagnostique des besoins</h6>
                                    <div class="select is-small">
                                        <select class="formulaire is-100" id="diagnosticbesoin" onclick="diagnosticbesoin_fc()">
                                            <option value="">--</option>
                                            <option value="adefinir">Projet professionnel / Orientation à définir</option>
                                            <option value="contexte">Connaissance du contexte nécessaire / absence d’information</option>
                                            <option value="maitrise">Manque/absence de maitrise technique de recherche et/ou des outils</option>
                                            <option value="valorisation">Auto-promotion / valorisation</option>
                                            <option value="finsuivi">Fin de suivi</option>
                                        </select>
                                    </div>
                                </div>
                                <?php include('assets/php/lists/insertion/actionamener.php'); ?>
                            </div>
                            <div class="level columns">
                                <div class="column is-half">
                                    <h6>Informations sur besoins</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                                </div>
                                <div class="column diagnosticbesoin_hide" id="diagnosticbesoin_observation" style="display:none">
                                    <h6>Informations sur actions à mener</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-third" id="chgmts_situationeco_btn">
                                    <h6>Changement de situation économique</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="chgmts_situationeco" onclick="chgmts_situationeco_fc()">
                                            <option value="">--</option>
                                            <option value="oui">Oui</option>
                                            <option value="non">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Demande d'appui au démarage</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                            <option value="">--</option>
                                            <option value="oui">Oui</option>
                                            <option value="non">Non</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="case insertiontype_int_hide" id="inser_acc" style="display:none;">
                            <h2 class="subtitle is-6">
                                <div class="th2">Informations accompagnement</div>
                            </h2>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Lieu de l'accompagnement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire is-100" id="typevisite_insertion" onclick="typevisite_insertion_fc()">
                                            <option value="">--</option>
                                            <option value="lieuformation">Lieu de formation</option>
                                            <option value="structure_inser">Structure d'insertion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-one-quarter" id="structure_inserdomaine" style="display:none;">
                                    <h6>Domaine</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/domainepro.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half ">
                                    <h6>Nom de la structure</h6>
                                    <input class="formulaire input is-small is-100" placeholder="Structure">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-100">
                                    <h6>Informations complémentaires</h6>
                                    <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-third" id="chgmts_situationeco_btn">
                                    <h6>Changement de situation économique</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="chgmts_situationeco" onclick="chgmts_situationeco_fc()">
                                            <option value="">--</option>
                                            <option value="oui">Oui</option>
                                            <option value="non">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Demande d'appui au démarage</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                            <option value="">--</option>
                                            <option value="oui">Oui</option>
                                            <option value="non">Non</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="case insertiontype_int_hide" id="inser_cv" style="display:none;">
                        <h2 class="subtitle is-6">
                            <div class="th2">Aide à la création d'un document de valorisation des compétences</div>
                        </h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Format du document</h6>
                                <div class="select is-small">
                                    <select class="formulaire is-100" id="typecv" onclick="typecv_fc()">
                                        <option value="">--</option>
                                        <option value="cv">Curriculum</option>
                                        <option value="carte">Carte de visite</option>
                                        <option value="book">Book</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-three-quarters" id="typecv_autre" style="display:none">
                                <h6>Informations complémentaires</h6>
                                <input class="formulaire input is-small is-100" placeholder="Informations">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-100">
                                <h6>Informations complémentaires</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Résumé"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-third" id="chgmts_situationeco_btn">
                                <h6>Changement de situation économique</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="chgmts_situationeco" onclick="chgmts_situationeco_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="insertiontype_int_hide" id="inser_info_firstentretien" style="display:none;">
                        <?php include('assets/php/cases/education_plus.php'); ?>
                        <?php include('assets/php/cases/experience_plus.php'); ?>
                    </div>

                    <div class="typeform_hide insertiontype_int_hide" id="inser_situationeco" style="display:none;">
                        <?php include('assets/php/cases/situation_eco_plus.php'); ?>
                    </div>

                    <!--------------------------- FIN INSERTION ------------------------------>





                    <!--------------------------- TPP ------------------------------>
                    <div class="typeform_hide" id="tpp" style="display:none;">
                        <div class="title_form level columns">
                            <h1 class="column is-one-quarter subtitle is-4">Accompagnement TPP</h1>
                            <div class="column">
                                <h6>Étape de l'accompagnement</h6>
                                <div class="select is-small">
                                    <select class="formulaire is-100" id="tpptype" onclick="tpptype_fc()">
                                        <option value="">--</option>
                                        <option value="tpp_information">1. Entretien d'information</option>
                                        <option value="tpp_complement">2. Entretien de complément</option>
                                        <option value="tpp_edl">3. État des lieux</option>
                                        <option value="tpp_approfondissement">4. Entretien d'approfondissement</option>
                                        <option value="tpp_notification">5. Entretien de notification</option>
                                        <option value="tpp_achat">6. Accompagnement d'achat</option>
                                        <option value="tpp_lancement">7. Entretien de lancement</option>
                                        <option value="tpp_suivi">8. Visite de suivi</option>
                                        <option value="tpp_evaluation">9. Entretien d'évaluation</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 1 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_information" style="display:none;">
                        <h2 class="subtitle is-6">Entretien d'informations</h2>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Fiche d'information remise</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Poursuite du projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppsuite" onclick="tppsuite_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="tppsuite_motif" style="display:none;">
                                <h6>Motif d'arrêt du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Structure">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 2 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_complement" style="display:none;">
                        <h2 class="subtitle is-6">Entretien de complément d'information</h2>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Déroulé de l'entretien</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="physique">Pysique</option>
                                        <option value="phone">Télephonique</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Lieu d'activité prévu</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="indoor">Domicile</option>
                                        <option value="outdoor">Extérieur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Domaine d'activité</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="production">Production</option>
                                        <option value="services">Services</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half">
                                <h6>Objet du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Objet">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Expérience en lien avec le projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppbefore" onclick="tppbefore_fc()">
                                        <option value="non">Non</option>
                                        <option value="oui">Oui</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-three-quarters" id="tppbefore_exp" style="display:none;">
                                <h6>Expérience</h6>
                                <input class="formulaire input is-small is-100" placeholder="Objet">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Budget demandé</h6>
                                <div class="field has-addons money">
                                    <p class="control">
                                        <input class="formulaire input is-small" type="text" placeholder="Montant">
                                    </p>
                                    <p class="control">
                                        <a class="formulaire button is-small is-static">
                                            dhs
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="column is-three-quarters">
                                <h6>Besoins exprimés</h6>
                                <input class="formulaire input is-small is-100" placeholder="Besoins">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Poursuite du projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppsuite" onclick="tppsuite_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="tppsuite_motif" style="display:none;">
                                <h6>Motif d'arrêt du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Structure">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 3 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_edl" style="display:none;">
                        <h2 class="subtitle is-6">Visite d'état des lieux</h2>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Salubrité</h6>
                                <input class="formulaire input is-small is-100" placeholder="Observations">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Relations au sein de la collocation</h6>
                                <input class="formulaire input is-small is-100" placeholder="Observations">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Relations avec le voisinage</h6>
                                <input class="formulaire input is-small is-100" placeholder="Observations">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Matériel disponible</h6>
                                <input class="formulaire input is-small is-100" placeholder="Observations">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 4 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_approfondissement" style="display:none;">
                        <h2 class="subtitle is-6">Entretien de complément d'information</h2>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Déroulé de l'entretien</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="physique">Pysique</option>
                                        <option value="phone">Télephonique</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Lieu d'activité prévu</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="indoor">Domicile</option>
                                        <option value="outdoor">Extérieur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-three-quarters">
                                <h6>Objet du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Objet">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Expérience en lien avec le projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppbefore" onclick="tppbefore_fc()">
                                        <option value="non">Non</option>
                                        <option value="oui">Oui</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-three-quarters" id="tppbefore_exp" style="display:none;">
                                <h6>Expérience</h6>
                                <input class="formulaire input is-small is-100" placeholder="Objet">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Budget demandé</h6>
                                <div class="field has-addons money">
                                    <p class="control">
                                        <input class="formulaire input is-small" type="text" placeholder="Montant">
                                    </p>
                                    <p class="control">
                                        <a class="formulaire button is-small is-static">
                                            dhs
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="column is-three-quarters">
                                <h6>Besoins exprimés</h6>
                                <input class="formulaire input is-small is-100" placeholder="Besoins">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Poursuite du projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppsuite" onclick="tppsuite_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="tppsuite_motif" style="display:none;">
                                <h6>Motif d'arrêt du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Structure">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 5 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_notification" style="display:none;">
                        <h2 class="subtitle is-6">Entretien de notification</h2>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Déroulé de l'entretien</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="physique">Pysique</option>
                                        <option value="phone">Télephonique</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <h6>Accord projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppsuite_accord" onclick="tppsuite_accord_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="tppsuite_accord_motif" style="display:none;">
                                <h6>Motif du refus</h6>
                                <div class="select is-small is-100">
                                    <select class="formulaire  is-100">
                                        <option value="">--</option>
                                        <option value="illicite">Objet du projet (illicite, dangereux…)</option>
                                        <option value="montant">Montant élevé,</option>
                                        <option value="rentabilite">Rentabilité incertaine</option>
                                        <option value="experience">Manque d’expérience</option>
                                        <option value="autrefinancement">Indentification d’autres sources de financement</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-one-quarter">
                                <h6>Budget accordé</h6>
                                <div class="field has-addons money">
                                    <p class="control">
                                        <input class="formulaire input is-small" type="text" placeholder="Montant">
                                    </p>
                                    <p class="control">
                                        <a class="formulaire button is-small is-static">
                                            dhs
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 6 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_achat" style="display:none;">
                        <h2 class="subtitle is-6">Accompagnement d'achat</h2>
                        <div class="level columns">
                            <div class="column">
                                <table class="table is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th>Lieu d'achat</th>
                                            <th>Montant</th>
                                            <th>Document</th>
                                            <th>Justificatif</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tpp_achat_list">
                                        <tr>
                                            <td><input class="formulaire input is-small" type="text" placeholder="Lieu" /></td>
                                            <td>
                                                <div class="field has-addons money">
                                                    <p class="control">
                                                        <input class="formulaire input is-small" type="text" placeholder="Montant">
                                                    </p>
                                                    <p class="control">
                                                        <a class="formulaire button is-small is-static">
                                                            dhs
                                                        </a>
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="select is-small">
                                                    <select class="formulaire">
                                                        <option value="">--</option>
                                                        <option value="facture">Facture</option>
                                                        <option value="recu">Reçu</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="file is-light">
                                                    <label class="file-label">
                                                        <input class="file-input" type="file" name="resume">
                                                        <span class="file-cta">
                                                            <span class="file-icon">
                                                                <i class="fas fa-upload"></i>
                                                            </span>
                                                            <span class="file-label">
                                                                Upload
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" id="add_tpp_achat" class="formulaire button is-small is-info is-outlined ">
                                                    <i class="fal fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 7 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_lancement" style="display:none;">
                        <h2 class="subtitle is-6">Entretien de lancement</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Charte signée</h6>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="non">Non</option>
                                        <option value="oui">Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 8 ------------->
                    <div class="case tpptype_hide" id="tpp_suivi" style="display:none;">
                        <h2 class="subtitle is-6">Visite de suivi</h2>
                        <div class="level columns">
                            <div class="column">
                                <h6>Poursuite du projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppsuite" onclick="tppsuite_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="tppsuite_motif" style="display:none;">
                                <h6>Motif d'arrêt du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Structure">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column is-full">
                                <h6>Observations</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Etape 9 ------------->
                    <div class="case  typeform_hide tpptype_hide" id="tpp_evaluation" style="display:none;">
                        <h2 class="subtitle is-6">Entretien d'évaluation</h2>
                        <div class="level columns">
                            <div class="column is-half">
                                <h6>Observations usager</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                            <div class="column is-half">
                                <h6>Observations projet</h6>
                                <textarea class="formulaire textarea is-small" rows="6" placeholder="Commentaires"></textarea>
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Poursuite projet</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="tppsuite" onclick="tppsuite_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column is-half" id="tppsuite_motif" style="display:none;">
                                <h6>Motif d'arrêt du projet</h6>
                                <input class="formulaire input is-small is-100" placeholder="Structure">
                            </div>
                        </div>
                        <div class="level columns">
                            <div class="column">
                                <h6>Demande d'appui au démarage</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="appdemarage_ask" onclick="appdemarage_ask_fc()">
                                        <option value="">--</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN TPP ------------------------------>





                    <!-------------------------- APPUI AU DÉMARAGE ---------------------------->
                    <div class="typeform_hide" id="appui" style="display:none">
                        <div class="case casequest">
                            <h2 class="subtitle is-6">Appui au démarage de projet</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Accord d'appui au démarage</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="appdemarage_answerask" onclick="appdemarage_answerask_fc()">
                                            <option value="">--</option>
                                            <option value="oui">Oui</option>
                                            <option value="non">Non</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-half appdemarage_hide" id="appdemarage_accord" style="display:none">
                                    <h6>Motif d'accord</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="appdemarage_accord_list" multiple>
                                            <option value="">--</option>
                                            <option value="loyer">Loyer</option>
                                            <option value="assurance">Assurance</option>
                                            <option value="transport">Transport</option>
                                            <option value="creche">Créche</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half appdemarage_hide" id="appdemarage_refus" style="display:none">
                                    <h6>Motif de refus</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="appdemarage_refus_list" multiple>
                                            <option value="">--</option>
                                            <option value="vulnerabilite">Absence de vulnérabilité</option>
                                            <option value="priorite">Profil non prioritaire</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half appdemarage_hide" id="appdemarage_autre" style="display:none">
                                    <h6>Informations complémentaires</h6>
                                    <p><input class="formulaire input is-small is-100" type="text" placeholder="Informations"></p>
                                </div>
                            </div>
                            <div class="level columns appdemarage_hide" id="appdemarage_montant" style="display:none">
                                <div class="column is-one-quarter">
                                    <h6>Montant accordé</h6>
                                    <div class="field has-addons money">
                                        <p class="control">
                                            <input class="formulaire input is-small" type="text" placeholder="Montant">
                                        </p>
                                        <p class="control">
                                            <a class="formulaire button is-small is-static">
                                                dhs
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Durée de l'appui</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/dureesemaines.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------- FIN APPUI AU DÉMARAGE -------------------------->





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
            select: '#appdemarage_accord_list'
        })

        new SlimSelect({
            showSearch: false,
            select: '#appdemarage_refus_list'
        })

    </script>

</body>

</html>
