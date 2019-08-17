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
                            <a href="form_social.php">
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
                            <h1 class="subtitle is-4">Formulaire social</h1>
                        </div>
                        <div class="column">
                            <a class="button is-outlined is-small danger-invers sw_returnforms">
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
                                        <option value="visite">Visite à domicile</option>
                                        <option value="entretien">Entretien</option>
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
                                <input class="formulaire input is-small" type="text" placeholder="Text input" value="Blaise" disabled>
                            </div>
                        </div>
                    </div>



                    <!--------------------------- VISITE ------------------------------>
                    <div class="typeform_hide" id="visite" style="display:none">
                        <h1 class="title_form subtitle is-4"> Visite à domicile</h1>
                        <div class="case">
                            <h2 class="subtitle is-6">Informations visite</h2>
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date de la visite</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date de la visite">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-half">
                                    <h6>Contexte de visite</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="contextevisite" multiple>
                                            <?php include('assets/php/lists/social/motifvisite.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Type d'appui</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="typeappui_visite" multiple>
                                            <option value="">--</option>
                                            <option value="1">Paiement loyer</option>
                                            <option value="2">Remise d'une aide autre que loyer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-half">
                                    <div class="level columns">
                                        <div class="column is-half ">
                                            <h6>Ville de résidence</h6>
                                            <div class="select is-small">
                                                <select class="formulaire" id="citylist" onclick="citylist_fc()">
                                                    <?php include('assets/php/lists/ville.php'); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php include('assets/php/lists/quartiers.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--------------------------------------- Identité ------------------------------------------>
                        <div class="case">
                            <h2 class="subtitle is-6">Logement</h2>
                            <div class="level columns">
                                <div class="column is-one-quarter">
                                    <h6>Lieu du logement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="lieulogement" onclick="lieulogement_fc()">
                                            <option value="">--</option>
                                            <option value="interieur">Intérieur</option>
                                            <option value="exterieur">Extérieur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column typelogement_int_hide" id="typelogement_int_list" style="display:none">
                                    <h6>Type de logement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire" id="typelogement_int_ask" onclick="typelogement_int_ask_fc()">
                                            <option value="">--</option>
                                            <option value="appartement">Appartement</option>
                                            <option value="foyer">Foyer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" id="typelogement_ext_list" style="display:none">
                                    <h6>Type de logement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire typelogement_ext_ask">
                                            <option value="">--</option>
                                            <option value="rue">Rue</option>
                                            <option value="campement">Campement</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column typelogement_int_hide" id="fraislogementappart" style="display:none">
                                    <h6>Paiement du logement</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="loue">Loué</option>
                                            <option value="dispofamille">Mis à disposition par la famille</option>
                                            <option value="dispoami">Mis à disposition par des amis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column typelogement_int_hide" id="typelogementappart" style="display:none">
                                    <h6>Type de séjour</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="logemententier">Logement entier</option>
                                            <option value="chambreseule">Chambre seul</option>
                                            <option value="chambrepartagee">Chambre partagée</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-third">
                                    <h6>Consommables</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="consommables" multiple>
                                            <option value="electricite">Électricité</option>
                                            <option value="eau">Eau</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Salubrité</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="salubrite" multiple>
                                            <option value="">--</option>
                                            <option value="humidite">Absence d'humidité</option>
                                            <option value="aeration">Aération</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Sanitaires</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="sanitaires" multiple>
                                            <option value="">--</option>
                                            <option value="wc">WC fonctionnels</option>
                                            <option value="lavabo">Lavabo</option>
                                            <option value="douche">Douche baignoire</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-third">
                                    <h6>Couchage</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="couchage" multiple>
                                            <option value="couverture">Couverture</option>
                                            <option value="matelas">Matelas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Équipements cuisine</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="cuisine" multiple>
                                            <option value="">--</option>
                                            <option value="humidite">Cuisine, réchaud</option>
                                            <option value="aeration">Matériel de cuisine</option>
                                            <option value="frigo">Frigo</option>
                                            <option value="vaisselle">Vaisselle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Mobilier, équipement audiovisuel</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="mobilier" multiple>
                                            <option value="chaise">Chaise</option>
                                            <option value="lit">Lit</option>
                                            <option value="table">Table</option>
                                            <option value="tv">Télevision</option>
                                            <option value="radio">Radio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-one-third">
                                    <h6>Bail</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="avecbail">Avec bail à son nom</option>
                                            <option value="sansbail">Sans bail à son nom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Se sent en sécurité dans le quartier</h6>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="non">Non</option>
                                            <option value="oui">Oui</option>
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
                    <!--------------------------- FIN VISITE ------------------------------>





                    <!--------------------------- ENTRETIEN ------------------------------>
                    <div class="typeform_hide" id="entretien" style="display:none">
                        <div class="title_form level columns">
                            <h1 class="column is-one-quarter subtitle is-4">Entretien</h1>
                            <div class="column">
                                <label class="checkbox">
                                    Premier entretien
                                    <input type="checkbox" id="first_entretien" onclick="first_entretien_fc()">
                                </label>
                            </div>
                        </div>
                        <div id="social_familly_out" style="display:none">
                            <?php include('assets/php/cases/famille_out.php'); ?>
                        </div>
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
                                            <?php include('assets/php/lists/motifsurgence.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-full">
                                    <h6>Observations</h6>
                                    <textarea class="formulaire textarea is-small" rows="3" placeholder="Observations"></textarea>
                                </div>
                            </div>
                        </div>
                        <?php include('assets/php/cases/prise_encharge.php'); ?>
                    </div>
                    <!--------------------------- FIN ENTRETIEN ------------------------------>





                    <!--------------------------- ACCOMPAGNEMENT ------------------------------>
                    <div class="typeform_hide" id="accompagnement" style="display:none">
                        <h1 class="title_form subtitle is-4"> Accompagnement </h1>

                        <div class="case">
                            <div class="level columns">
                                <div class="column">
                                    <h6>Date de la visite</h6>
                                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date de la visite">
                                    <div data-toggle="datepicker"></div>
                                </div>
                            </div>
                            <div class="level columns">
                                <div class="column is-two-fifths">
                                    <h6>Lieu d'accompagnement</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="structures_acc" multiple>
                                            <?php include('assets/php/lists/social/structures_acc.php'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <h6>Autre</h6>
                                    <input class="formulaire input is-small" placeholder="Structure">
                                </div>
                                <div class="column is-two-fifths">
                                    <h6>Motif de l'accompagnement</h6>
                                    <div class="select is-small multiple">
                                        <select class="formulaire" id="typeappui_acc" multiple>
                                            <?php include('assets/php/lists/social/motifs_acc.php'); ?>
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
            select: '#contextevisite'
        })

        new SlimSelect({
            showSearch: false,
            select: ' #typeappui_visite'
        })


        new SlimSelect({
            showSearch: false,
            select: '#consommables'
        })

        new SlimSelect({
            showSearch: false,
            select: '#salubrite'
        })

        new SlimSelect({
            showSearch: false,
            select: '#sanitaires'
        })

        new SlimSelect({
            showSearch: false,
            select: '#couchage'
        })

        new SlimSelect({
            showSearch: false,
            select: '#cuisine'
        })

        new SlimSelect({
            showSearch: false,
            select: '#mobilier'
        })

        new SlimSelect({
            showSearch: false,
            select: '#motifurgence_select'
        })

        new SlimSelect({
            showSearch: false,
            select: '#typeappui_entretien'
        })

        new SlimSelect({
            showSearch: false,
            select: '#orientation'
        })

        new SlimSelect({
            showSearch: false,
            select: '#aidesdirectes_select'
        })


        new SlimSelect({
            showSearch: false,
            select: '#structures_acc'
        })

        new SlimSelect({
            showSearch: false,
            select: '#typeappui_acc'
        })

    </script>


</body>

</html>
