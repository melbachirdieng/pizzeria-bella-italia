# Maquettes — Site Pizzeria Bella Italia

> Wireframes en mode ASCII art (à reprendre dans Figma / Canva pour version finale).

## 🏠 Page d'accueil (`index.php`)

```
┌──────────────────────────────────────────────────────────┐
│  🍕 Bella Italia      Accueil  Carte  Histoire  Galerie  │
├──────────────────────────────────────────────────────────┤
│                                                          │
│             ╔══════════════════════╗                     │
│             ║  L'Italie dans       ║                     │
│             ║  votre assiette      ║   ← Hero rouge      │
│             ║                      ║                     │
│             ║ [Découvrir la carte] ║                     │
│             ║ [Réserver une table] ║                     │
│             ╚══════════════════════╝                     │
│                                                          │
│  ┌──────────────────────────────────────────────┐        │
│  │     Bienvenue chez Bella Italia              │        │
│  │     Présentation courte (3 lignes)           │        │
│  │                                              │        │
│  │  ┌──────┐    ┌──────┐    ┌──────┐            │        │
│  │  │  🔥  │    │  🍅  │    │ 👨‍🍳 │            │        │
│  │  │ Four │    │Frais │    │ Chef │            │        │
│  │  └──────┘    └──────┘    └──────┘            │        │
│  └──────────────────────────────────────────────┘        │
│                                                          │
│  ┌──────────────────────┬─────────────────────┐          │
│  │ Nos spécialités       │      [🍕]          │          │
│  │ Texte intro           │   Image            │          │
│  │ [Voir la carte]       │   placeholder      │          │
│  └──────────────────────┴─────────────────────┘          │
│                                                          │
├──────────────────────────────────────────────────────────┤
│  Footer : adresse, horaires, contact, copyright          │
└──────────────────────────────────────────────────────────┘
```

## 🍕 Page Menu (`menu.php`)

```
┌──────────────────────────────────────────────────────────┐
│  Header (sticky)                                         │
├──────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────┐    │
│  │  Notre carte                                      │   │
│  │  Pizzas, pâtes et spécialités italiennes          │   │
│  └──────────────────────────────────────────────────┘    │
│                                                          │
│  Pizzas Classiques                                       │
│  ──────────────                                          │
│  Margherita .................................. 12,50 €  │
│  Sauce tomate, mozzarella, basilic frais                 │
│  Reine ....................................... 14,00 €  │
│  Sauce tomate, mozzarella, jambon, champignons           │
│  ...                                                     │
│                                                          │
│  Pizzas Signature                                        │
│  ──────────────                                          │
│  Bella Italia ................................ 17,50 €  │
│  Burrata, jambon de Parme, roquette, tomates cerises     │
│  ...                                                     │
│                                                          │
│  Pâtes Fraîches | Antipasti | Desserts                   │
│  ...                                                     │
│                                                          │
│  ⚠️ Allergènes / Réservation conseillée                  │
└──────────────────────────────────────────────────────────┘
```

## 📖 Page À propos (`apropos.php`)

```
┌──────────────────────────────────────────────────────────┐
│  Header                                                  │
├──────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────┐    │
│  │  Notre histoire                                   │   │
│  │  Une passion napolitaine au cœur de Paris         │   │
│  └──────────────────────────────────────────────────┘    │
│                                                          │
│  ## Une famille, une passion                             │
│  Texte texte texte texte texte texte texte texte         │
│                                                          │
│  ## Notre philosophie                                    │
│  Texte texte texte texte texte texte texte texte         │
│                                                          │
│  ## L'équipe                                             │
│  • Marco Rossi — Chef pizzaïolo et fondateur             │
│  • Sofia Bianchi — Chef en cuisine                       │
│  • Lucia Romano — Responsable de salle                   │
│                                                          │
│  ## Engagements                                          │
│  🌱 Produits locaux                                      │
│  ♻️ Emballages compostables                              │
│  💚 Producteurs italiens                                 │
│  🍷 Vins bio                                             │
└──────────────────────────────────────────────────────────┘
```

## 🖼️ Page Galerie (`galerie.php`)

