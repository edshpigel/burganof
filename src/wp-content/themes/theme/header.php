<?php

/**
 * Header.php
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
    <?php echo get_theme_mod('true_fixed_head'); ?>

</head>

<body <?php body_class(); ?>>

    <?php echo get_theme_mod('true_fixed_body'); ?>

    <div class="screen-page">

        <main>
            <header class="header<?php if (!(is_front_page())) {
                                        echo " not-home-header";
                                    } ?>" id="header">
                <div class="container">
                    <div class="header__flex">
                        <div class="header__content">
                            <?php if ($logo = get_field('logo', 'options')) : ?>
                                <div class="header__logo" data-aos="fade-in" data-aos-delay="0">
                                    <a href="/" class="header__logo__link js-header-logo" data-aos="fade-in" data-aos-delay="0">
                                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="header__navs">
                                <?php if ($tel = get_field('tel', 'options')) : ?>
                                    <div class="header__tel js-header-tel h5" data-aos-anchor="#header" data-aos="fade-in" data-aos-delay="100">
                                        <a href="tel:<?php
                                                        $tel = get_field('tel', 'options');
                                                        $tel_str = strval($tel);
                                                        $code_match = array('-', ' ', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', ';', "'", ',', '.', '/', '', '~', '`', '=');
                                                        $new_content = str_replace($code_match, '', $tel_str);
                                                        echo $new_content;
                                                        ?>">
                                            <svg class="tel-mobile" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.9272 5C21.6225 5.45592 23.1682 6.34928 24.4095 7.59059C25.6508 8.8319 26.5441 10.3776 27.0001 12.0728" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M18.8916 8.86475C19.9087 9.1383 20.8362 9.67431 21.5809 10.4191C22.3257 11.1639 22.8617 12.0913 23.1353 13.1084" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.5595 15.602C12.5968 17.7227 14.3158 19.4339 16.4412 20.4615C16.5967 20.5352 16.7687 20.5671 16.9403 20.5541C17.1119 20.5412 17.2771 20.4837 17.4198 20.3875L20.5492 18.3007C20.6877 18.2084 20.8469 18.1521 21.0126 18.1369C21.1782 18.1217 21.3451 18.148 21.498 18.2135L27.3526 20.7227C27.5515 20.8071 27.7175 20.954 27.8257 21.141C27.9339 21.3281 27.9783 21.5452 27.9524 21.7597C27.7673 23.2078 27.0608 24.5387 25.9652 25.5033C24.8695 26.4679 23.4598 27 22 27.0001C17.4913 27.0001 13.1673 25.2091 9.97919 22.0209C6.79107 18.8328 5 14.5088 5 10.0001C5.00008 8.54034 5.53224 7.13064 6.49685 6.03497C7.46146 4.9393 8.79237 4.2328 10.2404 4.04775C10.4549 4.02179 10.672 4.06625 10.8591 4.17443C11.0461 4.2826 11.193 4.44864 11.2775 4.64753L13.7888 10.5073C13.8537 10.6588 13.8802 10.8241 13.8658 10.9884C13.8514 11.1526 13.7967 11.3108 13.7064 11.4488L11.6268 14.6263C11.5322 14.7692 11.4762 14.9342 11.4644 15.1053C11.4526 15.2763 11.4854 15.4475 11.5595 15.602V15.602Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="tel-desc" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.77977 7.80077C6.29842 8.86111 7.15792 9.7167 8.2206 10.2305C8.29835 10.2674 8.38436 10.2833 8.47015 10.2768C8.55595 10.2703 8.63857 10.2416 8.7099 10.1935L10.2746 9.1501C10.3438 9.10395 10.4234 9.0758 10.5063 9.06819C10.5891 9.06058 10.6725 9.07376 10.749 9.10652L13.6763 10.3611C13.7757 10.4033 13.8588 10.4767 13.9128 10.5703C13.9669 10.6638 13.9892 10.7724 13.9762 10.8796C13.8837 11.6036 13.5304 12.2691 12.9826 12.7514C12.4347 13.2337 11.7299 13.4998 11 13.4998C8.74566 13.4998 6.58365 12.6043 4.98959 11.0102C3.39553 9.41617 2.5 7.25416 2.5 4.99982C2.50004 4.26993 2.76612 3.56507 3.24843 3.01724C3.73073 2.46941 4.39618 2.11615 5.12019 2.02363C5.22745 2.01065 5.33602 2.03288 5.42955 2.08697C5.52307 2.14106 5.59649 2.22408 5.63873 2.32352L6.89439 5.25339C6.92687 5.32917 6.9401 5.41181 6.93291 5.49394C6.92572 5.57608 6.89833 5.65516 6.85318 5.72415L5.81341 7.31289C5.76608 7.38435 5.73811 7.46688 5.73221 7.55239C5.72631 7.6379 5.7427 7.72348 5.77977 7.80077Z" fill="black" />
                                            </svg>
                                            <span><?php echo $tel; ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="header__menu js-header-menu">
                                    <?php
                                    wp_nav_menu([
                                        'theme_location'  => 'header_menu',
                                        'menu'            => '',
                                        'container'       => 'div',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => 'menu-header-top',
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => '',
                                    ]);
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="header__btns">
                            <?php if ($whatsapp_link = get_field('whatsapp_link', 'options')) : ?>
                                <div class="header__whatsapp js-header-whatsapp" data-aos-anchor="#header" data-aos="fade-in" data-aos-delay="400">
                                    <a href="<?php echo $whatsapp_link; ?>" target="_blank">
                                        <?php if ($whatsapp_icon_header = get_field('whatsapp_icon_header', 'options')) : ?>
                                            <img src="<?php echo $whatsapp_icon_header['url']; ?>" alt="<?php echo $whatsapp_icon_header['alt']; ?>">
                                        <?php endif; ?>
                                        <span><?php the_field('whatsapp_name', 'options'); ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($btn_header = get_field('btn_header', 'options')) : ?>
                                <div class="header__btn js-header-btn" data-aos-anchor="#header" data-aos="fade-in" data-aos-delay="500">
                                    <a href="<?php echo $btn_header['url']; ?>">
                                        <?php if ($whatsapp_icon_header = get_field('whatsapp_icon_header', 'options')) : ?>
                                            <?php if ($btn_header_icon = get_field('btn_header_icon', 'options')) : ?>
                                                <img src="<?php echo $btn_header_icon['url']; ?>" alt="<?php echo $btn_header_icon['alt']; ?>">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <span><?php echo $btn_header['title']; ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="header__mobile js-header-hamburger" data-aos-anchor="#header" data-aos="fade-in" data-aos-delay="200">
                            <div class="header__mobile__wrapper">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__dropdown js-header-dropdown">
                    <div class="container">
                        <div class="header__dropdown__flex js-header-dropdown-flex">
                            <?php
                            wp_nav_menu([
                                'theme_location'  => 'header_menu_mob',
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'menu-header-top-mobile',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ]);
                            ?>

                            <?php if ($btn_header_mob = get_field('btn_header_mob', 'options')) : ?>
                                <div class="header__btn__mobile">
                                    <a href="<?php echo $btn_header_mob['url']; ?>" class="btn">
                                        <span><?php echo $btn_header_mob['title']; ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (have_rows('contacts_header_mob', 'options')) : $i = 0; ?>
                                <div class="header__contacts__mob">
                                    <?php while (have_rows('contacts_header_mob', 'options')) : the_row();
                                        $i++; ?>
                                        <div class="header__contacts__mob__item">
                                            <?php $select = get_sub_field('select', 'options'); ?>
                                            <a href="<?php if ($select == 'tel') : ?>tel:<?php
                                                    $tel = get_field('tel', 'options');
                                                    $tel_str = strval($tel);
                                                    $code_match = array('-', ' ', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', ';', "'", ',', '.', '/', '', '~', '`', '=');
                                                    $new_content = str_replace($code_match, '', $tel_str);
                                                    echo $new_content;
                                                    $heading_text = $tel;
                                                    ?><?php elseif ($select == 'mail') : ?>mailto:<?php the_field('mail', 'options');
                                                                $heading_text = get_field('mail', 'options');?><?php elseif ($select == 'address') : ?>
                                                       <?php
                                                        $heading_text = get_field('address', 'options');
                                                        ?> 
                                                    <?php endif; ?>">
                                                <?php if ($icon = get_sub_field('icon', 'options')) : ?>
                                                    <div class="header__contacts__mob__item__icon">
                                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div>
                                                    <div class="header__contacts__mob__item__heading"><?php echo $heading_text; ?></div>
                                                    <?php if ($subheader = get_sub_field('subheader', 'options')) : ?>
                                                        <div class="header__contacts__mob__item__subheading"><?php echo $subheader; ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </a>

                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </header>