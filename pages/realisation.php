<?php

include '../database/realisationsRepository.php';
$id = $_GET['id'];

$repo = new realisationsRepository();

$find = $repo->find($id);


$activePage = $find['titre'];
$activePageClass = "realisation";
include '../layouts/header.php';
?>


<img class="background-realisation" src="../dist/assets/Backgrounds/Realisation.svg" alt="">
<img class="background-realisation-mobile" src="../dist/assets/Backgrounds/Realisation-mobile.png" alt="">
<div class="illustrations">
    <img class="illustration illustration-1" onclick="imageTop('illustration-1', 'illustration-2', 'illustration-3')"
        id="illustration-1" src="../dist/assets/Réalisations/Biteme/Biteme-1.jpg" alt="">
    <img class="illustration illustration-2" onclick="imageTop('illustration-2', 'illustration-1', 'illustration-3')"
        id="illustration-2" src="../dist/assets/Réalisations/Biteme/Biteme-2.jpg" alt="">
    <img class="illustration illustration-3" onclick="imageTop('illustration-3', 'illustration-2', 'illustration-1')"
        id="illustration-3" src="../dist/assets/Réalisations/Biteme/Biteme-3.png" alt="">
</div>

<div class="brief">
    <div>
        <h2>Type de réalisation</h2>
        <p>Maquette</p>
    </div>
    <div>
        <h2>Le brief</h2>
        <p>Le projet était de réaliser deux pages d'un site e-commerce avec un style rispgraphique. La première page est
            une landing page qui servira d'accueil attrayant pour les visiteurs. Elle mettra en valeur les produits
            phares de votre boutique en ligne, en utilisant des couleurs vives, des formes géométriques et des
            illustrations audacieuses. La mise en page sera soigneusement conçue pour attirer l'attention des
            utilisateurs et les inciter à explorer davantage votre site.
            <br aria-hidden="true"><br aria-hidden="true">
            La seconde page est une page produit dédiée à la présentation détaillée d'un article spécifique. Le style
            rispgraphique sera utilisé pour créer une expérience visuelle unique et mémorable. Les couleurs vives, les
            contrastes marqués et les motifs graphiques seront intégrés de manière harmonieuse pour créer une esthétique
            moderne et captivante.
        </p>
    </div>

</div>

<?php include '../layouts/footer.php'; ?>