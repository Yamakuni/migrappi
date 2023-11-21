<div class="case ">
    <h2 class="subtitle is-6" id="7">Financement du voyage</h2>
    <div class="level columns">
        <div class="column">
            <h6>Liste des motifs</h6>
            <div class="select is-small multiple">
                <select class="formulaire" id="financementvoyage" multiple>
                    <option value="">--</option>
                    <option value="ressourcespropres">Propres ressources</option>
                    <option value="travail">Grâce aux travaux réalisés en route</option>
                    <option value="argent">Argent volé</option>
                    <option value="famille">Financement familial</option>
                    <option value="mendicite">Mendicité au cours de la route</option>
                    <option value="prostitution">Prostitution</option>
                    <option value="dettevillage">Dette auprès du village</option>
                    <option value="familleenroute">Sommes reçues en cours de route par la famille</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Commentaires</h6>
            <textarea class="formulaire textarea is-small" rows="2" placeholder="Commentaires"></textarea>
        </div>
    </div>
</div>

<script>
    new SlimSelect({
        showSearch: false,
        select: '#financementvoyage'
    })

</script>
