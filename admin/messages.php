<?php
require_once '../includes/config.php';

// Protection : login requis
if (empty($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

// Marquer un message comme lu si demandé
if (isset($_GET['lu'])) {
    $id = (int) $_GET['lu'];
    $pdo->prepare('UPDATE messages_contact SET lu = 1 WHERE id = :id')->execute([':id' => $id]);
    header('Location: messages.php');
    exit;
}

// Suppression
if (isset($_GET['del'])) {
    $id = (int) $_GET['del'];
    $pdo->prepare('DELETE FROM messages_contact WHERE id = :id')->execute([':id' => $id]);
    header('Location: messages.php');
    exit;
}

$messages = $pdo->query('SELECT * FROM messages_contact ORDER BY date_envoi DESC')->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin — Messages reçus</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-body">

<header class="admin-header">
    <div class="container">
        <h1>📬 Messages de contact</h1>
        <div>
            Connecté : <strong><?= htmlspecialchars($_SESSION['admin_login']) ?></strong>
            · <a href="deconnexion.php">Se déconnecter</a>
            · <a href="../index.php">Voir le site</a>
        </div>
    </div>
</header>

<main class="container">
    <?php if (empty($messages)): ?>
        <p class="info-box">Aucun message reçu pour l'instant.</p>
    <?php else: ?>
        <table class="messages-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $m): ?>
                    <tr class="<?= $m['lu'] ? 'message-lu' : 'message-non-lu' ?>">
                        <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($m['date_envoi']))) ?></td>
                        <td><?= htmlspecialchars($m['nom']) ?></td>
                        <td><a href="mailto:<?= htmlspecialchars($m['email']) ?>"><?= htmlspecialchars($m['email']) ?></a></td>
                        <td><?= htmlspecialchars($m['sujet']) ?></td>
                        <td><?= nl2br(htmlspecialchars($m['message'])) ?></td>
                        <td><?= $m['lu'] ? '✅ Lu' : '🆕 Nouveau' ?></td>
                        <td>
                            <?php if (!$m['lu']): ?>
                                <a href="?lu=<?= $m['id'] ?>">Marquer lu</a> ·
                            <?php endif; ?>
                            <a href="?del=<?= $m['id'] ?>" onclick="return confirm('Supprimer ce message ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</main>

</body>
</html>
