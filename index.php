<?php
$activePage = "Accueil";
$activePageClass = "accueil";
include './layouts/header.php'; ?>

<img class="background" src="./dist/assets/Backgrounds/Ballons.svg" alt="">
<img class="background-responsive" src="./dist/assets/Backgrounds/Ballons-responsive.svg" alt="">
<div class="presentation">
    <div class="contenu">
        <img src="./dist/assets/Photo-Nolwenn.png" alt="">
        <h2 class="h2-principal">Junior UX/UI designer
            Webdesigner
            Développeuse Front</h2>
    </div>
    <img class="scroll" src="./dist/assets/Icones/Scroll.svg" alt="">
</div>

<div class="qui-suis-je">
    <img class="background-qui-suis-je" src="./dist/assets/Backgrounds/Qui-suis-je.svg" alt="">
    <div class="titre">
        <h2>Qui suis-je ?</h2>
        <img src="./dist/assets/sparkle.png" alt="">
    </div>
    <div class="contenu">
        <div class="description">
            <p>Je suis Nolwenn, une jeune femme dynamique et passionnée en webdesign et développement frontend. En
                alternance, je suis toujours à la recherche de nouvelles idées créatives et de technologies
                innovantes
                pour
                améliorer mes compétences.</p>
            <br>
            <p>
                Mon portfolio en ligne reflète mon travail et mes compétences en conception et développement web.
                J'aime
                collaborer en équipe et explorer de nouvelles technologies.</p>
        </div>
        <img src="./dist/assets/Illustration-qui-suis-je.png" alt="">
    </div>

    <div class="boutons">
        <a class="btn CV" aria-label="Ouverture de mon CV dans un nouvel onglet" type="button" target="_blank"
            href="./dist/assets/CV Nolwenn BARMOY.pdf">Mon
            CV</a>
        <a target="_blank" aria-label="Ouverture de mon Linkedin dans un nouvel onglet" type="button"
            class="btn linkedin" href="https://www.linkedin.com/in/nolwenn-barmoy/">Mon
            LinkedIn</a>
    </div>
</div>

<div>
    <?php include 'layouts/contact.php'; ?>
</div>

<?php include 'layouts/footer.php'; ?>