<?php

/**
 * Include external files
 */
require_once('inc/pagination.inc.php');
require_once('inc/template-tags.inc.php');



/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'Font_Awesome_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'  );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'WOW_JS', get_template_directory_uri() . '/js/modules/wow.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


/**
 * Setup Theme
 */
function mdbtheme_setup() {
    // Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mdbtheme_setup');

/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

}
add_action( 'widgets_init', 'mdb_widgets_init' );
add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});
function cf7_add_custom_class($error) {
  $error=str_replace("class=\"","class=\"wpcf7_validation_error invalid-feedback ", $error);
  return $error;
  }
  add_filter('wpcf7_validation_error', 'invalid-feedback');
add_filter( 'wpcf7_form_elements', 'dd_wpcf7_form_elements_replace' );
function dd_wpcf7_form_elements_replace( $content ) {
    $name = 'name="message"';
    $str_pos = strpos( $content, $name );
    if (false !== $str_pos) {
        $content = substr_replace( $content, ' required ', $str_pos, 0 );
    }
    return $content;
}
?>