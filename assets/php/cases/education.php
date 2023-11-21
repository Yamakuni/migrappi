<div class="case partenaire">
    <h2 class="subtitle is-6" id="17">Éducation</h2>
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
        <div class="column" id="lyceebac" style="display:none">
            <h6>Baccalauréat obtenu</h6>
            <div class="select is-small">
                <select class="formulaire" id="bacobtenu" onclick="bacobtenu_fc()">
                    <option value="nonobtenu">Non obtenu</option>
                    <option value="obtenu">Obtenu</option>
                    <option value="obtenuetaccessible">Obtenu & accessible</option>
                </select>
            </div>
        </div>
        <div class="column" id="unilevel" style="display:none">
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
        <div class="column is-full " id="lyceecom" style="display:none">
            <h6>Commentaire</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Informations complémentaires"></textarea>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full" id="unicom" style="display:none">
            <h6>Commentaire</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
</div>
