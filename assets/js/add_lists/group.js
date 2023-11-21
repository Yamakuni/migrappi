$(document).ready(function () {
    var nbrlign_group = 1;
    $('#add_group').click(function () {
        nbrlign_group++;
        $('#group_list').append('<tr class="level columns" id="row_group' + nbrlign_group + '"><td class="column is-2"><input class="input is-small" type="text" placeholder="N° de dossier"></td><td class="column is-9 is-100"><textarea class="textarea is-small is-100" rows="1" placeholder="Observations"></textarea></td><td class="column"><button type="button" name="remove" id="' + nbrlign_group + '" class="button is-small is-danger is-outlined btn_remove">-</button></td></tr>');
    });
    $(document).on('click', '.btn_remove', function () {
        var button_id_group = $(this).attr("id");
        $('#row_group' + button_id_group + '').remove();
    });
});
