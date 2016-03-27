<?php 
function get_from_destinations( $params = array() ) {
	// global
	global $wpdb;
	
	$limit_min = !empty($params['min']) ? $params['min'] : '0';
	$limit_max = !empty($params['max']) ? $params['max'] : '100';
	
	$sql = "SELECT 
				ct.name as city_name, ct.id as city_id, 
				co.name as country_name, co.iso_code_3 as country_code   
			FROM wp_city ct
			INNER JOIN wp_country co
				ON ct.country_code = co.iso_code_3 
			ORDER BY city_name ASC
			LIMIT %d,%d";
	
	$destinations = $wpdb->get_results($wpdb->prepare($sql, $limit_min, $limit_max));
}

function debug_vars( $var = array() ) {
	echo "<pre>";
		print_r($var);
	echo "</pre>";
}

?>