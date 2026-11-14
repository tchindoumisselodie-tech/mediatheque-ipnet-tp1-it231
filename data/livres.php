<?php
declare(strict_types=1);

// Catalogue de démonstration : les prix sont exprimés en francs CFA (XOF).
$livres = [
    ['id' => 1, 'titre' => 'L’Étranger', 'auteur' => 'Albert Camus', 'annee' => 1942, 'categorie' => 'Roman', 'prix' => 4500, 'disponible' => true],
    ['id' => 2, 'titre' => 'Une si longue lettre', 'auteur' => 'Mariama Bâ', 'annee' => 1979, 'categorie' => 'Roman', 'prix' => 5000, 'disponible' => true],
    ['id' => 3, 'titre' => 'Les Soleils des indépendances', 'auteur' => 'Ahmadou Kourouma', 'annee' => 1968, 'categorie' => 'Roman', 'prix' => 6000, 'disponible' => false],
    ['id' => 4, 'titre' => 'Le Petit Prince', 'auteur' => 'Antoine de Saint-Exupéry', 'annee' => 1943, 'categorie' => 'Conte', 'prix' => 4000, 'disponible' => true],
    ['id' => 5, 'titre' => 'L’Enfant noir', 'auteur' => 'Camara Laye', 'annee' => 1953, 'categorie' => 'Roman', 'prix' => 5500, 'disponible' => true],
    ['id' => 6, 'titre' => 'Une vie de boy', 'auteur' => 'Ferdinand Oyono', 'annee' => 1956, 'categorie' => 'Roman', 'prix' => 5000, 'disponible' => false],
    ['id' => 7, 'titre' => 'Introduction à PHP 8', 'auteur' => 'Équipe pédagogique IPNET', 'annee' => 2025, 'categorie' => 'Informatique', 'prix' => 9000, 'disponible' => true],
    ['id' => 8, 'titre' => 'Les Misérables', 'auteur' => 'Victor Hugo', 'annee' => 1862, 'categorie' => 'Classique', 'prix' => 7500, 'disponible' => true],
    ['id' => 9, 'titre' => 'Le Mandat', 'auteur' => 'Ousmane Sembène', 'annee' => 1966, 'categorie' => 'Roman', 'prix' => 5000, 'disponible' => true],
    ['id' => 10, 'titre' => 'Clean Code', 'auteur' => 'Robert C. Martin', 'annee' => 2008, 'categorie' => 'Informatique', 'prix' => 12000, 'disponible' => false],
];

return $livres;
