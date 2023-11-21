<div class="case">
    <h2 class="subtitle is-6" id="5">Famille au Maroc</h2>
    <div class="level columns">
        <div class="column">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>N° de dossier</th>
                        <th>Prénom</th>
                        <th>Lien</th>
                        <th>Age</th>
                        <th>Personne à charge</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="familly_maroc_list">
                    <tr>
                        <td><input class="formulaire input is-small" type="text" placeholder="N° de dossier" /></td>
                        <td><input class="formulaire input is-small" type="text" placeholder="Prénom" /></td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/famille.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire">
                                    <?php include('assets/php/lists/age.php'); ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="select is-small">
                                <select class="formulaire">
                                    <option value="">--</option>
                                    <option value="oui">Oui</option>
                                    <option value="oui">Non</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <button type="button" id="add_familly_maroc" class="formulaire button is-small is-info is-outlined ">
                                <i class="fal fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
