<?php
/**
 * The single template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package New-Theme
 */

get_header();
get_template_part( 'template-parts/banner-title', 'title' );
?>


<div class="content-area">

    <div class="container">

        <div class="row">


        <?php
            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
//                    get_template_part( 'template-parts/content', get_post_type() );
                    if(has_post_thumbnail()){
                        the_post_thumbnail('large',
                        array(
                           'class' => 'img-fluid'
                        ));
                    }
                endwhile;
            ?>
            <div class="col-md-8 offset-md-2 overflow-hidden">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    <?php

                        the_content();
                    ?>

                </article>

            </div>
            <?php
                else :

                get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>