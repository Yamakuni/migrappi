<div class="case">
    <h2 class="subtitle is-6" id="6">Famille au pays</h2>

    <div class="level columns">
        <div class="column is-one-third">
            <h6>Recherche de membres de la famille</h6>
            <div class="select is-small">
                <select class="formulaire" id="searchfamilly" onclick="searchfamilly_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
    </div>

    <div class="level columns">
        <div class="column is-half">
            <div class="level columns">
                <div class="column is-half">
                    <h6>Conjoint au pays</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <h6>Parents au pays</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="level columns">
                <div class="column is-half">
                    <h6>Enfants au pays</h6>
                    <div class="select is-small">
                        <select class="formulaire" id="enfantpays" onclick="enfantpays_fc()">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                    </div>
                </div>
                <div class="column" id="enfant_nombre" style="display:none">
                    <h6>Nombre d'enfants au pays</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <?php include('assets/php/lists/nombres.php'); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="level columns">
        <div class="column is-one-quarter">
            <h6>Le jeune est-il en fugue ?</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-three-quarters">
            <h6>Observations, soutiens de la famille et des amis ?</h6>
            <input class="formulaire input is-small is-100" type="text" name="name" placeholder="Informations">
        </div>
    </div>

    <div class="level columns">
        <div class="column is-full">
            <h6>Informations sur le lieu de vie et l'entourage au pays</h6>
            <textarea class="formulaire textarea is-small" rows="2" placeholder="Informations"></textarea>
        </div>
    </div>

</div>

<div class="case caseinfo" id="searchfamilly_infobox" style="display:none">
    <?php include('assets/php/infobox/recherchefamille.php'); ?>
</div>
