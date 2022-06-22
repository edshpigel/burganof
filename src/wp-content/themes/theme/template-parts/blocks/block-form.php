<section class="block-form" id="block-form">
    <div class="container">
        <div class="block-form__grid">
            <div class="block-form__content">
                <?php if ($block_form_text = get_field('block_form_text')) : ?>
                    <div class="block-form__content__text" data-aos-anchor="#block-form" data-aos="fade-up" data-aos-delay="0"><?php echo $block_form_text; ?></div>
                <?php endif; ?>
                <div class="block-form__form form-block-inline" data-aos-anchor="#block-form" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    $block_form_form = get_field('block_form_form');
                    if ($block_form_form) : ?>
                        <?php
                        $block_form_form_title = $block_form_form->post_title;
                        $block_form_form_id = $block_form_form->ID;
                        ?>
                        <?php echo do_shortcode('[contact-form-7 id="' . $block_form_form_id . '" title="' . $block_form_form_title . '"]'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($block_form_img = get_field('block_form_img')) : ?>
                <div class="block-form__img" data-aos-anchor="#block-form" data-aos="fade-left" data-aos-delay="200" style="background-image: url('<?php echo $block_form_img['url']; ?>');"></div>
            <?php endif; ?>
        </div>
    </div>
</section>