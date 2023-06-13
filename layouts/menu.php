<div class="navigation">
    <button type="button" class="btn" onclick="afficherMenu()" aria-label="Ouvrir le menu" id="open-menu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.19995 5.28003H5.24995M22.7999 5.28003H10.65M22.7999 18.72H18.7499M1.19995 18.72H13.35M1.19995 12H22.7999" stroke="white" stroke-width="2" stroke-linecap="round" />
        </svg>
    </button>

    <button type="button" class="btn" onclick="afficherMenu()" id="close-menu" aria-label="Fermer le menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
        </svg></button>

    <nav>
        <ul id="menu">
            <li>
                <a type="button" <?php if ($activePage == "Accueil") { ?> class="btn-menu active" <?php } ?> class="btn-menu" href="<?= RACINE ?>">Accueil</a>
            </li>
            <li>
                <a type="button" <?php if ($activePage == "Réalisations") { ?> class="btn-menu active" <?php } ?> class="btn-menu" href="<?= RACINE ?>pages/realisations.php">Réalisations</a>
            </li>
            <li>
                <a type="button" <?php if ($activePage == "A propos") { ?> class="btn-menu active" <?php } ?> class="btn-menu" href="<?= RACINE ?>pages/a-propos.php">A
                    propos</a>
            </li>
        </ul>
    </nav>

</div>