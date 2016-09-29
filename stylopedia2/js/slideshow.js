jQuery(function($){

				$.supersized({

					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   8000,		// Length between transitions
					transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript

					// Size & Position
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width

					// Components
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :  0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images
														{image : 'preview/slides/homeslide_01.jpg', thumb : 'preview/slides/homeslide_01.jpg'},
														{image : 'preview/slides/homeslide_02.jpg', thumb : 'preview/slides/homeslide_02.jpg'},
														{image : 'preview/slides/homeslide_03.jpg', thumb : 'preview/slides/homeslide_03.jpg'},
														{image : 'preview/slides/homeslide_04.jpg', thumb : 'preview/slides/homeslide_04.jpg'},
														{image : 'preview/slides/homeslide_05.jpg', thumb : 'preview/slides/homeslide_05.jpg'},
														{image : 'preview/slides/homeslide_06.jpg', thumb : 'preview/slides/homeslide_06.jpg'},
														{image : 'preview/slides/homeslide_07.jpg', thumb : 'preview/slides/homeslide_07.jpg'},
														{image : 'preview/slides/homeslide_08.jpg', thumb : 'preview/slides/homeslide_08.jpg'},
														{image : 'preview/slides/homeslide_09.jpg', thumb : 'preview/slides/homeslide_09.jpg'},
														{image : 'preview/slides/homeslide_10.jpg', thumb : 'preview/slides/homeslide_10.jpg'},
														{image : 'preview/slides/homeslide_11.jpg', thumb : 'preview/slides/homeslide_11.jpg'},
														{image : 'preview/slides/homeslide_12.jpg', thumb : 'preview/slides/homeslide_12.jpg'},
														{image : 'preview/slides/homeslide_13.jpg', thumb : 'preview/slides/homeslide_13.jpg'},
														{image : 'preview/slides/homeslide_14.jpg', thumb : 'preview/slides/homeslide_14.jpg'},
														{image : 'preview/slides/homeslide_15.jpg', thumb : 'preview/slides/homeslide_15.jpg'}
												],

					// Theme Options
					progress_bar			:	1,			// Timer for each slide
					mouse_scrub				:	0

				});
		    });