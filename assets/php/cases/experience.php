<div class="case partenaire">
    <h2 class="subtitle is-6" id="17">Expérience professionelle</h2>

    <div class="level columns">
        <div class="column is-one-third">
            <h6>A déjà travaillé</h6>
            <div class="select is-small">
                <select class="formulaire" id="travailpasse" onclick="travailpasse_fc()">
                    <option value="">--</option>
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                </select>
            </div>
        </div>
    </div>
    <div class="questionbox" id="activitepasse" style="display:none">
        <section class="hero">
            <div class="hero-body">
                <div class="questionbox_header">
                    <div class="questionbox_title">Activité professionnelle</div>
                </div>
                <div class="level ">
                    <table class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>Métier</th>
                                <th>Durée</th>
                                <th>Pays</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="activitepasse_list">
                            <tr>
                                <td>
                                    <div class="select is-small">
                                        <select class="select--description">
                                            <?php include('assets/php/lists/domainepro.php'); ?>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="select is-small">
                                        <select class="formulaire">
                                            <option value="">--</option>
                                            <option value="moisde6mois">Inférieur à 6 mois</option>
                                            <option value="6moisa1an">Entre 6 mois et 1 an</option>
                                            <option value="1ana3ans">Entre 1 et 3 ans</option>
                                            <option value="3ansa5ans">Entre 3 et 5 ans</option>
                                            <option value="plusde5ans">Supérieure à 5 ans</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="select is-small">
                                        <select>
                                            <?php include('assets/php/lists/pays.php'); ?>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" id="add_activitepasse" class="formulaire button is-small is-info is-outlined"><i class="fal fa-plus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="level columns">
                    <div class="column is-full">
                        <h6>Commentaires</h6>
                        <textarea class="formulaire textarea is-small" rows="3" placeholder="Commentaires"></textarea>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
