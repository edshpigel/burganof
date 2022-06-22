<?php

/**
 * Footer.php
 */
?>


<footer class="footer" id="footer">
    <div class="container">
        <?php if (have_rows('columns_footer', 'options')) : $i = 0;
            $count = 0; ?>
            <div class="footer__flex">
                <?php while (have_rows('columns_footer', 'options')) : the_row();
                    $i++;
                    $count = $count + 100; ?>
                    <div class="footer__flex__item" data-aos-anchor="#footer" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                        <?php $select = get_sub_field('select', 'options'); ?>
                        <a class="" <?php if ($select == 'tel') : ?>href="tel:<?php
                                                                                $tel = get_field('tel', 'options');
                                                                                $tel_str = strval($tel);
                                                                                $code_match = array('-', ' ', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', ';', "'", ',', '.', '/', '', '~', '`', '=');
                                                                                $new_content = str_replace($code_match, '', $tel_str);
                                                                                echo $new_content;
                                                                                $heading_text = $tel;
                                                                                ?>" <?php elseif ($select == 'mail') : ?>href="mailto:<?php the_field('mail', 'options');
                                                                                                                                        $heading_text = get_field('mail', 'options'); ?>" <?php elseif ($select == 'address') : ?> <?php
                                                                                                                                                                                                                                    $heading_text = get_field('address', 'options');
                                                                                                                                                                                                                                    ?> <?php endif; ?>>
                            <?php if ($icon = get_sub_field('icon', 'options')) : ?>
                                <div class="footer__flex__item__icon">
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                </div>
                            <?php endif; ?>
                            <div>
                                <div class="footer__flex__item__heading h3"><?php echo $heading_text; ?></div>
                                <?php if ($after_text = get_sub_field('after_text', 'options')) : ?>
                                    <div class="footer__flex__item__subheading"><?php echo $after_text; ?></div>
                                <?php endif; ?>
                            </div>
                        </a>

                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('social_footer', 'options')) : $i = 0; ?>
            <div class="footer__social">
                <?php while (have_rows('social_footer', 'options')) : the_row();
                    $i++;
                    $count = $count + 100; ?>
                    <div class="footer__social__item" data-aos-anchor="#footer" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                        <a href="<?php the_sub_field('link_social', 'options'); ?>" target="_blank">
                            <?php if ($icon = get_sub_field('icon', 'options')) : ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            <?php endif; ?>
                            <?php if ($name = get_sub_field('name', 'options')) : ?>
                                <div class="footer__social__item__name"><?php echo $name; ?></div>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php if ($whatsapp_link = get_field('whatsapp_link', 'options')) : ?>
                    <?php $count = $count + 100; ?>
                    <div class="footer__social__item" data-aos-anchor="#footer" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                        <a href="<?php echo $whatsapp_link; ?>" target="_blank">
                            <?php if ($whatsapp_footer_icon = get_field('whatsapp_footer_icon', 'options')) : ?>
                                <img src="<?php echo $whatsapp_footer_icon['url']; ?>" alt="<?php echo $whatsapp_footer_icon['alt']; ?>">
                            <?php endif; ?>
                            <?php if ($whatsapp_name = get_field('whatsapp_name', 'options')) : ?>
                                <div class="footer__social__item__name"><?php echo $whatsapp_name; ?></div>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="footer__copyright">
            <div class="copyright" data-aos-anchor="#footer" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</div>
            <?php $count = $count + 100; ?>
            <a href="<?php echo get_privacy_policy_url(); ?>" target="_blank" data-aos-anchor="#footer" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">Политика конфиденциальности</a>
            <?php if ($link_sitemap = get_field('link_sitemap', 'options')) : ?>
                <?php $count = $count + 100; ?>
                <a href="<?php echo $link_sitemap['url']; ?>" data-aos-anchor="#footer" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>"><?php echo $link_sitemap['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</footer>



<a href="#modal-inline" from_where="Показать окно - в подвале">Показать окно</a>
<a href="#modal-display">Показать окно</a>

</main>

<?php get_template_part('template-parts/to-top'); ?>
<?php get_template_part('template-parts/modals'); ?>

<div class="modals" style="display: none;">
    <div class="modal-custom" id="modal-inline">
        <h1>Заголовок11</h1>
        <input type="text" name="from_where">
    </div>
    <div class="modal-custom" id="modal-display">
        <h1>Заголовок22</h1>
    </div>
</div>

</div>
<?php wp_footer(); ?>


</body>

</html>