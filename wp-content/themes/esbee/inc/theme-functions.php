<?php
class ThemeFunction
{
    public function themeSupport()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support('custom-logo');
        // add_theme_support('title-tag');
        register_nav_menus(array(
            'primary_menu' => 'Primary Menu',
        ));
    }
    public function add_file_types_to_uploads($file_types)
    {
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg';
        $file_types = array_merge($file_types, $new_filetypes);
        return $file_types;
    }
    public function add_css_js()
    {
        wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap', array(), '1.0.0');
        wp_enqueue_style('fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0');
        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
        wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0');
    }
    public function add_additional_class_on_li($classes, $item, $args)
    {
        if (isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active ';
        }
        return $classes;
    }
    public function add_additional_class_on_a($classes, $item, $args)
    {
        if (isset($args->add_a_class)) {
            $classes['class'] = $args->add_a_class;
        }
        return $classes;
    }
    public function slider_setup_post_type()
    {
        $args = array(
            'public' => true,
            'label' => __('Sliders', 'textdomain'),
            'singular' => 'Slider',
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-format-gallery',
        );
        register_post_type('esbee-slider', $args);
    }
    public function esbee_widgets_init()
    {
        register_sidebar(array(
            'name' => __('Footer 1'),
            'id' => 'footer-1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));

        register_sidebar(array(
            'name' => __('Footer 2'),
            'id' => 'footer-2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        ));

        register_sidebar(array(
            'name' => __('Footer 3'),
            'id' => 'footer-3',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        ));

    }

}

$themeFunctionObj = new ThemeFunction();
add_action('after_setup_theme', array($themeFunctionObj, 'themeSupport'));
add_action('upload_mimes', array($themeFunctionObj, 'add_file_types_to_uploads'));
add_action('wp_enqueue_scripts', array($themeFunctionObj, 'add_css_js'));
add_filter('nav_menu_css_class', array($themeFunctionObj, 'add_additional_class_on_li'), 1, 3);
add_filter('nav_menu_link_attributes', array($themeFunctionObj, 'add_additional_class_on_a'), 1, 3);
add_action('init', array($themeFunctionObj, 'slider_setup_post_type'));
add_action('widgets_init', array($themeFunctionObj, 'esbee_widgets_init'));

function esbee_customize_register($wp_customize)
{

    $wp_customize->add_section('esbee_header_section', array(
        'title' => __('Header Section', 'esbee'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_setting('esbee_theme_options_header_mail', array(
        'default' => 'dummyemail@scg.ca',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('esbee_header_mail', array(
        'label' => __('Mail', 'esbee'),
        'section' => 'esbee_header_section',
        'settings' => 'esbee_theme_options_header_mail',
    ));

    $wp_customize->add_setting('esbee_theme_options_header_phone', array(
        'default' => '+1 (210) 857-108',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('esbee_header_phone', array(
        'label' => __('Phone', 'esbee'),
        'section' => 'esbee_header_section',
        'settings' => 'esbee_theme_options_header_phone',
    ));

    $wp_customize->add_setting('esbee_theme_options_header_working_hrs', array(
        'default' => 'Mon-Fri: 9:30am – 4:30pm (MT)',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('esbee_header_work', array(
        'label' => __('Working Hours', 'esbee'),
        'section' => 'esbee_header_section',
        'settings' => 'esbee_theme_options_header_working_hrs',
    ));

    $wp_customize->add_setting('esbee_theme_options_header_button_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('esbee_header_button', array(
        'label' => __('Working Hours', 'esbee'),
        'section' => 'esbee_header_section',
        'settings' => 'esbee_theme_options_header_button_link',
    ));

}

add_action('customize_register', 'esbee_customize_register');
