<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/fonctions.php';
$livres = require __DIR__ . '/data/livres.php';
$idBrut = filter_input(INPUT_GET, 'id', FILTER_UNSAFE_RAW);
$idValide = is_string($idBrut) && preg_match('/^[1-9][0-9]*$/', $idBrut) === 1;
$livre = $idValide ? trouverLivreParId($livres, (int) $idBrut) : null;
$titrePage = $livre !== null ? (string) $livre['titre'] : 'Livre introuvable';
$descriptionPage = $livre !== null ? 'Détails de « ' . $livre['titre'] . ' », au catalogue de la Médiathèque IPNET.' : 'Le livre demandé ne figure pas au catalogue.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner page-banner--compact"><div class="shell"><a class="back-link" href="catalogue.php">← Retour au catalogue</a><span class="eyebrow">Fiche du livre</span></div></section>
<section class="section shell detail-section">
    <?php if ($livre === null): ?>
        <div class="empty-state"><span class="empty-state__icon" aria-hidden="true">?</span><h1>Livre introuvable</h1><p>L’identifiant est absent, invalide ou ne correspond à aucun livre de notre catalogue.</p><a class="button" href="catalogue.php">Revenir au catalogue</a></div>
    <?php else: ?>
        <article class="detail-card">
            <div class="detail-cover" aria-hidden="true"><span class="detail-cover__mark">M</span><span class="detail-cover__rule"></span><span class="detail-cover__bottom">MÉDIATHÈQUE<br>IPNET</span></div>
            <div class="detail-copy">
                <span class="eyebrow"><?= e($livre['categorie']) ?></span>
                <h1><?= e($livre['titre']) ?></h1>
                <p class="detail-author">par <?= e($livre['auteur']) ?></p>
                <p class="detail-description">Retrouvez cet ouvrage dans la collection de la Médiathèque IPNET. Renseignez-vous auprès de l’équipe pour découvrir les autres éditions et ressources associées.</p>
                <dl class="detail-meta">
                    <div><dt>Année de publication</dt><dd><?= e($livre['annee']) ?></dd></div>
                    <div><dt>Catégorie</dt><dd><?= e($livre['categorie']) ?></dd></div>
                    <div><dt>Prix indicatif</dt><dd><?= e(number_format((float) $livre['prix'], 0, ',', ' ')) ?> FCFA</dd></div>
                    <div><dt>Disponibilité</dt><dd><span class="<?= $livre['disponible'] ? 'badge badge--available' : 'badge badge--unavailable' ?>"><?= $livre['disponible'] ? 'Disponible' : 'Emprunté' ?></span></dd></div>
                </dl>
                <a class="button" href="catalogue.php?categorie=<?= rawurlencode((string) $livre['categorie']) ?>">Voir la catégorie <span aria-hidden="true">→</span></a>
            </div>
        </article>
    <?php endif; ?>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
