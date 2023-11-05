<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ping_passion
 */

get_header();
$dataRevetements = get_fields();
?>

<main id="primary" class="site-main">
    <div class="product-content-revetements">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="product-details-revetements">
                    <div class="product-image-detail-revetements">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="product-info-revetements">
                        <h2><?php the_title(); ?></h2>
                        <h3>Caractéristiques du produit : </h3>
                        <div class="caracteristique-revetements">
                            <div class="tableau-revetements">
                                <h3> Rapidité : </h3>
                                <span><?=$dataRevetements['la_rapidite']; ?></span>
                            </div>
                            <div class="tableau-revetements">
                                <h3>Contrôle : </h3>
                                <span><?=$dataRevetements['le_controle']; ?></span>
                            </div>
                            <div class="tableau-revetements">
                                <h3>Adhérence : </h3> 
                                <span><?=$dataRevetements['ladherence']; ?></span>
                            </div>
                            <div class="tableau-revetements">
                                <h3>Épaisseur : </h3>
                                <ul>
                                    <?php foreach ($dataRevetements['lepaisseur'] as $epaisseur) : ?>
                                        <span><li><?=$epaisseur; ?></li></span>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry-content-detail-revetements">
                    <?php the_content(); ?>
                </div>
            </article>
            <footer class="entry-footer">
                <?php wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ping-passion'),
                    'after'  => '</div>',
                )); ?>
            </footer>
        <?php endwhile; // End of the loop. ?>
    </div>
</main><!-- #main -->

<?php
get_footer();