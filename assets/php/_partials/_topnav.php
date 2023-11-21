<nav class="navbar is-fixed-top columns">

    <div class="navbar-brand column is-2">
        <a class="navbar-item navbar-logo" href="home_general.php"><img src="assets/img/logo.png"></a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start ">
            <a href="page_search.php" class="navbar-item"><i class="fal fa-search"></i></a>
            <a class="navbar-item" href="home_general.php">Géneral</a>
            <a class="navbar-item" href="home_sante.php">Santé</a>
            <a class="navbar-item" href="home_social.php">Social</a>
            <a class="navbar-item" href="home_education.php">Éducation</a>
            <a class="navbar-item" href="home_insertion.php">Insertion</a>
            <a class="navbar-item" href="home_psy.php">Psy</a>
            <a class="navbar-item" href="home_host.php">Logement</a>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
            <span class="navbar-link">
                <i class="fal fa-cog"></i>
            </span>
            <div class="navbar-dropdown is-right">
                <a href="form_group.php" class="navbar-item"><i class="fal fa-users"></i>Atelier de groupe</a>
                <a href="page_host.php" class="navbar-item"><i class="fal fa-hotel"></i>Hébergements</a>
                <hr class="navbar-divider">
                <a onclick="datamenu_open()" class=" navbar-item"><i class="fal fa-database"></i>Data & stats</a>
                <a href="page_history.php" class="navbar-item"><i class="fal fa-history"></i>Historique</a>
                <a onclick="version_open()" class="navbar-item"><i class="fal fa-poll-h"></i>Release notes</a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="https://framaforms.org/base-de-donnees-1533647387" target="_blank"><i
                        class="fal fa-bug"></i>Signaler bug</a>
                <a href="page_admin.php" class="navbar-item"><i class="fal fa-shield-cross"></i>Administration</a>
            </div>
        </div>
        <a class="navbar-item logout"><i class="fal fa-sign-out"></i></a>
    </div>
</nav>


<?php include('assets/php/modal/version.php'); ?>
<?php include('assets/php/modal/datamenu.php'); ?>