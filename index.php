<!-- Zadanie 1 -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz kontaktowy</title>
    <!-- Zadanie 9 -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Formularz kontaktowy</h1>

        <!-- Zadanie 21 -->
        <!-- Zadanie 1 -->
        <form id="formularz" action="odbierz.php" method="post" novalidate>
                <!-- Zadanie 2 -->
                <label for="imie">Imię:</label>
                <!-- Zadanie 6 -->
                <input type="text" id="imie" name="imie" required minlength="2" placeholder="Wpisz imię"><br>
                <span id="error-imie" class="error-text"></span>

                <!-- Zadanie 3 -->
                 <!-- Zadanie 6 -->
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="Np. przyklad@example.com"><br>
                <span id="error-email" class="error-text"></span>

                <!-- Zadanie 7 -->
                <label for="temat">Temat wiadomości:</label>
                <select id="temat" name="temat" required>
                    <option value="Pytanie">Pytanie</option>
                    <option value="Propozycja">Propozycja</option>
                    <option value="Reklama">Reklama</option>
                </select><br>

                <!-- Zadanie 4 -->
                 <!-- Zadanie 6 -->
                <label for="wiadomosc">Wiadomość:</label>
                <textarea id="wiadomosc" name="wiadomosc" rows="3" maxlength="200" required placeholder="Napisz wiadomość"></textarea><br>
                <!-- Zadanie 14 i 15 -->
                <small>Pozostało znaków: <span id="licznik">200</span></small><br>
                <span id="error-wiadomosc" class="error-text"></span><br><br>
        

                <!-- Zadanie 8 -->
                <input type="checkbox" id="zgoda" name="zgoda" required>
                <label for="zgoda">Akceptuję regulamin</label><br>
                <span id="error-zgoda" class="error-text"></span>

                <!-- Zadanie 5 -->
                <button type="submit">Wyślij</button>
        </form>

    <!-- Zadanie 11 -->
    <script src="script.js"></script>
</body>
</html>