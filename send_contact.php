<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Pobieranie danych z formularza
    $name = htmlspecialchars($_POST["name"]); // Pobranie i zabezpieczenie imienia
    $email = htmlspecialchars($_POST["email"]); // Pobranie i zabezpieczenie e-maila
    $message = htmlspecialchars($_POST["message"]); // Pobranie i zabezpieczenie wiadomości

    // Ścieżka do pliku, w którym będą przechowywane wiadomości
    $file = "messages.txt"; // Plik zostanie utworzony w tym samym katalogu co send_contact.php

    // Tworzenie treści do zapisania w pliku
    $content = "Imię: $name\n";
    $content .= "Email: $email\n";
    $content .= "Wiadomość: $message\n";
    $content .= "----------------------\n";

    // Zapisywanie treści w pliku
    if (file_put_contents($file, $content, FILE_APPEND | LOCK_EX)) {
        echo "Wiadomość została zapisana.";
    } else {
        echo "Wystąpił błąd podczas zapisywania wiadomości.";
    }
} else {
    echo "Nieprawidłowa metoda żądania.";
}
?>