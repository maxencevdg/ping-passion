<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ping_passion
 */

get_header();
?>

<div class="grid-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
    <div class="card">
        <h2><?php the_title(); ?></h2>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <div class="card-content">
            <hr>
            <p><?php the_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="en-savoir-plus">En savoir plus</a>
    </div>
    <?php endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
