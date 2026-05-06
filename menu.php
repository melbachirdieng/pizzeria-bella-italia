<?php
$page = 'menu';
require_once 'includes/header.php';

// Menu en dur (pour un vrai projet, on le sortirait dans une table BDD)
$menu = [
    'Pizzas Classiques' => [
        ['Margherita',     'Sauce tomate, mozzarella, basilic frais',                          12.50],
        ['Reine',          'Sauce tomate, mozzarella, jambon, champignons',                    14.00],
        ['Quattro Formaggi','Mozzarella, gorgonzola, parmesan, ricotta',                       15.00],
        ['Diavola',        'Sauce tomate, mozzarella, salami piquant, piments',                14.50],
        ['Calzone',        'Pizza pliée — jambon, mozzarella, ricotta, œuf',                   15.00],
    ],
    'Pizzas Signature' => [
        ['Bella Italia',   'Burrata, jambon de Parme, roquette, tomates cerises',              17.50],
        ['Tartufo',        'Mozzarella, crème de truffe, champignons, parmesan',               18.00],
        ['Mediterranea',   'Sauce tomate, anchois, olives, câpres, origan',                    15.50],
        ['Vegetariana',    'Sauce tomate, mozzarella, légumes grillés, basilic',               14.50],
    ],
    'Pâtes Fraîches' => [
        ['Spaghetti Carbonara', 'Œuf, guanciale, pecorino, poivre noir',                       13.50],
        ['Tagliatelle Bolognese','Sauce viande maison mijotée 6 heures',                       14.00],
        ['Penne Arrabbiata','Sauce tomate piquante, ail, persil',                              12.00],
    ],
    'Antipasti' => [
        ['Bruschetta',     'Pain grillé, tomates fraîches, ail, basilic',                       7.00],
        ['Burrata',        'Burrata des Pouilles, huile d\'olive, basilic',                     9.50],
        ['Antipasti misti','Charcuterie italienne, fromages, légumes marinés',                 14.00],
    ],
    'Desserts' => [
        ['Tiramisu',       'Recette traditionnelle au mascarpone',                              7.00],
        ['Panna cotta',    'Coulis de fruits rouges',                                           6.50],
        ['Affogato',       'Glace vanille noyée dans un espresso chaud',                        6.00],
    ],
];
?>

<section class="page-header">
    <div class="container">
        <h1>Notre carte</h1>
        <p>Pizzas, pâtes et spécialités italiennes</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php foreach ($menu as $categorie => $plats): ?>
            <div class="menu-category">
                <h2><?= htmlspecialchars($categorie) ?></h2>
                <ul class="menu-list">
                    <?php foreach ($plats as [$nom, $description, $prix]): ?>
                        <li class="menu-item">
                            <div class="menu-item-info">
                                <h3><?= htmlspecialchars($nom) ?></h3>
                                <p><?= htmlspecialchars($description) ?></p>
                            </div>
                            <div class="menu-item-price"><?= number_format($prix, 2, ',', ' ') ?> €</div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>

        <div class="info-box">
            <p><strong>Allergènes :</strong> nos plats peuvent contenir gluten, lactose, fruits à coque. N'hésitez pas à nous le signaler.</p>
            <p><strong>Réservation conseillée</strong> les week-ends — <a href="contact.php">contactez-nous</a>.</p>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
