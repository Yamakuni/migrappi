<div class="case partenaire">
    <h2 class="subtitle is-6" id="16">Situation économique</h2>
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
    <div class="questionbox" id="activitepro" style="display:none">
        <section class="hero">
            <div class="hero-body">
                <div class="questionbox_header">
                    <div class="questionbox_title">Activité professionnelle</div>
                </div>
                <div class="level columns">
                    <div class="column is-one-third">
                        <h6>Date de début</h6>
                        <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                        <div data-toggle="datepicker"></div>
                    </div>
                    <div class="column">
                        <h6>Type de travail</h6>
                        <div class="select is-small">
                            <select class="formulaire">
                                <?php include('assets/php/lists/domainepro.php'); ?>
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
        </section>
    </div>
</div>

<script>
    new SlimSelect({
        showSearch: false,
        select: '#autresrevenus'
    })

</script>
