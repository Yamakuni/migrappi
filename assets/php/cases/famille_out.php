<div class="case">
    <h2 class="subtitle is-6" id="13">Famille à l'exterieur du Maroc</h2>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Lien</th>
                <th>Age</th>
                <th>Lieu</th>
                <th>En contact</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="familly_out_list">
            <tr>
                <td>
                    <input class="formulaire input is-small" type="text" placeholder="Prénom" />
                </td>
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
                            <option value="pays">Au pays</option>
                            <option value="trabsit">Dans un pays de transit</option>
                            <option value="europe">En Europe</option>
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
                    <button type="button" id="add_familly_out" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
