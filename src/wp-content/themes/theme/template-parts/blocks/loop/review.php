<div class="review-product" <?php echo ($args['animation'] ? "data-aos-anchor='#reviews' data-aos='fade-up' data-aos-delay='". $args['animation']. "'" : ""); ?>>
    <div class="review-product__grid">
        <div class="review-product__imgs">
            <?php
            $images = get_field('gal_review');
            if ($images) : ?>
                <div class="review-product__group">
                    <div>
                        <div class="review-swiper review-product__swiper ">
                            <div class="swiper-wrapper">
                                <?php foreach ($images as $image) : ?>
                                    <div class="swiper-slide">
                                        <a href="<?php echo $image['url']; ?>" data-fancybox="review-<?php echo $args['count']; ?>" data-caption="<?php echo $image['alt']; ?>">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="review-thumbs review-product__thumbs">
                            <div class="swiper-wrapper">
                                <?php foreach ($images as $image) : ?>
                                    <div class="swiper-slide">
                                        <a>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="review-product__content">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="60" fill="#F03636" />
                <path d="M17.9993 27H23.9993V40H17.9993C17.7341 40 17.4797 39.8946 17.2922 39.7071C17.1046 39.5196 16.9993 39.2652 16.9993 39V28C16.9993 27.7348 17.1046 27.4804 17.2922 27.2929C17.4797 27.1054 17.7341 27 17.9993 27V27Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M23.9993 27L28.9993 17C29.5246 17 30.0447 17.1035 30.53 17.3045C31.0153 17.5055 31.4563 17.8001 31.8277 18.1716C32.1991 18.543 32.4938 18.984 32.6948 19.4693C32.8958 19.9546 32.9993 20.4747 32.9993 21V24H40.7337C41.0173 24 41.2976 24.0603 41.5561 24.1769C41.8146 24.2935 42.0454 24.4638 42.2331 24.6764C42.4207 24.889 42.5611 25.1391 42.6447 25.41C42.7284 25.681 42.7534 25.9667 42.7183 26.2481L41.2183 38.2481C41.1578 38.7318 40.9228 39.1767 40.5573 39.4994C40.1919 39.822 39.7212 40 39.2337 40H23.9993" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="review-product__content__title h5"><?php the_title(); ?></div>
            <?php if ($desc_review = get_field('desc_review')) : ?>
                <div class="review-product__content__desc"><?php echo $desc_review; ?></div>
            <?php endif; ?>
            <?php if ($text_review = get_field('text_review')) : ?>
                <div class="review-product__content__text"><?php echo $text_review; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>