# Pizzeria Bella Italia — Site vitrine

> Site vitrine d'une pizzeria fictive — projet réalisé dans le cadre de mon stage de **2ᵉ année BTS SIO option SLAM** chez **MAMBO INCHAUD CONCEPTION DE SITE WEB** (encadrement : M. Serge MAMBO).

## 📋 Présentation

Site vitrine complet pour une pizzeria parisienne fictive, comprenant :

- **5 pages publiques** : Accueil, Carte, Notre histoire, Galerie, Contact
- **Formulaire de contact** avec stockage en base de données
- **Back-office administrateur** sécurisé pour consulter les messages reçus
- **Design responsive** (desktop, tablette, mobile)
- **Cahier des charges** et **maquettes** documentés

## 🛠️ Stack technique

| Composant | Technologie |
|---|---|
| Frontend | HTML5, CSS3, JavaScript |
| Backend | PHP 8 |
| Base de données | MySQL (via PDO) |
| Sécurité | `password_hash` + requêtes préparées PDO |
| Polices | Google Fonts (Playfair Display, Open Sans) |

## 📁 Structure du projet

```
pizzeria-bella-italia/
├── index.php              ← Page d'accueil
├── menu.php               ← Carte du restaurant
├── apropos.php            ← Notre histoire
├── galerie.php            ← Galerie photos
├── contact.php            ← Formulaire de contact
├── traitement.php         ← Traitement du formulaire (POST)
├── admin/
│   ├── login.php          ← Connexion admin
│   ├── messages.php       ← Liste des messages reçus
│   └── deconnexion.php    ← Logout
├── includes/
│   ├── config.php         ← Connexion BDD + session
│   ├── header.php         ← Header partagé
│   └── footer.php         ← Footer partagé
├── css/style.css          ← Feuille de styles
├── js/script.js           ← JavaScript front
├── sql/restaurant.sql     ← Schéma BDD
├── docs/
│   ├── cahier-des-charges.md
│   └── maquettes.md
└── README.md
```

## 🚀 Installation locale

### Prérequis
- WampServer / XAMPP / MAMP (Apache + PHP 8 + MySQL)
- Un navigateur moderne

### Étapes
1. Cloner le repo dans le dossier `www/` (Wamp) ou `htdocs/` (XAMPP) :
   ```bash
   git clone https://github.com/melbachirdieng/pizzeria-bella-italia.git
   ```

2. Importer la base de données :
   - Ouvrir phpMyAdmin → Importer → sélectionner `sql/restaurant.sql`
   - Ou en ligne de commande :
   ```bash
   mysql -u root -p < sql/restaurant.sql
   ```

3. Vérifier la config dans `includes/config.php` (par défaut : `root` / sans mot de passe).

4. Lancer Apache + MySQL et accéder à :
   ```
   http://localhost/pizzeria-bella-italia/
   ```

5. Pour accéder au back-office :
   ```
   http://localhost/pizzeria-bella-italia/admin/login.php
   ```
   Identifiants par défaut :
   - Login : **admin**
   - Mot de passe : **admin123**

   ⚠️ À changer avant toute mise en production.

## 🌐 Mise en ligne (hébergement gratuit)

### InfinityFree (recommandé)
1. Créer un compte sur https://infinityfree.net/
2. Créer un nouveau site (free subdomain)
3. Créer une base de données MySQL via le panneau
4. Importer `sql/restaurant.sql` via phpMyAdmin
5. Modifier `includes/config.php` avec les nouveaux identifiants
6. Uploader les fichiers via FTP (FileZilla recommandé)
7. URL en ligne : `https://votre-sous-domaine.infinityfreeapp.com`

### Alternative : 000webhost
Procédure similaire, plus rapide pour démarrer mais avec quelques pubs.

## 🔒 Sécurité

- **Mots de passe hashés** avec `password_hash()` (bcrypt)
- **Requêtes préparées PDO** systématiques contre les injections SQL
- **Validation côté serveur** des entrées utilisateur
- **Échappement HTML** (`htmlspecialchars`) sur toutes les sorties
- **Protection back-office** par session PHP
- **Tokens CSRF** : à ajouter en V2 (amélioration future)

## 🎨 Charte graphique

| Couleur | Code | Usage |
|---|---|---|
| Rouge italien | `#c23b22` | Couleur principale |
| Rouge foncé | `#8e2716` | Accents, hovers |
| Vert italien | `#2a7d2e` | Touches d'accent |
| Crème | `#faf6f0` | Fonds doux |
| Noir | `#1a1a1a` | Texte |

**Polices** : Playfair Display (titres) + Open Sans (texte)

## 📚 Documentation

- 📄 [Cahier des charges](docs/cahier-des-charges.md)
- 🎨 [Maquettes](docs/maquettes.md)

## 🎯 Compétences mobilisées (BTS SIO SLAM)

- ✅ Analyse de besoins et rédaction d'un cahier des charges
- ✅ Conception de maquettes et charte graphique
- ✅ Développement front (HTML / CSS / JS responsive)
- ✅ Développement back (PHP / MySQL avec PDO)
- ✅ Modélisation et création d'une base de données
- ✅ Sécurité applicative (hashage, requêtes préparées)
- ✅ Mise en ligne sur hébergement gratuit
- ✅ Documentation technique

## 🔮 Pistes d'amélioration

- [ ] Ajout de tokens CSRF sur le formulaire de contact
- [ ] Module de réservation en ligne (date / heure / nb couverts)
- [ ] Gestion du menu en BDD avec interface admin de modification
- [ ] Newsletter
- [ ] Multilingue (FR / EN / IT)
- [ ] Conteneurisation Docker pour faciliter le déploiement

## 👤 Auteur

**Mouhammad El Bachir Dieng**
BTS SIO SLAM 2ᵉ année — IRIS Paris
Stage encadré par M. Serge MAMBO (MAMBO INCHAUD CONCEPTION DE SITE WEB)

---

*Note : ce projet est une réalisation pédagogique dans le cadre de ma formation. La pizzeria et son contenu sont fictifs.*
