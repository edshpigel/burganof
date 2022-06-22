<section class="production" id="production">
    <div class="container">
        <div class="production__grid">
            <div class="production__img">
                <?php
                $images = get_field('production_gal');
                if ($images) : $i = 0; ?>
                    <div class="production__swiper production-swiper" data-aos-anchor="#production" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            <?php foreach ($images as $image) : $i++; ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo $image['url']; ?>" data-fancybox="production" data-caption="<?php echo $image['alt']; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if ($i > 1) : ?>
                            <div class="swiper-btns">
                                <div class="swiper-prev-production swiper-prev-custom" data-aos-anchor="#production" data-aos="fade-up" data-aos-delay="200"></div>
                                <div class="swiper-next-production swiper-next-custom" data-aos-anchor="#production" data-aos="fade-up" data-aos-delay="300"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="production__content">
                <?php if ($production_text = get_field('production_text')) : ?>
                    <div class="production__content__text" data-aos-anchor="#production" data-aos="fade-up" data-aos-delay="0"><?php echo $production_text; ?></div>
                <?php endif; ?>
                <?php if ($production_btn = get_field('production_btn')) : ?>
                    <a class="btn" href="<?php echo $production_btn['url'] ?>" data-aos-anchor="#production" data-aos="fade-up" data-aos-delay="0" target="<?php echo $production_btn['target']; ?>" from_where="<?php echo $production_btn['title']; ?> - Блок Собственное производство"><?php echo $production_btn['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>