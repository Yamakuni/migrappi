<div class="case partenaire">
    <h2 class="subtitle is-6" id="9">Sur le trajet</h2>
    <div class="level columns">
        <div class="column is-full">
            <h6>Récit du parcours</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-one-fifth">
            <h6>Violences</h6>
            <div class="select is-small">
                <select class="formulaire" id="violence_trajet" onclick="violence_trajet_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column violence_trajet_hide" id="violencesex_ask_trajet" style="display:none">
            <h6>Violences sexuelles</h6>
            <div class="select is-small">
                <select class="formulaire" id="violencesex_trajet" onclick="violencesex_trajet_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full violence_trajet_hide" id="violenceinfo_trajet" style="display:none">
            <h6>Informations complémentaires</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
</div>

<div class="case caseinfo violence_trajet_hide" id="depistage2_infobox" style="display:none">
    <?php include('assets/php/infobox/depistageist.php'); ?>
</div>
