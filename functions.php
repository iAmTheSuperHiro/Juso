<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

// Remove #more-$id
function custom_content_more_link( $output ) {
	$output = preg_replace('/#more-[\d]+/i', '', $output );
	return $output;
}
add_filter( 'the_content_more_link', 'custom_content_more_link' );

function get_current_language_code() {
  $site_lang = "en_US";
  
  if (mb_strpos(site_url(), 'jp')) {
    $site_lang = "ja_JP";
  }
  
  return $site_lang;
}

function get_feed_id() {
  $feed_id;
  
  if (get_current_language_code() === "en_US") {
    $feed_id = "hiroyukishinohara/RpOL";
  } else {
    $feed_id = "hiroyukishinohara/MEPD";
  }
  
  return $feed_id;
}

?>