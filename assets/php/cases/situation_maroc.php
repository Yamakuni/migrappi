<div class="case">
    <h2 class="subtitle is-6" id="4">Situation au Maroc</h2>
    <div class="level columns">
        <div class="column">
            <div class="level columns">
                <div class="column">
                    <h6>Ville de résidence</h6>
                    <div class="select is-small">
                        <select class="formulaire" id="citylist" onclick="citylist_fc()">
                            <?php include('assets/php/lists/ville.php'); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <h6>Document d'identité</h6>
            <div class="select is-small">
                <select class="formulaire" id="haveid" onclick="haveid_fc()">
                    <option value="blank">--</option>
                    <option value="non">Non</option>
                    <?php include('assets/php/lists/idlist.php'); ?>
                </select>
            </div>
        </div>
        <div class="column">
            <h6>Document de séjour</h6>
            <div class="select is-small">
                <select class="formulaire" id="havesejour" onclick="havesejour_fc()">
                    <option value="blank">--</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column column_position">
            <?php include('assets/php/lists/quartiers.php'); ?>
        </div>
        <div class="column column_position">
            <div class="column" id="iddate" style="display:none">
                <h6>Date de fin de validité</h6>
                <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                <div data-toggle="datepicker"></div>
            </div>
        </div>
        <div class="column column_position">
            <div class="column" id="sejourdate" style="display:none">
                <h6>Date de fin de validité</h6>
                <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                <div data-toggle="datepicker"></div>
            </div>
        </div>
    </div>
</div>

<div class="case caseinfo" id="carteconsulaire_infobox" style="display:none">
    <?php include('assets/php/infobox/carteconsulaire.php'); ?>
</div>
