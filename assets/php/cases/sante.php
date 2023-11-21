<div class="case partenaire">
    <h2 class="subtitle is-6" id="1">État de santé</h2>
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
        <div class="column  santepblist_hide" id="statutmaladie" style="display:none">
            <div class="level columns">
                <div class="column is-half">
                    <h6>Statut maladie</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="">--</option>
                            <option value="declare">Déclaré</option>
                            <option value="diagnostique">Diagnostiqué</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <h6>Maladie contagieuse</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="">--</option>
                            <option value="gale">Gale</option>
                            <option value="tuberculose">Tuberculose</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="column santepblist_hide" id="statutgrossesse" style="display:none">
            <div class="level columns">
                <div class="column is-half">
                    <h6>Suivi déjà effectué ?</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="">--</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <h6>Début de grossesse</h6>
                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                    <div data-toggle="datepicker"></div>
                </div>
            </div>
        </div>
    </div>
</div>
