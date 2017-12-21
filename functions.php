<?php

add_action('template_redirect', 'theme_remove_wp_archives');
 
function theme_remove_wp_archives(){
  if( is_category() || is_tag() || is_date() || is_author() ) {
    global $wp_query;
    $wp_query->set_404();
  }
}