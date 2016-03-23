<?php

require_once WPTM_PLUGIN_DIR . '/includes/functions.php';

if ( is_admin() ) {
	require_once WPTM_PLUGIN_DIR . '/admin/admin.php';
} else {
	require_once WPTM_PLUGIN_DIR . '/public/public.php';
}

