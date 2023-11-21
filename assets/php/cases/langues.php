<div class="case">
    <h2 class="subtitle is-6" id="7">Informations complémentaires</h2>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Langue</th>
                <th>Lu</th>
                <th>Parlé</th>
                <th>Écrit</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="niveaulangues_list">
            <tr>
                <td>
                    <div class="select is-small">
                        <select class="formulaire">
                            <?php include('assets/php/lists/langues.php'); ?>
                        </select> </div>
                </td>
                <td>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="non">Non</option>
                            <option value="base">Base</option>
                            <option value="courant">Courant</option>
                            <option value="maitrise">Maitrise</option>
                        </select> </div>
                </td>
                <td>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="non">Non</option>
                            <option value="base">Base</option>
                            <option value="courant">Courant</option>
                            <option value="maitrise">Maitrise</option>
                        </select> </div>
                </td>
                <td>
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="non">Non</option>
                            <option value="base">Base</option>
                            <option value="courant">Courant</option>
                            <option value="maitrise">Maitrise</option>
                        </select> </div>
                </td>
                <td><button type="button" id="add_niveaulangues" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>
