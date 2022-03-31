<?php

add_action( 'wp_enqueue_scripts', 'hyper_scripts' );

function hyper_scripts() {
    wp_enqueue_style( 'hyper-swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    wp_enqueue_style( 'hyper-style', get_stylesheet_uri() );


    wp_enqueue_script( 'lottie-js', 'https://unpkg.com/@lottiefiles/lottie-player@1.5.4/dist/lottie-player.js', array(), '1.0.0', false );
    wp_enqueue_script( 'hyper-swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'hyper-main-js', get_template_directory_uri() . '/js/main.js' );
}


show_admin_bar( false );

//Create custom post-type

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'games', [
        'label'  => null,
        'labels' => [
            'name'               => 'Игры', // основное название для типа записи
            'singular_name'      => 'Игра', // название для одной записи этого типа
            'add_new'            => 'Добавить игру', // для добавления новой записи
            'add_new_item'       => 'Добавление игры', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование игры', // для редактирования типа записи
            'new_item'           => 'Новая игра', // текст новой записи
            'view_item'          => 'Смотреть игру', // для просмотра записи этого типа.
            'search_items'       => 'Искать игру', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Игры', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-games',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

add_theme_support( 'post-thumbnails', array('games') );

add_image_size( 'games-desktop', 304, 481, true );
add_image_size( 'games-mobile', 344, 311, true );
add_image_size( 'games-icon', 82, 82, true );

function uicode_add_games_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'games' ) );
    return $query;
}
add_action( 'pre_get_posts', 'uicode_add_games_to_query' );

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');