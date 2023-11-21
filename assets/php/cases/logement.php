<div class="case">
    <h2 class="subtitle is-6" id="4">Logement au Maroc</h2>
    <div class="level columns">
        <div class="column is-one-quarter">
            <h6>Lieu du logement</h6>
            <div class="select is-small">
                <select class="formulaire" id="lieulogement" onclick="lieulogement_fc()">
                    <option value="">--</option>
                    <option value="interieur">Intérieur</option>
                    <option value="exterieur">Extérieur</option>
                </select>
            </div>
        </div>
        <div class="column typelogement_int_hide" id="typelogement_int_list" style="display:none">
            <h6>Type de logement</h6>
            <div class="select is-small">
                <select class="formulaire" id="typelogement_int_ask" onclick="typelogement_int_ask_fc()">
                    <option value="">--</option>
                    <option value="appartement">Appartement</option>
                    <option value="foyer">Foyer</option>
                </select>
            </div>
        </div>
        <div class="column" id="typelogement_ext_list" style="display:none">
            <h6>Type de logement</h6>
            <div class="select is-small">
                <select class="typelogement_ext_ask">
                    <option value="">--</option>
                    <option value="rue">Rue</option>
                    <option value="campement">Campement</option>
                </select>
            </div>
        </div>
        <div class="column typelogement_int_hide" id="fraislogementappart" style="display:none">
            <h6>Paiement du logement</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="loue">Loué</option>
                    <option value="dispofamille">Mis à disposition par la famille</option>
                    <option value="dispoami">Mis à disposition par des amis</option>
                </select>
            </div>
        </div>
        <div class="column typelogement_int_hide" id="typelogementappart" style="display:none">
            <h6>Type de séjour</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="logemententier">Logement entier</option>
                    <option value="chambreseule">Chambre seul</option>
                    <option value="chambrepartagee">Chambre partagée</option>
                </select>
            </div>
        </div>
    </div>
</div>
