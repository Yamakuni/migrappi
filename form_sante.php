<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>



    <!------------------------------------------- WRAP ---------------------------------------------->
    <div class="wrap columns">
        <!----------------------------------------- LEFTNAV ------------------------------------------>
        <aside class="column is-2">
            <div class="sidebar">
                <div class="menu">
                    <ul class="menu-list">
                        <li>
                            <a href="form_sante.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
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
                            <h1 class="subtitle is-4">Formulaire santé</h1>
                        </div>
                        <div class="column">
                            <a href="home_sante.php" class="button is-outlined is-small danger-invers sw_returnforms">
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
                                        <option value="visite">Visite</option>
                                        <option value="entretien">Entretien</option>
                                        <option value="grossesse">Suivi grossesse</option>
                                        <option value="accompagnement">Accompagnement</option>
                                        <option value="etudedossier">Etude du dossier</option>
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
                                <input class="formulaire input is-small" type="text" placeholder="Text input" value="Paul" disabled>
                            </div>
                        </div>
                    </div>



                    <!--------------------------- VISITE ------------------------------>
                    <div class="typeform_hide" id="visite" style="display:none">
                        <div class="title_form level columns">
                            <h1 class="column is-one-quarter subtitle is-4">Visite</h1>
                            <div class="column">
                                <h6>Lieu de la visite</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="lieuvisite_sante" onclick="lieuvisite_sante_fc()">
                                        <option value="">--</option>
                                        <option value="domicile">Domicile</option>
                                        <option value="hopital">A l'hôpital</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="case lieuvisite_sante_hide" id="domicile" style="display:none">
                            <h2 class="subtitle is-6" id="5">Visite à domicile</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date de la visite</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date de la visite">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Etat de santé</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="domicile">Maladie aigûe</option>
                                            <option value="hopital">Maladie chronique</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Situation sociale</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="isole">Isolé</option>
                                            <option value="foyer">En foyer</option>
                                            <option value="autre">En famille/amis/Eglise</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Sous traitement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="soustraitement_sante" onclick="soustraitement_sante_fc()">
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters" id="datetraitement" style="display:none">
                                    <div class="level columns">
                                        <div class="column is-one-third">
                                            <h6>Date de début du traitement</h6>
                                            <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date de la visite">
                                            <div data-toggle="datepicker"></div>
                                        </div>
                                        <div class="column is-two-third">
                                            <h6>Informations traitement</h6>
                                            <p><input class="formulaire input is-small is-100" type="text" name="informations_traitement" placeholder="Informations"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>A accompagner</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="accompagnement_afaire" onclick="accompagnement_afaire_fc()">
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters" id="suiviafaire" style="display:none">
                                    <h6>Suivi à faire</h6>
                                    <p><input class="formulaire input is-small is-100" type="text" name="informations_traitement" placeholder="Informations"></p>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-half">
                                    <h6>Orientation</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="orientation_visite" multiple>
                                            <?php include('assets/php/lists/sante/orientation.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half">
                                    <h6>Sensibilisation</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="sensibilisation_visite" multiple>
                                            <?php include('assets/php/lists/sante/sensibilisation.php'); ?>
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

                        <div class="case lieuvisite_sante_hide" id="hopital" style="display:none">
                            <h2 class="subtitle is-6" id="5">Visite à l'hôpital</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date de la visite</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date de la visite">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Première visite</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="accompagnement_afaire" onclick="accompagnement_afaire_fc()">
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Date d'entrée</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date d'entrée">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column is-half">
                                    <h6>Date de sortie prévue</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date de sortie">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Structure d'hospitalisation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="chrp">CHR / CHP</option>
                                            <option value="chu">CHU</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Services</h6>
                                    <p><input class="formulaire input is-small" type="text" name="informations_traitement" placeholder="Informations"></p>
                                </div>
                                <div class="column">
                                    <h6>N° d'hospitalisation</h6>
                                    <p><input class="formulaire input is-small" type="text" name="informations_traitement" placeholder="Informations"></p>
                                </div>
                                <div class="column">
                                    <h6>N° de chambre</h6>
                                    <p><input class="formulaire input is-small" type="text" name="informations_traitement" placeholder="Informations"></p>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Opération prévue</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
                                            <option value="past">Passée</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters">
                                    <h6>Accompagnateur de la communauté</h6>
                                    <p><input class="formulaire input is-small is-100" type="text" name="informations_traitement" placeholder="Nom et prénom"></p>
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





                    <!--------------------------- ENTRETIEN ------------------------------>
                    <div class="typeform_hide" id="entretien" style="display:none">
                        <div class="title_form level columns">
                            <h1 class="column subtitle is-4">Entretien</h1>
                            <div class="column">
                                <h6>Cadre entretien</h6>
                                <div class="select is-small">
                                    <select class="formulaire" id="ouverturedossier" onclick="ouverturedossier_fc()">
                                        <option value="permanence">Permanence/Rdv</option>
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
                        <div class="case">
                            <h2 class="subtitle is-6">Diagnostique</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Diagnostique principal</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <?php include('assets/php/lists/sante/diagnostiques.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters">
                                    <h6>Observations</h6>
                                    <input class="formulaire input is-small is-100" type="text" placeholder="Observations">
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-two-fifths">
                                    <h6>Structure de consultation</h6>
                                    <div class="select is-small">
                                        <select class="formulaire is-100">
                                            <?php include('assets/php/lists/sante/struct_consultation.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Date de consultattion</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Datef">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column is-two-fifths">
                                    <h6>Observations</h6>
                                    <input class="formulaire input is-small is-100" type="text" placeholder="Observations">
                                </div>
                            </div>
                        </div>
                        <div class="case">
                            <h2 class="subtitle is-6">Prise en charge</h2>
                            <div class="level columns">
                                <div class="column">
                                    <table class="table is-fullwidth">
                                        <thead>
                                            <tr>
                                                <th>Structure</th>
                                                <th>Type</th>
                                                <th class="produit_sante_hide" id="produit_sante_title" style="display:none">Produit</th>
                                                <th>Prise en charge</th>
                                                <th>N° perscrit</th>
                                                <th>N° validés</th>
                                                <th>Montant</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orientation_sante_list">
                                            <tr>
                                                <td>
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/struct_orientation.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small">
                                                        <select class="formulaire" id="produit_sante" onclick="produit_sante_fc()">
                                                            <?php include('assets/php/lists/sante/type_orientation.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="produit_sante_hide" id="produit_sante_medicament" style="display:none">
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/medicament.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="produit_sante_hide" id="produit_sante_analyse" style="display:none">
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/analyse.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="produit_sante_hide" id="produit_sante_imagerie" style="display:none">
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/imagerie.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <option value="">--</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
                                                            <option value="contribution">Avec constribution</option>
                                                            <option value="libre">Accés libre</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small is-little">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/nombres.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small is-little">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/nombres.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
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
                                                <td class="pec_hide">
                                                    <div class="field has-addons money">
                                                        <p class="control">
                                                            <a class="formulaire button is-small is-static">Code</a>
                                                        </p>
                                                        <p class="control codecompta_bloc">
                                                            <input class="formulaire input is-small codecompta_gras" type="text" value="<?php $Length = 5; $RandomString = substr(str_shuffle(md5(time())), 0, $Length); echo $RandomString; ?>" readonly>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" id="add_orientation_sante" class="formulaire button is-small is-info is-outlined ">
                                                        <i class="fal fa-plus"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN ENTRETIEN ------------------------------>





                    <!--------------------------- ETUDE GROSSESSE ------------------------------>
                    <div class="typeform_hide" id="grossesse" style="display:none">
                        <h1 class="title_form subtitle is-4"> Suivi grossesse </h1>
                        <div class="case">
                            <h2 class="subtitle is-6">Informations grossesse</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Début de grossesse</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                                <div class="column">
                                    <h6>Suivi déjà effectué ?</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="consult_general">Consultation générale</option>
                                            <option value="bilan">Bilan de grossesse</option>
                                            <option value="ecographie">Echographie</option>
                                            <option value="consult_gyneco">Consultation gynécologique</option>
                                            <option value="non">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Date d'accouchement prévu</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Lieu de conception</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="origine">Pays d'origine</option>
                                            <option value="parcours">Parcours migratoire</option>
                                            <option value="maroc">Maroc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Nombre de grossesses précédentes</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5+</option>
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
                        <div class="case">
                            <h2 class="subtitle is-6">Prise en charge</h2>
                            <div class="level columns">
                                <div class="column">
                                    <table class="table is-fullwidth">
                                        <thead>
                                            <tr>
                                                <th>Structure</th>
                                                <th>Type</th>
                                                <th class="produit_sante_hide" id="produit_sante_title" style="display:none">Produit</th>
                                                <th>Prise en charge</th>
                                                <th>N° perscrit</th>
                                                <th>N° validés</th>
                                                <th>Montant</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orientation_sante_list">
                                            <tr>
                                                <td>
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/struct_orientation.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small">
                                                        <select class="formulaire" id="produit_sante" onclick="produit_sante_fc()">
                                                            <?php include('assets/php/lists/sante/type_orientation.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="produit_sante_hide" id="produit_sante_medicament" style="display:none">
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/medicament.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="produit_sante_hide" id="produit_sante_analyse" style="display:none">
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/analyse.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="produit_sante_hide" id="produit_sante_imagerie" style="display:none">
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/sante/imagerie.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small">
                                                        <select class="formulaire">
                                                            <option value="">--</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
                                                            <option value="contribution">Avec constribution</option>
                                                            <option value="libre">Accés libre</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small is-little">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/nombres.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select is-small is-little">
                                                        <select class="formulaire">
                                                            <?php include('assets/php/lists/nombres.php'); ?>
                                                        </select>
                                                    </div>
                                                </td>
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
                                                <td class="pec_hide">
                                                    <div class="field has-addons money">
                                                        <p class="control">
                                                            <a class="formulaire button is-small is-static">Code</a>
                                                        </p>
                                                        <p class="control codecompta_bloc">
                                                            <input class="formulaire input is-small codecompta_gras" type="text" value="<?php $Length = 5; $RandomString = substr(str_shuffle(md5(time())), 0, $Length); echo $RandomString; ?>" readonly>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" id="add_orientation_sante" class="formulaire button is-small is-info is-outlined ">
                                                        <i class="fal fa-plus"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------- FIN GROSSESSE DOSSIER ------------------------------>





                    <!--------------------------- ACCOMPAGNEMENT ------------------------------>
                    <div class="typeform_hide" id="accompagnement" style="display:none">
                        <h1 class="title_form subtitle is-4"> Accompagnement </h1>
                        <div class="case">
                            <div class="level columns">
                                <div class="column ">
                                    <h6>Validation accompagnement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="ouverturedossier" onclick="ouverturedossier_fc()">
                                            <option value="permanence">Permanence/Rdv</option>
                                            <option value="urgence">Urgence</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-three-quarters">
                                    <h6>Structure de santé</h6>
                                    <div class="select is-small">
                                        <select class="formulaire is-100">
                                            <?php include('assets/php/lists/sante/struct_consultation.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Prise de rdv autonome</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Motif</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="accsante_motif" onclick="accsante_motif_fc()">
                                            <?php include('assets/php/lists/sante/motifs_acc.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="accsante_motif_actes" style="display:none">
                                    <h6>Motif</h6>
                                    <div class="select is-small">
                                        <select>
                                            <option value="1">Opération minime</option>
                                            <option value="2">Platre</option>
                                            <option value="3">Holter tensionnel</option>
                                            <option value="4">Biopsie</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Montant</h6>
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
                                    <h6>Gratuité</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-half">
                                    <h6>Sensibilisation</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="sensibilisation_acc" multiple>
                                            <?php include('assets/php/lists/sante/sensibilisation.php'); ?>
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
            select: '#sensibilisation_acc'
        })

        new SlimSelect({
            showSearch: false,
            select: '#orientation_visite'
        })

        new SlimSelect({
            showSearch: false,
            select: '#sensibilisation_visite'
        })


        new SlimSelect({
            showSearch: false,
            select: '#motifurgence_select'
        })


        new SlimSelect({
            showSearch: false,
            select: '#orientation_entretien'
        })

        new SlimSelect({
            showSearch: false,
            select: '#aidesdirectes_select'
        })

    </script>

</body>

</html>
