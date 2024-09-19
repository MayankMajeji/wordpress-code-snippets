<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-rename-data-tabs-in-woocommerce-single-product-page/
*/ 

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'maverick_rename_woocommerce_single_product_tabs', 98 );
function maverick_rename_woocommerce_single_product_tabs( $tabs ) {

    // Rename the description tab
	$tabs['description']['title'] = __( 'More Information';		

    // Rename the reviews tab
	$tabs['reviews']['title'] = __( 'Ratings' );
    
    // Rename the additional information tab
	$tabs['additional_information']['title'] = __( 'Product Data' );	

	return $tabs;
}

