<section class="populars" id="populars">
    <div class="container">
        <?php if ($populars_heading = get_field('populars_heading')) : ?>
            <div class="populars__heading" data-aos-anchor="#populars" data-aos="fade-up" data-aos-delay="0"><?php echo $populars_heading; ?></div>
        <?php endif; ?>
        <?php
        $args = array(
            'post_type' => 'kitchen',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'category_name' => 'popular'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : $count = 0; $animation = 0; ?>
            <div class="populars__grid">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $count++; $animation = $animation + 100; ?>
                    <?php
                    get_template_part('template-parts/blocks/loop/kitchen', null, array(
                        'sale'   => false,
                        'count'  => $count,
                        'animation' => $animation,
                    ));
                    ?>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <h3><?php _e('Кухни не найдены'); ?></h3>
        <?php endif; ?>
    </div>
</section>