<?php
$get_template_directory_uri = get_template_directory_uri();
?>
<section class="quiz" id="quiz">
    <div class="container">
        <?php if ($quiz_heading = get_field('quiz_heading')) : ?>
            <div class="quiz__heading" data-aos-anchor="#quiz" data-aos="fade-up" data-aos-delay="0"><?php echo $quiz_heading; ?></div>
        <?php endif; ?>
        <?php if ($show_code_quiz = get_field('show_code_quiz')) : ?>
            <?php the_field('quiz_script'); ?>
            <?php else :
            if (have_rows('quiz_rep')) : $i = 0; ?>
                <div class="quiz__wrapper" data-aos-anchor="#quiz" data-aos="fade-up" data-aos-delay="0">
                    <form id="quiz-form" method="post">
                        <input type="hidden" name="post_id" value="<?php echo get_the_ID(); ?>">
                        <div class="quiz__content quiz-slider">
                            <?php while (have_rows('quiz_rep')) : the_row();
                                $i++; ?>
                                <!-- slide <?php echo $i; ?> start -->
                                <div class="quiz__slide quiz-slide quiz-slide-<?php echo $i; ?><?php echo ($i === 1 ? " active" : ""); ?> <?php echo ($i >= get_field('quiz_sale_much') ? 'quiz-sale-much' : ""); ?>">
                                    <?php if ($heading_question = get_sub_field('heading_question')) : ?>
                                        <div class="quiz__slide__heading"><?php echo $heading_question; ?></div>
                                    <?php endif; ?>
                                    <?php if (have_rows('ask_rep')) : $count = 0; ?>
                                        <div class="quiz__label-grid">
                                            <?php while (have_rows('ask_rep')) : the_row();
                                                $count++; ?>
                                                <label <?php echo (!(get_sub_field('img')) ? "class='none-img'" : ""); ?>>
                                                    <input class="quiz__slide__input" type="radio" name="step-<?php echo $i; ?>" id="step1-1" value="<?php the_sub_field('text'); ?>">
                                                    <?php if ($img = get_sub_field('img')) : ?>
                                                        <div class="quiz__slide__img" style="background-image: url('<?php echo $img; ?>');"></div>
                                                    <?php endif; ?>
                                                    <div class="quiz__slide__text">
                                                        <?php the_sub_field('text'); ?>
                                                    </div>
                                                </label>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="quiz__navs">
                                        <div>
                                            <div class="btn btn-back">Назад</div>
                                            <div class="btn btn-next">
                                                <span>Далее</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="white" stroke-miterlimit="10" />
                                                    <path d="M10.875 8.625L14.625 12L10.875 15.375" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="quiz__line quiz-line">
                                            <div class="quiz__line__in quiz-line-in">
                                            </div>
                                            <?php if ($quiz_sale_much = get_field('quiz_sale_much')) : ?>
                                                <div class="quiz__sale quiz-sale" data-much-question="<?php echo $quiz_sale_much; ?>">
                                                    <div class="quiz__sale__text">
                                                        <span><?php the_field('text_sale'); ?></span>
                                                        <span class="get-sale"><?php the_field('text_get_sale'); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="quiz__progress quiz-progress"></div>
                                    </div>
                                </div>
                                <!-- slide <?php echo $i; ?> end -->
                            <?php endwhile; ?>
                            <?php $i++; ?>
                            <div class="quiz__slide quiz-slide quiz-slide-submit quiz-slide-<?php echo $i; ?>">
                                <div class="quiz-slide-submit-grid">
                                    <div class="quiz-slide-submit-item">
                                        <div class="quiz__slide__heading"><?php the_field('text_quiz_contacts'); ?></div>
                                        <div class="flex-form">
                                            <div class="flex-form-item">
                                                <label>
                                                    <input type="text" name="name" id="your_name" placeholder="Ваше имя">
                                                </label>
                                            </div>
                                            <div class="flex-form-item">
                                                <label>
                                                    <input type="tel" name="tel" id="your_tel" placeholder="Номер телефона">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-form btns-flex-form">
                                            <button type="submit" class="btn btn--white">Узнать стоимость</button>
                                            <span class="form-policy">
                                                <span class="wpcf7-form-control-wrap your_policy">
                                                    <span class="wpcf7-form-control wpcf7-acceptance">
                                                        <span class="wpcf7-list-item">
                                                            <label>
                                                                <input type="checkbox" name="your_policy" class="policy-input">
                                                                <span class="wpcf7-list-item-label">
                                                                    <span class="content-acceptance">Соглашаюсь с <a target="_blank" href="/policy">политикой конфиденциальности</a>
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <?php if ($img_quiz_contacts = get_field('img_quiz_contacts')) : ?>
                                        <div class="quiz-slide-submit-item">
                                            <img class="quiz-slide-submit-item-img" src="<?php echo $img_quiz_contacts; ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>