<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<!--HEADER-->    
<header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<!--NAV-->
<!-- La barre de navigation principale du site -->
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

<!-- En-tête de la barre de navigation -->
<div class="header">
    <?php
        $attachment_id = 164;
        $home_url = home_url();
        $image_html = wp_get_attachment_image($attachment_id, 'medium');
    ?>

<!-- Lien vers la page d'accueil du site avec l'image comme élément cliquable -->
    <a href="<?php echo $home_url; ?>">
            <?php echo $image_html; ?>
    </a>

    <!-- Liens de l'en-tête pour les appareils de bureau (desktop) -->
    <div class="header-links desktop">
        <?php
            // Affichage du menu primaire pour les appareils de bureau
            wp_nav_menu( array(
                'menu' => 'menu-primaire',
                'menu_class'     => 'menu-primaire',
            ) );
        ?>

        <!-- Action personnalisée pour afficher éventuellement le lien administrateur -->
        <?php do_action('afficher_admin_si_connecte'); ?>

        <?php
            // Affichage du menu secondaire pour les appareils de bureau
        wp_nav_menu( array(
            'menu' => 'menu-secondaire',
            'menu_class'     => 'menu-secondaire',
        ) );
        ?>
    </div>

    <!-- Liens de l'en-tête pour les appareils mobiles -->
    <div class="header-links mobile">

        <!-- Élément pour le bouton "burger" du menu déroulant mobile -->
        <label for="burger"></label>
        <input type="checkbox" id="burger" />

        <!-- Contenu du menu déroulant pour les appareils mobiles -->
        <div class="menu-content">
        <?php
            // Affichage du menu primaire pour les appareils mobiles
            wp_nav_menu( array(
                'menu' => 'menu-primaire',
                'menu_class'     => 'menu-primaire',
            ) );
        ?>

        <!-- Action personnalisée pour afficher éventuellement le lien administrateur -->
        <?php do_action('afficher_admin_si_connecte'); ?>

        <?php
            // Affichage du menu secondaire pour les appareils mobiles
        wp_nav_menu( array(
            'menu' => 'menu-secondaire',
            'menu_class'     => 'menu-secondaire',
        ) );
        ?>
        </div>
    </div>
<div>
</nav>
</header>
<div id="container">
<!--MAIN-->
<main id="content" role="main">
