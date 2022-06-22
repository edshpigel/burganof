<div class="kitchen-product" data-aos-anchor="<?php if ($args['sale'] === false) : ?>#populars<?php else : ?>#k-sales<?php endif; ?>" data-aos="fade-up" data-aos-delay="<?php echo $args['animation']; ?>">
    <div class="kitchen-product__content">
        <?php
        $post_id = get_the_ID();
        $tags = get_tags();
        if ($tags) { ?>
            <div class="kitchen-product__tags">
                <?php foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
                    $tag_id = get_term($tag->term_id);
                    $color = get_field('color', $tag_id);
                    $color_text = get_field('color_text', $tag_id);
                ?>
                    <div <?php echo ($tag->term_id == 4 ? "class='green-tag'" : ""); ?> href='<?php echo $tag_link ?>' style="background-color: <?php echo $color; ?>; <?php echo ($color_text ? "color: " . $color_text['value'] : ""); ?>">

                        <?php echo $tag->name; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="kitchen-product__price" <?php if ($args['sale'] === true) : ?> data-discount <?php endif; ?>><?php the_field('price'); ?></div>
        <?php if ($args['sale'] === true) : ?>
            <div class="kitchen-product__price__discount"><?php the_field('price_with_sale'); ?></div>
        <?php endif; ?>
        <div class="kitchen-product__title h5"><?php the_title(); ?></div>
        <div class="kitchen-product__subtitle"><?php the_field('desc'); ?></div>
        <div class="kitchen-product__btns">
            <a class="btn btn--outline btn--white" data-fancybox-trigger="kitchen-<?php if ($args['sale'] === false) : ?>popular<?php else : ?>k_sales<?php endif; ?>-<?php echo $args['count']; ?>">Смотреть</a>
            <a class="btn" href="#modal-form" from_where="<?php the_title(); ?> - <?php if ($args['sale'] === false) : ?>Популярные кухни<?php else : ?>Кухня дешевле<?php endif; ?> - <?php the_field('price'); ?> <?php if ($args['sale'] === false) : ?><?php else : the_field('price_with_sale'); endif; ?>" modal_desc="<?php the_title(); ?><br><?php the_field('desc'); ?><br><?php if ($args['sale'] === false) : ?> <?php the_field('price'); ?><?php else : the_field('price_with_sale'); endif; ?>">Заказать</a>
            <div style="display:none;">
                <?php
                $images = get_field('gal_kitchen');
                if ($images) : ?>
                    <?php foreach ($images as $image) : ?>
                        <a href="<?php echo $image['url']; ?>" data-fancybox="kitchen-<?php if ($args['sale'] === false) : ?>popular<?php else : ?>k_sales<?php endif; ?>-<?php echo $args['count']; ?>" data-caption="<?php echo $image['alt']; ?>">
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <div class="kitchen-product__bg" style="background-image: url('<?php echo $thumb; ?>');"></div>
</div>