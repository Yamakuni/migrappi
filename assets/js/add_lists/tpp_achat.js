$(document).ready(function () {
    var nbrlign_tpp_achat = 1;
    $('#add_tpp_achat').click(function () {
        nbrlign_tpp_achat++;
        $('#tpp_achat_list').append('<tr id="row_tpp_achat' + nbrlign_tpp_achat + '"><td><input class="formulaire input is-small" type="text" placeholder="Lieu" /></td><td><div class="field has-addons money"><p class="control"><input class="formulaire input is-small" type="text" placeholder="Montant"></p><p class="control"><a class="formulaire button is-small is-static">dhs</a></p></div></td><td><div class="select is-small"><select class="formulaire"><option value="">--</option><option value="facture">Facture</option><option value="recu">Reçu</option></select></div></td><td><div class="file is-light"><label class="file-label"><input class="file-input" type="file" name="resume"><span class="file-cta"><span class="file-icon"><i class="fas fa-upload"></i></span><span class="file-label">Upload</span></span></label></div></td><td><button type="button" name="remove" id="' + nbrlign_tpp_achat + '" class="button is-small is-danger is-outlined btn_remove">-</button></td></tr>');
    });
    $(document).on('click', '.btn_remove', function () {
        var button_id_tpp_achat = $(this).attr("id");
        $('#row_tpp_achat' + button_id_tpp_achat + '').remove();
    });
});
