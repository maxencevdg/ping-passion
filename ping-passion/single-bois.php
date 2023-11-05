<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ping_passion
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="product-content-bois">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="product-details-bois">
                    <div class="product-image-detail-bois">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="product-info-bois">
                        <h2><?php the_title(); ?></h2>
                        <div class="entry-content-detail-bois">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>
                </article>
                <footer class="entry-footer">
                <?php wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ping-passion'),
                    'after'  => '</div>',
                )); ?>
                </footer>
            </article>
        <?php endwhile; // End of the loop. ?>
    </div>
</main><!-- #main -->

<?php
get_footer();

