<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">
    <!------------------------- SCRIPTS TOP --------------------------------------->
    
    <!------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>



    <!------------------------- SUBTITLE ------------------------------------------>
    <div class="title_formtop  columns">
        <div class="column is-1"></div>
        <div class="column is-10">
            <div class="level columns">
                <div class="column is-9">
                    <h1 class="subtitle is-4">Premier accueil adulte</h1>
                </div>
                <a class="formulaire button is-outlined is-small danger-invers sw_returnforms">
                    <span class="icon is-small">
                        <i class="far fa-arrow-left"></i>
                    </span>
                    <span>Retour</span>
                </a>
            </div>
        </div>
    </div>


    <!------------------------- WRAP ------------------------------------------>
    <div class="wrap columns">
        <section class="column">
            <div class="columns">
                <div class="column is-1"></div>
                <!------------------------- MAIN ------------------------------------------>
                <div class="main js-toc-content column is-9">
                    <div class="casetop"></div>



                    <!------------------------- Information de santé ------------------------------------------>
                    <?php include('assets/php/cases/sante.php'); ?>



                    <!------------------------- Identité ------------------------------------------>
                    <?php include('assets/php/cases/identite.php'); ?>



                    <!------------------------- Contact ------------------------------------------>
                    <?php include('assets/php/cases/contact.php'); ?>



                    <!------------------------- Situation au Maroc ------------------------------------------>
                    <?php include('assets/php/cases/situation_maroc.php'); ?>



                    <!------------------------- Motifs de depart ------------------------------------------>
                    <?php include('assets/php/cases/motif_depart.php'); ?>



                    <!------------------------- Logement au Maroc------------------------------------------>
                    <?php include('assets/php/cases/logement.php'); ?>



                    <!------------------------- Famille au Maroc ----------------------------------->
                    <?php include('assets/php/cases/famille_maroc.php'); ?>



                    <!------------------------- Famille au pays ------------------------------------>
                    <?php include('assets/php/cases/famille_pays.php'); ?>



                    <!------------------------- Dates ------------------------------------>
                    <?php include('assets/php/cases/dates.php'); ?>



                    <!------------------------- Au pays ------------------------------------>
                    <?php include('assets/php/cases/situation_pays.php'); ?>



                    <!------------------------- Sur le trajet ------------------------------------>
                    <?php include('assets/php/cases/situation_trajet.php'); ?>



                    <!------------------------- Arrivée au Maroc ------------------------------------>
                    <?php include('assets/php/cases/arrivee_maroc.php'); ?>



                    <!------------------------- Situation économique ---------------------------------->
                    <?php include('assets/php/cases/situation_eco.php'); ?>



                    <!------------------------- Éducation ---------------------------------->
                    <?php include('assets/php/cases/education.php'); ?>



                    <!------------------------- Experience ---------------------------------->
                    <?php include('assets/php/cases/experience.php'); ?>



                    <!------------------------- Perspectives -------------------------------->
                    <?php include('assets/php/cases/perspectives.php'); ?>



                    <!------------------------- Besoins ---------------------------------->
                    <?php include('assets/php/cases/besoins.php'); ?>



                    <!------------------------- Prise en charge ---------------------------------->
                    <?php include('assets/php/cases/prise_encharge.php'); ?>



                    <!------------------------- Validation du formulaire ---------------------------------->
                    <?php include('assets/php/cases/valid_form.php'); ?>


                    <!------------------------- END MAIN -------->
                </div>


                <!------------------------- RIGHTNAV -------->
                <?php include('assets/php/_partials/_rightnav.php'); ?>


            </div>
        </section>
        <!------------------------- END WRAP -------->
    </div>


    <!------------------------- Scripts --------------------------------------->
    <?php include('assets/php/_partials/_script.php'); ?>
    <script>
        new SlimSelect({
            showSearch: false,
            select: '#motifurgence_select'
        })

    </script>


</body>

</html>
