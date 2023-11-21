<div class="case partenaire">
    <h2 class="subtitle is-6" id="8">Au pays</h2>
    <div class="level columns">
        <div class="column is-full">
            <h6>Récit du parcours</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>

    <div class="level columns">
        <div class="column is-half">
            <div class="level columns">
                <div class="column is-half">
                    <h6>Violences</h6>
                    <div class="select is-small">
                        <select class="formulaire" id="violence_pays" onclick="violence_pays_fc()">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                    </div>
                </div>
                <div class="column violence_pays_hide" id="violencesex_ask_pays" style="display:none">
                    <h6>Violences sexuelles</h6>
                    <div class="select is-small">
                        <select class="formulaire" id="violencesex_pays" onclick="violencesex_pays_fc()">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="level columns">
        <div class="column is-full violence_pays_hide" id="violenceinfo_pays" style="display:none">
            <h6>Informations complémentaires</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
</div>

<div class="case caseinfo" id="asile_infobox" style="display:none">
    <?php include('assets/php/infobox/asile.php'); ?>
</div>

<div class="case caseinfo violence_pays_hide" id="depistage_infobox" style="display:none">
    <?php include('assets/php/infobox/depistageist.php'); ?>
</div>
