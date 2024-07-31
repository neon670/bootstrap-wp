<?php
if(!class_exists('Kirki')){
    return;
}

/* Panels */

new \Kirki\Panel(
    'bs_theme_options_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'BS Theme Options', 'new-theme' ),
        'description' => esc_html__( 'Use this to customize BS theme', 'new-theme' ),
    ]
);


new \Kirki\Section(
    'bs_subscribe_bar',
    [
        'title'       => esc_html__( 'Suscribe Bar', 'new-theme' ),
        'description' => esc_html__( 'This is the subscribe bar.', 'new-theme' ),
        'panel'       => 'bs_theme_options_panel',
        'priority'    => 160,
    ]
);



new \Kirki\Field\Textarea(
    [
        'settings'    => 'subscribe_text',
        'label'       => esc_html__( 'Subscribe Bar TExt', 'new-theme' ),
        'section'     => 'bs_subscribe_bar',
        'default'     => esc_html__( 'This is a default value', 'new-theme' ),
    ]
);


new \Kirki\Field\Code(
    [
        'settings'    => 'subscribe_form',
        'label'       => esc_html__( 'Subscribe Form HTML', 'new-theme' ),
        'description' => esc_html__( 'Please enter HTML code for your opt-in form', 'new-theme' ),
        'section'     => 'bs_subscribe_bar',
        'default'     => '',
        'choices'     => [
            'language' => 'html',
        ],
    ]
);

//Footer


new \Kirki\Section(
    'bs_footer_section',
    [
        'title'       => esc_html__( 'Footer', 'new-theme' ),
        'description' => esc_html__( 'This is the footer section.', 'new-theme' ),
        'panel'       => 'bs_theme_options_panel',
        'priority'    => 160,
    ]
);


new \Kirki\Field\Textarea(
    [
        'settings'    => 'footer_copyright',
        'label'       => esc_html__( 'Footer Copyright Section', 'new-theme' ),
        'section'     => 'bs_footer_section',
        'default'     => esc_html__( 'Copyright NoeTheFreelanceDev', 'new-theme' ),
        'partial_refresh' => array(
            'footer_copyright' => array(
                'selector' => 'footer .copyright p',
                'render_callback' => function(){
                    return get_theme_mod('footer_copyright');
                }
            )
        ),
    ]
);
//call to action section
new \Kirki\Section(
    'footer_calltoaction_section',
    [
        'title'       => esc_html__( 'Call to Action', 'new-theme' ),
        'description' => esc_html__( 'This is the call to action card', 'new-theme' ),
        'panel'       => 'bs_theme_options_panel',
        'priority'    => 160,
    ]
);

new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'footer_calltoaction_visibility',
        'label'       => esc_html__( 'Call to action section', 'new-theme' ),
        'description' => esc_html__( 'Toggle section on/off', 'new-theme' ),
        'section'     => 'footer_calltoaction_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'new-theme' ),
            'off' => esc_html__( 'Disable', 'new-theme' ),
        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'footer_sub_heading',
        'label'    => esc_html__( 'Sub Heading', 'new-theme' ),
        'section'  => 'footer_calltoaction_section',
        'default'  => esc_html__( 'Join this course ', 'new-theme' ),
        'priority' => 10,
        'tooltip'  => esc_html__( 'Call to action sub heading section', 'new-theme' ),
        'partial_refresh' => array(
            'footer_sub_heading' => array(
            'selector' => '.footer-calltoaction p.sub-title',
            'render_callback' => function(){
                return get_theme_mod('footer_sub_heading');
                    }
                )
        ),
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'footer_main_heading',
        'label'    => esc_html__( 'Main Heading', 'new-theme' ),
        'section'  => 'footer_calltoaction_section',
        'default'  => esc_html__( 'Bootstrap to WordPress 3.0', 'new-theme' ),
        'priority' => 10,
        'tooltip'  => esc_html__( 'Call to action main heading section', 'new-theme' ),
        'partial_refresh' => array(
            'footer_main_heading' => array(
                'selector' => '.footer-calltoaction h2.main-footer-title',
                'render_callback' => function(){
                    return get_theme_mod('footer_main_heading');
                }
            )
        ),
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'footer_p_section',
        'label'    => esc_html__( 'Main Paragraph Text', 'new-theme' ),
        'section'  => 'footer_calltoaction_section',
        'default'  => esc_html__( 'Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2021 and beyond!', 'new-theme' ),
        'priority' => 10,
        'tooltip'  => esc_html__( 'Call to action paragraph section', 'new-theme' ),
        'partial_refresh' => array(
            'footer_p_section' => array(
                'selector' => '.footer-calltoaction p.main-footer-paragraph',
                'render_callback' => function(){
                    return get_theme_mod('footer_p_section');
                }
            )
        ),
    ]
);


new \Kirki\Field\Text(
    [
        'settings' => 'footer_cta_button',
        'label'    => esc_html__( 'Button Text', 'new-theme' ),
        'section'  => 'footer_calltoaction_section',
        'default'  => esc_html__( 'Join now ->', 'new-theme' ),
        'priority' => 10,
        'tooltip'  => esc_html__( 'Call to action button text', 'new-theme' ),
        'partial_refresh' => array(
            'footer_cta_button' => array(
                'selector' => '.footer-calltoaction .btn btn-primary',
                'render_callback' => function(){
                    return get_theme_mod('footer_cta_button');
                }
            )
        ),
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'footer_cta_link',
        'label'    => esc_html__( 'Button Link', 'new-theme' ),
        'section'  => 'footer_calltoaction_section',
        'default'  => '#',
        'priority' => 10,
    ]
);