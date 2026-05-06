<?php
/**
 * Traitement du formulaire de contact
 * - Validation des champs
 * - Insertion en base de données
 * - Redirection vers la page contact avec message flash
 */

require_once 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Récupération et nettoyage
$nom       = trim($_POST['nom']       ?? '');
$email     = trim($_POST['email']     ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$sujet     = trim($_POST['sujet']     ?? '');
$message   = trim($_POST['message']   ?? '');

// Validation
$erreurs = [];
if ($nom === '' || strlen($nom) > 100) {
    $erreurs[] = 'Nom invalide';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = 'Email invalide';
}
if ($sujet === '' || strlen($sujet) > 200) {
    $erreurs[] = 'Sujet invalide';
}
if ($message === '') {
    $erreurs[] = 'Message vide';
}

if (!empty($erreurs)) {
    $_SESSION['flash'] = [
        'type'    => 'error',
        'message' => 'Erreur : ' . implode(', ', $erreurs),
    ];
    header('Location: contact.php');
    exit;
}

// Insertion sécurisée (requête préparée)
try {
    $sql = 'INSERT INTO messages_contact (nom, email, telephone, sujet, message)
            VALUES (:nom, :email, :telephone, :sujet, :message)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom'       => $nom,
        ':email'     => $email,
        ':telephone' => $telephone ?: null,
        ':sujet'     => $sujet,
        ':message'   => $message,
    ]);

    $_SESSION['flash'] = [
        'type'    => 'success',
        'message' => 'Merci pour votre message ! Nous vous répondrons rapidement.',
    ];
} catch (PDOException $e) {
    $_SESSION['flash'] = [
        'type'    => 'error',
        'message' => 'Une erreur est survenue lors de l\'envoi. Réessayez plus tard.',
    ];
}

header('Location: contact.php');
exit;
