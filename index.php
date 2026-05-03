<?php
/**
 * The main template file (fallback).
 *
 * @package Diziti
 */

get_header(); ?>

<main class="dz-section" style="padding-top:120px;">
    <div class="dz-container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No posts found.', 'diziti' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
