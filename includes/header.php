<?php
declare(strict_types=1);

$titrePage = $titrePage ?? 'Médiathèque IPNET';
$descriptionPage = $descriptionPage ?? 'Explorez le catalogue de la Médiathèque IPNET.';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($descriptionPage) ?>">
    <title><?= e($titrePage) ?> | Médiathèque IPNET</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="site-header">
    <div class="shell header-inner">
        <a class="brand" href="index.php" aria-label="Médiathèque IPNET, accueil">
            <span class="brand__mark" aria-hidden="true">M</span>
            <span><strong>Médiathèque</strong><small>IPNET · Le plaisir de lire</small></span>
        </a>
        <nav class="main-nav" aria-label="Navigation principale">
            <a href="index.php">Accueil</a>
            <a href="catalogue.php">Le catalogue</a>
            <a href="apropos.php">À propos</a>
        </nav>
    </div>
</header>
<main>
