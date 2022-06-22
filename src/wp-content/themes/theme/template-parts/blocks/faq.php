<section class="faq" id="faq">
    <div class="container">
        <?php if ($faq_heading = get_field('faq_heading')) : ?>
            <div class="faq__heading" data-aos-anchor="#faq" data-aos="fade-up" data-aos-delay="0"><?php echo $faq_heading; ?></div>
        <?php endif; ?>
        <?php if (have_rows('faq_rep')) : $i = 0; $count = 0; ?>
            <div class="faq__wrapper">
                <?php while (have_rows('faq_rep')) : the_row();
                    $i++; $count = $count + 100; ?>
                    <div class="faq__item js-faq-item<?php echo ($i === 4 ? " is-active" : ""); ?>" data-aos-anchor="#faq" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>">
                        <div class="faq__item__question js-question"><span><?php the_sub_field('question'); ?></span></div>
                        <div class="faq__item__ask js-ask"><?php the_sub_field('ask'); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>