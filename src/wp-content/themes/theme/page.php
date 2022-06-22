<?php

/*
 * Template name: Страница (По умолчанию)	
 */

get_header();

?>

<section class="page-default paddings-hero-top">
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <h2><?php the_title(); ?></h2>
        <div class="page-default__content"><?php the_content(); ?></div>
    </div>
</section>

<?php get_footer(); ?>