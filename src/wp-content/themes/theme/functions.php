<?php

/* ========================================
 * Functions.php
 * ========================================
 */

/* ============== Scripts & Styles ============ */

function theme_styles()
{
	wp_dequeue_style('wp-block-library');

	$style_css = get_template_directory_uri() . '/style.css';
	$lastedit_style_css = filemtime(get_template_directory() . '/style.css');

	wp_enqueue_style('style_css', $style_css, array(), $lastedit_style_css);


	$style_global_css = get_template_directory_uri() . '/global.css';
	$lastedit_style_global_css = filemtime(get_template_directory() . '/global.css');

	wp_enqueue_style('style_global_css', $style_global_css, array(), $lastedit_style_global_css);
}
add_action('wp_enqueue_scripts', 'theme_styles', 100);

function theme_scripts()
{
	$style_all_js = get_template_directory_uri() . '/assets/js/all.js';
	$lastedit_script_all_js = filemtime(get_template_directory() . '/assets/js/all.js');

	wp_enqueue_script('all_js', $style_all_js, array('jquery'), $lastedit_script_all_js, true);

	wp_localize_script(
		'all_js',
		'get_template_directory_uri',
		array(
			'home' => get_template_directory_uri()
		)
	);
}
add_action('wp_enqueue_scripts', 'theme_scripts', 101);

/* ============== ACF option turn  ============ */

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Основное - Burganof',
		'menu_title'	=> 'Основное - Burganof',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Основные настройки',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/* ============== Menu wordpress create  ============ */

register_nav_menus(array(
	'header_menu' => __('Меню в шапке'),
	'header_menu_mob' => __('Меню в шапке (Мобильное меню)')
));

/* ============== Animation menu header_menu  ============ */
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
	if ($args->theme_location == 'header_menu') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#header';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	return $atts;
}, 10, 3);

/* ============== Support thumbnails ============ */

add_theme_support('post-thumbnails', array('kitchen', 'project'));


/* ============== Comment in console Wordpress ============ */

add_action('wp_dashboard_setup', 'register_my_dashboard_widget', 0);
function register_my_dashboard_widget()
{
	wp_add_dashboard_widget(
		'my_dashboard_widget',
		'<h1><font color="orange"><strong>Навигация по админке сайта Burganof</strong></font></h1>',
		'my_dashboard_widget_display'
	);
}

function my_dashboard_widget_display()
{
	$home_id = get_option('page_on_front');
	echo '
	<h3>
	<ol>
	
	
	<li>
	<strong><a href="/wp-admin/post.php?post=' . $home_id . '&action=edit"><font color="blue">Редактировать блоки лендинга</font></a> (Главная страница)</strong><br>
	<strong><font color="red">Информация для редактирования:</font></strong><br> При редактировании текстовых полей есть возможность выбрать цвет текста:<br>
	<ol>
	<li>Выделите текст, цвет которого вы хотите изменить
	</li>
	<li>Нажмите <strong>Форматы</strong>
	</li>
	<li>Из предложенного списка выберите цвет</strong>
	</li>
	</ol>
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=kitchen"><font color="blue">Редактировать основные настройки сайта</font></a> (Основное - Burganof)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/nav-menus.php"><font color="blue">Редактировать меню в шапке сайта</font></a> (Внешний вид -> Меню)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=kitchen"><font color="blue">Редактировать кухни</font></a> (Архив Кухни)</strong><br>
	<strong><font color="red">Информация для редактирования:</font></strong><br> 
	Цвет меток (например, Рассрочка на 12 месяцев) можно изменить в разделе <strong><a href="/wp-admin/edit-tags.php?taxonomy=post_tag&post_type=kitchen"><font color="blue">Кухни -> Метки</font></a></strong><br>
	<ol>
	<li>Перейдите на <strong><a href="/wp-admin/edit-tags.php?taxonomy=post_tag&post_type=kitchen"><font color="blue">страницу редактирования меток</font></a></strong>
	</li>
	<li>Выберите нужную нужную метку
	</li>
	<li>Выберите Цвет метки и Цвет текста метки</strong>
	</li>
	</ol>
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=kitchen&page=order-post-types-kitchen"><font color="blue">Изменить порядок кухонь</font></a></strong><br>Сортировку кухонь можно изменить вручную (drag-and-drop)
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=project"><font color="blue">Редактировать проекты</font></a> (Архив Проекты)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=project&page=order-post-types-project"><font color="blue">Изменить порядок проектов</font></a></strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=review"><font color="blue">Редактировать отзывы</font></a> (Архив Отзывы)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/edit.php?post_type=review&page=order-post-types-review"><font color="blue">Изменить порядок отзывов</font></a></strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/admin.php?page=wpcf7&post=6&action=edit"><font color="blue">Редактировать форму</font></a> (CF7 -> Онлайн заявка)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/admin.php?page=ai1wm_export"><font color="blue">Выгрузить шаблон сайта</font></a> (All in One Export)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/admin.php?page=ai1wm_import"><font color="blue">Загрузить шаблон сайта</font></a> (All in One Import)</strong>
	</li>
	
	<li>
	<strong><a href="/wp-admin/customize.php"><font color="blue">Добавить код в head или body</font></a></strong>
	</li>


	</ol>
	</h3>
	';
}


