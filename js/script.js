jQuery( function ( $ ) {

	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	function toggleMenu() {
		const nav = document.querySelector( '#site-navigation' );
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
		$( '.banner__wrap' ).slick( {
			slidesToShow: 1,
			centerMode: false,
			centerPadding: '60px',
			dots: false,
			arrows: false,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
		} );
		$( '.banner__nav' ).slick( {
			slidesToShow: 4,
			asNavFor: '.banner__wrap',
			dots: false,
			arrows: false,
			focusOnSelect: true,
			rows: 0,
			responsive: [
				{
					breakpoint: 600,
					settings: {
						dots: true,
						slidesToShow: 2
					}
				}
			]
		} );
		$( '.partner__images' ).slick( {
			centerMode: true,
			centerPadding: '100px',
			slidesToShow: 8,
			arrows: false,
			rows: 0,
			responsive: [
				{
					breakpoint: 1366,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '100px',
						slidesToShow: 5
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '100px',
						slidesToShow: 3
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '80px',
						slidesToShow: 1
					}
				}
			]
		} );
		$( '.project-home__list' ).slick( {
			slidesToShow: 1,
			dots: true,
			customPaging: function ( slider, i ) {
				var thumb = $( slider.$slides[ i ] ).data();
				return '0' + ( i + 1 );
			},
			arrows: true,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
			prevArrow: "<button type='button' class='slick-prev slick-arrow pull-left'></button>",
			nextArrow: "<button type='button' class='slick-next slick-arrow pull-right'></button>",
		} );
		$( '.testimonial__list' ).slick( {
			slidesToShow: 1,
			dots: true,
			arrows: true,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
			prevArrow: "<button type='button' class='slick-prev slick-arrow pull-left'></button>",
			nextArrow: "<button type='button' class='slick-next slick-arrow pull-right'></button>",
		} );
		$( '.events__wrap' ).slick( {
			slidesToShow: 1,
			dots: true,
			customPaging: function ( slider, i ) {
				var thumb = $( slider.$slides[ i ] ).data();
				return '0' + ( i + 1 );
			},
			arrows: true,
			autoplay: false,
			prevArrow: "<button type='button' class='slick-prev slick-arrow pull-left'></button>",
			nextArrow: "<button type='button' class='slick-next slick-arrow pull-right'></button>",
			rows: 0,
			autoplaySpeed: 5000,
		} );

		$( '.seo__slider' ).slick( {
			arrows: true,
			dots: true,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: "<button type='button' class='slick-left slick-arrow'><i class='fas fa-chevron-left'></i></button>",
    		nextArrow: "<button type='button' class='slick-right slick-arrow'><i class='fas fa-chevron-right'></i></button>",
		} );

		$('.financial__slider').slick({
			centerMode: true,
			centerPadding: '175px',
			slidesToShow: 5,
			slidesToScroll: 1,
			rows: 0,
			// infinite: false,
			// fade: true,
  			// cssEase: 'linear',
			prevArrow: "<button type='button' class='slick-left slick-arrow'><i class='fas fa-chevron-left'></i></button>",
    		nextArrow: "<button type='button' class='slick-right slick-arrow'><i class='fas fa-chevron-right'></i></button>",
			responsive: [
				{
					breakpoint: 1023,
					settings: {
					  arrows: false,
					  centerMode: true,
					  centerPadding: '40px',
					  slidesToShow: 3
					}
				},
			  {
				breakpoint: 768,
				settings: {
				  arrows: false,
				  centerMode: true,
				  centerPadding: '40px',
				  slidesToShow: 3
				}
			  },
			  {
				breakpoint: 480,
				settings: {
				  arrows: false,
				  centerMode: true,
				  centerPadding: '40px',
				  slidesToShow: 1
				}
			  }
			]
		  });

	};
	function pagination() {
		var projectList = new List( 'projects-list', {
			valueNames: [ 'projects__item' ],
			page: 12,
			pagination: true
		} );
		var newsList = new List( 'news-list', {
			valueNames: [ 'news-posts__item' ],
			page: 8,
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

	function accordion() {
		var acc = document.getElementsByClassName( "accordion" );
		var i;
		for ( i = 0; i < acc.length; i++ ) {
			acc[ i ].addEventListener( "click", function () {
				this.classList.toggle( "active" );
				$( this ).addClass( 'active' );
				var panel = this.nextElementSibling;
				if ( panel.style.display === "block" ) {
					panel.style.display = "none";
					$( this ).removeClass( 'active' );
				} else {
					panel.style.display = "block";
				}
			} );
		}
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

	function counter_number() {
		var a = 0;
		if ( $( 'body' ).hasClass( 'page-template-front-page' ) ) {
			$( window ).scroll( function () {
				var oTop = $( '.about-home' ).offset().top - window.innerHeight;
				if ( a == 0 && $( window ).scrollTop() > oTop ) {
					$( '.count' ).each( function () {
						$( this ).prop( 'Counter', 0 ).animate( {
							Counter: $( this ).text()
						}, {
							duration: 4000,
							easing: 'swing',
							step: function ( now ) {
								$( this ).text( Math.ceil( now ) );
							}
						} );
					} );
					a = 1;
				}
			} );
		};
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

	// var wow = new WOW();
	// wow.init();

	keepFocusInMenu();
	toggleMenu();
	closeMenu();
	//swiperSlider();
	//toggleSubmenu();
	scrollToTop();
	slickSlide();
	scrollDown();
	tab();
	goback();
	counter_number();
	if ( $( 'body' ).hasClass( 'page-template-projects' ) || $( 'body' ).hasClass( 'page-template-news' ) ) {
		pagination();
	}
	accordion();
} );
