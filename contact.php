<?php
$page = 'contact';
require_once 'includes/config.php';
require_once 'includes/header.php';

// Récupération éventuelle d'un message flash après soumission
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>

<section class="page-header">
    <div class="container">
        <h1>Nous contacter</h1>
        <p>Une question, une réservation ? Écrivez-nous.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">

        <div class="contact-info">
            <h2>Informations</h2>
            <p>📍 12 rue de la Paix, 75002 Paris</p>
            <p>📞 <a href="tel:+33145678910">01 45 67 89 10</a></p>
            <p>✉️ <a href="mailto:contact@bella-italia.fr">contact@bella-italia.fr</a></p>

            <h3>Horaires d'ouverture</h3>
            <ul class="hours-list">
                <li>Lundi – Samedi : 12h – 14h30 / 19h – 22h30</li>
                <li>Dimanche : Fermé</li>
            </ul>

            <h3>Comment venir</h3>
            <p>🚇 Métro Opéra (ligne 3, 7, 8) — 5 min à pied</p>
        </div>

        <div class="contact-form-wrapper">
            <h2>Envoyez-nous un message</h2>

            <?php if ($flash): ?>
                <div class="alert alert-<?= htmlspecialchars($flash['type']) ?>">
                    <?= htmlspecialchars($flash['message']) ?>
                </div>
            <?php endif; ?>

            <form action="traitement.php" method="POST" class="contact-form" novalidate>
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" required maxlength="100">
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required maxlength="150">
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" maxlength="20" pattern="[0-9 +.\-]{8,20}">
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet *</label>
                    <input type="text" id="sujet" name="sujet" required maxlength="200">
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer le message</button>
            </form>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
