<div class="case">
    <h2 class="subtitle is-6">État de santé</h2>
    <div class="level columns">
        <div class="column is-one-third">
            <div class="level columns">
                <div class="column">
                    <h6>Situation de santé déclarée</h6>
                    <div class="select is-small">
                        <select class="formulaire" id="santepblist" onclick="santepblist_fc()">
                            <option value="non">Non</option>
                            <option value="maladie">Maladie</option>
                            <option value="blessure">Blessure</option>
                            <option value="handicap">Handicap</option>
                            <option value="grossesse">Grossesse</option>
                            <option value="psy">Troubles psy</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------- Maladie ------------------------------------>
<div class="case casequest santepblist_hide" id="statutmaladie" style="display:none">
    <div class="h2hide subtitle is-6">Statut maladie</div>
    <div class="level columns">
        <div class="column">
            <h6>Maladie</h6>
            <div class="select is-small">
                <select class="formulaire" id="mena_maladie_ask" onclick="mena_maladie_ask_fc()">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-three-fifths" id="mena_maladie_info" style="display:none">
            <h6>Informations maladie</h6>
            <p><input class="formulaire input is-small is-100" type="text" placeholder="Informations"></p>
        </div>
        <div class="column" id="mena_maladie_date" style="display:none">
            <h6>Depuis</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <?php include('assets/php/lists/dureesemaines.php'); ?>
                </select>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column">
            <h6>Consomation de drogue</h6>
            <div class="select is-small">
                <select class="formulaire" id="mena_drogues_ask" onclick="mena_drogues_ask_fc()">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-four-fifths" id="mena_drogues_info" style="display:none">
            <h6>Informations</h6>
            <p><input class="formulaire input is-small is-100" type="text" placeholder="Informations"></p>
        </div>
    </div>
    <div class="level columns">
        <div class="column">
            <h6>Maladie depuis arrivé Maroc</h6>
            <div class="select is-small">
                <select class="formulaire" id="mena_maladiemaroc_ask" onclick="mena_maladiemaroc_ask_fc()">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column" id="mena_maladiemaroc_causes" style="display:none">
            <h6>Causes</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-four-fifths" id="mena_maladiemaroc_info" style="display:none">
            <div class="column is-three-fifths">
                <h6>Informations maladie</h6>
                <p><input class="formulaire input is-small is-100" type="text" placeholder="Informations"></p>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column">
            <h6>MST</h6>
            <div class="select is-small">
                <select class="formulaire" id="mena_mst_ask" onclick="mena_mst_ask_fc()">
                    <option value="">--</option>
                    <option value="vih">VIH/SIDA</option>
                    <option value="hepatiteb">Hépatites B</option>
                    <option value="syphylis">Syphilis</option>
                    <option value="chancre">Chancre</option>
                </select>
            </div>
        </div>
        <div class="column" id="mena_mst_origine" style="display:none">
            <h6>Origine contamination</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="abus">Abus sexuel</option>
                    <option value="relation">Relation consentie</option>
                    <option value="prostitution">Prostitution</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
        </div>
        <div class="column is-three-fifths" id="mena_mst_info" style="display:none">
            <h6>Informations maladie</h6>
            <p><input class="formulaire input is-small is-100" type="text" placeholder="Informations"></p>
        </div>
    </div>
    <div class="level columns">
        <div class="column">
            <h6>Maladie contagieuse</h6>
            <div class="select is-small">
                <select class="formulaire" id="mena_contagieuse_ask" onclick="mena_contagieuse_ask_fc()">
                    <option value="">--</option>
                    <option value="tuberculose">Tuberculose</option>
                    <option value="gale">Gale</option>
                    <option value="infantile">Infantiles contagieuses</option>
                </select>
            </div>
        </div>
        <div class="column is-four-fifths" id="mena_contagieuse_info" style="display:none">
            <h6>Informations maladie</h6>
            <p><input class="formulaire input is-small is-100" type="text" placeholder="Informations"></p>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Commentaires</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Commentaires"></textarea>
        </div>
    </div>
</div>


<!----------------------------------- Grossesse ------------------------------------>
<div class="case casequest santepblist_hide" id="statutgrossesse" style="display:none">
    <div class="h2hide subtitle is-6">Information grossesse</div>
    <div class="level columns">
        <div class="column">
            <h6>Début de grossesse</h6>
            <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
            <div data-toggle="datepicker"></div>
        </div>
        <div class="column">
            <h6>Date d'accouchement prévu</h6>
            <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
            <div data-toggle="datepicker"></div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Commentaires</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Commentaires"></textarea>
        </div>
    </div>
</div>
