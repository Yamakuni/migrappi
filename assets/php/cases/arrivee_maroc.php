<div class="case">
    <h2 class="subtitle is-6" id="10">L'arrivée au Maroc</h2>

    <div class="level columns">
        <div class="column is-full">
            <h6>Récit de l'arrivée au Maroc</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
    <div class="level columns">
        <div class="column">
            <h6>Tentatives de passage</h6>
            <div class="select is-small">
                <select class="formulaire" id="tentatives" onclick="tentatives_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column ">
            <h6>Arrestations</h6>
            <div class="select is-small">
                <select class="formulaire" id="arrestations" onclick="arrestations_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column partenaire">
            <h6>Détention</h6>
            <div class="select is-small">
                <select class="formulaire" id="detention_ask" onclick="detention_ask_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
        <div class="column partenaire">
            <h6>Expulsion du Maroc</h6>
            <div class="select is-small">
                <select class="formulaire" id="expulsion_ask" onclick="expulsion_ask_fc()">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
    </div>
</div>


<!----------------------------------- Tentatives de passages ------------------------------------>
<div class="case casequest" id="tentatives_nbr" style="display:none">
    <div class="h2hide subtitle is-6" id="11">Tentatives de passage</div>
    <div class="level ">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Séjour en forêt</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tentatives_list">
                <tr>
                    <td>
                        <input class="formulaire input is-small" data-toggle="datepicker">
                        <div data-toggle="datepicker"></div>
                    </td>
                    <td>
                        <div class="select is-small">
                            <select class="formulaire">
                                <option value="">--</option>
                                <option value="tanger">Mer (Tanger)</option>
                                <option value="nador">Mer (Nador)</option>
                                <option value="ceuta">Barrière de Ceuta</option>
                                <option value="mellila">Barrière de Mellila</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="select is-small">
                            <select class="formulaire" id="foret_ask" onclick="foret_ask_fc()">
                                <option value="">--</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                    </td>
                    <td id="foret_lieu" style="display:none">
                        <input class="formulaire input is-small" type="text" placeholder="Lieu">
                    </td>
                    <td id="foret_duree" style="display:none">
                        <div class="select is-small">
                            <select class="formulaire">
                                <option value="">Durée</option>
                                <?php include('assets/php/lists/dureesemaines.php'); ?>
                            </select>
                        </div>
                    </td>
                    <td><button type="button" id="add_tentatives" class="is-info is-outlined button is-small"><i class="fal fa-plus"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Commentaires sur les tentatives</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
</div>


<!----------------------------------- Arrestations ------------------------------------>
<div class="case casequest" id="arrestations_nbr" style="display:none">
    <div class="h2hide subtitle is-6" id="12">Arrestation</div>
    <div class="level ">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Région</th>
                    <th>Lieu</th>
                    <th>Violences</th>
                    <th>Déplacement</th>
                    <th class="th_addcorrec" id="deplacement_title" style="display:none">Lieu</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="arrestation_list">
                <tr>
                    <td>
                        <input class="formulaire input is-small" data-toggle="datepicker">
                        <div data-toggle="datepicker"></div>
                    </td>
                    <td>
                        <div class="select is-small">
                            <select class="formulaire">
                                <?php include('assets/php/lists/ville.php'); ?>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="select is-small">
                            <select class="formulaire">
                                <option value="">--</option>
                                <option value="frontiere">Passage de frontière</option>
                                <option value="prive">Lieu privé</option>
                                <option value="public">Espace public</option>
                                <option value="mendicite">Mendicité voie publique</option>
                                <option value="comemrce">Commerce voie publique</option>
                                <option value="quotidien">Vie quotidienne</option>
                                <option value="foret">Forêt</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="select is-small">
                            <select class="formulaire">
                                <option value="non">Non</option>
                                <option value="oui">Oui</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="select is-small">
                            <select class="formulaire" id="deplacement_ask" onclick="deplacement_ask_fc()">
                                <option value="non">Non</option>
                                <option value="oui">Oui</option>
                            </select>
                        </div>
                    </td>
                    <td id="deplacement_info" style="display:none">
                        <input class="formulaire input is-small" type="text" placeholder="Lieu">
                    </td>
                    <td><button type="button" id="add_arrestation" class="is-info is-outlined button is-small"><i class="fal fa-plus"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="level columns">
        <div class="column is-full">
            <h6>Commentaires sur arrestation</h6>
            <textarea class="formulaire textarea is-small" rows="3" placeholder="Résumé"></textarea>
        </div>
    </div>
</div>


<!----------------------------------- Détention ------------------------------------>
<div class="case casequest" id="detention_info" style="display:none">
    <div class="h2hide subtitle is-6" id="14">Détention</div>
    <section>
        <div class="level columns">
            <div class="column third">
                <h6>Lieu détention</h6>
                <input class="formulaire input is-small" type="text" placeholder="Lieu">
            </div>
            <div class="column">
                <h6>Temps détention</h6>
                <div class="select is-small">
                    <select class="formulaire">
                        <?php include('assets/php/lists/dureesemaines.php'); ?>
                    </select>
                </div>
            </div>
            <div class="column">
                <h6>Entrevue avec un juge</h6>
                <div class="select is-small">
                    <select class="formulaire">
                        <option value="non">Non</option>
                        <option value="oui">Oui</option>
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
    </section>
</div>


<!----------------------------------- Expulsions ------------------------------------>
<div class="case casequest" id="expulsion_info" style="display:none">
    <div class="h2hide subtitle is-6" id="15">Expulsions du Maroc</div>
    <div class="level columns">
        <div class="column is-one-third">
            <h6>Lieu d'expulsion</h6>
            <div class="select is-small">
                <select>
                    <option value="">--</option>
                    <option value="paystransit">Pays de transit</option>
                    <option value="paysorigine">Pays d'origine</option>
                </select>
            </div>
        </div>
        <div class="column">
            <h6>Pays d'expulsion</h6>
            <div class="select is-small">
                <select>
                    <?php include('assets/php/lists/pays.php'); ?>
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
