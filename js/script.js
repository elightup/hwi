jQuery( function ( $ ) {

	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	function toggleMenu() {
		const nav = document.querySelector( '#navBar' );
		const navBar = document.querySelector( '.software-banner_menu' );
		if ( !nav ) {
			return;
		}
		const menu = nav.querySelector( 'ul' ),
			button = document.querySelector( '.menu-toggle' );

		menu.setAttribute( 'aria-expanded', 'false' );
		button.addEventListener( 'click', () => {
			console.log( 'click' );
			if ( nav.classList.contains( 'is-open' ) ) {
				button.setAttribute( 'aria-expanded', 'false' );
				menu.setAttribute( 'aria-expanded', 'false' );
			} else {
				button.setAttribute( 'aria-expanded', 'true' );
				menu.setAttribute( 'aria-expanded', 'true' );
			}
			nav.classList.toggle( 'is-open' );
			navBar.classList.toggle( 'is-open' );
		} );
	}

	function closeMenu() {
		$( '.icon-close' ).click( function () {
			if ( $( '#navBar' ).hasClass( 'is-open' ) ) {
				$( '#navBar' ).removeClass( 'is-open' );
			} else {
				$( '#navBar' ).addClass( 'is-open' );
				return false;
			}
			if ( $( '.software-banner_menu' ).hasClass( 'is-open' ) ) {
				$( '.software-banner_menu' ).removeClass( 'is-open' );
			} else {
				$( '.software-banner_menu' ).addClass( 'is-open' );
				return false;
			}
		} );
	}

	function keepFocusInMenu() {
		document.addEventListener( 'keydown', function ( e ) {
			const nav = document.querySelector( '.nav' );

			if ( !nav || !nav.classList.contains( 'is-open' ) ) {
				return;
			}

			const elements = [ ...nav.querySelectorAll( 'input, a, button' ) ],
				lastEl = elements[ elements.length - 1 ],
				firstEl = elements[ 0 ],
				activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( !shiftKey && tabKey && lastEl === activeEl ) {
				e.preventDefault();
				firstEl.focus();
			}

			if ( shiftKey && tabKey && firstEl === activeEl ) {
				e.preventDefault();
				lastEl.focus();
			}
		} );
	}

	// @link https://www.w3.org/WAI/tutorials/menus/flyout/
	function goback() {
		$( '.goback' ).on( 'click', function ( e ) {
			history.back( -1 );
		} );
	}

	function openSearch() {
		const button = document.querySelector( '.search-open' ),
			input = document.querySelector( '.header-search .search-field' );

		if ( !button ) {
			return;
		}

		button.addEventListener( 'click', e => {
			e.preventDefault();
			document.body.classList.add( 'header-search-open' );
			button.setAttribute( 'aria-expanded', 'true' );
			input.focus();
		} );
	}

	function closeSearch() {
		const button = document.querySelector( '.search-close' ),
			open = document.querySelector( '.search-open' );

		if ( !button ) {
			return;
		}

		button.addEventListener( 'click', e => {
			e.preventDefault();
			document.body.classList.remove( 'header-search-open' );
			open.setAttribute( 'aria-expanded', 'false' );
			open.focus();
		} );
	}
	let swiperSlider = () => {
		var swiper = new Swiper( ".project", {
			slidesPerView: 1,
			spaceBetween: 50,
			centeredSlides: false,
			loop: true,
			autoplay: false,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			breakpoints: {
				// when window width is >= 640px
				640: {
					slidesPerView: 3.5,
					spaceBetween: 40
				}
			}
		} );
	};

	let slickSlide = () => {
		$( '.banner-wrap' ).slick( {
			slidesToShow: 1,
			centerMode: false,
			centerPadding: '60px',
			dots: false,
			arrows: false,
			autoplay: true,
			rows: 0,
			autoplaySpeed: 5000,
		} );

		$( '.event-home_wrap' ).slick( {
			centerMode: true,
			centerPadding: '200px',
			dots: true,
			slidesToShow: 1,
			autoplay: true,
			arrows: false,
			rows: 0,
			adaptiveHeight: false,
			prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-left'></i> Prev</button>",
			nextArrow: "<button type='button' class='slick-next pull-right'>Next <i class='fas fa-chevron-right'></i></button>",
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						arrows: false,
						centerMode: false,
						centerPadding: '0px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerMode: false,
						centerPadding: '0px',
						slidesToShow: 1
					}
				}
			]
		} );
		$( '.environment_image' ).slick( {
			slidesToShow: 3,
			centerMode: false,
			centerPadding: '60px',
			dots: false,
			arrows: true,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
			prevArrow: "<button type='button' class='slick-prev pull-left'>Prev</button>",
			nextArrow: "<button type='button' class='slick-next pull-right'>Next</button>",
			responsive: [
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		} );
		$( '.history_wrap,.service-software__image,.environment__image' ).slick( {
			slidesToShow: 1,
			dots: false,
			arrows: true,
			autoplay: true,
			rows: 0,
			autoplaySpeed: 5000,
			prevArrow: "<button type='button' class='slick-prev pull-left'></button>",
			nextArrow: "<button type='button' class='slick-next pull-right'></button>",
			responsive: [
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		} );
		$( '.join-object_wrap' ).slick( {
			slidesToShow: 3,
			dots: false,
			arrows: true,
			autoplay: true,
			rows: 0,
			autoplaySpeed: 4000,
			prevArrow: "<button type='button' class='slick-prev pull-left'>Prev</button>",
			nextArrow: "<button type='button' class='slick-next pull-right'>Next</button>",
			responsive: [
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						slidesToShow: 1
					}
				}
			]
		} );

	};
	function pagination() {
		var newList = new List( 'utilities_wrap', {
			valueNames: [ 'name' ],
			page: 4,
			pagination: true
		} );

		$( '.nav-pagination' ).append( '<div class="btn-next"></div>' );
		$( '.nav-pagination' ).prepend( '<div class="btn-prev"></div>' );
		$( '.nav-pagination .btn-next' ).on( 'click', function () {
			$( '.pagination .active' ).next().trigger( 'click' );
		} );
		$( '.nav-pagination .btn-prev' ).on( 'click', function () {
			$( '.pagination .active' ).prev().trigger( 'click' );
		} );

	}

	function tab() {
		$( 'ul.tabs li' ).click( function () {
			var tab_id = $( this ).attr( 'data-tab' );

			$( 'ul.tabs li' ).removeClass( 'current' );
			$( '.tab-content' ).removeClass( 'current' );

			$( this ).addClass( 'current' );
			$( "#" + tab_id ).addClass( 'current' );
		} );
		if ( jQuery( window ).width() < 768 ) {
			$( 'ul.tabs li' ).click( function () {
				$( 'html, body' ).animate( { scrollTop: $( "#tab-content" ).offset().top - 70 }, 2000 );
			} );
		}
	}
	function switch_home() {
		$( '.switch_label .slider' ).click( function () {
			if ( $( '#top_switch, .center_switch, .bottom_switch' ).hasClass( 'is-open' ) ) {
				$( '#top_switch, .center_switch, .bottom_switch' ).removeClass( 'is-open' );
			} else {
				$( '#top_switch, .center_switch, .bottom_switch' ).addClass( 'is-open' );
			}
		} );
	}
	function scrollDown() {
		if ( $( 'body' ).hasClass( 'page-template-front-page' ) ) {
			$( '.icon_down' ).each( function () {
				var id = $( this ).attr( 'href' );
				if ( id.includes( 'tel' ) ) {
					return;
				}
				$( this ).click( function ( e ) {
					e.preventDefault();

					if ( !id || '#' === id ) {
						return false;
					}

					$( 'html, body' ).animate( {
						scrollTop: $( id ).offset().top - 100
					}, 1000 );
					return false;
				} );
			} );
		}
	}

	function scrollToTop() {
		var $window = $( window ),
			$button = $( '.scroll-to-top' );
		$window.scroll( function () {
			$button[ $window.scrollTop() > 100 ? 'removeClass' : 'addClass' ]( 'hidden' );
		} );
		$button.on( 'click', function ( e ) {
			e.preventDefault();
			$( 'body, html' ).animate( {
				scrollTop: 0
			}, 500 );
		} );
	}

	jQuery( window ).scroll( function () {
		if ( $( this ).scrollTop() > 50 ) {
			jQuery( '#masthead' ).addClass( 'mnfixed' );
			jQuery( '.software-banner_menu' ).addClass( 'mnfixed' );

		} else {
			jQuery( '#masthead' ).removeClass( 'mnfixed' );
			jQuery( '.software-banner_menu' ).removeClass( 'mnfixed' );
		}
	} );

	// var wow = new WOW();
	// wow.init();

	keepFocusInMenu();
	toggleMenu();
	closeMenu();
	swiperSlider();
	//toggleSubmenu();
	scrollToTop();
	slickSlide();
	openSearch();
	closeSearch();
	scrollDown();
	tab();
	switch_home();
	goback();
	pagination();
} );
