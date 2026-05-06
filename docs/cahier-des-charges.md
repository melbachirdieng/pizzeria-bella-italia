# Cahier des charges — Site vitrine Pizzeria Bella Italia

> Projet réalisé dans le cadre du stage de 2ᵉ année BTS SIO option SLAM, encadré par M. Serge MAMBO (entreprise MAMBO INCHAUD CONCEPTION DE SITE WEB).

## 1. Présentation du projet

### 1.1 Contexte
Une pizzeria fictive nommée **Bella Italia**, située au cœur de Paris, souhaite se doter d'un site internet pour présenter son établissement, sa carte et faciliter le contact avec sa clientèle.

### 1.2 Objectifs
- Présenter l'identité, la philosophie et l'équipe du restaurant
- Mettre en valeur la carte (pizzas, pâtes, antipasti, desserts)
- Faciliter la prise de contact et la réservation
- Permettre au gérant de consulter les messages reçus via un back-office

### 1.3 Cible
- Clients particuliers de Paris et environs (25-65 ans)
- Personnes recherchant une pizzeria authentique
- Touristes de passage

## 2. Périmètre fonctionnel

### 2.1 Front-office (espace public)
| Page | Contenu | Priorité |
|---|---|---|
| **Accueil** | Bannière, présentation rapide, points forts (four à bois, produits frais, chef napolitain) | Haute |
| **Notre carte** | Liste structurée des plats par catégorie avec prix | Haute |
| **Notre histoire** | Présentation de la famille Rossi, philosophie, équipe | Moyenne |
| **Galerie** | Photos du restaurant, des plats, du four | Moyenne |
| **Contact** | Coordonnées, horaires, accès, formulaire de contact | Haute |

### 2.2 Back-office (espace administrateur)
| Fonction | Description | Priorité |
|---|---|---|
| Authentification | Login sécurisé (mot de passe hashé) | Haute |
| Liste des messages | Consultation chronologique des messages reçus | Haute |
| Gestion des messages | Marquer comme lu, supprimer | Moyenne |
| Déconnexion | Fermeture sécurisée de la session | Haute |

## 3. Spécifications techniques

### 3.1 Stack technique
- **HTML5** — structure sémantique
- **CSS3** — styles, responsive design (Mobile First)
- **JavaScript** — interactions front-end (menu mobile, validation)
- **PHP 8** — backend (traitement formulaire, back-office)
- **MySQL** — stockage des messages et comptes admin
- **PDO** — accès base de données sécurisé (requêtes préparées)

### 3.2 Architecture
Architecture **multi-pages classique** avec includes communs :
```
includes/header.php  ← header partagé
includes/footer.php  ← footer partagé
includes/config.php  ← connexion DB + session
```

### 3.3 Sécurité
- Mots de passe hashés via `password_hash()` (bcrypt)
- Requêtes préparées PDO contre les injections SQL
- Validation et échappement des entrées utilisateur (`htmlspecialchars`)
- Session sécurisée pour le back-office

### 3.4 Modèle de données
| Table | Rôle |
|---|---|
| `messages_contact` | Stockage des messages envoyés via le formulaire |
| `utilisateurs` | Comptes admin pour l'accès au back-office |

## 4. Charte graphique

### 4.1 Couleurs
| Usage | Code | Couleur |
|---|---|---|
| Principal | `#c23b22` | Rouge italien |
| Secondaire | `#8e2716` | Rouge foncé |
| Accent | `#2a7d2e` | Vert italien |
| Fond doux | `#faf6f0` | Crème |
| Texte | `#1a1a1a` | Noir |

### 4.2 Typographies
- **Titres** : Playfair Display (serif élégant, évoque la tradition)
- **Texte courant** : Open Sans (sans-serif moderne, lisible)

### 4.3 Style visuel
- Sobre, élégant, italien classique
- Inspirations : trattorias parisiennes, charte rouge / blanc / vert revisitée
- Logo emoji 🍕 en attendant le logo final

## 5. Contraintes

### 5.1 Compatibilité
- Navigateurs modernes : Chrome, Firefox, Edge, Safari (versions des 2 dernières années)
- Responsive : desktop, tablette, mobile (≥ 320px)

### 5.2 Performance
- Temps de chargement < 2s
- Images optimisées (à intégrer en finalisation)

### 5.3 Hébergement
- Hébergement gratuit type **InfinityFree** ou **000webhost**
- Compatible PHP 8 + MySQL

## 6. Livrables

- Code source complet (HTML, CSS, JS, PHP, SQL)
- Documentation technique (ce document)
- Maquettes (cf. `maquettes.md`)
- README d'installation et de déploiement
- Site déployé en ligne avec URL publique

## 7. Planning prévisionnel

| Phase | Durée | Livrables |
|---|---|---|
| Analyse & cahier des charges | 3 jours | Ce document |
| Maquettes & charte graphique | 3 jours | Wireframes, palette, typographies |
| Développement front | 1 semaine | HTML / CSS / JS des 5 pages |
| Développement back | 1 semaine | Formulaire + BDD + back-office admin |
| Tests & corrections | 3 jours | Tests fonctionnels et responsive |
| Mise en ligne | 1 jour | Déploiement et tests en production |

**Durée totale estimée : 5 semaines** (durée du stage)

## 8. Auteur

**Mouhammad El Bachir Dieng**
BTS SIO SLAM 2ᵉ année — IRIS Paris
Encadrement : M. Serge MAMBO (Mambo Inchaud Conception de Site Web)
