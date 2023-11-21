<div class="case partenaire">
    <h2 class="subtitle is-6" id="6">Motif de départ</h2>
    <div class="level columns">
        <div class="column is-half">
            <h6>Liste des motifs</h6>
            <div class="select is-small multiple">
                <select class="formulaire" id="motifdepart" multiple>
                    <option value="">--</option>
                    <option value="economique">Économiques</option>
                    <option value="politique">Politiques</option>
                    <option value="famille">Familliaux/Communautaire</option>
                    <option value="albinos">Albinos</option>
                    <option value="lgbti">LGBTI</option>
                    <option value="foot">Foot</option>
                    <option value="traite">Victime de traite</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
        </div>
        <div class="column is-half">
            <h6>Information</h6>
            <input class="formulaire input is-small is-100" type="text" placeholder="Informations">
        </div>
    </div>
</div>

<script>
    new SlimSelect({
        showSearch: false,
        select: '#motifdepart'
    })

</script>
