<section id="hero" class="hero">
    <?php if (have_rows('hero_slider')) : $i = 0; ?>
        <div class="hero__group">
            <div class="hero-swiper hero__swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('hero_slider')) : the_row();
                        $i++; ?>
                        <div class="swiper-slide hero__item">
                            <div class="container">
                                <div class="hero__item__grid">
                                    <div class="hero__item__content padding-top-heading">
                                        <?php if ($heading_text = get_sub_field('heading_text')) : ?>
                                            <div class="hero__item__content__text" data-aos-anchor="#hero" data-aos="fade-up" data-aos-delay="0"><?php echo $heading_text; ?></div>
                                        <?php endif; ?>
                                        <?php if ($btn_first = get_sub_field('btn_first')) : ?>
                                            <a data-aos-anchor="#hero" data-aos="fade-up" data-aos-delay="100" href="<?php echo $btn_first['url'] ?>" target="<?php echo $btn_first['target']; ?>" class="btn" from_where="<?php echo $btn_first['title']; ?> - Первый экран - Слайд №<?php echo $i; ?>"><?php echo $btn_first['title']; ?></a>
                                        <?php endif; ?>
                                        <?php if ($btn_second = get_sub_field('btn_second')) : ?>
                                            <a data-aos-anchor="#hero" data-aos="fade-up" data-aos-delay="200" href="<?php echo $btn_second['url'] ?>" target="<?php echo $btn_second['target']; ?>" class="btn btn--outline" from_where="<?php echo $btn_second['title']; ?> - Первый экран - Слайд №<?php echo $i; ?>"><?php echo $btn_second['title']; ?></a>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($img_bg = get_sub_field('img_bg')) : ?>
                                        <div data-aos-anchor="#hero" data-aos="fade-left" data-aos-delay="300" class="hero__item__bg" style="background-image: url('<?php echo $img_bg['url']; ?>');"></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php if ($i > 1) : ?>
                <div class="swiper-btns" data-aos-anchor="#hero" data-aos="fade-up" data-aos-delay="400">
                    <div class="swiper-prev-hero swiper-prev-custom"></div>
                    <div class="swiper-next-hero swiper-next-custom"></div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        </div>
</section>