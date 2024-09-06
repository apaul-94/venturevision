<?php

/*======================
 For Customizable Title
======================*/
add_theme_support('title-tag');


/*========================================================
 For Default Showing my Home Page Tmeplate in Live Preview
========================================================*/
function arunvvtheme_setup_homepage() {
    // Check if the front page is already set to a static page
    $front_page = get_option('page_on_front');
    if (!$front_page) {
        // Create a new page with the Home Page Template
        $homepage_id = wp_insert_post(array(
            'post_title'     => 'Home',
            'post_type'      => 'page',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => 1,
            'page_template'  => 'template-home.php' // Your template file name
        ));

        // Set the newly created page as the front page
        update_option('page_on_front', $homepage_id);
        update_option('show_on_front', 'page');
    }
}
add_action('after_switch_theme', 'arunvvtheme_setup_homepage');


/*================================
 For Adding Google Fonts CDN Paths
================================*/
function arunvv_google_font_cdn()
{
    wp_enqueue_style('arunvv_google_font', 'https://fonts.googleapis.com/css2?family=Abel&family=Outfit:wght@100..900&display=swap');
}
add_action('wp_enqueue_scripts', 'arunvv_google_font_cdn');


/*================================
 For Adding Bootstrap Icons CDN Paths
================================*/
function arunvv_bootstrap_icons_cdn()
{
    wp_enqueue_style('arunvv_bootstrap_icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
}
add_action('wp_enqueue_scripts', 'arunvv_bootstrap_icons_cdn');


/*=======================================
 For Adding all css, js, and jquery files
=======================================*/
function arunvv_css_js_adding()
{

    //style.css adding
    wp_enqueue_style('arunvv_style_css', get_stylesheet_uri());

    //custom.css adding
    wp_register_style('arunvv_custom_css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_custom_css');

    //an-contact-social.css adding
    wp_register_style('arunvv_an_contact_social_css', get_template_directory_uri() . '/assets/css/an-contact-social.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_an_contact_social_css');

    //header.css adding
    wp_register_style('arunvv_header_css', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_header_css');

    //footer.css adding
    wp_register_style('arunvv_footer_css', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_footer_css');

    //page.css adding
    wp_register_style('arunvv_page_css', get_template_directory_uri() . '/assets/css/page.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_page_css');

    //sidebar.css adding
    wp_register_style('arunvv_sidebar_css', get_template_directory_uri() . '/assets/css/sidebar.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_sidebar_css');

    //single.css adding
    wp_register_style('arunvv_single_css', get_template_directory_uri() . '/assets/css/single.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_single_css');

    //template-home.css adding
    wp_register_style('arun_templatehome_css', get_template_directory_uri() . '/assets/css/template-home.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_templatehome_css');

    // pagination.css adding
    wp_register_style('arunvv_pagination_css', get_template_directory_uri() . '/assets/css/pagination.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arunvv_pagination_css');

    //custom.js adding
    wp_register_script('arunvv_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('arunvv_custom_js');

    //Latest jQuery Calling
    wp_enqueue_script('jquery');

    //bootstrap.css adding
    wp_register_style('arunvv_bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.4.1', 'all');
    wp_enqueue_style('arunvv_bootstrap_css');

    //bootstrap.js ading
    wp_register_script('arunvv_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.4.1', true);
    wp_enqueue_script('arunvv_bootstrap_js');
}
add_action('wp_enqueue_scripts', 'arunvv_css_js_adding');


/*================================
 For Adding Menu Section
================================*/
register_nav_menus(
    array('primary-menu' => 'Primary Menu')
);


/*===========================================================
 For Adding Customizable Contact Info. & Social Liks Sections
===========================================================*/
function arunvv_customize_register($wp_customize)
{

    // Contact Information Section
    $wp_customize->add_section('contact_info_section', array(
        'title'       => __('Contact Information', 'arunvvision'),
        'priority'    => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone_number', array(
        'label'    => __('Phone Number', 'arunvvision'),
        'section'  => 'contact_info_section',
        'type'     => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('email_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('email_address', array(
        'label'    => __('Email Address', 'arunvvision'),
        'section'  => 'contact_info_section',
        'type'     => 'text',
    ));

    // Social Media Section
    $wp_customize->add_section('social_media_section', array(
        'title'       => __('Social Media Links', 'arunvvision'),
        'priority'    => 35,
    ));

    // Social Media Links
    for ($i = 1; $i <= 4; $i++) {
        // Social Media URL
        $wp_customize->add_setting("social_media_url_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("social_media_url_$i", array(
            'label'    => __("Social Media URL $i", 'arunvvision'),
            'section'  => 'social_media_section',
            'type'     => 'url',
        ));

        // Social Media Type
        $wp_customize->add_setting("social_media_type_$i", array(
            'default' => 'facebook',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("social_media_type_$i", array(
            'label'    => __("Social Media Type $i", 'arunvvision'),
            'section'  => 'social_media_section',
            'type'     => 'select',
            'choices'  => array(
                'facebook'  => __('Facebook', 'arunvvision'),
                'twitter'   => __('Twitter', 'arunvvision'),
                'linkedin'  => __('LinkedIn', 'arunvvision'),
                'instagram' => __('Instagram', 'arunvvision'),
                'youtube'   => __('YouTube', 'arunvvision'),
                'pinterest' => __('Pinterest', 'arunvvision'),
                'tumblr'    => __('Tumblr', 'arunvvision'),
                'reddit'    => __('Reddit', 'arunvvision'),
            ),
        ));
    }


    /*========================================
    For Adding Customizable Post Page Setting
    ========================================*/
    // Post title word limit
    $wp_customize->add_setting('post_page_title_words', array(
        'default' => 10, // Default number of words
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('post_page_title_words', array(
        'label' => __('Post Title Word Limit', 'arunvvision'),
        'section' => 'post_page_section',
        'type' => 'number',
    ));

    // Post excerpt word limit
    $wp_customize->add_setting('post_page_excerpt_words', array(
        'default' => 20, // Default number of words
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('post_page_excerpt_words', array(
        'label' => __('Post Excerpt Word Limit', 'arunvvision'),
        'section' => 'post_page_section',
        'type' => 'number',
    ));

    // "Read More" button color
    $wp_customize->add_setting('read_more_button_color', array(
        'default' => '#b8b8b8',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'read_more_button_color', array(
        'label' => __('Read More Button Color', 'arunvvision'),
        'section' => 'post_page_section',
    )));

    // "Read More" button text
    $wp_customize->add_setting('read_more_button_text', array(
        'default' => __('Read More', 'arunvvision'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('read_more_button_text', array(
        'label' => __('Read More Button Text', 'arunvvision'),
        'section' => 'post_page_section',
        'type' => 'text',
    ));

    // Create a section for Post Page settings
    $wp_customize->add_section('post_page_section', array(
        'title' => __('Post Page Settings', 'arunvvision'),
        'priority' => 30,
    ));

    // Add setting for social sharing section
    $wp_customize->add_setting('display_social_sharing', array(
        'default'   => true, // Default value is true (enabled)
        'sanitize_callback' => 'mytheme_sanitize_checkbox', // Sanitization callback
    ));

    // Add control for social sharing section
    $wp_customize->add_control('display_social_sharing_control', array(
        'label'     => __('Display Social Sharing Section on Blogs', 'arunvvision'),
        'section'   => 'title_tagline', // You can create a new section or use an existing one
        'settings'  => 'display_social_sharing',
        'type'      => 'checkbox', // Checkbox control type
    ));
}

// Sanitization callback for checkbox
function mytheme_sanitize_checkbox($checked) {
    // Check if the checkbox is checked (value 1) or unchecked (value 0)
    return ((isset($checked) && true == $checked) ? true : false);
}
add_action('customize_register', 'arunvv_customize_register');



/*==================================================
 For Adding Customizable Header Image with dimension
==================================================*/
add_theme_support('custom-header');

function arunvv_custom_header_setup()
{
    $args = array(
        'width'                 => 500,  // Preferred width
        'height'                => 180,   // Preferred height
        'flex-height'           => true,
        'flex-width'            => true,
        'header-text'           => false,
        'uploads'               => true,
    );
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'arunvv_custom_header_setup');


function arunvv_customizer_script()
{
    if (is_customize_preview()) {
?>
        <script type="text/javascript">
            (function($) {
                $(document).ready(function() {
                    var description = '<p style="margin-top: 10px; font-weight: bold;">Recommended header image size: 500x180 pixels.</p>';
                    $('#customize-control-header_image .button').after(description);
                });
            })(jQuery);
        </script>
<?php
    }
}
add_action('customize_controls_print_footer_scripts', 'arunvv_customizer_script');


/*===============================================
 For Adding Sidebar & Footer Section in the Admin
===============================================*/
function arunvv_widgets_init()
{

    // For Sidebar Widget Area
    register_sidebar(array(
        'name'          => __('Sidebar for Pages and Posts', 'arunvvision'),
        'id'            => 'post-page-sidebar',
        'description'   => __('You can use whatever you want to use', 'arunvvision'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));


    // For Footer Col for Company About
    register_sidebar(array(
        'name'          => __('Footer Col Area 1: Add Company Description Only', 'arunvvision'),
        'id'            => 'footer-area-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 2
    register_sidebar(array(
        'name'          => __('Footer Col Area 2', 'arunvvision'),
        'id'            => 'footer-area-2',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 3
    register_sidebar(array(
        'name'          => __('Footer Col Area 3', 'arunvvision'),
        'id'            => 'footer-area-3',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 4
    register_sidebar(array(
        'name'          => __('Footer Col Area 4', 'arunvvision'),
        'id'            => 'footer-area-4',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'arunvv_widgets_init');


/*===============================================
 For Adding Footer Copyright Section in the Admin
===============================================*/
function arunvv_customize_register_footer_copyright($wp_customize)
{
    // Add a section for the footer settings
    $wp_customize->add_section('arunvv_footer_section', array(
        'title' => __('Footer Copyright Settings', 'arunvvision'),
        'priority' => 30,
    ));

    // Add a setting for the copyright text
    $wp_customize->add_setting('arunvv_copyright_text', array(
        'default' => '© Copyright 2024, All Rights Reserved | Venture Vision',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the copyright text
    $wp_customize->add_control('arunvv_copyright_text_control', array(
        'label' => __('Change Copyright Text', 'arunvvision'),
        'description' => 'You can change copyright text from here',
        'section' => 'arunvv_footer_section',
        'settings' => 'arunvv_copyright_text',
        'type' => 'text',
    ));
}
add_action('customize_register', 'arunvv_customize_register_footer_copyright');



/*===================================================
 For Adding Featured Image section in Posts and Pages
===================================================*/
add_theme_support('post-thumbnails');



/*=========================
Function Code of Pagination
=========================*/
function arunvvtheme_pagination()
{
    global $wp_query;

    $big = 999999999; // Need an unlikely integer

    $pages = paginate_links(array(
        'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'  => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total'   => $wp_query->max_num_pages,
        'type'    => 'array',
        'prev_text' => __('< Back', 'arunvvision'),
        'next_text' => __('Next >', 'arunvvision'),
    ));

    if (is_array($pages)) {
        echo '<ul class="pagination">';
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
}




