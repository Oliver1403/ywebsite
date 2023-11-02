<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "oliver@withopf.info"; // Hier die E-Mail-Adresse des Empfängers eintragen
    $subject = "Kontaktanfrage von $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    echo "Vielen Dank für Ihre Nachricht. Wir werden uns in Kürze bei Ihnen melden.";
} else {
    echo "Ungültige Anfrage.";
}
?>
