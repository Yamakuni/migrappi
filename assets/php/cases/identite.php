<div class="case">
    <h2 class="subtitle is-6" id="2">Identité de l'usager</h2>
    <div class="level columns">
        <div class="column is-one-third">
            <h6>N° de dossier</h6>
            <input class="input is-small folder_number" type="text" name="folder_number" value="C14687" disabled style="color: hsl(217, 71%, 53%);
    font-weight: 500;">
        </div>
        <div class="column">
            <h6>Prénom</h6>
            <input class="formulaire input is-small" type="text" name="first_name" placeholder="Prenom">
        </div>
        <div class="column">
            <h6>Nom</h6>
            <input class="formulaire input is-small" type="text" name="name" placeholder="Nom">
        </div>
    </div>

    <div class="level columns">
        <div class="column is-one-third">
            <h6>Genre</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <option value="neutre">Neutre</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </div>
        </div>
        <div class="column">
            <h6>Date de naissance</h6>
            <input class="formulaire input is-small" data-toggle="datepicker" placeholder="Date">
            <div data-toggle="datepicker"></div>
        </div>
        <div class="column">
            <h6>Nationalité</h6>
            <div class="select is-small">
                <select class="formulaire">
                    <?php include('assets/php/lists/pays.php'); ?>
                </select>
            </div>
        </div>
    </div>
</div>
