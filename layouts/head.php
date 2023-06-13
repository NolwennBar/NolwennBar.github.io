 <?php
    //--------- SESSION
    session_start();

    //--------- CHEMIN
    // define("RACINE", "/Portfolio/");
    define("RACINE", "/");
    ?>


 <!DOCTYPE html>
 <html class="root-<?= $activePageClass ?>" lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CMaterial+Icons+Round" rel="stylesheet">

     <?php if ($activePage == "Accueil") { ?>
     <link rel="stylesheet" href="dist/css/master.css">
     <script src="dist/js/main.js" defer></script>
     <?php } else { ?>
     <link rel="stylesheet" href="../dist/css/master.css">
     <script src="../dist/js/main.js" defer></script>
     <?php } ?>

     <title>Nolwenn BARMOY</title>
 </head>

 <body class="body-<?= $activePageClass ?>">