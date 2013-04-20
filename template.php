
<?php

function webmaster1_preprocess_page(&$variables){
	global $base_url;

	$variables['path_logo'] = $base_url . '/' . drupal_get_path('theme', 'webmaster1') .  "/images/logo3_1.png";
	$variables['path_mlogos'] = $base_url . '/' .drupal_get_path('theme', 'webmaster1') .  "/images";
}

function webmaster1_preprocess_image_style(&$variables)  {
    // If this image is of the type 'Staff Photo' then assign additional classes to it:
    if ($variables['style_name'] == 'medium' || $variables['style_name'] == 'portafolio_show') {
        $variables['attributes']['class'][] = 'img-polaroid';
    }
}