<?php
require_once '../includes/config.php';

$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $mdp   = $_POST['mdp']   ?? '';

    $stmt = $pdo->prepare('SELECT id, nom_utilisateur, mot_de_passe FROM utilisateurs WHERE nom_utilisateur = :login LIMIT 1');
    $stmt->execute([':login' => $login]);
    $user = $stmt->fetch();

    if ($user && password_verify($mdp, $user['mot_de_passe'])) {
        $_SESSION['admin_id']    = $user['id'];
        $_SESSION['admin_login'] = $user['nom_utilisateur'];
        header('Location: messages.php');
        exit;
    }

    $erreur = 'Identifiants invalides.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin — Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-body">

<div class="admin-login-card">
    <h1>🔐 Espace Admin</h1>
    <p>Connexion au back-office</p>

    <?php if ($erreur): ?>
        <div class="alert alert-error"><?= htmlspecialchars($erreur) ?></div>
    <?php endif; ?>

    <form method="POST" class="contact-form">
        <div class="form-group">
            <label for="login">Identifiant</label>
            <input type="text" id="login" name="login" required autofocus>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="mdp" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

    <p class="back-link"><a href="../index.php">← Retour au site</a></p>
</div>

</body>
</html>
