<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirect kembali dengan status sukses
        header("Location: index.php?status=sukses#contact");
        exit();
    } else {
        // Redirect dengan status error
        header("Location: index.php?status=error#contact");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>