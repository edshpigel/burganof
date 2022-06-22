<section class="k-sales" id="k-sales">
    <div class="container">
        <div class="k-sales__headings">
            <?php if ($k_sales_heading = get_field('k_sales_heading')) : ?>
                <div class="k-sales__heading" data-aos-anchor="#k-sales" data-aos="fade-up" data-aos-delay="0"><?php echo $k_sales_heading; ?></div>
            <?php endif; ?>
            <?php if ($k_sales_img = get_field('k_sales_img')) : ?>
                <div class="k-sales__manager" data-aos-anchor="#k-sales" data-aos="fade-up" data-aos-delay="100">
                    <?php if ($k_sales_img_text = get_field('k_sales_img_text')) : ?>
                        <div class="k-sales__manager__text h5"><?php echo $k_sales_img_text; ?></div>
                    <?php endif; ?>
                    <div class="k-sales__manager__img">
                        <img src="<?php echo $k_sales_img['url']; ?>" alt="<?php echo $k_sales_img['url']; ?>">
                    </div>
                </div>
            <?php endif; ?>
        </div>
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
            <div class="k-sales__grid">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $count++; $animation = $animation + 100; ?>
                    <?php
                    get_template_part('template-parts/blocks/loop/kitchen', null, array(
                        'sale'   => true,
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