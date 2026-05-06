<?php
/**
 * Configuration de la connexion à la base de données
 * Site vitrine Pizzeria Bella Italia
 */

// Paramètres BDD — à adapter selon l'environnement (local / prod)
define('DB_HOST', 'localhost');
define('DB_NAME', 'pizzeria_bella_italia');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Connexion PDO sécurisée
try {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Démarrage de session (pour l'admin)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
