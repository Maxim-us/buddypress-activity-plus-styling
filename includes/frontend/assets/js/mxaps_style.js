jQuery( document ).ready( function( $ ){

	$( '.bpfb_images' ).each( function(){

		// declared var
		var bpfb_images_wrap = $( this );

		// remove <br> tags
		bpfb_images_wrap.find( 'br' ).remove();

		// find links
		var bpfb_length_images = bpfb_images_wrap.find( 'a' ).length;
		
		// loop
		var bpfb_countImage = 1;

		bpfb_images_wrap.find( 'a' ).each( function(){

			var full_image_url = $( this ).attr( 'href' );

			$( this ).find( 'img' ).attr( 'src', full_image_url );

			// add class to link

			$( this ).addClass( 'bpfb_image_wrap-' + bpfb_countImage );

			bpfb_countImage++;

		} );

		bpfb_images_wrap.addClass( 'mx_count_images-' + bpfb_length_images );

		// console.log( bpfb_length_images );

	} );

	

} );