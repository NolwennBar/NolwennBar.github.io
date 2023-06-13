<?php
//Vérification de la récupération des données
if (!empty($_POST)) {
    // Vérification des erreurs
    $hasError = false;

    //Récupération des données
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $entreprise = $_POST['entreprise'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    //Vérification du nom
    if (empty($nom) || strlen($nom) < 2) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le nom doit contenir au minimun 2 caractères</div>';
    } elseif (strlen($nom) > 50) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le nom doit contenir au maximum 50 caractères</div>';
    }

    //Vérification du prénoms
    if (empty($prenom) || strlen($prenom) < 2) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le pénom doit contenir au minimun 2 caractères</div>';
    } elseif (strlen($prenom) > 50) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le prénom doit contenir au maximum 50 caractères</div>';
    }

    //Vérification du mail
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le mail est requis</div>';
    } elseif (strlen($email) > 50) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le mail doit contenir au maximum 50 caractères</div>';
    }

    //Vérification du sujet
    if (strlen($entreprise) > 250) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le sujet doit contenir au maximum 250 caractères</div>';
    }

    //Vérification du sujet
    if (empty($sujet) || strlen($sujet) < 2) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le sujet doit contenir au minimun 2 caractères</div>';
    } elseif (strlen($sujet) > 250) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le sujet doit contenir au maximum 250 caractères</div>';
    }

    //Vérification du message
    if (empty($message) || strlen($message) < 10) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le message doit contenir au minimun 2 caractères</div>';
    } elseif (strlen($message) > 2000) {
        $hasError = true;
        echo /*html*/ '<div role="alert">Le message doit contenir au maximum 2000 caractères</div>';
    }

    // Traitement des données
    //Faire imap pour envoyer le mail depuis l'adresse contact@nolwennbarmoy.fr



    if (isset($_POST['submit'])) {
        // construire le corps de l'email
        $email_body = "Nom: $nom\n";
        $email_body .= "Prénom: $prenom\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Entreprise: $entreprise\n";
        $email_body .= "Sujet: $sujet\n";
        $email_body .= "Message:\n$message\n";

        // en-têtes de l'email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";

        // envoyer l'email
        $to = "nolwenn.barmoy@gmail.com";
        $subject = "Message portfolio : $sujet";
        if (mail($to, $subject, $email_body, $headers)) {
            echo "<p>Votre message a été envoyé avec succès.</p>";
        } else {
            echo "<p>Erreur lors de l'envoi du message. Veuillez réessayer plus tard.</p>";
        }

        unset($nom);
        unset($prenom);
        unset($email);
        unset($sujet);
        unset($message);
        unset($entreprise);
        unset($email_body);
        unset($headers);
        unset($to);
        unset($subject);
    }
} ?>

<section class="contact">
    <form method="post" name="contact-form">
        <fieldset>
            <legend class="titre-contact">Me contacter</legend>

            <div class="contact-ligne">
                <div class="input">
                    <label for="prenom">Prénom</label>
                    <input maxlength="50" required="required" id="prenom" name="prenom" type="text" autocomplete="given-name" value="<?= $prenom ?? ""; ?>">
                </div>

                <div class="input">
                    <label for="nom">Nom</label>
                    <input maxlength="50" required="required" id="nom" name="nom" type="text" autocomplete="family-name" value="<?= $nom ?? ""; ?>">
                </div>
            </div>
            <div class="contact-ligne">
                <div class="input">
                    <label for="email">Email</label>
                    <input maxlength="50" required="required" name="email" id="email" type="text" autocomplete="email" value="<?= $email ?? ""; ?>">
                </div>
                <div class="input">
                    <label for="entreprise">Entreprise (optionnel)</label>
                    <input maxlength="250" name="entreprise" id="entreprise" type="text" autocomplete="organization" value="<?= $entreprise ?? ""; ?>">
                </div>
            </div>
            <div class="input">
                <label for="sujet">Sujet</label>
                <input class="input-sujet" maxlength="250" required="required" name="sujet" id="sujet" type="text" value="<?= $sujet ?? ""; ?>">
            </div>
            <div class="input">
                <label for="message">Message</label>
                <textarea required="required" maxlength="2000" name="message" id="message" type="text" value="<?= $message ?? ""; ?>"></textarea>
            </div>
        </fieldset>
        <button type="submit" name="submit" class="btn">Envoyer</button>
    </form>

</section>