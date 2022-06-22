<?php

/**
 * Template name: Страница События (внутренняя)
 */

get_header(); ?>

<section class="s-events paddings-hero-top">
    <div class="container">
        <div class="s-events__grid">
            <div class="s-events__content">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
                <div class="s-events__content__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                <h2><?php the_title(); ?></h2>
                <div class="s-events__content__date"><?php $date = get_the_date('j F Y');
                                                        echo $date; ?></div>
                <div class="s-events__content__text"><?php the_content(); ?></div>
                <div class="s-events__content__social">
                    <div class="s-events__content__social__wrapper">
                        <div class="s-events__content__social__wrapper__item">
                            <a target="_blank" rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Поделиться в Facebook">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z" fill="#263959" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="s-events__content__social__wrapper">
                        <div class="s-events__content__social__wrapper__item">
                            <a rel="nofollow" rel="nofollow" href="http://twitter.com/home?status=Читаю <?php the_permalink(); ?>: <?php the_title(); ?>" title="Добавить в Twitter">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8_15202)">
                                        <path d="M6.2918 18.125C13.8371 18.125 17.9652 11.8723 17.9652 6.45155C17.9652 6.27577 17.9613 6.09608 17.9535 5.9203C18.7566 5.33955 19.4496 4.62021 20 3.79608C19.2521 4.12883 18.458 4.34615 17.6449 4.44061C18.5011 3.92742 19.1421 3.12123 19.4492 2.17147C18.6438 2.6488 17.763 2.98551 16.8445 3.16718C16.2257 2.50963 15.4075 2.07426 14.5164 1.92838C13.6253 1.78249 12.711 1.93421 11.9148 2.36008C11.1186 2.78595 10.4848 3.46225 10.1115 4.28443C9.73825 5.1066 9.64619 6.02885 9.84961 6.90858C8.21874 6.82674 6.62328 6.40309 5.16665 5.66508C3.71002 4.92708 2.42474 3.8912 1.39414 2.6246C0.870333 3.5277 0.710047 4.59637 0.945859 5.61341C1.18167 6.63045 1.79589 7.51954 2.66367 8.09999C2.01219 8.0793 1.37498 7.9039 0.804688 7.58827V7.63905C0.804104 8.58679 1.13175 9.50549 1.73192 10.239C2.3321 10.9725 3.16777 11.4755 4.09687 11.6625C3.49338 11.8276 2.85999 11.8517 2.2457 11.7328C2.50788 12.5479 3.01798 13.2607 3.70481 13.7719C4.39164 14.2831 5.22093 14.5672 6.07695 14.5844C4.62369 15.7259 2.82848 16.3451 0.980469 16.3422C0.652739 16.3417 0.325333 16.3216 0 16.282C1.87738 17.4865 4.06128 18.1262 6.2918 18.125Z" fill="#263959" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8_15202">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="s-events__content__social__wrapper">
                        <div class="s-events__content__social__wrapper__item">
                            <a rel="nofollow" rel="nofollow" href="https://t.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" title="Поделиться в Телеграм">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM10.3583 7.38244C9.38562 7.787 7.4417 8.62433 4.52649 9.89444C4.05311 10.0827 3.80513 10.2668 3.78255 10.4469C3.7444 10.7512 4.12551 10.8711 4.64447 11.0343C4.71507 11.0565 4.78821 11.0795 4.8632 11.1038C5.37378 11.2698 6.0606 11.464 6.41765 11.4717C6.74153 11.4787 7.10302 11.3452 7.50212 11.0711C10.2259 9.2325 11.6319 8.30317 11.7202 8.28314C11.7824 8.26901 11.8687 8.25123 11.9272 8.30321C11.9857 8.35518 11.9799 8.4536 11.9737 8.48C11.936 8.64095 10.44 10.0318 9.66584 10.7515C9.4245 10.9759 9.25331 11.135 9.21831 11.1714C9.13992 11.2528 9.06002 11.3298 8.98323 11.4038C8.50889 11.8611 8.15317 12.204 9.00293 12.764C9.41128 13.0331 9.73804 13.2556 10.064 13.4776C10.4201 13.7201 10.7752 13.9619 11.2346 14.2631C11.3516 14.3398 11.4634 14.4195 11.5723 14.4971C11.9866 14.7925 12.3589 15.0578 12.8187 15.0155C13.086 14.9909 13.362 14.7397 13.5021 13.9903C13.8334 12.2193 14.4846 8.38205 14.6351 6.80081C14.6483 6.66228 14.6317 6.48498 14.6184 6.40715C14.6051 6.32932 14.5772 6.21842 14.4761 6.13633C14.3562 6.03911 14.1713 6.01861 14.0886 6.02007C13.7124 6.0267 13.1354 6.22735 10.3583 7.38244Z" fill="#263959" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="s-events__content__social__wrapper">
                        <div class="s-events__content__social__wrapper__item">
                            <a target="_blank" rel="nofollow" href="http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>" title="Поделиться ВКонтакте">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8_15208)">
                                        <path d="M18.5958 1.40417C17.1875 0 14.925 0 10.4167 0H9.58333C5.075 0 2.8125 0 1.40417 1.40417C-0.00416666 2.80833 1.44185e-07 5.075 1.44185e-07 9.58333V10.4167C1.44185e-07 14.925 9.93411e-08 17.1875 1.40417 18.5958C2.80833 20.0042 5.075 20 9.58333 20H10.4167C14.9417 20 17.2042 20 18.6125 18.5958C20.0208 17.1917 20 14.925 20 10.4167V9.58333C20 5.075 20 2.8125 18.5958 1.40417ZM14.35 14.4083C14.1321 13.6277 13.6884 12.9288 13.0746 12.3995C12.4608 11.8702 11.7042 11.5341 10.9 11.4333V14.4083H10.6417C6.08333 14.4083 3.48333 11.2833 3.375 6.075H5.65833C5.73333 9.89167 7.41667 11.4917 8.75 11.8417V6.08333H10.9V9.375C12.2167 9.23333 13.6 7.73333 14.0667 6.08333H16.2167C16.0439 6.94136 15.6956 7.75441 15.1937 8.47143C14.6918 9.18846 14.0471 9.79399 13.3 10.25C14.1329 10.6631 14.8687 11.248 15.4591 11.9662C16.0495 12.6844 16.4809 13.5196 16.725 14.4167L14.35 14.4083Z" fill="#263959" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8_15208">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-events__more">
                <h2>Похожие</h2>
                <?php
                $similar_posts = get_field('similar_posts');
                if ($similar_posts) : ?>
                    <div class="s-events__more__rep">
                        <?php foreach ($similar_posts as $post) :
                            setup_postdata($post); ?>
                            <a href="<?php the_permalink(); ?>" class="s-events__more__item">
                                <div class="s-events__more__item__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                                <div class="s-events__more__item__title h5">
                                    <?php the_title(); ?>
                                </div>
                                <div class="s-events__more__item__date">
                                    <?php $date = get_the_date('j F Y');
                                    echo $date; ?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>