<?php

/**
 * Template name: Главная страница
 */

get_header();

$show_blocks = get_field('show_blocks');

if ($show_blocks['hero']) :
    get_template_part('template-parts/blocks/hero');
endif;

if ($show_blocks['profits_1']) :
    get_template_part('template-parts/blocks/profits-1');
endif;

if ($show_blocks['populars']) :
    get_template_part('template-parts/blocks/populars');
endif;

if ($show_blocks['quiz']) :
    get_template_part('template-parts/blocks/quiz');
endif;

if ($show_blocks['projects']) :
    get_template_part('template-parts/blocks/projects');
endif;

if ($show_blocks['production']) :
    get_template_part('template-parts/blocks/production');
endif;

if ($show_blocks['profits_2']) :
    get_template_part('template-parts/blocks/profits-2');
endif;

if ($show_blocks['reviews']) :
    get_template_part('template-parts/blocks/reviews');
endif;

if ($show_blocks['k_sales']) :
    get_template_part('template-parts/blocks/k-sales');
endif;

if ($show_blocks['block_form']) :
    get_template_part('template-parts/blocks/block-form');
endif;

if ($show_blocks['faq']) :
    get_template_part('template-parts/blocks/faq');
endif;

if ($show_blocks['insta']) :
    get_template_part('template-parts/blocks/insta');
endif;

get_template_part('template-parts/blocks/polka');

get_footer();
