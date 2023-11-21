<div class="case">
    <h2 class="subtitle is-6">Situation économique</h2>
    <div class="level columns">
        <div class="column is-one-third">
            <h6>Travail régulier</h6>
            <div class="select is-small">
                <select class="formulaire" id="travail" onclick="travail_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column">
            <h6>Autre source de revenus</h6>
            <div class="select is-small multiple">
                <select class="formulaire" id="autresrevenus" multiple>
                    <option value="transfert">Transferts de la famille depuis l'étranger</option>
                    <option value="solidarite">Solidarité familliale et communautaire</option>
                    <option value="agr">Activité génératrice de revenu (informelle)</option>
                    <option value="entreprise">Entreprise individuelle déclarée</option>
                    <option value="cooperative">Coopérative</option>
                    <option value="prostitution">Prostitution</option>
                    <option value="mendicite">Mendicité</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="case casequest" id="activitepro" style="display:none">
    <h2 class="subtitle is-6">
        <div class="th2">Activité professionnelle</div>
    </h2>
    <div class="level columns">
        <div class="column is-one-quarter">
            <h6>Date de début</h6>
            <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
            <div data-toggle="datepicker"></div>
        </div>
        <div class="column is-one-quarter">
            <h6>Domaine</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <?php include('assets/php/lists/domainepro.php'); ?>
                </select>
            </div>
        </div>
        <div class="column is-half">
            <h6>Etablissement</h6>
            <input class="formulaire input is-small is-100" type="text" placeholder="Nom">
        </div>
    </div>
    <div class="level columns">
        <div class="column is-two-fifths">
            <h6>Intitulé du poste</h6>
            <input class="formulaire input is-small is-100" type="text" placeholder="Nom">
        </div>
        <div class="column is-one-fifths">
            <h6>L'emploi a été trouvé</h6>
            <div class="select is-small">
                <select class="formulaire is-100">
                    <option value="">--</option>
                    <option value="autonome">De manière autonome</option>
                    <option value="intervenant">Orienté par l'intervenant</option>
                    <option value="autrestructure">Orienté par une autre structure</option>
                </select>
            </div>
        </div>
        <div class="column is-one-fifths">
            <h6>Existence d'un contrat</h6>
            <div class="select is-small">
                <select class="formulaire" id="emploitrouve" onclick="emploitrouve_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-one-fifths">
            <h6>Type de contrat</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="cdi">CDI</option>
                    <option value="cdd">CDD</option>
                    <option value="interim">Interim</option>
                    <option value="insertion">Contrat insertion</option>
                </select>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Commentaires</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Commentaires"></textarea>
        </div>
    </div>
</div>


<script>new SlimSelect({
showSearch: false,
select: '#autresrevenus'
})

</script>
