$(document).ready(function () {
    var nbrlign_niveaulangues = 1;
    $('#add_niveaulangues').click(function () {
        nbrlign_niveaulangues++;
        $('#niveaulangues_list').append('<tr id="row_niveaulangues' + nbrlign_niveaulangues + '"><td><div class="select is-small"><select class="formulaire"><option value="-*">-- </option><option value="darija">Darija </option><option value="french">Français </option><option value="english">Anglais </option><option value="spanish">Espagnol </option><option value="spanish">Portugais </option><option value="arabeclassique">Arabe classique </option></select></div></td><td><div class="select is-small"><select class="formulaire"><option value="non">Non </option><option value="base">Base </option><option value="courant">Courant </option><option value="maitrise">Maitrise </option></select></div></td><td><div class="select is-small"><select class="formulaire"><option value="non">Non </option><option value="base">Base </option><option value="courant">Courant </option><option value="maitrise">Maitrise </option></select></div></td><td><div class="select is-small"><select class="formulaire"><option value="non">Non </option><option value="base">Base </option><option value="courant">Courant </option><option value="maitrise">Maitrise </option></select></div></td><td><button type="button" name="remove" id="' + nbrlign_niveaulangues + '" class="formulaire button is-small is-danger is-outlined btn_remove">-</button></td></tr>');
    });
    $(document).on('click', '.btn_remove', function () {
        var button_id_niveaulangues = $(this).attr("id");
        $('#row_niveaulangues' + button_id_niveaulangues + '').remove();
    });
});
