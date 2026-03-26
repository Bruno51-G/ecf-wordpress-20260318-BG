<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <p class="logoTitre">Les villes du monde</p>

    <nav class="menuDuHeader">
        <?php wp_nav_menu([
            'theme_location' => 'main'
        ]) ?>
    </nav>
</header>



<main>

<!-- FIN HEADER -->
