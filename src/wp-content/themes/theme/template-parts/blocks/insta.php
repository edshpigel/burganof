<section class="insta" id="insta">
    <div class="container">
        <div class="insta__headings">
            <?php if ($insta_heading = get_field('insta')) : ?>
                <div class="insta__heading" data-aos-anchor="#insta" data-aos="fade-up" data-aos-delay="0"><?php echo $insta_heading; ?></div>
            <?php endif; ?>
            <?php if ($insta_link = get_field('insta_link')) : ?>
                <div class="insta__link" data-aos-anchor="#insta" data-aos="fade-up" data-aos-delay="100">
                    <a href="<?php echo $insta_link['url']; ?>" target="<?php echo $insta_link['target']; ?>" class="h5">
                        <span><?php echo $insta_link['title']; ?></span>
                        <?php if ($insta_icon = get_field('insta_icon')) : ?>
                            <img src="<?php echo $insta_icon['url'] ?>" alt="<?php echo $insta_icon['alt']; ?>">
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <?php if (have_rows('insta_rep')) : $i = 0; $count = 0;?>
            <div class="insta__group">
                <div class="insta-swiper insta__swiper">
                    <div class="swiper-wrapper">
                        <?php while (have_rows('insta_rep')) : the_row();
                            $i++; $count = $count + 100; ?>
                            <div class="swiper-slide insta__item" data-aos-anchor="#insta" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                                <?php if ($img_post = get_sub_field('img_post')) : ?>
                                    <a href="<?php echo $img_post['url']; ?>" data-fancybox="insta" data-caption="<?php the_sub_field('text_post'); ?>">
                                        <img src="<?php echo $img_post['url']; ?>" alt="<?php echo $img_post['alt']; ?>">
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if ($i > 1) : ?>
                    <div class="swiper-prev-insta swiper-prev-custom"></div>
                    <div class="swiper-next-insta swiper-next-custom"></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>