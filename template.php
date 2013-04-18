
<?php

function webmaster1_preprocess_page(&$variables){
	global $base_url;

	$variables['path_logo'] = $base_url . '/' . drupal_get_path('theme', 'webmaster1') .  "/images/logo3_1.png";
	$variables['path_mlogos'] = $base_url . '/' .drupal_get_path('theme', 'webmaster1') .  "/images";
}