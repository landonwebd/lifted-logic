<?php

function lifted_logic_files() {
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDtmAvlBfb18PO2kIq9-wPm2LncxM0ppmg', NULL, '1.0', true);
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
  wp_enqueue_script('lifted_logic-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('lifted_logic_styles', get_theme_file_uri('/build/style-index.css'));
  // wp_enqueue_style('lifted_logic_styles', get_theme_file_uri('/build/index.css'));
  
}
add_action('wp_enqueue_scripts', 'lifted_logic_files');

function lifted_logic_features() {
  add_image_size('pageBanner', 1920, 720, true);
  add_image_size('formImage', 520, 785, true);
}
add_action('after_setup_theme', 'lifted_logic_features');

function universityMapKey($api) {
  $api['key'] = 'AIzaSyDtmAvlBfb18PO2kIq9-wPm2LncxM0ppmg';
  return $api;
}
add_filter('acf/fields/google_map/api', 'universityMapKey');

//Redirect Subscriber accounts out of admin and onto homepage
function redirectSubsToFrontend() {
  $ourCurrentUser = wp_get_current_user();
  
  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}
add_action('admin_init', 'redirectSubsToFrontend');

function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();
  
  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}
add_action('wp_loaded', 'noSubsAdminBar');

function ourLoginTitle() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'ourLoginTitle');

//excludes Node Modules folder for All-In-One WP Migration Plugin
add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
  $exclude_filters[] = 'themes/lifted-logic/node_modules';
  return $exclude_filters;
}