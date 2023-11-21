<div class="case">
    <h2 class="subtitle is-6">Historique des prises en charges</h2>
    <div class="level columns">
        <div class="column">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Diagnostique principal</th>
                        <th>Structure</th>
                        <th>Type</th>
                        <th class="produit_sante_hide" id="produit_sante_title" style="display:none">Produit</th>
                        <th>Prise en charge</th>
                        <th>Montant de l'aide</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="orientation_sante_list">
                    <tr>
                        <td>
                            <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
                            <div data-toggle="datepicker"></div>
                        </td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/sante/diagnostiques.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/sante/struct_orientation.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire" id="produit_sante" onclick="produit_sante_fc()">
                                    <?php include('assets/php/lists/sante/type_orientation.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td class="produit_sante_hide" id="produit_sante_medicament" style="display:none">
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/sante/medicament.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td class="produit_sante_hide" id="produit_sante_analyse" style="display:none">
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/sante/analyse.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td class="produit_sante_hide" id="produit_sante_imagerie" style="display:none">
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/sante/imagerie.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire">
                                    <option value="">--</option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                    <option value="contribution">Avec constribution</option>
                                    <option value="libre">Accés libre</option>
                                </select>
                            </div>
                        </td>
                        <td>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
