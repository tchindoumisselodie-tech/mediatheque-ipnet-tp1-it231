<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/fonctions.php';
$livres = require __DIR__ . '/data/livres.php';
$categories = array_values(array_unique(array_column($livres, 'categorie')));
sort($categories, SORT_LOCALE_STRING);
$categorieDemandee = filter_input(INPUT_GET, 'categorie', FILTER_UNSAFE_RAW);
$categorieDemandee = is_string($categorieDemandee) ? trim($categorieDemandee) : '';
$categorieInvalide = $categorieDemandee !== '' && !in_array(mb_strtolower($categorieDemandee), array_map('mb_strtolower', $categories), true);
$livresAffiches = ($categorieDemandee !== '' && !$categorieInvalide)
    ? filtrerParCategorie($livres, $categorieDemandee)
    : ($categorieInvalide ? [] : $livres);
$titrePage = 'Le catalogue';
$descriptionPage = 'Parcourez les livres de la Médiathèque IPNET et filtrez-les par catégorie.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner">
    <div class="shell"><span class="eyebrow">La collection</span><h1>Le catalogue</h1><p>Des livres pour nourrir la curiosité et faire voyager les idées.</p></div>
</section>
<section class="section shell">
    <div class="catalogue-toolbar">
        <div>
            <h2><?= $categorieDemandee !== '' && !$categorieInvalide ? 'Catégorie : ' . e($categorieDemandee) : 'Tous les livres' ?></h2>
            <p class="muted"><?= e(count($livresAffiches)) ?> livre<?= count($livresAffiches) > 1 ? 's' : '' ?> affiché<?= count($livresAffiches) > 1 ? 's' : '' ?></p>
        </div>
        <form class="filter-form" method="get" action="catalogue.php">
            <label for="categorie">Filtrer par catégorie</label>
            <select id="categorie" name="categorie">
                <option value="">Toutes les catégories</option>
                <?php foreach ($categories as $categorie): ?>
                    <option value="<?= e($categorie) ?>" <?= mb_strtolower($categorie) === mb_strtolower($categorieDemandee) ? 'selected' : '' ?>><?= e($categorie) ?></option>
                <?php endforeach; ?>
            </select>
            <button class="button button--small" type="submit">Filtrer</button>
        </form>
    </div>
    <div class="category-pills" aria-label="Filtrer par catégorie">
        <a class="pill <?= $categorieDemandee === '' ? 'pill--active' : '' ?>" href="catalogue.php">Tout voir</a>
        <?php foreach ($categories as $categorie): ?>
            <a class="pill <?= mb_strtolower($categorie) === mb_strtolower($categorieDemandee) ? 'pill--active' : '' ?>" href="catalogue.php?categorie=<?= rawurlencode($categorie) ?>"><?= e($categorie) ?></a>
        <?php endforeach; ?>
    </div>
    <?php if ($categorieInvalide): ?>
        <div class="notice notice--error" role="alert">La catégorie « <?= e($categorieDemandee) ?> » n’existe pas. Choisissez une catégorie proposée ou <a href="catalogue.php">affichez tous les livres</a>.</div>
    <?php elseif ($livresAffiches === []): ?>
        <div class="notice">Aucun livre n’est associé à cette catégorie pour le moment.</div>
    <?php else: ?>
        <div class="book-grid">
            <?php foreach ($livresAffiches as $livre): ?>
                <?= afficherLivre($livre) ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
