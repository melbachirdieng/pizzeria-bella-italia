<?php
$page = 'galerie';
require_once 'includes/header.php';

$photos = [
    ['🍕', 'Margherita au feu de bois'],
    ['🔥', 'Notre four à bois traditionnel'],
    ['🍝', 'Tagliatelle bolognese maison'],
    ['🥗', 'Burrata des Pouilles'],
    ['🍷', 'Sélection de vins italiens'],
    ['🏛️', 'Notre salle restaurant'],
    ['👨‍🍳', 'Marco, notre chef pizzaïolo'],
    ['🍰', 'Tiramisu maison'],
    ['🌿', 'Basilic frais du jardin'],
];
?>

<section class="page-header">
    <div class="container">
        <h1>Galerie</h1>
        <p>Quelques instants chez Bella Italia</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="gallery-grid">
            <?php foreach ($photos as [$emoji, $legende]): ?>
                <figure class="gallery-item">
                    <div class="gallery-placeholder"><?= $emoji ?></div>
                    <figcaption><?= htmlspecialchars($legende) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
        <p class="info-box">
            💡 <strong>À toi de jouer :</strong> remplace ces emojis par les vraies photos du restaurant
            (dossier <code>/images/</code>) pour finaliser le rendu.
        </p>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
