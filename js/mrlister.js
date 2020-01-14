( function( $ ) {
	var page_header = document.querySelector( 'header#page-header' );
	var page_header_dup = document.querySelector( 'header#page-header-dup' );
	var page_header_height = page_header.offsetHeight;
	var main_content = document.querySelector( 'main#main-content' );
	var sections = document.querySelectorAll( 'main#main-content section' );
	var nav_menu_links = document.querySelectorAll( 'a[link-target]' );
	var about_section = document.querySelector( 'section#about-me' );
	var project_img_link = document.querySelectorAll( 'a.project-img-link' );

	function scrollToSection( scroll_to_id ) {
		var current_el = document.querySelector( '#' + scroll_to_id );
		$('body,html').animate({
			scrollTop : $('#' + scroll_to_id).offset().top - 100                   // Scroll to top of body
		}, 1000);
	}

	sections.forEach( function( section, i ) {
		section.style = 'min-height:' + ( window.innerHeight - page_header_height ) + 'px;';
	});

	nav_menu_links.forEach( function( link, i ) {
		link.addEventListener( 'click', function( e ) {
			e.preventDefault();
			var target = this;

			scrollToSection( target.getAttribute( 'link-target' ) );
		});
	});
	
	$( 'body' ).scrollspy( { target: '#main-nav', offset: 105 } );

	window.onscroll = function() {
		var scroll_position = window.pageYOffset;

		if ( 100 < scroll_position ) {
			page_header_dup.style = "top: 0; opacity: 1; height: 100px;";
			if ( page_header.querySelector( 'button[aria-expanded="true"]' ) ) {
				page_header.querySelector( 'button[aria-expanded="true"]' ).click();
				page_header_dup.querySelector( 'button[aria-expanded="false"]' ).click();
			}
			$( 'body' ).scrollspy('dispose');
			$( 'body' ).scrollspy( { target: '#scroll-nav', offset: 105 } );
		}
		else {
			page_header_dup.style = "";
			if ( page_header_dup.querySelector( 'button[aria-expanded="true"]' ) ) {
				page_header_dup.querySelector( 'button[aria-expanded="true"]' ).click();
				page_header.querySelector( 'button[aria-expanded="false"]' ).click();
			}
			$( 'body' ).scrollspy('dispose');
			$( 'body' ).scrollspy( { target: '#main-nav', offset: 105 } );
		}
	};

	$('[data-toggle="tooltip"]').tooltip();

	function preventing( e ) {
		e.preventDefault();
		this.addEventListener( 'blur', function( e ) {
			this.addEventListener( 'click', preventing, false );
		});
		this.removeEventListener( 'click', preventing, false );
	}

	project_img_link.forEach( function( img_link, i ) {
		if ( 586 > window.innerWidth ) {
			if ( img_link !== document.activeElement ) {
				img_link.addEventListener( 'click', preventing, false );
			}
		}
	});

})(jQuery);