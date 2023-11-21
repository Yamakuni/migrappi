<div class="column">
    <a class="button is-outlined is-small is-rounded info-invers sw_fastfolder">
        <span>Dossier rapide</span>
        <span class="icon is-small">
            <i class="far fa-shipping-fast"></i>
        </span>
    </a>
</div>
<div class="column" id="askmodifiedform">
    <a class="button is-outlined is-small link-invers" onclick="AskModifyForm()">
        <span>Modifier informations</span>
        <span class="icon is-small">
            <i class="far fa-pencil"></i>
        </span>
    </a>
</div>
<div class="column" id="validmodifiedform" style="display:none">
    <div class=" buttons has-addons">
        <a class="formulaire button is-outlined is-small success sw_modifyforms">Valider</a>
        <a class="formulaire button is-outlined is-small danger" onclick="CancelModifyForm()">Abandonner</a>
    </div>
</div>
