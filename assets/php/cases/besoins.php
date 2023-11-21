<div class="case">
    <h2 class="subtitle is-6" id="19">Besoins exprimés</h2>
    <div class="level columns">
        <div class="column is-one-quarter">
            <h6>Orienté par</h6>
            <div class="select is-small">
                <select class="formulaire" id="orientationsource" onclick="orientationsource_fc()">
                    <?php include('assets/php/lists/orientation_source.php'); ?>
                </select>
            </div>
        </div>
        <div class="column orientationsource_hide" id="orientationsource_ong" style="display:none">
            <h6>ONG & associations</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="gadem">Gadem</option>
                    <option value="cei">CEI</option>
                    <option value="alcs">ALCS</option>
                </select>
            </div>
        </div>
        <div class="column orientationsource_hide" id="orientationsource_onu" style="display:none">
            <h6>Agences ONU</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="oim">OIM</option>
                    <option value="hcr">HCR</option>
                </select>
            </div>
        </div>
        <div class="column orientationsource_hide" id="orientationsource_public" style="display:none">
            <h6>Structure publique</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="consulat">Consulat</option>
                    <option value="centresante">Centre de santé</option>
                    <option value="hopital">Hôpital</option>
                    <option value="prefecture">Préfecture</option>
                </select>
            </div>
        </div>
        <div class="column orientationsource_hide" id="orientationsource_centrecaritas" style="display:none">
            <h6>Autre centre Caritas</h6>
            <div class="select is-small">
                <select class="formulaire" id="orientationsource" onclick="orientationsource_fc()">
                    <option value="">Choisir un centre</option>
                    <?php include('assets/php/lists/centre.php'); ?>
                </select>
            </div>
        </div>
        <div class="column is-three-quarters orientationsource_hide" id="orientationsource_autre" style="display:none">
            <h6>Complément d'informations</h6>
            <input class="formulaire input is-small is-100" type="text" placeholder="Observations">
        </div>
    </div>

    <div class="level columns">
        <div class="column is-three-quarters">
            <h6>Demandes exprimées</h6>
            <div class="select is-small multiple">
                <select class="formulaire" id="attentes_aides" multiple>
                    <?php include('assets/php/lists/attentes_aides.php'); ?>
                </select>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Observations</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Observations"></textarea>
        </div>
    </div>
</div>


<script>
    new SlimSelect({
        showSearch: false,
        select: '#attentes_aides'
    })

</script>
