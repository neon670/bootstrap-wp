<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package CT_Custom
*/
?>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="meta">
        <span><?php echo get_the_date('M d, Y'); ?></span>
    </div>

    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

    <p class="excerpt">
        <?php force_balance_tags(the_excerpt());?>
    </p>

    <a href="<?php the_permalink();?>" class="read-more"><?php esc_html_e('Read the full post ->', 'new-theme') ;?></a>


</article>
