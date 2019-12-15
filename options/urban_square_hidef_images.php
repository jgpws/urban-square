<?php
/* Image generation for retina displays */
/* Taken from the article and code in Ensuring Your Theme Has Retina Support by C. Bavota */
/* http://code.tutsplus.com/tutorials/ensuring-your-theme-has-retina-support--wp-33430 */

if( get_theme_mod( 'enable_retina' ) == 1 ) { // opens if statement
// enable these functions only if user has turned on retina capability in the Customizer
	add_filter( 'wp_generate_attachment_metadata', 'urban_square_retina_sppt_att_meta', 10, 2 );
	/**
	* Retina images
	*
	* This function is attached to the 'wp_generate_attachment_metadata' filter hook.
	*/
	// abbreviated: sppt- support; att- attachment; imgs- images; del- delete
	function urban_square_retina_sppt_att_meta( $metadata, $attachment_id ) { 
		foreach ( $metadata as $key => $value ) {
			if( is_array( $value ) ) {
				foreach ( $value as $image => $attr ) {
					if( is_array( $attr ) ) {
						urban_square_retina_sppt_create_imgs( get_attached_file( $attachment_id ), $attr['width'], $attr['height'], true );
					}
				}
			}
		}
		return $metadata;
	}
	
	/**
	* Create retina-ready images
	*
	* Referenced via retina_support_attachment_meta().
	*/
	function urban_square_retina_sppt_create_imgs( $file, $width, $height, $crop = false ) {
		if( $width || $height ) {
			$resized_file = wp_get_image_editor( $file );
			if( !is_wp_error( $resized_file ) ) {
				$filename = $resized_file->generate_filename( $width . 'x' . $height . '@2x' );
				
				$resized_file->resize( $width * 2, $height * 2, $crop );
				$resized_file->save( $filename );
				
				$info = $resized_file->get_size();
				
				return array(
					'file' => wp_basename( $filename ),
					'width' => $info['width'],
					'height' => $info['height'],
				);
			}
		}
		return false;
	}
	
	add_filter( 'delete_attachment', 'urban_square_del_retina_sppt_imgs' );
	/**
	* Delete retina-ready images
	*
	* This function is attached to the 'delete_attachment' filter hook.
	*/
	function urban_square_del_retina_sppt_imgs( $attachment_id ) {
		$meta = wp_get_attachment_metadata( $attachment_id );
		$upload_dir = wp_upload_dir();
		$path = pathinfo( $meta['file'] );
		foreach ( $meta as $key => $value ) {
			if( 'sizes' === $key ) {
				foreach ( $value as $sizes => $size ) {
					$original_filename = $upload_dir['basedir'] . '/' . $path['dirname'] . '/' . $size['file'];
					$retina_filename = substr_replace( $original_filename, '@2x.', strrpos( $original_filename, '.' ), strlen( '.' ) );
					if( file_exists( $retina_filename ) ) {
						unlink( $retina_filename );
					}
				}
			}
		}
	}
} // closes if statement
?>