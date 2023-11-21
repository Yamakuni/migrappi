<div class="case">
    <h2 class="subtitle is-6">Éducation et formation</h2>
    <div class="level columns">
        <div class="column is-one-quarter ">
            <h6>Niveau d'étude atteint</h6>
            <div class="select is-small">
                <select class="formulaire" id="niveauetude" onclick="niveauetude_fc()">
                    <option value="">--</option>
                    <option value="nonscolarise">Non scolarisé</option>
                    <option value="ecolecoranique">École coranique</option>
                    <option value="primaire">Primaire</option>
                    <option value="college">Collège</option>
                    <option value="lycee">Lycée</option>
                    <option value="universite">Université</option>
                </select>
            </div>
        </div>
        <div class="column niveauetude_hide" id="lyceelevel" style="display:none">
            <h6>Dernière formation fréquentée</h6>
            <div class="select is-small">
                <select class="formulaire" id="niveaulycee" onclick="niveaulycee_fc()">
                    <option value="">--</option>
                    <option value="lycee1">1° année lycée</option>
                    <option value="lycee2">2° année lycée</option>
                    <option value="lycee3">3° année lycée</option>
                </select>
            </div>
        </div>
        <div class="column niveauetude_hide" id="lyceebac" style="display:none">
            <h6>Baccalauréat obtenu</h6>
            <div class="select is-small">
                <select class="formulaire" id="bacobtenu" onclick="bacobtenu_fc()">
                    <option value="nonobtenu">Non obtenu</option>
                    <option value="obtenu">Obtenu</option>
                    <option value="obtenuetaccessible">Obtenu & accessible</option>
                </select></div>
        </div>
        <div class="column niveauetude_hide" id="unilevel" style="display:none">
            <div class="columns">
                <div class="column is-one-third">
                    <h6>Dernier formation suivie</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="bac+2">Bac +2</option>
                            <option value="bac+3">Bac +3</option>
                            <option value="bac+4">Bac +4</option>
                            <option value="bac+5">Bac +5</option>
                            <option value="bac+8">Bac +8</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <h6>Domaine formation suivie</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <?php include('assets/php/lists/domainepro.php'); ?>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <h6>Diplôme </h6>
                    <div class="select is-small">
                        <select class="formulaire" id="diplomeobtenu" onclick="diplomeobtenu_fc()">
                            <option value="nonobtenu">Non obtenu</option>
                            <option value="obtenu">Obtenu</option>
                            <option value="obtenuetaccessible">Obtenu & accessible</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full niveauetude_hide" id="lyceecom" style="display:none">
            <h6>Commentaire</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Informations complémentaires"></textarea>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full niveauetude_hide" id="unicom" style="display:none">
            <h6>Commentaire</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Informations études universitaires"></textarea>
        </div>
    </div>
    <div class="level columns">
        <div class="column">
            <h6>A suivi des formations</h6>
            <div class="select is-small">
                <select class="formulaire" id="formationpasse" onclick="formationpasse_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
    </div>
    <div class="questionbox " id="formationrecu_box" style="display:none">
        <section class="hero">
            <div class="hero-body">
                <div class="questionbox_header">
                    <div class="column">
                        <div class="questionbox_title">Formation professionnelle</div>
                    </div>
                </div>
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Durée</th>
                            <th>Liste métiers</th>
                            <th>Niveau de qualification</th>
                            <th>Etablissement</th>
                            <th>Diplôme</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="formationrecu_list">
                        <tr>
                            <td>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="moisde6mois">Inférieur à 6 mois</option>
                                        <option value="6moisa1an">Entre 6 mois et 1 an</option>
                                        <option value="1ana3ans">Entre 1 et 3 ans</option>
                                        <option value="3ansa5ans">Entre 3 et 5 ans</option>
                                        <option value="plusde5ans">Supérieure à 5 ans</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <?php include('assets/php/lists/domainepro.php'); ?>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="">--</option>
                                        <option value="moisde6mois">Spécialisation</option>
                                        <option value="6moisa1an">Qualification</option>
                                        <option value="1ana3ans">Technicien</option>
                                        <option value="3ansa5ans">Technicien spécialisé</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <p><input class="formulaire input is-small" type="text" placeholder="Etablissement"></p>
                            </td>
                            <td>
                                <div class="select is-small">
                                    <select class="formulaire">
                                        <option value="nonobtenu">Non obtenu</option>
                                        <option value="obtenu">Obtenu</option>
                                        <option value="obtenuetaccessible">Obtenu & accessible</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button type="button" id="add_formationrecu" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
    </div>
</div>
