<?php
$confirmation = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST["email"];
        
        // Envoi de l'email
        $to = $email;
        $admin_email = "greta48.dwwm@gmail.com";
        $subject = "Notification de remise en ligne";
        $message = "Merci ! Vous serez informé dès que notre site sera de nouveau en ligne.";
        $headers = "From: no-reply@monsite.com\r\nCC: $admin_email\r\n";

        mail($to, $subject, $message, $headers);

        $confirmation = "Votre demande a bien été prise en compte !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site en Maintenance</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function activerBouton() {
            document.getElementById("submitBtn").disabled = !document.getElementById("robotCheck").checked;
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>Site en Maintenance</h1>

        <div class="content">
            <div class="text">
                <h2>🔧 Nous revenons bientôt !</h2>
                <p>
                    Cher(e) visiteur(e),<br><br>
                    Nous rencontrons actuellement un problème technique indépendant de notre volonté, et nous mettons tout en œuvre pour rétablir l’accès à notre site dans les plus brefs délais. Nos équipes travaillent activement pour résoudre la situation.<br><br>
                    Nous comprenons que cette interruption puisse être frustrante, et nous nous excusons sincèrement pour la gêne occasionnée. Merci pour votre patience et votre compréhension.<br><br>
                    Si vous souhaitez être informé(e) dès que le site sera de nouveau en ligne, vous pouvez renseigner votre adresse e-mail ci-dessous.
                </p>
            </div>
            <div class="image">
                <picture>
                    <source media="(min-width: 576px)" srcset="https://www.beyonds.fr/wp-content/uploads/2023/08/maintenance-800x0-c-default.png 1x, https://www.beyonds.fr/wp-content/uploads/2023/08/maintenance-1600x0-c-default.png 2x" type="image/webp">
                    <source media="(max-width: 775.98px)" srcset="https://www.beyonds.fr/wp-content/uploads/2023/08/maintenance-580x0-c-default.png 1x, https://www.beyonds.fr/wp-content/uploads/2023/08/maintenance-1160x0-c-default.png 2x" type="image/webp">
                    <img class="maintenance-image" src="https://www.beyonds.fr/wp-content/uploads/2023/08/maintenance.png" alt="maintenance">
                </picture>
            </div>
        </div>

        <div class="form-container">
            <form method="POST">
                <label for="email">Votre e-mail</label>
                <input type="email" name="email" placeholder="Votre e-mail" required>

                <label>
                    <input type="checkbox" id="robotCheck" onclick="activerBouton()"> Je ne suis pas un robot
                </label>

                <input type="submit" id="submitBtn" value="Envoyer" disabled>
            </form>
        </div>

        <p class="confirmation"><?php echo $confirmation; ?></p>
    </div>

    <footer>
        FOOTER - Tous droits réservés DWWM 2025
    </footer>

</body>
</html> 