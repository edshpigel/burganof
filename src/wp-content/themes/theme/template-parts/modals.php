<div class="modals" style="display: none;">
    <div class="modal-form" id="modal-form">
        <div class="fancybox-close" data-fancybox-close></div>
        <div class="modal-form-h2"><?php the_field('heading_modal_form', 'options'); ?></div>
        <div class="modal-form-desc h5"></div>
        <?php
        $form_modal_form = get_field('form_modal_form', 'options');
        if ($form_modal_form) : ?>
            <?php
            $form_modal_form_title = $form_modal_form->post_title;
            $form_modal_form_id = $form_modal_form->ID;
            ?>
            <?php echo do_shortcode('[contact-form-7 id="' . $form_modal_form_id . '" title="' . $form_modal_form_title . '"]'); ?>
        <?php endif; ?>
    </div>
</div>