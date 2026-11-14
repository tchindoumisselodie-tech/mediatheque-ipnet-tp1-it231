<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/fonctions.php';
$titrePage = 'À propos';
$descriptionPage = 'En savoir plus sur la Médiathèque IPNET.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner"><div class="shell"><span class="eyebrow">Notre médiathèque</span><h1>À propos</h1><p>Un lieu de partage, de savoir et de découvertes.</p></div></section>
<section class="section shell about-layout">
    <article class="about-copy">
        <span class="eyebrow">La Médiathèque IPNET</span>
        <h2>La curiosité ouvre toutes les portes.</h2>
        <p>La Médiathèque IPNET propose un espace de découverte autour des livres et des ressources qui accompagnent les apprentissages. Le catalogue rassemble des œuvres littéraires, des classiques et des ouvrages informatiques.</p>
        <p>Ce mini-site présente une première version de ce catalogue. Les ouvrages sont stockés dans un tableau PHP et peuvent être consultés, filtrés par catégorie et ouverts sur une fiche individuelle.</p>
        <a class="button" href="catalogue.php">Parcourir les livres <span aria-hidden="true">→</span></a>
    </article>
    <aside class="about-card"><span class="about-card__icon" aria-hidden="true">✦</span><span class="eyebrow eyebrow--light">La date du jour</span><strong><?= e(dateDuJour()) ?></strong><p>Chaque jour est une nouvelle occasion de lire quelque chose de beau.</p></aside>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
