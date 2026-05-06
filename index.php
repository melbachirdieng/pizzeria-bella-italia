<?php
$page = 'accueil';
require_once 'includes/header.php';
?>

<section class="hero">
    <div class="hero-overlay">
        <div class="container hero-content">
            <h1>L'Italie dans votre assiette</h1>
            <p class="hero-subtitle">Pizzas artisanales cuites au feu de bois, pâte fraîche du jour</p>
            <div class="hero-cta">
                <a href="menu.php"   class="btn btn-primary">Découvrir notre carte</a>
                <a href="contact.php" class="btn btn-secondary">Réserver une table</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">Bienvenue chez Bella Italia</h2>
        <p class="section-intro">
            Depuis 2010, nous vous accueillons dans une ambiance chaleureuse au cœur de Paris,
            pour vous faire vivre l'authentique tradition pizzaïolo napolitaine.
        </p>

        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">🔥</div>
                <h3>Four à bois</h3>
                <p>Cuisson traditionnelle à 450°C pour une pâte légère et croustillante.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🍅</div>
                <h3>Produits frais</h3>
                <p>Mozzarella di bufala, tomates San Marzano, basilic frais — directement importés d'Italie.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👨‍🍳</div>
                <h3>Chef napolitain</h3>
                <p>Notre chef Marco perpétue les recettes familiales depuis trois générations.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container highlight-grid">
        <div class="highlight-text">
            <h2>Nos spécialités</h2>
            <p>Margherita, Quattro Formaggi, Diavola, Calzone... Découvrez plus de 25 pizzas signature, ainsi que notre sélection de pâtes fraîches et antipasti.</p>
            <a href="menu.php" class="btn btn-primary">Voir la carte complète</a>
        </div>
        <div class="highlight-image">
            <div class="image-placeholder">🍕</div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
