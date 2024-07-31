<?php
/**
 * The 404 template file
 *
 * The template for displaying 404 Page Not Found in a WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package New-Theme
 */

get_header();
get_template_part( 'template-parts/banner', 'title' );
?>
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 overflow-hidden">
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'new-theme' ); ?></h1>
                    </header><!-- .page-header -->

                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'new-theme' ); ?></p>

                        <?php
                        get_search_form();

                        ?>

            </div>
        </div>
    </div>
</div>
