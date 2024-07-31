<?php

remove_action('wp_head', 'wp_generator');

if ( ! function_exists( 'new_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function new_theme_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on CT Custom, use a find and replace
         * to change 'new-theme' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'new_theme', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'new_theme' ),
            'menu-2' => esc_html__( 'Secondary', 'new_theme' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'new_theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'new_theme_setup' );








function bs_scripts(){

    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'));
    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'));
    wp_enqueue_style('new_theme_style', get_stylesheet_uri(), array('bootstrap'));

    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'),array() ,'v5.1.1', true);
    wp_enqueue_script('bootstrap-theme-js', get_theme_file_uri('assets/js/bootstrap.min.js'), array('jquery','jquery-ui-core','jquery-ui-selectmenu'),'1.0',true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'bs_scripts' );


function wp_custom_head(){
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
}
add_action('wp_head','wp_custom_head',5);


function bs_readmore($more){
    return'...';
}

add_filter('excerpt_more', 'bs_readmore');

function bs_pagination(){
    global $wp_query;
    $links = paginate_links(
           array(
               'current' => max(1, get_query_var('paged')),
               'total'     => $wp_query -> max_num_pages,
               'type'      => 'list',
               'prev_text' => '<-',
               'next_text' => '->'
           )
    );
    $links = '<nav class="bs-pagination">' .$links;
    $links .= '</nav>';
    echo wp_kses_post($links);
}

require get_template_directory() . '/includes/customizer-bs.php';