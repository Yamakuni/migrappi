<div class="case">
    <h2 class="subtitle is-6">Historique des prise en charge</h2>
    <table class="table is-fullwidth">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody id="prise_encharge_list">
            <tr>
                <td>
                    <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                    <div data-toggle="datepicker"></div>
                </td>
                <td>
                    <div class="select is-small">
                        <select class="formulaire" id="pectype" onclick="pectype_fc()">
                            <?php include('assets/php/lists/aidesdirectes.php'); ?>
                        </select>
                    </div>
                </td>
                <td class="pec_hide" id="pec_alim" style="display:none">
                    <div class="select is-small">
                        <select class="formulaire" id="pec_alim_list" onclick="pec_alim_list_fc()">
                            <option value="argent">Aide financière</option>
                            <option value="bon">Bon</option>
                            <option value="panier">Panier</option>
                        </select>
                    </div>
                </td>
                <td class="pec_hide" id="pec_alim_type" style="display:none">
                    <input class="formulaire input is-small" type="text" placeholder="Type">
                </td>

                <td class="pec_hide" id="pec_couvtype" style="display:none">
                    <input class="formulaire input is-small" type="text" placeholder="Source">
                </td>

                <td class="pec_hide" id="pec_douchekit" style="display:none">
                    <div class="select is-small">
                        <select class="formulaire" id="pec_douche_list" onclick="pec_douche_list_fc()">
                            <option value="">Kit hygiène ?</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>
                </td>

                <td class="pec_hide" id="pec_couvtype" style="display:none">
                    <input class="formulaire input is-small" type="text" placeholder="Source">
                </td>
                <td class="column is-7 is-100 pec_hide" id="pec_observationl" style="display:none">
                    <input class="formulaire input is-small is-100" type="text" placeholder="Observation">
                </td>
                <td class="pec_hide" id="pec_matelastype" style="display:none">
                    <input class="formulaire input is-small" type="text" placeholder="Source">
                </td>
                <td class="pec_hide" id="pec_vetementstype" style="display:none">
                    <input class="formulaire input is-small" type="text" placeholder="Source">
                </td>

                <td class="column is-5 is-100 pec_hide" id="pec_observation" style="display:none">
                    <input class="formulaire input is-small is-100" type="text" placeholder="Observation">
                </td>
                <td class="pec_hide" id="pecmontant" style="display:none">
                    <div class="field has-addons money">
                        <p class="control">
                            <input class="formulaire input is-small" type="text" placeholder="Montant">
                        </p>
                        <p class="control">
                            <a class="formulaire button is-small is-static">
                                dhs
                            </a>
                        </p>
                    </div>
                </td>
                <td class="pec_hide" id="codecompta" style="display:none">
                    <div class="field has-addons money">
                        <p class="control">
                            <a class="formulaire button is-small is-static">Code</a>
                        </p>
                        <p class="control codecompta_bloc">
                            <input class="formulaire input is-small codecompta_gras" type="text" value="<?php $Length = 5; $RandomString = substr(str_shuffle(md5(time())), 0, $Length); echo $RandomString; ?>" readonly>
                        </p>
                    </div>
                </td>
                <td>
                    <button type="button" id="add_prise_encharge" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
