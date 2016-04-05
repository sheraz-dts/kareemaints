<?php
/**
 * To get destinations from wp_city and wp_country tables
 * 
 * @param array $params
 * @return array
 */ 
function get_from_destinations( $params = array() ) {
	// global
	global $wpdb;
	
	$limit_min = !empty($params['min']) ? $params['min'] : '0';
	$limit_max = !empty($params['max']) ? $params['max'] : '100';
	
	$sql = "SELECT 
				ct.name as city_name, ct.id as city_id, ct.code as city_code, 
				co.name as country_name, co.country_id as country_id, co.iso_code_3 as country_code   
			FROM wp_city ct
			INNER JOIN wp_country co
				ON ct.country_code = co.iso_code_3 
			ORDER BY city_name ASC
			LIMIT %d,%d";
	
	$destinations = $wpdb->get_results($wpdb->prepare($sql, $limit_min, $limit_max), ARRAY_A);
	
	return $destinations;
}

function dv( $var = array() ) {
	echo "<pre>";
		print_r($var);
	echo "</pre>";
}

if (!empty($_POST)) {
	$selected_from = $_POST['from'];
	
}

$destinations = get_from_destinations();

?>