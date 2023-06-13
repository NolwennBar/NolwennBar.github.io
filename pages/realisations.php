<?php $activePage = "Réalisations";
$activePageClass = "realisations";
include '../layouts/header.php';
include '../database/realisationsRepository.php' ?>


<img class="background-realisations" src="<?= RACINE ?>dist/assets/Backgrounds/Realisations.svg" alt="">


<div class="toggle-buttons">
    <button onclick="filtreRealisation(event, 'tous')" id="btn-tous" class="active btn-categorie btn"
        data-filter="*">Tous</button>
    <button onclick="filtreRealisation(event, 'maquette')" id="btn-maquette" class=" btn-categorie btn"
        data-filter="maquette"><img src="<?= RACINE ?>dist/assets/Icones/Maquette.svg" alt="">Maquette</button>
    <button onclick="filtreRealisation(event, 'ux')" id="btn-ux" class="btn btn-categorie" data-filter="ux"><img
            src="<?= RACINE ?>dist/assets/Icones/UX.svg" alt="">UX</button>
    <button onclick="filtreRealisation(event, 'website')" id="btn-website" class="btn btn-categorie"
        data-filter="website"><img src="<?= RACINE ?>dist/assets/Icones/Website.svg" alt="">Website</button>
</div>

<div class="realisations">
    <?php
    $realisationsRepo = new realisationsRepository();

    $realisations = $realisationsRepo->findAll();

    $path = RACINE . 'dist/assets/';


    foreach ($realisations as $realisation) {
        if ($realisation['type'] == "desktop") { ?>
    <div id="<?= $realisation['id'] ?>" class="ecran single-project maquette"
        onclick="afficherRealisation(<?= $realisation['id'] ?>)">
        <div class="barre">
            <p><?= $realisation['titre'] ?></p>
            <img class="actions" src="<?= $path ?>Actions.svg" alt="">
        </div>
        <img class="contenu" src="<?= $path . $realisation['image_1'] ?>" alt="">
    </div>
    <?php
        } else if ($realisation['type'] == "mobile") { ?>
    <div id="<?= $realisation['id'] ?>" class="telephone single-project maquette"
        onclick="afficherRealisation(<?= $realisation['id'] ?>)">
        <img class="telephone" src="<?= $path . $realisation['image_1'] ?>" alt="">
    </div>
    <?php
        } else if ($realisation['type'] == "website") { ?>
    <div id="<?= $realisation['id'] ?>" onclick="afficherRealisation(<?= $realisation['id'] ?>)"
        class="single-project website ecran">
        <div class="barre">
            <p><?= $realisation['titre'] ?></p>
            <img class="actions" src="<?= $path ?>Actions.svg" alt="">
        </div>
        <img class="contenu" src="<?= $path . $realisation['image_1'] ?>" alt="">
    </div><?php
                }
            } ?>


</div>
<?php include '../layouts/footer.php'; ?>