```
┌──────────────────────────────────────────────────────────┐
│  Header                                                  │
├──────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────┐    │
│  │  Galerie                                          │   │
│  │  Quelques instants chez Bella Italia              │   │
│  └──────────────────────────────────────────────────┘    │
│                                                          │
│  ┌────┐  ┌────┐  ┌────┐  ┌────┐                          │
│  │ 🍕 │  │ 🔥 │  │ 🍝 │  │ 🥗 │                          │
│  └────┘  └────┘  └────┘  └────┘                          │
│  Margh.  Four    Pâtes   Burrata                         │
│                                                          │
│  ┌────┐  ┌────┐  ┌────┐                                  │
│  │ 🍷 │  │ 🏛️ │  │ 👨‍🍳 │                                  │
│  └────┘  └────┘  └────┘                                  │
│  Vins    Salle   Chef                                    │
└──────────────────────────────────────────────────────────┘
```

## ✉️ Page Contact (`contact.php`)

```
┌──────────────────────────────────────────────────────────┐
│  Header                                                  │
├──────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────┐    │
│  │  Nous contacter                                   │   │
│  └──────────────────────────────────────────────────┘    │
│                                                          │
│  ┌─────────────────┬───────────────────────────────┐     │
│  │ Informations    │  Envoyez-nous un message      │     │
│  │ ──────          │  ──────                       │     │
│  │ 📍 Adresse       │  Nom : [_______________]     │     │
│  │ 📞 Téléphone     │  Email : [_______________]   │     │
│  │ ✉️ Email          │  Téléphone : [___________]  │     │
│  │                  │  Sujet : [_______________]   │     │
│  │ Horaires         │  Message :                   │     │
│  │ Lun-Sam 12-14h30 │  [____________________]      │     │
│  │ 19-22h30         │  [____________________]      │     │
│  │ Dim Fermé        │  [____________________]      │     │
│  │                  │                              │     │
│  │ Métro Opéra      │  [Envoyer le message]        │     │
│  └─────────────────┴───────────────────────────────┘     │
└──────────────────────────────────────────────────────────┘
```

## 🔐 Page Admin — Login (`admin/login.php`)

```
┌──────────────────────────────────┐
│                                  │
│       🔐 Espace Admin            │
│       Connexion au back-office   │
│                                  │
│       Identifiant : [_______]    │
│       Mot de passe : [_______]   │
│                                  │
│       [Se connecter]             │
│                                  │
│       ← Retour au site           │
│                                  │
└──────────────────────────────────┘
```

## 📬 Page Admin — Messages (`admin/messages.php`)

```
┌──────────────────────────────────────────────────────────────┐
│  📬 Messages de contact    [admin] [Déconnexion] [Voir site] │
├──────────────────────────────────────────────────────────────┤
│  ┌────────┬──────┬───────┬──────┬──────────┬──────┬────────┐ │
│  │ Date   │ Nom  │ Email │Sujet │ Message  │ Statut│Actions│ │
│  ├────────┼──────┼───────┼──────┼──────────┼──────┼────────┤ │
│  │05/05   │Jean  │jean@  │Réserv│"Bonjour…"│🆕Nouv│Marquer │ │
│  │        │Dupont│ex.fr  │      │          │      │/Suppr  │ │
│  ├────────┼──────┼───────┼──────┼──────────┼──────┼────────┤ │
│  │04/05   │Marie │marie@ │Carte │"Avez-vous│✅ Lu  │Suppr   │ │
│  │        │      │ex.fr  │      │ végé ?"  │      │        │ │
│  └────────┴──────┴───────┴──────┴──────────┴──────┴────────┘ │
└──────────────────────────────────────────────────────────────┘
```

## 🎨 Charte graphique (rappel)

- **Rouge italien** `#c23b22` — couleur principale
- **Rouge foncé** `#8e2716` — accents et hovers
- **Vert italien** `#2a7d2e` — touches d'accent
- **Crème** `#faf6f0` — fonds doux
- **Noir** `#1a1a1a` — texte
- **Police titres** : Playfair Display (serif)
- **Police texte** : Open Sans (sans-serif)
