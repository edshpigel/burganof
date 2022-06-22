<section class="profits-2" id="profits-2">
    <div class="container">
        <?php if (have_rows('profits_2_rep')) : $i = 0;
            $count = 0; ?>
            <div class="profits-2__grid">
                <?php while (have_rows('profits_2_rep')) : the_row();
                    $i++;
                    $count = $count + 100; ?>
                    <div class="profits-2__item" data-aos-anchor="#profits-2" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                        <?php if ($icon = get_sub_field('icon')) : ?>
                            <img class="profits-2__item__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                        <?php endif; ?>
                        <div class="profits-2__item__heading h5"><?php the_sub_field('heading'); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>