<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/fonctions.php';
$livres = require __DIR__ . '/data/livres.php';
$disponibles = compterLivresDisponibles($livres);
$totalLivres = count($livres);
$titrePage = 'Bienvenue';
$descriptionPage = 'Découvrez les ouvrages de la Médiathèque IPNET et parcourez notre sélection.';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
    <div class="shell hero__inner">
        <div class="hero__copy">
            <span class="eyebrow eyebrow--light">La culture à portée de page</span>
            <h1>Une nouvelle histoire <em>vous attend.</em></h1>
            <p>Bienvenue à la Médiathèque IPNET. Explorez une sélection de livres pour apprendre, rêver et découvrir de nouvelles idées.</p>
            <div class="hero__actions">
                <a class="button button--cream" href="catalogue.php">Explorer le catalogue <span aria-hidden="true">→</span></a>
                <a class="hero__secondary" href="apropos.php">À propos de la médiathèque</a>
            </div>
            <div class="hero-stats" aria-label="Chiffres du catalogue">
                <div><strong><?= e($totalLivres) ?></strong><span>livres au catalogue</span></div>
                <div><strong><?= e($disponibles) ?></strong><span>disponibles maintenant</span></div>
            </div>
        </div>
        <div class="hero-art" aria-hidden="true">
            <div class="sun"></div><div class="art-shelf"><span></span><span></span><span></span><span></span><span></span></div>
            <div class="art-book"><div class="art-book__label">LIRE<br>LE MONDE</div></div>
            <div class="art-note">Prenez le temps<br>de tourner la page.</div>
        </div>
    </div>
</section>
<section class="section shell">
    <div class="section-heading">
        <div><span class="eyebrow">À découvrir</span><h2>Quelques lectures choisies</h2></div>
        <a class="text-link" href="catalogue.php">Tout le catalogue <span aria-hidden="true">→</span></a>
    </div>
    <div class="book-grid book-grid--featured">
        <?php foreach (array_slice($livres, 0, 3) as $livre): ?>
            <?= afficherLivre($livre) ?>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
