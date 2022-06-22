<?php

/*
 * Template name: Страница Карта сайта	
 */

get_header();

?>

<section class="form-page paddings-hero-top">
    <div class="container">
        <div class="container-wrapper">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
            <h1><?php the_title(); ?></h1>
            <div class="form-page__content"><?php the_content(); ?><div>
                    <div class="form-page__content">
                        <?php
                        $html = '';
                        $cats = get_categories(
                            [
                                'exclude' => '3, 7',
                            ]
                        );
                        foreach ($cats as $cat) {
                            $html .= '<h2>Рубрика: ' . $cat->cat_name . '</h2>';
                            $html .= '<ul>';
                            $posts = get_posts(array(
                                'posts_per_page' => -1,
                                'cat'            => $cat->cat_ID,
                            ));
                            foreach ($posts as $post) {
                                setup_postdata($post);
                                $category = get_the_category($post->ID);
                                if ($category[0]->cat_ID == $cat->cat_ID) {
                                    $html .= '<li><a href="' . get_the_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';
                                }
                            }
                            wp_reset_postdata();
                            $html .= '</ul>';
                        }

                        $html .= '<h2>Страницы:</h2>';
                        $html .= '<ul>';
                        $html .= wp_list_pages('exclude=ID&title_li=&echo=0');
                        $html .= '</ul>';
                        echo $html;
                        ?>

                    </div>
                </div>
            </div>
</section>

<?php get_footer(); ?>