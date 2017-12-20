<?php

	if(!defined('ABSPATH')) exit; //Don't run if accessed directly


	/**
	 * XML-RPC OC
	 *
	 * @package XML-RPC OC
	 *
   	 * Plugin Name: XML-RPC OC
   	 *
   	 * Description: Open comments on new posts submitted via XML-RPC
   	 *
   	 * Version: 0.1
   	 *
   	 * Author: Colin Walker
	*/
	
	
	add_filter( 'wp_insert_post_data', 'open_comments', '100', 1 );

	function open_comments ($postarr) {
		$postarr[comment_status] = 'open';
		return $postarr;
	}
	
?>