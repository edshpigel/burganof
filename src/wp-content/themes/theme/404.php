<?php

/**
 * 404.php
 */

get_header(); ?>

<section class="page-404 padding-top-heading" id="page-404">
    <div class="header__space"></div>
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" data-aos-anchor="#page-404" data-aos="fade-left" data-aos-delay="0">', '</p>');
        }
        ?>
        <div class="page-404__flex">
            <div class="page-404__content">
                <h1 data-aos-anchor="#page-404" data-aos="fade-up" data-aos-delay="0">Страница, которую Вы ищете, <br>не может быть найдена</h1>
                <div class="content-field h4" data-aos-anchor="#page-404" data-aos="fade-up" data-aos-delay="100">
                    <p>Возможно, запрашиваемая Вами страница<br>была перенесена или удалена.</p>
                </div>
                <a href="/" class="btn" data-aos-anchor="#page-404" data-aos="fade-up" data-aos-delay="200">
                    Перейти на главную
                </a>
            </div>
            <div class="page-404__img">
                <svg width="621" height="242" viewBox="0 0 621 242" fill="none" xmlns="http://www.w3.org/2000/svg" data-aos-anchor="#page-404" data-aos="fade-left" data-aos-delay="300">
                    <path d="M190.365 142.54V193.945H169.32V235H110.67V193.945H0.269531V182.56L73.7545 5.57494H134.82L77.8945 142.54H114.81L128.265 91.8249H169.32V142.54H190.365Z" fill="#EBECF1" />
                    <path d="M312.473 241.21C292.233 241.21 274.523 236.265 259.343 226.375C244.163 216.485 232.433 202.455 224.153 184.285C216.103 166.115 212.078 144.84 212.078 120.46C212.078 83.8899 221.163 54.6799 239.333 32.8299C257.503 10.9799 281.883 0.0549316 312.473 0.0549316C343.063 0.0549316 367.443 10.9799 385.613 32.8299C403.783 54.6799 412.868 83.8899 412.868 120.46C412.868 157.26 403.668 186.585 385.268 208.435C367.098 230.285 342.833 241.21 312.473 241.21ZM284.528 169.45C290.968 180.72 300.168 186.355 312.128 186.355C324.318 186.355 333.633 180.72 340.073 169.45C346.743 158.18 350.078 141.965 350.078 120.805C350.078 99.6449 346.743 83.3149 340.073 71.8149C333.633 60.3149 324.433 54.5649 312.473 54.5649C300.283 54.5649 290.968 60.3149 284.528 71.8149C278.088 83.0849 274.868 99.2999 274.868 120.46C274.868 141.62 278.088 157.95 284.528 169.45Z" fill="#EBECF1" />
                    <path d="M620.267 142.54V193.945H599.222V235H540.572V193.945H430.172V182.56L503.657 5.57494H564.722L507.797 142.54H544.712L558.167 91.8249H599.222V142.54H620.267Z" fill="#EBECF1" />
                </svg>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>