# Médiathèque IPNET

Mini-site PHP 8 qui présente un catalogue de livres sans base de données. Les données de démonstration sont conservées dans un tableau PHP.

## Prérequis

- PHP 8.0 ou plus récent
- Un serveur local : XAMPP, WAMP, MAMP, ou le serveur intégré de PHP
- Aucune base de données ni framework

## Installation et lancement

### Avec XAMPP

1. Copiez le dossier `mediatheque-mp1` dans le répertoire `htdocs` de XAMPP.
2. Démarrez Apache dans le panneau XAMPP.
3. Ouvrez `http://localhost/mediatheque-mp1/` dans le navigateur.

### Avec le serveur PHP intégré

Placez-vous dans le dossier du projet puis lancez :

```bash
php -S localhost:8000
```

Ouvrez ensuite `http://localhost:8000/`.

## Fonctionnalités

- Page d'accueil avec le nombre de livres au catalogue et le nombre de livres disponibles.
- Catalogue affiché sous forme de cartes, avec prix, année, catégorie et disponibilité.
- Filtrage par catégorie via `catalogue.php?categorie=Roman`, avec message si la catégorie demandée n'existe pas.
- Fiche détail d'un livre via `detail.php?id=3`, avec gestion d'un identifiant absent, invalide ou inconnu.
- Page À propos avec une fonction PHP qui affiche la date du jour.
- Navigation partagée avec `includes/header.php` et `includes/footer.php`.
- Échappement des données HTML avec `htmlspecialchars()` et validation des paramètres URL.
- Mise en page responsive pour téléphone et ordinateur.

## Organisation

```text
mediatheque-mp1/
├── index.php
├── catalogue.php
├── detail.php
├── apropos.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── fonctions.php
├── data/
│   └── livres.php
├── css/
│   └── style.css
└── README.md
```

Le catalogue comporte dix entrées d'exemple. Les prix sont indicatifs et exprimés en FCFA. Les livres disponibles et les données sont définis dans `data/livres.php`.

## Dépôt Git

Depuis le dossier principal du projet, initialisez un dépôt local et ajoutez les fichiers :

```bash
git init
git add .
git commit -m "Créer le catalogue dynamique de la médiathèque"
```

## Personnalisation

Le dossier ZIP extérieur suit le modèle demandé dans le sujet. Remplacez `FILIERE_A_PRECISER` par votre filière (GL, WIM, DWM, IG ou IA) avant le dépôt.
