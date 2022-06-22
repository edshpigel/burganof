<section class="profits-1" id="profits-1">
    <div class="container">
        <?php if (have_rows('profits_1_rep')) : $i = 0;
            $count = 0; ?>
            <div class="profits-1__grid">
                <?php while (have_rows('profits_1_rep')) : the_row();
                    $i++;
                    $count = $count + 100; ?>
                    <div class="profits-1__item<?php if ($select_img = get_sub_field('select_img')) : echo " select-img";
                                                endif; ?>" data-aos-anchor="#profits-1" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                        <?php if ($select_img = get_sub_field('select_img')) : ?>
                            <?php if ($img = get_sub_field('img')) : ?>
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if ($icon = get_sub_field('icon')) : ?>
                                <img class="profits-1__item__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            <?php endif; ?>
                            <div class="profits-1__item__heading"><?php the_sub_field('heading'); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>