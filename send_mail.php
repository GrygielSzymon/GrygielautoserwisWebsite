<?php
// Sprawdzenie, czy formularz został przesłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieranie danych z formularza
    $name = htmlspecialchars(trim($_POST['name']));
    $car_model = htmlspecialchars(trim($_POST['car_model']));
    $vin = htmlspecialchars(trim($_POST['vin']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Sprawdzenie, czy pola nie są puste
    if (!empty($name) && !empty($car_model) && !empty($vin) && !empty($email) && !empty($message)) {

        // Tworzenie treści wiadomości
        $to = "szymongrygiel132@gmail.com";  // Adres, na który wiadomość ma być wysłana
        $subject = "Nowa wiadomość z formularza kontaktowego";
        $body = "Imię i Nazwisko: $name\n"
              . "Marka i Model Auta: $car_model\n"
              . "Numer VIN: $vin\n"
              . "Email: $email\n"
              . "Wiadomość: \n$message";

        $headers = "From: $email";

        // Wysłanie wiadomości
        if (mail($to, $subject, $body, $headers)) {
            echo "Wiadomość została wysłana!";
        } else {
            echo "Wystąpił problem z wysyłką wiadomości. Spróbuj ponownie.";
        }

    } else {
        echo "Wszystkie pola formularza muszą być wypełnione!";
    }
} else {
    echo "Nieprawidłowa metoda przesyłania danych!";
}
?>
