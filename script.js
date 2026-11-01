// Zadanie 12 i 13
const form = document.querySelector("#formularz");
const imie = document.querySelector("#imie");
const email = document.querySelector("#email");
const wiadomosc = document.querySelector("#wiadomosc");
const zgoda = document.querySelector("#zgoda");
const licznik = document.querySelector("#licznik");

// Zadanie 14 i 15
wiadomosc.addEventListener("input", () => {
    const pozostalo = 200 - wiadomosc.value.length;
    licznik.textContent = pozostalo;
});

// Zadanie 16, 17, 18, 19, 20
form.addEventListener("submit", (e) => {
    let błąd = false;

    document.querySelectorAll(".error-text").forEach(el => el.textContent = "");

    if (imie.value.trim() === "") {
        document.querySelector("#error-imie").textContent = "Imię nie może być puste.";
        błąd = true;
    } else if (imie.value.trim().length < 2) {
        document.querySelector("#error-imie").textContent = "Imię musi mieć co najmniej 2 znaki.";
        błąd = true;
    }

    if (!email.checkValidity()) {
        document.querySelector("#error-email").textContent = "Wpisz poprawny adres e-mail.";
        błąd = true;
    }

    if (wiadomosc.value.trim() === "") {
        document.querySelector("#error-wiadomosc").textContent = "Wiadomość nie może być pusta.";
        błąd = true;
    }

    if (!zgoda.checked) {
        document.querySelector("#error-zgoda").textContent = "Musisz zaakceptować regulamin.";
        błąd = true;
    }

    if (błąd) {
        e.preventDefault();
    }
});