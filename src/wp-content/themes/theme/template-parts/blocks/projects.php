<section class="projects" id="projects">
    <div class="container">
        <?php if ($projects_heading = get_field('projects_heading')) : ?>
            <div class="projects__heading" data-aos-anchor="#projects" data-aos="fade-up" data-aos-delay="0"><?php echo $projects_heading; ?></div>
        <?php endif; ?>
        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => -1,
            'orderby' => 'menu_order'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : $count = 0;
            $animation = 0; ?>
            <div class="projects__grid">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $count++;
                    $animation = $animation + 100; ?>
                    <?php
                    get_template_part('template-parts/blocks/loop/project', null, array(
                        'count'  => $count,
                        'animation' => $animation,
                    ));
                    ?>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <h3><?php _e('Проекты не найдены'); ?></h3>
        <?php endif; ?>
    </div>
</section>