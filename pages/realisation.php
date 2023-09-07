<?php
include '../database/realisationsRepository.php';

$id = $_GET['id'];
$repo = new realisationsRepository();
$find = $repo->find($id);

$activePage = $find['titre'];
$activePageClass = "realisation";
include '../layouts/header.php';
$path = RACINE . 'dist/assets/Réalisations/';
?>



<img class="background-realisation" src="../dist/assets/Backgrounds/Realisation.svg" alt="">
<img class="background-realisation-mobile" src="../dist/assets/Backgrounds/Realisation-mobile.png" alt="">
<div class="illustrations">
    <img class="illustration illustration-1" onclick="imageTop('illustration-1', 'illustration-2', 'illustration-3')"
        id="illustration-1" src="<?= $path . $find['image_1'] ?>" alt="">
    <img class="illustration illustration-2" onclick="imageTop('illustration-2', 'illustration-1', 'illustration-3')"
        id="illustration-2" src="<?= $path . $find['image_2'] ?>" alt="">
    <img class="illustration illustration-3" onclick="imageTop('illustration-3', 'illustration-2', 'illustration-1')"
        id="illustration-3" src="<?= $path . $find['image_3'] ?>" alt="">
</div>

<div class="brief">
    <div>
        <h2>Type de réalisation</h2>
        <p><?= $find['Catégorie'] ?></p>
    </div>
    <div>
        <h2>Le brief</h2>
        <p><?= $find['brief'] ?>
        </p>


    </div>
    <?php if ($find['lien'] !== "") { ?>
    <div>
        <h2>Lien</h2>
        <a href="<?= $find['lien'] ?>" target="_blank">Accéder à la maquette/prototype</a>
        <?php } ?>
    </div>

</div>

<?php include '../layouts/footer.php'; ?>