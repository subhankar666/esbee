<?php
include get_template_directory() . '/inc/theme-element.php';
$headerPart = '<!doctype html>';
$headerPart .= '<html lang="en">';
$headerPart .= '<head>';
$headerPart .= '<meta charset="utf-8">';
$headerPart .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
$headerPart .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />';
echo $headerPart;
wp_head();
$headerPart = '</head>';
$headerPart .= '<body>';
$headerPart .= '<header>';
$headerPart .= '<div class="top-part">';
$headerPart .= '<div class="container">';
$headerPart .= '<div class="row">';
$headerPart .= '<div class="col-xl-6 col-lg-6 col-md-6 col-12 text-left">';
$headerPart .= '<ul class="list-inline">';
$headerPart .= '<li class="list-inline-item">';
$headerPart .= '<i class="fa fa-envelope icon"></i>';
$headerPart .= '<a href="mail:dummyemail@scg.ca">' . get_option('esbee_theme_options_header_mail') . '</a>';
$headerPart .= '</li>';
$headerPart .= '<li class="list-inline-item">';
$headerPart .= '<i class="fa fa-phone icon"></i>';
$headerPart .= '<a href="call: ' . get_option('esbee_theme_options_header_phone') . '">' . get_option('esbee_theme_options_header_phone') . '</a>';
$headerPart .= '</li>';
$headerPart .= '</ul>';
$headerPart .= '</div>';
$headerPart .= '<div class="col-xl-6 col-lg-6 col-md-6 col-12 text-right ">';
$headerPart .= '<ul class="list-inline ">';
$headerPart .= '<li class="list-inline-item m-text-left">';
$headerPart .= '<i class="fa fa-hourglass-end icon"></i>';
$headerPart .= '<a href="#">' . get_option('esbee_theme_options_header_working_hrs') . '</a>';
$headerPart .= '</li>';
$headerPart .= '</ul>';
$headerPart .= '</div>';
$headerPart .= '</div>';
$headerPart .= '</div>';
$headerPart .= '</div>';
$headerPart .= '<div class="navigation-wrap  start-header start-style">';
$headerPart .= '<div class="container">';
$headerPart .= '<div class="row">';
$headerPart .= '<div class="col-12">';
$headerPart .= '<nav class="navbar navbar-expand-xl navbar-light">';
$headerPart .= '<a class="navbar-brand" href="' . site_url('/') . '">';
echo $headerPart;
$logo_id = get_theme_mod('custom_logo');
$logo_url = wp_get_attachment_image_src($logo_id);
$headerPart = '<img src="' . $logo_url[0] . '" alt="Esbee Immigration Services Inc.">';
$headerPart .= '</a>';
echo $headerPart;
$headerPart = '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
$headerPart .= '<span class="navbar-toggler-icon"></span>';
$headerPart .= '</button>';
$headerPart .= '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo $headerPart;
wp_nav_menu(array(
    'theme_location' => 'primary_menu',
    'container' => false,
    'menu_class' => '',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul class="navbar-nav ml-auto pt-4 py-md-0 %2$s">%3$s</ul>',
    'depth' => 2,
    'add_li_class' => 'nav-item pl-md-0 ml-0 ml-md-4',
    'add_a_class' => 'nav-link',
));
$headerPart = '<ul class="navbar-nav pt-1 pb-4 py-md-0">';
$headerPart .= '<li class="nav-item  pl-md-0 ml-0 ml-md-4">';
$headerPart .= '<div class="book-appointment"><a href="' . get_option('esbee_theme_options_header_button_link') . '">Book Appointment</a></div>';
$headerPart .= '</li>';
$headerPart .= '</ul>';
echo $headerPart .= '</div>';
$headerPart = '</nav>';
$headerPart .= '</div>';
$headerPart .= '</div>';
$headerPart .= '</div>';
$headerPart .= '</div>';
$headerPart .= '</header>';
echo $headerPart;
// slider
$sliderQuery = new WP_Query(array(
    'post_type' => 'esbee-slider',
));

echo $thElementObj->sliderSection($sliderQuery);
