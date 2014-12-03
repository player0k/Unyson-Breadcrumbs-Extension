<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Breadcrumbs', 'fw' );
$manifest['description'] = __( 'Creates a simplified navigation menu for the pages that can be placed anywhere in the theme. This will make navigating around the website much easier.', 'fw' );
$manifest['version'] = '1.0.3';
$manifest['display'] = true;
$manifest['standalone'] = true;

$manifest['github_update'] = 'ThemeFuse/Unyson-Breadcrumbs-Extension';
