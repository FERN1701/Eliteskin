(function($) {

	"use strict";


	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

  var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

		$('.carousel-testimony').owlCarousel({
			center: false,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


  var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	$('.appointment_date').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});

	$('.appointment_time').timepicker();


	/** Start here **/

	function getUserID() {
      var user_info   = localStorage.getItem("user-info");
      var user_decode = JSON.parse(user_info);
      console.log(user_decode['id']);
      return user_decode['id'];
   }

	$(".btn-open-login-modal").click( function (event) {
		event.preventDefault();
		$("#login-modal").modal({"show": true});
	});

	$(".btn-js-login").click( function () {

		var email 			= $(".input-login-email").val();
		var password 		= $(".input-login-password").val();

		if(email == '') {
			Swal.fire({
				title: "Required",
				text: "Please provide your email.",
				icon: "warning"
			});
		}
		else if(password == '') {
			Swal.fire({
				title: "Required",
				text: "Please provide your password",
				icon: "warning"
			});
		}
		else {
			fetch("api/login.php?email="+ email +"&password=" + password).then( res => { return res.json(); }).then( async (response) => {
				if(response['success']) {
					Swal.fire({
						title: "Welcome",
						text: "Login succesful.",
						icon: "success"
					}).then( async () => {
						localStorage.setItem("user-info", JSON.stringify(response['data']));
						setTimeout(function () {
							window.location.replace("./myaccount.php?i=" + response['data']['id']);
						},500);
					});
				}
				else {
					Swal.fire({
						title: "Opps!!",
						text: "Email or password is incorrect.",
						icon: "warning"
					});
				}
			});
		}
	});

	$(".btn-open-register-modal").click( function (event) {
		event.preventDefault();
		$("#registration-modal").modal({"show": true});
	});

	$(".btn-js-regiter").click( function () {

		var form = {
			'firstname' : $(".input-registration-firstname").val(),
			'lastname' :$(".input-registration-lastname").val(),
			'mobile' :$(".input-registration-mobile").val(),
			'email' : $(".input-registration-email").val(),
			'address' : $(".input-registration-address").val(),
			'password' : $(".input-registration-password").val(),
			'confirm_password' : $(".input-registration-confirm-password").val(),
		};

		console.log("Form:", form);

		fetch( "api/registration.php?" + $.param(form) ).then( res => { return res.json(); }).then( async (response) => {
			console.error(response);
			if(response['success']) {
				Swal.fire({
					title: "Successful",
					text: response['message'],
					icon: "success"
				});
			}
			else {
				Swal.fire({
					title: "Fail",
					text: response['message'],
					icon: "warning"
				});
			}
		});

	});

	$(".btn-open-booking-modal").click( function () {
		$("#booking-modal").modal({"show": true});
		var user = localStorage.getItem("user-info"); user = JSON.parse(user);

		$(".input-booking-name").val(user['firstname'] + " " + user['lastname']);
		$(".input-booking-name").attr({'data-user_id': user['id']});
		$(".input-booking-mobile").val(user['mobile']);
		$(".input-booking-email").val(user['email']);
		$(".input-booking-address").val(user['address']);

	});

	$(".inp-service-checkbox").click( function () {

		var total 			= 0;
		var services 		= [];

		var service_001 = $(".inp-service-001").is(":checked");
		var service_002 = $(".inp-service-002").is(":checked");
		var service_003 = $(".inp-service-003").is(":checked");
		var service_004 = $(".inp-service-004").is(":checked");
		var service_005 = $(".inp-service-005").is(":checked");
		var service_006 = $(".inp-service-006").is(":checked");
		var service_007 = $(".inp-service-007").is(":checked");
		var service_008 = $(".inp-service-008").is(":checked");
		var service_009 = $(".inp-service-009").is(":checked");
		var service_010 = $(".inp-service-010").is(":checked");

		if(service_001) { 
			total = total + 1500;
			services.push({
				'service': 'Immune Boost Drip( Detoxifying)',
				'cost': 1500
			});
		}

		if(service_002) {
			total = total + 4500;
			services.push({
				'service': 'Complete Drip( Holistic, Anti Aging, Detoxifying skin, Firming & Lifting)',
				'cost': 4500
			});
		}

		if(service_003) {
			total = total + 800;
			services.push({
				'service': 'Elite House Facial',
				'cost': 800
			});
		}

		if(service_004) {
			total = total + 2000;
			services.push({
				'service': 'Aqua Glow Facial (Cleansing,Hydrating,Hrdradermabrasion)',
				'cost': 2000
			});
		}

		if(service_005) {
			total = total + 6000;
			services.push({
				'service': 'Signature Laser Facial (House Elite Facial + Pico Laset Whitening Anti Aging, Brightening)',
				'cost': 6000
			});
		}

		if(service_006) {
			total = total + 6000;
			services.push({
				'service': 'Pico Laser Whitening (Lips, Underarms,Knees, Elbows Inner Thighs,Face & Neck)',
				'cost': 6000
			});
		}

		if(service_007) {
			total = total + 8000;
			services.push({
				'service': 'Prescription Co2 Laser (Elite MD procedure Pockmarks, Wrinkles, Fine lines,Skin Tightening, Acne, Warts)',
				'cost': 8000
			});
		}

		if(service_008) {
			total = total + 16000;
			services.push({
				'service': 'HIFU Face Contour (Full Non-Surgical facelift,Cheek,Brow,Double Chin,Neck)',
				'cost': 16000
			});
		}

		if(service_009) {
			total = total + 16000;
			services.push({
				'service': 'HIFU body Sculpt (Arms,Belly,Thighs,Buttocks, Bra Fat, Back Fat, Love Handle)',
				'cost': 16000
			});
		}

		if(service_010) {
			total = total + 6000;
			services.push({
				'service': 'MESOLIPO (Face & Neck)',
				'cost': 6000
			});
		}

		$(".input-booking-total").val(total);
		$(".input-booking-services").val(JSON.stringify(services));
		
	});

	$(".btn-js-book-appointment").click( function () {

		var form = {
			'user_id': $(".input-booking-name").attr('data-user_id'),
			'services': $(".input-booking-services").val(),
			'sched_date': $(".input-booking-date").val(),
			'sched_time': $(".input-booking-time").val(),
			'doctor': $(".input-booking-doctor").val(),
			'message': $(".input-booking-message").val(),
			'total': $(".input-booking-total").val()
		};

		var uri = "api/appointment.php?" + $.param(form);

		fetch(uri).then( res => { return res.json(); }).then( async (response) => {
			if(response['success']) {
				Swal.fire({
					title: "Successful",
					text: response['message'],
					icon: "success"
				}).then( async () => {
					fetch("api/emailBookingNotification.php?email=" + $(".input-booking-email").val() + "&name=" + $(".input-booking-name").val()).then( sending => { return sending.json(); }).then( async (sent) => {
						window.location.reload();
					});
				});
			}
			else {
				Swal.fire({
					title: "Fail",
					text: response['message'],
					icon: "warning"
				});
			}
		});

	});

	$(".btn-js-logout").click( function () {
		localStorage.clear();
		window.location.replace("./");
	});

})(jQuery);

