<?php
$error_fields = array();
if (!isset($_POST['name']) || empty($_POST['name'])) {
    $error_fields[] = "name";
}

if (!isset($_POST['email']) || 
    !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = "email";
}

if (!isset($_POST['password']) || strlen($_POST['password']) < 5) {
    $error_fields[] = "password";
}

if ($error_fields) {
    header("Location: form.php?error_fields=" . implode(",", $error_fields));
    exit;
}
echo "Data is valid and ready to be processed!";
?>
