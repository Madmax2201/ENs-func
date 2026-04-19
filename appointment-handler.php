<?php
// appointment-handler.php
// Handles POST requests from the appointment booking form on index.php

header('Content-Type: application/json');

include('./assets/config.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit();
}

// Sanitize & validate inputs
$full_name    = trim(mysqli_real_escape_string($conn, $_POST['appt_name']    ?? ''));
$email        = trim(mysqli_real_escape_string($conn, $_POST['appt_email']   ?? ''));
$phone        = trim(mysqli_real_escape_string($conn, $_POST['appt_phone']   ?? ''));
$reason       = trim(mysqli_real_escape_string($conn, $_POST['appt_reason']  ?? ''));
$preferred_date = trim(mysqli_real_escape_string($conn, $_POST['appt_date']  ?? ''));
$message      = trim(mysqli_real_escape_string($conn, $_POST['appt_message'] ?? ''));

// Basic validation
if (empty($full_name) || empty($email) || empty($phone) || empty($reason) || empty($preferred_date)) {
    echo json_encode(['success' => false, 'message' => 'Veuillez remplir tous les champs obligatoires.']);
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Adresse e-mail invalide.']);
    exit();
}

// Preferred date must be today or in the future
$today = date('Y-m-d');
if ($preferred_date < $today) {
    echo json_encode(['success' => false, 'message' => 'La date choisie doit être aujourd\'hui ou dans le futur.']);
    exit();
}

// Insert into DB
$sql = "INSERT INTO `appointments` 
        (`full_name`, `email`, `phone`, `reason`, `preferred_date`, `message`, `status`, `submitted_at`)
        VALUES (?, ?, ?, ?, ?, ?, 'pending', NOW())";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Erreur interne. Veuillez réessayer plus tard.']);
    exit();
}

mysqli_stmt_bind_param($stmt, 'ssssss', $full_name, $email, $phone, $reason, $preferred_date, $message);
$executed = mysqli_stmt_execute($stmt);

if ($executed) {
    echo json_encode(['success' => true, 'message' => 'Votre demande de rendez-vous a été envoyée avec succès ! Nous vous contacterons bientôt.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Échec de l\'envoi. Veuillez réessayer.']);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
