<?php
$page = $page ?? 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Bella Italia — <?= htmlspecialchars(ucfirst($page)) ?></title>
    <meta name="description" content="Pizzeria Bella Italia — pizzas artisanales au feu de bois à Paris. Découvrez notre carte, notre histoire et réservez votre table.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<header class="site-header">
    <div class="container nav-container">
        <a href="index.php" class="logo">
            🍕 <span>Bella Italia</span>
        </a>
        <nav class="main-nav">
            <a href="index.php"   class="<?= $page === 'accueil'  ? 'active' : '' ?>">Accueil</a>
            <a href="menu.php"    class="<?= $page === 'menu'     ? 'active' : '' ?>">Notre carte</a>
            <a href="apropos.php" class="<?= $page === 'apropos'  ? 'active' : '' ?>">Notre histoire</a>
            <a href="galerie.php" class="<?= $page === 'galerie'  ? 'active' : '' ?>">Galerie</a>
            <a href="contact.php" class="<?= $page === 'contact'  ? 'active' : '' ?>">Contact</a>
        </nav>
        <button class="burger" aria-label="Menu">☰</button>
    </div>
</header>

<main>
