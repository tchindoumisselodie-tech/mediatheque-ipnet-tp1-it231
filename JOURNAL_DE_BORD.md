# Journal de bord

**Projet :** Catalogue dynamique « Médiathèque IPNET »  
**UE :** IT 231 – Développement Web I

## Difficultés rencontrées et solutions apportées

La première difficulté a été d'organiser le catalogue sans base de données tout en évitant de répéter les mêmes informations dans plusieurs pages. Les livres ont donc été regroupés dans `data/livres.php`, puis les fonctions et les éléments communs du site dans le dossier `includes/`.

Le filtrage et les fiches de détail nécessitaient aussi de traiter les valeurs reçues dans l'URL. Le code vérifie la catégorie dans la liste des catégories connues, contrôle que l'identifiant est un entier positif et affiche un message clair lorsque la demande ne correspond à aucun livre. Les valeurs rendues dans les pages sont échappées avec `htmlspecialchars()`.

## Ce que j'ai appris

Ce mini-projet m'a permis de pratiquer les tableaux associatifs, les fonctions, les boucles et les inclusions PHP. J'ai également appris à séparer les données, les traitements et la présentation, à valider les paramètres GET et à protéger l'affichage HTML. Enfin, j'ai relié plusieurs pages au moyen de liens dynamiques et organisé les consignes d'installation dans un README.
