<?php

/**
 * Template name: Архив Кухни
 */

get_header(); ?>

<section class="ar-events paddings-hero-top">
    <div class="container">
        <div class="container-wrapper">
            <div class="ar-events__wrapper">
                <div class="ar-events__headings">
                    <div class="ar-events__heading">
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                        }
                        ?>
                        <h2>События</h2>
                    </div>
                    <?php
                    $categories = get_categories([
                        'taxonomy'     => 'category',
                        'type'         => 'events',
                        'child_of'     => 0,
                        'hide_empty'   => 1,
                        'pad_counts'   => false,
                    ]);
                    if ($categories) {
                        $count = 1; ?>
                        <div class="ar-events__cats">
                            <div class="ar-events__cats__wrapper js-events-tab js-events-tab-<?php echo $count; ?> is--active">
                                <div class="ar-events__cats__wrapper__item">
                                    Все
                                </div>
                            </div>
                            <?php foreach ($categories as $cat) {
                                $count++; ?>
                                <div class="ar-events__cats__wrapper js-events-tab js-events-tab-<?php echo $count; ?>">
                                    <div class=" ar-events__cats__wrapper__item">
                                        <?php echo $cat->name; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="ar-events__bg" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/img/bg-pattern.svg');"></div>

                <?php
                $categories = get_categories([
                    'taxonomy'     => 'category',
                    'type'         => 'events',
                    'child_of'     => 0,
                    'hide_empty'   => 1,
                    'pad_counts'   => false,
                ]);
                if ($categories) {
                    $count = 1; ?>
                    <div class="ar-events__slides">
                        <?php
                        $my_posts = get_posts(array(
                            'post_type' => 'events',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => -1
                        ));
                        if ($my_posts) {
                            $count_post = 0; ?>
                            <div class="ar-events__posts js-events-slide js-events-slide-<?php echo $count; ?> is--active">
                                <?php foreach ($my_posts as $post) {
                                    setup_postdata($post);
                                    $count_post++; ?>
                                    <a class="ar-events__posts__item" href="<?php the_permalink() ?>">
                                        <div class="ar-events__posts__item__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                        </div>
                                        <div class="ar-events__posts__item__title"><?php the_title(); ?></div>
                                        <div class="ar-events__posts__item__date"><?php $date = get_the_date('j F Y');
                                                                                    echo $date; ?></div>
                                    </a>
                                <?php
                                    wp_reset_postdata();
                                } ?>
                            </div>
                        <?php }
                        ?>
                        <?php foreach ($categories as $cat) {
                            $count++; ?>
                            <?php
                            $my_posts = get_posts(array(
                                'post_type' => 'events',
                                'category_name' => $cat->slug,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => -1
                            ));
                            if ($my_posts) {
                                $count_post = 0; ?>
                                <div class="ar-events__posts js-events-slide js-events-slide-<?php echo $count; ?>">
                                    <?php foreach ($my_posts as $post) {
                                        setup_postdata($post);
                                        $count_post++; ?>
                                        <a class="ar-events__posts__item" href="<?php the_permalink() ?>">
                                            <div class="ar-events__posts__item__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                            </div>
                                            <div class="ar-events__posts__item__title"><?php the_title(); ?></div>
                                            <div class="ar-events__posts__item__date"><?php $date = get_the_date('j F Y');
                                                                                        echo $date; ?></div>
                                        </a>
                                    <?php
                                        wp_reset_postdata();
                                    } ?>
                                </div>
                            <?php }
                            ?>
                        <?php } ?>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>