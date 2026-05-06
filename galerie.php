<?php
$page = 'galerie';
require_once 'includes/header.php';

$photos = [
    ['margherita.jpg', 'Margherita au feu de bois'],
    ['four.jpg',       'Notre four à bois traditionnel'],
    ['pates.jpg',      'Pâtes fraîches maison'],
    ['burrata.jpg',    'Burrata des Pouilles'],
    ['vins.jpg',       'Sélection de vins italiens'],
    ['salle.jpg',      'Notre salle restaurant'],
    ['chef.jpg',       'Marco, notre chef pizzaïolo'],
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
            <?php foreach ($photos as [$fichier, $legende]): ?>
                <figure class="gallery-item">
                    <div class="gallery-placeholder">
                        <img src="images/<?= htmlspecialchars($fichier) ?>" alt="<?= htmlspecialchars($legende) ?>">
                    </div>
                    <figcaption><?= htmlspecialchars($legende) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
