<div data-aos-anchor="#projects" data-aos="fade-up" data-aos-delay="<?php echo $args['animation']; ?>">
    <div class="project-product">
        <div class="project-product__video<?php if (!(get_field('link_video'))) : echo " none-video";
                                            endif; ?>" <?php echo " data-fancybox-trigger='project-fancybox-" . $args['count'] . "'"; ?>>
            <?php if ($link_video = get_field('link_video')) : ?>
                <a class="link-youtube" href="<?php echo $link_video; ?>">
                    <svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="42.5" cy="42.5" r="42.5" fill="#4EBA45" />
                        <circle cx="42.6818" cy="42.6818" r="32.7344" stroke="white" stroke-width="2" />
                        <g clip-path="url(#clip0_12_1037)">
                            <path d="M41.0588 34.9342L50.8538 40.5843C52.5442 41.5569 52.5442 43.9883 50.8538 44.9609L41.0588 50.611C39.3915 51.5835 37.2843 50.3794 37.2843 48.4343V37.1109C37.2843 35.1658 39.3915 33.9617 41.0588 34.9342Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_12_1037">
                                <rect width="14.8431" height="16.3714" fill="white" transform="translate(37.2843 34.5856)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="project-product__content">
            <div>
                <div class="project-product__title h5"><?php the_title(); ?></div>
                <div class="project-product__subtitle"><?php the_field('desc'); ?></div>
            </div>
            <div class="project-product__btns">
                <div class="swiper-prev-project-single swiper-prev-custom"></div>
                <div class="swiper-next-project-single swiper-next-custom"></div>
            </div>
        </div>
        <?php
        $images = get_field('gal_project');
        if ($images) : ?>
            <?php if ($link_video = get_field('link_video')) : ?>
                <div data-fancybox="project-fancybox-<?php echo $args['count']; ?>" data-src="<?php echo $link_video; ?>"></div>
            <?php endif; ?>
            <div class="project-product__swiper project-single-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $image) : ?>
                        <div class="swiper-slide">
                            <div style="background-image: url('<?php echo $image['url']; ?>');">
                                <img data-src="<?php echo $image['url']; ?>" data-caption="<?php echo $image['alt']; ?>" data-fancybox="project-fancybox-<?php echo $args['count']; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if ($review = get_field('review')) : ?>
        <div class="project-review">
            <a href="#m-review-<?php echo $args['count']; ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.375 20.2493H4.46875C4.27813 20.2493 4.09531 20.1735 3.96052 20.0388C3.82573 19.904 3.75 19.7211 3.75 19.5305V11.6242C3.75 10.4916 3.97309 9.37004 4.40654 8.32361C4.83998 7.27718 5.4753 6.32637 6.2762 5.52547C7.0771 4.72456 8.02791 4.08925 9.07435 3.6558C10.1208 3.22236 11.2423 2.99927 12.375 2.99927H12.375C13.5077 2.99927 14.6292 3.22236 15.6756 3.65581C16.7221 4.08925 17.6729 4.72457 18.4738 5.52547C19.2747 6.32638 19.91 7.27719 20.3435 8.32362C20.7769 9.37006 21 10.4916 21 11.6243V11.6243C21 13.9118 20.0913 16.1056 18.4738 17.7231C16.8563 19.3406 14.6625 20.2493 12.375 20.2493Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.375 10.4993H15" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.375 13.4993H15" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Смотреть отзыв на кухню</span>
            </a>
        </div>
        <div class="m-review" style="display:none;" id="m-review-<?php echo $args['count']; ?>">
            <?php
            if ($review) :
                // перезаписать $post
                $post = $review;
                setup_postdata($post);
            ?>
                <?php
                get_template_part('template-parts/blocks/loop/review', null, array(
                    'count'  => $count
                ));
                ?>
                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде 
                ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>