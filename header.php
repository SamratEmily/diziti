<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header class="dz-header" id="dz-header">
    <div class="dz-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dz-logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                Dizi<span>ti</span>
            <?php endif; ?>
        </a>

        <nav class="dz-nav" id="dz-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'diziti' ); ?>">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'walker'         => new Diziti_Nav_Walker(),
                ) );
            } else {
                // Default links when no menu is assigned
                ?>
                <a href="#hero">Home</a>
                <a href="#services">Services</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#contact">Contact</a>
            <?php } ?>
        </nav>

        <div class="dz-header-cta">
            <a href="#contact" class="dz-btn dz-btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>

        <button class="dz-menu-toggle" id="dz-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
