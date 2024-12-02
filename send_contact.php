<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Pobieranie danych z formularza
    $name = htmlspecialchars($_POST["name"]); // Pobranie i zabezpieczenie imienia
    $email = htmlspecialchars($_POST["email"]); // Pobranie i zabezpieczenie e-maila
    $message = htmlspecialchars($_POST["message"]); // Pobranie i zabezpieczenie wiadomości

    // Ścieżka do pliku, w którym będą przechowywane wiadomości
    $file = "messages.txt"; // Plik zostanie utworzony w tym samym katalogu co send_contact.php

    // Tworzenie treści do zapisania w pliku
    $content = "Name: $name\n";
    $content .= "Email: $email\n";
    $content .= "Nachricht: $message\n";
    $content .= "----------------------\n";

    // Zapisywanie treści w pliku
    if (file_put_contents($file, $content, FILE_APPEND | LOCK_EX)) {
        echo "Nachricht wurde gesendet.";
    } else {
        echo "Beim Speichern der Nachricht ist ein Fehler aufgetreten.";
    }
} else {
    echo "“Ungültige Anforderungsmethode”.";
}
?>