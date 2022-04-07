<?php

class Hwi_Icons {

	public static function get_icons() {
		return apply_filters('estar_icons', [
			'chevron-up'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon"><polyline points="18 15 12 9 6 15"></polyline></svg>',
			'chevron-down'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon"><polyline points="6 9 12 15 18 9"></polyline></svg>',
			'chevron-left'  => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>',
			'chevron-right' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>',
			'menu'          => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>',
			'shopping-bag'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>',
			'time'          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"></path><path d="M13 7L11 7 11 13 17 13 17 11 13 11z"></path></svg>',
			'user'          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z"></path></svg>',
			'play'          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 6L7 18 17 12z"></path></svg>',
			'arrow-next'    => '<svg xmlns="http://www.w3.org/2000/svg" width="43" height="8" viewBox="0 0 43 8" fill="none"><path d="M42.3086 4.35355C42.5039 4.15829 42.5039 3.84171 42.3086 3.64645L39.1267 0.464466C38.9314 0.269204 38.6148 0.269204 38.4195 0.464466C38.2243 0.659728 38.2243 0.976311 38.4195 1.17157L41.248 4L38.4195 6.82843C38.2243 7.02369 38.2243 7.34027 38.4195 7.53553C38.6148 7.7308 38.9314 7.7308 39.1267 7.53553L42.3086 4.35355ZM0.955078 4.5H41.9551V3.5H0.955078V4.5Z" fill="#828282"/></svg>',
			'reply'         => '<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M464 440l-28.1-32.1c-22.5-25.7-43.3-45.5-72.1-58.7-26.6-12.3-60-18.7-104.3-19.8V432L48 252 259.5 72v103.2c73 3 127.2 27 161.6 71.8 28.5 37 42.9 88.2 42.9 152.3z"/></svg>',
			'calendar'      => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 11H9V13H7zM7 15H9V17H7zM11 11H13V13H11zM11 15H13V17H11zM15 11H17V13H15zM15 15H17V17H15z"></path><path d="M5,22h14c1.103,0,2-0.897,2-2V8V6c0-1.103-0.897-2-2-2h-2V2h-2v2H9V2H7v2H5C3.897,4,3,4.897,3,6v2v12 C3,21.103,3.897,22,5,22z M19,8l0.001,12H5V8H19z"></path></svg>',
			'phone'         => '< aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></>',
			'arrow'         => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>',
			'caret'         => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" class="svg-inline--fa fa-caret-right fa-w-6" role="img" viewBox="0 0 192 512"><path fill="#1e5027" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"/></svg>',
			'user'          => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" viewBox="0 0 496 512"><path d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"/></svg>',
			'close'         => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>',
			'face'          => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="18" viewBox="0 0 9 18" fill="none"><path d="M5.84672 18V9.8027H8.51221L8.90842 6.59319H5.84672V4.54887C5.84672 3.62272 6.09544 2.98862 7.37661 2.98862H9V0.12717C8.21048 0.0391563 7.41613 -0.00285049 6.62179 0.000149986C4.26575 0.000149986 2.64814 1.49239 2.64814 4.23182V6.58719H0V9.7967H2.65392V18H5.84672Z"/></svg>',
			'twitter'       => '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none"><path d="M15.2535 3.98747C15.2647 4.16289 15.2647 4.3373 15.2647 4.51172C15.2647 9.84939 11.7586 16 5.35121 16C3.37716 16 1.54325 15.3374 0 14.1867C0.280277 14.2238 0.550173 14.2368 0.841695 14.2368C2.47059 14.2368 3.96972 13.5993 5.16782 12.5117C3.63581 12.4746 2.35208 11.3119 1.90917 9.71207C2.12457 9.74915 2.34083 9.77421 2.56747 9.77421C2.87976 9.77421 3.19377 9.72409 3.48529 9.63689C1.88754 9.262 0.691176 7.63714 0.691176 5.67448V5.62436C1.15571 5.92407 1.69464 6.11151 2.26557 6.13657C1.32699 5.41286 0.711938 4.17492 0.711938 2.77459C0.711938 2.02481 0.884083 1.33718 1.18599 0.737752C2.90138 3.18657 5.4801 4.78737 8.37111 4.96279C8.31747 4.66207 8.2846 4.35033 8.2846 4.03759C8.2846 1.8123 9.83823 0 11.769 0C12.7725 0 13.6782 0.487157 14.3149 1.27503C15.1021 1.09961 15.8564 0.761809 16.526 0.299712C16.2673 1.23694 15.7163 2.02481 14.9939 2.525C15.6955 2.43679 16.3754 2.21225 17 1.89951C16.526 2.69941 15.9334 3.4121 15.2535 3.98747Z" /></svg>',
			'linkedin'      => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4.98292 7.19704C6.19132 7.19704 7.17092 6.21744 7.17092 5.00904C7.17092 3.80065 6.19132 2.82104 4.98292 2.82104C3.77452 2.82104 2.79492 3.80065 2.79492 5.00904C2.79492 6.21744 3.77452 7.19704 4.98292 7.19704Z" /><path d="M9.23673 8.85493V20.9939H13.0057V14.9909C13.0057 13.4069 13.3037 11.8729 15.2677 11.8729C17.2047 11.8729 17.2287 13.6839 17.2287 15.0909V20.9949H20.9997V14.3379C20.9997 11.0679 20.2957 8.55493 16.4737 8.55493C14.6387 8.55493 13.4087 9.56193 12.9057 10.5149H12.8547V8.85493H9.23673ZM3.09473 8.85493H6.86973V20.9939H3.09473V8.85493Z"/></svg>',
			'email'         => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none"><path d="M15.3933 0H3.22795C2.53657 0 1.87351 0.316071 1.38463 0.87868C0.895744 1.44129 0.621094 2.20435 0.621094 3V13C0.621094 13.7956 0.895744 14.5587 1.38463 15.1213C1.87351 15.6839 2.53657 16 3.22795 16H15.3933C16.0847 16 16.7478 15.6839 17.2366 15.1213C17.7255 14.5587 18.0002 13.7956 18.0002 13V3C18.0002 2.20435 17.7255 1.44129 17.2366 0.87868C16.7478 0.316071 16.0847 0 15.3933 0ZM15.3933 2L9.74511 6.47C9.61301 6.55777 9.46316 6.60397 9.31063 6.60397C9.1581 6.60397 9.00825 6.55777 8.87615 6.47L3.22795 2H15.3933Z" /></svg>',
			'arrow-nexts'   => '<svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none"><path d="M6.35355 4.35355C6.54882 4.15829 6.54882 3.84171 6.35355 3.64645L3.17157 0.464466C2.97631 0.269204 2.65973 0.269204 2.46447 0.464466C2.2692 0.659728 2.2692 0.976311 2.46447 1.17157L5.29289 4L2.46447 6.82843C2.2692 7.02369 2.2692 7.34027 2.46447 7.53553C2.65973 7.7308 2.97631 7.7308 3.17157 7.53553L6.35355 4.35355ZM4.37114e-08 4.5L6 4.5L6 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#828282"/></svg>',

		]);
	}

	public static function render( $name, $display = true ) {
		$icons = self::get_icons();
		$icon  = isset( $icons[ $name ] ) ? $icons[ $name ] : null;
		$icon  = apply_filters( 'estar_icon', $icon, $icons );
		if ( $display ) {
			echo $icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		return $icon;
	}
}
