<div class="case">
    <h2 class="subtitle is-6" id="9">Plus d'informations sur le trajet</h2>

    <div class="level columns">
        <div class="column is-full">
            <h6>Avec qui la personne a-t-elle voyagé jusqu'au Maroc</h6>
            <div class="select is-small multiple">
                <select class="formulaire" id="compagnonsvoyage" multiple>
                    <option value="seule">Seule</option>
                    <option value="parents">Avec ses parents</option>
                    <option value="conjoint">Avec son conjoint</option>
                    <option value="amis">Avec des amis</option>
                    <option value="reseau">Avec un réseau de traite</option>
                    <option value="famille">Avec des membres de la famille proche</option>
                </select>
            </div>
        </div>
    </div>

    <div class="level columns">
        <div class="column is-one-fifth">
            <h6>Séparation sur la route</h6>
            <div class="select is-small">
                <select class="formulaire" id="separation_famille" onclick="separation_famille_fc()">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-four-fifths" id="separation_famille_details" style="display:none">
            <div class="level columns">
                <div class="column is-one-quarter">
                    <h6>Pays</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <?php include('assets/php/lists/pays.php'); ?>
                        </select>
                    </div>
                </div>
                <div class="column is-three-quarters">
                    <h6>Informations complémentaires, motifs</h6>
                    <input class="formulaire input is-small is-100" type="text" name="name" placeholder="Informations">
                </div>
            </div>
        </div>
    </div>

    <div class="level columns">
        <div class="column is-one-fifth">
            <h6>Morts membres de la famille</h6>
            <div class="select is-small">
                <select class="formulaire" id="mortfamille_route" onclick="mortfamille_route_fc()">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column is-four-fifths" id="mortfamille_route_details" style="display:none">
            <div class="level columns">
                <div class="column is-one-quarter">
                    <h6>Pays</h6>
                    <div class="select is-small">
                        <select class="formulaire">
                            <?php include('assets/php/lists/pays.php'); ?>
                        </select>
                    </div>
                </div>
                <div class="column is-three-quarters">
                    <h6>Membres de la famille</h6>
                    <div class="select is-small multiple">
                        <select class="formulaire" id="familleperdutrajet" multiple>
                            <?php include('assets/php/lists/famille.php'); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Type des problémes et violences rencontrés sur la route et au Maroc</h6>
            <div class="select is-small multiple">
                <select class="formulaire" id="problemesroute" multiple>
                    <option value="seule">Victime de traite durant à des fins d'exploitation sexuelle</option>
                    <option value="seule">Victime de traite durant à des fins de travail</option>
                    <option value="seule">Victime d'assauts ou vols</option>
                    <option value="seule">Victime d'agression physique</option>
                    <option value="perdu">Perdu dans le désert</option>
                    <option value="autre">Autre</option>
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


<div class="case caseinfo violence_trajet_hide" id="depistage2_infobox" style="display:none">
    <?php include('assets/php/infobox/depistageist.php'); ?>
</div>


<script>
    new SlimSelect({
        showSearch: false,
        select: '#compagnonsvoyage'
    })

    new SlimSelect({
        showSearch: false,
        select: '#familleperdutrajet'
    })

    new SlimSelect({
        showSearch: false,
        select: '#problemesroute'
    })

</script>
