<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">
    
    
    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>


    <!------------------------------------------ SUBTITLE ------------------------------------------>
    <div class="title_formtop columns">
        <div class="column is-1"></div>
        <div class="column is-10">
            <div class="level columns">
                <div class="column is-6">
                    <h1 class="subtitle is-4">Dossiers en attente</h1>
                </div>
                <a href="form_newfolder.php" class="button is-outlined is-small success">
                    <span class="icon is-small">
                        <i class="far fa-plus"></i>
                    </span>
                    <span>Créer un nouveau dossier</span>
                </a>
                <div class="control controlhost has-icons-left">
                    <div class="select is-small">
                        <select class="formulaire">
                            <option value="tous">Tous les âges</option>
                            <option value="mena">Mena</option>
                            <option value="adultes">Adultes</option>
                        </select>
                    </div>
                    <span class="icon is-small is-left">
                        <i class="fal fa-users"></i>
                    </span>
                </div>
                <a class="formulaire button is-outlined is-small danger sw_purgelist">
                    <span class="icon is-small">
                        <i class="sidebar_sign fal fa-trash-alt"></i>
                    </span>
                    <span>Vider la liste</span>
                </a>
            </div>
        </div>
    </div>


    <!------------------------------------------ WRAP ------------------------------------------>
    <div class="wrap columns">
        <section class="column">
            <div class="columns">
                <div class="column is-1"></div>
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-10">

                    <div class="title_home level columns">
                        <h1 class="column is-9 subtitle is-4">Service social</h1>
                        <div class="column">
                            <a class="formulaire button is-outlined is-small info sw_fastfolder">
                                <span class="icon is-small">
                                    <i class="far fa-wand-magic"></i>
                                </span>
                                <span>Dossier rapide</span>
                            </a> </div>
                    </div>

                    <div class="case casefull casetop">
                        <h2 class="subtitle is-6">Premier accueil adulte</h2>
                        <table class="table is-fullwidth is-hoverable">
                            <thead>
                                <tr>
                                    <th class="first_table">Dossier</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Statut</th>
                                    <th>Langue</th>
                                    <th>Cadre</th>
                                    <th>Accueil</th>
                                    <th>Ouvrir</th>
                                    <th>Effacer</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Adulte</td>
                                    <td>Français</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_adulte.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Mireille</td>
                                    <td>Mathieu</td>
                                    <td>Mineur</td>
                                    <td>Anglais</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_adulte.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Fela</td>
                                    <td>Kutti</td>
                                    <td>Adulte</td>
                                    <td>Anglais</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_adulte.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Adulte</td>
                                    <td>Espagnol</td>
                                    <td>Urgence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_adulte.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Toyota</td>
                                    <td>Camry</td>
                                    <td>Mineur</td>
                                    <td>Français</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_adulte.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>Adulte</td>
                                    <td>Français</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_adulte.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="case casefull">
                        <h2 class="subtitle is-6">Premier accueil MENA </h2>
                        <table class="table is-fullwidth is-hoverable">
                            <thead>
                                <tr>
                                    <th class="first_table">Dossier</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Statut</th>
                                    <th>Langue</th>
                                    <th>Cadre</th>
                                    <th>Accueil</th>
                                    <th>Ouvrir</th>
                                    <th>Effacer</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Mineur</td>
                                    <td>Français</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_mena.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Mireille</td>
                                    <td>Mathieu</td>
                                    <td>Mineur</td>
                                    <td>Anglais</td>
                                    <td>Urgence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_mena.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Fela</td>
                                    <td>Kutti</td>
                                    <td>Mineur</td>
                                    <td>Anglais</td>
                                    <td>Urgence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_mena.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">C35672</td>
                                    <td>Antoine</td>
                                    <td>Diallo</td>
                                    <td>Mineur</td>
                                    <td>Espagnol</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_mena.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">T56723</td>
                                    <td>Toyota</td>
                                    <td>Camry</td>
                                    <td>Mineur</td>
                                    <td>Français</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_mena.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="folder_number">S89765</td>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>Mineur</td>
                                    <td>Français</td>
                                    <td>Permanence</td>
                                    <td>18-01-2018</td>
                                    <td><a href="form_mena.php" class="formulaire button is-small is-info is-outlined">
                                            <span class="icon is-small"><i class="far fa-folder-open"></i></span>
                                            <span>Ouvrir</span>
                                        </a>
                                    </td>
                                    <td class="sw_erasefolder">
                                        <a href="#home" class="formulaire button is-small is-danger is-outlined">
                                            <span class="icon is-small"><i class="far fa-eraser"></i></span>
                                            <span>Effacer</span>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!--------------- END MAIN ------------->
                </div>
            </div>
        </section>
        <!--------------- END WRAP ------------->
    </div>

    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>

</body>

</html>
