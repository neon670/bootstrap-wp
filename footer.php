<?php
/**
* The footer for our theme
*
* This is the template that displays all of the <footer> section
        *
        * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
        *
        * @package New-Theme
*/
?>
<footer>
    <?php if ( true == get_theme_mod( 'footer_calltoaction_visibility', 'on' ) ) : ?>
        <div class="footer-calltoaction text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 overflow-hidden">
                        <p class="sub-title"><?php echo esc_html(get_theme_mod('footer_sub_heading','Join the course.'));?></p>
                        <h2 class="main-footer-title"><?php echo esc_html(get_theme_mod('footer_main_heading','Bootstrap to WordPress 3.0'));?></h2>
                        <p class="main-footer-paragraph"><?php echo esc_html(get_theme_mod('footer_p_section','Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2021 and beyond!'));?></p>
                        <a href="<?php echo esc_html(get_theme_mod('footer_cta_link', '#'));?>" class="btn btn-primary"><?php echo esc_html(get_theme_mod('footer_cta_button','Join now ->'));?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="footer-calltoaction text-center">

        </div>
    <?php endif; ?>

    <div class="copyright text-center">
        <p><?php echo wp_kses_post(get_theme_mod('footer_copyright','Copyright NoeTheFreelanceDev'));?></p>

    </div>
</footer>
<?php wp_footer() ?>

</body>

</html>