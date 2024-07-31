<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>

<!DOCTYPE html>

    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
</head>
<?php wp_head() ;?>
<body <?php body_class(); ?>>

<div id="top-navigation">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6">

    <?php wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'depth' => 3,
                'container' => 'nav',
                'container_class' => 'main-menu',
                'menu_class' => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled',
                'unstyled',
                'fallback_cb' => false

            )
        );
    ?>
                <button type="button" class="navbar-open">
                    <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                </button>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn">
                <i class="flaticon flaticon-close"></i>
            </div>
            <nav class="menu-box">
                <ul class="navigation clearfix"></ul>
            </nav>
        </div>

    </div>
</div>
