<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik formularza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Wynik formularza</h1>
    <div style="background: #1F1F1FFF; padding: 25px; border-radius: 8px; width: 400px; color: white;">
        <?php
        // Zadanie 21
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Zadanie 22 i 25
            $imie = trim($_POST["imie"] ?? "");
            // Zadanie 23
            $email = trim($_POST["email"] ?? "");
            $temat = trim($_POST["temat"] ?? "");
            // Zadanie 25
            $wiadomosc = trim($_POST["wiadomosc"] ?? "");
            // Zadanie 27
            $zgoda = isset($_POST["zgoda"]);

            $bledy = [];

            if ($imie === "") {
                $bledy[] = "Imię jest wymagane.";
            }
            // Zadanie 26
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $bledy[] = "Niepoprawny adres e-mail.";
            }
            if ($wiadomosc === "") {
                $bledy[] = "Wiadomość jest wymagana.";
            }
            if (!$zgoda) {
                $bledy[] = "Musisz zaakceptować regulamin.";
            }

            // Zadanie 28
            if (empty($bledy)) {
                echo "<p style='color: #29e807;'><strong>Dziękujemy! Dane zostały wysłane poprawnie.</strong></p>";
                // Zadanie 24
                echo "<p>Imię: " . htmlspecialchars($imie, ENT_QUOTES, "UTF-8") . "</p>";
                echo "<p>E-mail: " . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "</p>";
                echo "<p>Temat: " . htmlspecialchars($temat, ENT_QUOTES, "UTF-8") . "</p>";
                echo "<p>Wiadomość: " . htmlspecialchars($wiadomosc, ENT_QUOTES, "UTF-8") . "</p>";
            } else {
                echo "<p style='color: red;'>Wystąpiły błędy:</p>";
                echo "<ul>";
                foreach ($bledy as $blad) {
                    echo "<li style='color: red;'>" . htmlspecialchars($blad, ENT_QUOTES, "UTF-8") . "</li>";
                }
                echo "</ul>";
            }
        }
        ?>
        <br>
        <a href="index.php" style="color: white; text-decoration: none; font-weight: bold;">Powrót do formularza</a>
    </div>
</body>
</html>