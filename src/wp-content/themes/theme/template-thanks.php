<?php

/*
 * Template name: Страница Спасибо	
 */

get_header();

?>

<section class="thanks padding-top-heading" id="thanks">
    <div class="header__space"></div>
    <div class="container">
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <div class="thanks__wrapper">
            <div class="thanks__content">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" data-aos-anchor="#thanks" data-aos="fade-left" data-aos-delay="0">', '</p>');
                }
                ?>
                <h1 class="thanks__heading" data-aos-anchor="#thanks" data-aos="fade-up" data-aos-delay="0">Отлично! <br>Ваша заявка принята.</h1>
                <div class="thanks__h2 h4" data-aos-anchor="#thanks" data-aos="fade-up" data-aos-delay="100">
                    <p>В скором времени мы свяжемся с вами для уточнения <br>деталей вашей заявки. Оставайтесь на связи.</p>
                </div>
                <a href="/" class="btn" data-aos-anchor="#thanks" data-aos="fade-up" data-aos-delay="200">
                    Перейти на главную
                </a>
            </div>
            <div class="thanks__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/thanks.png" alt="" data-aos-anchor="#thanks" data-aos="fade-left" data-aos-delay="0">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>