/* ============== Customize Wysiwyg Edit ============ */

function custom_editor_styles()
{
	add_editor_style('admin/css/my-editor-styles.css');
}

add_action('admin_init', 'custom_editor_styles');

function add_style_select_button($buttons)
{
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'add_style_select_button');
// add custom styles to the WordPress editor

function my_mce_before_init_insert_formats($init_array)
{

	$style_formats = array(
		array(
			'title' => 'Фирменный цвет текста',
			'inline' => 'span',
			'classes' => 'primary-color-wysiwyg',
			'wrapper' => true,
		),
		array(
			'title' => 'Серый цвет текста',
			'inline' => 'span',
			'classes' => 'text-color-wysiwyg',
			'wrapper' => true,
		),
		array(
			'title' => 'Зеленый цвет текста',
			'inline' => 'span',
			'classes' => 'green-color-wysiwyg',
			'wrapper' => true,
		),
		array(
			'title' => 'Красный цвет фона текста',
			'inline' => 'span',
			'classes' => 'primary-bg-color-wysiwyg',
			'wrapper' => true,
		),
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode($style_formats);

	return $init_array;
}
// Attach callback to 'tiny_mce_before_init'
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');





add_filter('acf/fields/wysiwyg/toolbars', 'my_toolbars');
function my_toolbars($toolbars)
{
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/

	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Свой вариант'] = array();
	$toolbars['Свой вариант'][1] = array('formatselect', 'styleselect', '|', 'bold', 'italic', 'underline', 'link', '|', 'bullist', 'numlist', '|', 'fullscreen');

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if (($key = array_search('code', $toolbars['Full'][2])) !== false) {
		unset($toolbars['Full'][2][$key]);
	}

	// remove the 'Basic' toolbar completely
	unset($toolbars['Basic']);

	// return $toolbars - IMPORTANT!
	return $toolbars;
}


/* ============== Customize php Edit ============ */

add_action('customize_register', 'true_customizer_init');

function true_customizer_init($wp_customize)
{

	$wp_customize->add_panel(
		'true_panel',
		array(
			'priority'       => -1,
			'title'          => '&#1421; Добавить код в <head> или <body>',
			'description'    => 'Тут вы можете изменить дополнительные настройки сайта.',
		)
	);
	$wp_customize->add_section(
		'true_header_section',
		array(
			'title'       => 'Добавить код в <head> или <body>',
			'priority'    => 1,
			'description' => 'Тут вы можете вставить на сайт код в head или body',
			'panel'       => 'true_panel'
		)
	);

	$wp_customize->add_section(
		'true_footer_section',
		array(
			'title'       => 'Футер',
			'priority'    => 2,
			'description' => 'Тут вы можете настроить футер вашего сайта.',
			'panel'       => 'true_panel'
		)
	);
	$wp_customize->add_setting(
		'true_fixed_head'
	);
	$wp_customize->add_control(
		'true_fixed_head',
		array(
			'section'   => 'true_header_section',
			'label'     => 'Добавить код в конец <head>',
			'type'      => 'code_editor'
		)
	);
	$wp_customize->add_setting(
		'true_fixed_body'
	);
	$wp_customize->add_control(
		'true_fixed_body',
		array(
			'section'   => 'true_header_section',
			'label'     => 'Добавить код в начало <body>',
			'type'      => 'code_editor'
		)
	);
}


/* ============== Kitchen APT ============ */

function cptui_register_my_cpts_kitchen()
{

	/**
	 * Post Type: Кухни.
	 */

	$labels = [
		"name" => __("Кухни", "custom-post-type-ui"),
		"singular_name" => __("Кухня", "custom-post-type-ui"),
		"menu_name" => __("Кухни", "custom-post-type-ui"),
		"all_items" => __("Все кухни", "custom-post-type-ui"),
		"add_new" => __("Добавить новую кухню", "custom-post-type-ui"),
		"add_new_item" => __("Добавить новую кухню", "custom-post-type-ui"),
		"edit_item" => __("Редактировать кухню", "custom-post-type-ui"),
		"new_item" => __("Новая кухня", "custom-post-type-ui"),
		"view_item" => __("Посмотреть кухню", "custom-post-type-ui"),
		"view_items" => __("Посмотреть все кухни", "custom-post-type-ui"),
		"search_items" => __("Найти кухню", "custom-post-type-ui"),
		"not_found" => __("Нет ни одной кухни", "custom-post-type-ui"),
		"not_found_in_trash" => __("Нет ни одной кухни в корзине", "custom-post-type-ui"),
		"parent" => __("Родительская кухня", "custom-post-type-ui"),
		"featured_image" => __("Изображение кухни", "custom-post-type-ui"),
		"set_featured_image" => __("Установить изображение кухни", "custom-post-type-ui"),
		"remove_featured_image" => __("Удалить изображение кухни", "custom-post-type-ui"),
		"use_featured_image" => __("Использовать как изображение кухни", "custom-post-type-ui"),
		"archives" => __("Страница кухонь", "custom-post-type-ui"),
		"insert_into_item" => __("Добавить на страницу кухни", "custom-post-type-ui"),
		"uploaded_to_this_item" => __("Загружено в эту кухню", "custom-post-type-ui"),
		"filter_items_list" => __("Фильтр по кухням", "custom-post-type-ui"),
		"items_list_navigation" => __("Навигация по кухням", "custom-post-type-ui"),
		"items_list" => __("Список кухонь", "custom-post-type-ui"),
		"attributes" => __("Атрибуты кухонь", "custom-post-type-ui"),
		"name_admin_bar" => __("Кухня", "custom-post-type-ui"),
		"item_published" => __("Кухня опубликована", "custom-post-type-ui"),
		"item_published_privately" => __("Кухня опубликована приватно", "custom-post-type-ui"),
		"item_reverted_to_draft" => __("Кухня размещена в черновик", "custom-post-type-ui"),
		"item_scheduled" => __("Кухня запланирована", "custom-post-type-ui"),
		"item_updated" => __("Кухня обновлена", "custom-post-type-ui"),
		"parent_item_colon" => __("Родительская кухня", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Кухни", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"taxonomies" => array('category', 'post_tag'),
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"menu_position" => 21,
		"menu_icon" => 'dashicons-screenoptions',
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "kitchen", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "custom-fields", "editor", "thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type("kitchen", $args);
}
add_action('init', 'cptui_register_my_cpts_kitchen');



/* ============== Project APT ============ */

function cptui_register_my_cpts_project()
{

	/**
	 * Post Type: Проекты.
	 */

	$labels = [
		"name" => __("Проекты", "custom-post-type-ui"),
		"singular_name" => __("Проект", "custom-post-type-ui"),
		"menu_name" => __("Проекты", "custom-post-type-ui"),
		"all_items" => __("Все проекты", "custom-post-type-ui"),
		"add_new" => __("Добавить новый проект", "custom-post-type-ui"),
		"add_new_item" => __("Добавить новый проект", "custom-post-type-ui"),
		"edit_item" => __("Редактировать проект", "custom-post-type-ui"),
		"new_item" => __("Новый проект", "custom-post-type-ui"),
		"view_item" => __("Посмотреть проект", "custom-post-type-ui"),
		"view_items" => __("Посмотреть все проекты", "custom-post-type-ui"),
		"search_items" => __("Найти проект", "custom-post-type-ui"),
		"not_found" => __("Нет ни одного проекта", "custom-post-type-ui"),
		"not_found_in_trash" => __("Нет ни одного проекта в корзине", "custom-post-type-ui"),
		"parent" => __("Родительский проект", "custom-post-type-ui"),
		"featured_image" => __("Изображение проекта", "custom-post-type-ui"),
		"set_featured_image" => __("Установить изображение проекта", "custom-post-type-ui"),
		"remove_featured_image" => __("Удалить изображение проекта", "custom-post-type-ui"),
		"use_featured_image" => __("Использовать как изображение проекта", "custom-post-type-ui"),
		"archives" => __("Страница проектов", "custom-post-type-ui"),
		"insert_into_item" => __("Добавить на страницу проекта", "custom-post-type-ui"),
		"uploaded_to_this_item" => __("Загружено в этот проект", "custom-post-type-ui"),
		"filter_items_list" => __("Фильтр по проектам", "custom-post-type-ui"),
		"items_list_navigation" => __("Навигация по проектам", "custom-post-type-ui"),
		"items_list" => __("Список проектов", "custom-post-type-ui"),
		"attributes" => __("Атрибуты проекта", "custom-post-type-ui"),
		"name_admin_bar" => __("Проект", "custom-post-type-ui"),
		"item_published" => __("Проект опубликован", "custom-post-type-ui"),
		"item_published_privately" => __("Проект опубликован приватно", "custom-post-type-ui"),
		"item_reverted_to_draft" => __("Проект размещен в черновик", "custom-post-type-ui"),
		"item_scheduled" => __("Проект запланирован", "custom-post-type-ui"),
		"item_updated" => __("Проект обновлен", "custom-post-type-ui"),
		"parent_item_colon" => __("Родительский проект", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Проекты", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"taxonomies" => array(),
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"menu_position" => 22,
		"menu_icon" => 'dashicons-admin-page',
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "project", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "custom-fields", "editor", "thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type("project", $args);
}
add_action('init', 'cptui_register_my_cpts_project');


/* ============== Review APT ============ */

function cptui_register_my_cpts_review()
{

	/**
	 * Post Type: Отзывы.
	 */

	$labels = [
		"name" => __("Отзывы", "custom-post-type-ui"),
		"singular_name" => __("Отзыв", "custom-post-type-ui"),
		"menu_name" => __("Отзывы", "custom-post-type-ui"),
		"all_items" => __("Все отзывы", "custom-post-type-ui"),
		"add_new" => __("Добавить новый отзыв", "custom-post-type-ui"),
		"add_new_item" => __("Добавить новый отзыв", "custom-post-type-ui"),
		"edit_item" => __("Редактировать отзыв", "custom-post-type-ui"),
		"new_item" => __("Новый отзыв", "custom-post-type-ui"),
		"view_item" => __("Посмотреть отзыв", "custom-post-type-ui"),
		"view_items" => __("Посмотреть все отзывы", "custom-post-type-ui"),
		"search_items" => __("Найти отзыв", "custom-post-type-ui"),
		"not_found" => __("Нет ни одного отзыва", "custom-post-type-ui"),
		"not_found_in_trash" => __("Нет ни одного отзыва в корзине", "custom-post-type-ui"),
		"parent" => __("Родительский отзыв", "custom-post-type-ui"),
		"featured_image" => __("Изображение отзыва", "custom-post-type-ui"),
		"set_featured_image" => __("Установить изображение отзыва", "custom-post-type-ui"),
		"remove_featured_image" => __("Удалить изображение отзыва", "custom-post-type-ui"),
		"use_featured_image" => __("Использовать как изображение отзыва", "custom-post-type-ui"),
		"archives" => __("Страница отзывов", "custom-post-type-ui"),
		"insert_into_item" => __("Добавить на страницу отзыва", "custom-post-type-ui"),
		"uploaded_to_this_item" => __("Загружено в этот отзыв", "custom-post-type-ui"),
		"filter_items_list" => __("Фильтр по отзывам", "custom-post-type-ui"),
		"items_list_navigation" => __("Навигация по отзывам", "custom-post-type-ui"),
		"items_list" => __("Список отзывов", "custom-post-type-ui"),
		"attributes" => __("Атрибуты отзывов", "custom-post-type-ui"),
		"name_admin_bar" => __("Отзыв", "custom-post-type-ui"),
		"item_published" => __("Отзыв опубликован", "custom-post-type-ui"),
		"item_published_privately" => __("Отзыв опубликован приватно", "custom-post-type-ui"),
		"item_reverted_to_draft" => __("Отзыв размещен в черновик", "custom-post-type-ui"),
		"item_scheduled" => __("Отзыв запланирован", "custom-post-type-ui"),
		"item_updated" => __("Отзыв обновлен", "custom-post-type-ui"),
		"parent_item_colon" => __("Родительский отзыв", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Отзывы", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"menu_position" => 23,
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "reviews", "with_front" => false],
		"query_var" => true,
		"supports" => ["title", "custom-fields", "editor", "thumbnail"],
		"show_in_graphql" => false,
		'menu_icon' => 'dashicons-admin-comments',
	];

	register_post_type("review", $args);
}

add_action('init', 'cptui_register_my_cpts_review');





/* ============== Add thumbnail to list of kitchens ============ */

if (!function_exists('fb_AddThumbColumn') && function_exists('add_theme_support')) {

	function fb_AddThumbColumn($cols)
	{

		$cols['thumbnail'] = __('Thumbnail');

		return $cols;
	}

	function fb_AddThumbValue($column_name, $post_id)
	{

		$width = (int) 80;
		$height = (int) 80;

		if ('thumbnail' == $column_name) {
			// thumbnail of WP 2.9
			$thumbnail_id = get_post_meta($post_id, '_thumbnail_id', true);
			// image from gallery
			$attachments = get_children(array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image'));
			if ($thumbnail_id)
				$thumb = wp_get_attachment_image($thumbnail_id, array($width, $height), true);
			elseif ($attachments) {
				foreach ($attachments as $attachment_id => $attachment) {
					$thumb = wp_get_attachment_image($attachment_id, array($width, $height), true);
				}
			}
			if (isset($thumb) && $thumb) {
				echo $thumb;
			} else {
				echo __('None');
			}
		}
	}

	// for posts
	add_filter('manage_posts_columns', 'fb_AddThumbColumn');
	add_action('manage_posts_custom_column', 'fb_AddThumbValue', 10, 2);
}

add_filter('manage_posts_columns', 'scompt_custom_columns');
function scompt_custom_columns($defaults)
{
	unset($defaults['comments']);
	unset($defaults['author']);
	return $defaults;
}


// ============================================================
// AJAX repeaters
// ============================================================
