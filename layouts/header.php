<?php

if ($activePage == "Accueil") {
    include './layouts/head.php';
    echo /*html*/ ' <header class="header header-accueil">';
} else {
    include '../layouts/head.php'; ?>
    <header class="header header-<?= $activePageClass ?>">
    <?php } ?>


    <div class="contenu-header">
        <div class="header-gauche">
            <?php if ($activePage == "Accueil") {
                echo /*html*/ '<h1>Nolwenn Barmoy</h1>';
            } else {
            ?> <img class="photo-moi" alt="" src="<?= RACINE ?>dist/assets/Photo-Nolwennn-header.png">
                <p class="titre-header">Nolwenn Barmoy</p>
            <?php } ?>
        </div>

        <?php include 'menu.php'; ?>
    </div>

    <?php if ($activePage !== "Accueil") { ?>
        <div class="titre titre-<?= $activePageClass ?>">
            <h1><?= $activePage ?></h1>
            <img src="<?= RACINE ?>dist/assets/Sparkle.png " alt="">
        </div>
    <?php }
    if ($activePage == "Réalisations") { ?>
    <?php  } ?>

    </header>
    <!-- TODO : séparer la nav et le header et mettre le tout dans une div -->


    <main class="main-<?= $activePageClass ?>">