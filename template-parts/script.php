<script type="text/javascript">
    jQuery(document).ready(function(e) {
        jQuery(window).scroll(function() {
            var height = jQuery('.header_section').height();
            if (jQuery(this).scrollTop() > 0) {
                jQuery('.header_section').addClass("f-nav");


            } else {
                jQuery('.header_section').removeClass("f-nav");
            }
        });
    });

    jQuery(".mobinav").click(function() {
        jQuery(".top_menu").toggleClass('open');
    });

    jQuery(".navclsbtn").click(function() {
        jQuery(".top_menu").toggleClass('open');
    });




    jQuery(document).ready(function() {
        var owl = jQuery('#partnerslider');
        owl.owlCarousel({
            loop: true,
            dots: true,
            nav: false,
            touchDrag: false,
            mouseDrag: true,
            autoplay: false,
            slideSpeed: 2000,
            smartSpeed: 2000,
            items: 1
        });
        setTimeout(function() {
            owl.trigger('refresh.owl.carousel');
        }, 100)
    });

    jQuery(document).ready(function() {
        var owl = jQuery('#winner_slider');
        owl.owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            touchDrag: false,
            mouseDrag: false,
            autoplay: false,
            slideSpeed: 2000,
            smartSpeed: 2000,
            items: 4,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                900: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    });

    if (jQuery(window).width() < 992) {
        jQuery(document).ready(function() {
            jQuery('#prize_show').addClass('owl-carousel');
            jQuery('#prize_show').owlCarousel({
                loop: true,
                dots: true,
                nav: false,
                touchDrag: false,
                mouseDrag: false,
                smartSpeed: 2000,
                autoplay: true,
                autoplayTimeout: 5000,
                items: 1
            })
        });
    }


    if (jQuery(window).width() < 992) {
        jQuery(document).ready(function() {
            if (jQuery('.plans_slider').length) {
                jQuery('.plans_slider').addClass('owl-carousel');
                var owl = jQuery('.plans_slider').owlCarousel({
                    loop: true,
                    dots: true,
                    nav: true,
                    touchDrag: false,
                    mouseDrag: false,
                    // smartSpeed:2000,
                    items: 1
                });
                jQuery('.plans_slider').trigger("to.owl.carousel", [1, 200]);
            }
        });
    }



    document.addEventListener("mousemove", parallax);

    function parallax(e) {
        this.querySelectorAll(".layer").forEach((layer) => {
            const speed = layer.getAttribute("data-speed");

            const x = (window.innerWidth - e.pageX * speed) / 100;
            const y = (window.innerHeight - e.pageY * speed) / 100;

            layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
        });
    }

    //Single Promotion Slider
    jQuery(document).ready(function() {
        var bigimage = jQuery("#promotionsslider_big");
        var thumbs = jQuery("#promotionsslider_thumb");
        //var totalslides = 10;
        var syncedSecondary = true;

        bigimage
            .owlCarousel({
                items: 1,
                autoplay: false,
                nav: false,
                mouseDrag: false,
                autoHeight: true,
                dots: false,
                slideTransition: 'linear',
                smartSpeed: 2000,
                navSpeed: 1000,
                loop: true,
                responsiveRefreshRate: 200,
                navText: [
                    '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                    '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
                ]
            })
            .on("changed.owl.carousel", syncPosition);

        thumbs
            .on("initialized.owl.carousel", function() {
                thumbs
                    .find(".owl-item")
                    .eq(0)
                    .addClass("current");
            })
            .owlCarousel({
                items: 8,
                dots: false,
                nav: true,
                loop: false,
                smartSpeed: 2000,
                mouseDrag: false,
                navText: [
                    '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                    '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
                ],
                // smartSpeed: 200,
                // slideSpeed: 500,
                slideBy: 1,
                responsiveRefreshRate: 100,
                responsive: {
                    0: {
                        items: 3
                    },
                    700: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                }
            })
            .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
            //if loop is set to false, then you have to uncomment the next line
            //var current = el.item.index;

            //to disable loop, comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                .find(".owl-item.active")
                .first()
                .index();
            var end = thumbs
                .find(".owl-item.active")
                .last()
                .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 2000, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 2000, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 2000, true);
            }
        }

        thumbs.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = jQuery(this).index();
            bigimage.data("owl.carousel").to(number, 2000, true);
        });
    });


    if (jQuery(window).width() > 991) {
        jQuery(document).ready(function() {
            setTimeout(function() {
                var divHeight = jQuery('.sg_thumleft').height();
                // jQuery('.sgprminfo_rt').css('height', divHeight+'px');
            }, 0)
        });

        // jQuery(document).ready(function() {
        //    setTimeout(function(){
        //      var divHeight = jQuery('.sgprmspec_sec').height(); 
        //      jQuery('.sgspec_info').css('min-height', divHeight+'px');
        //    },0)
        //  });
    }


    //  if(jQuery( window ).width() < 1201){

    // 	jQuery(document).ready(function(){
    //    jQuery('.sgpkg_row').addClass('owl-carousel');
    //    jQuery('.sgpkg_row').owlCarousel({
    //      loop: true,
    //      dots:true, 
    //      nav:false,
    //      touchDrag:true,
    //      mouseDrag:false,
    //      autoplay:true,
    //      autoplayTimeout:5000,
    //     	 responsive: {
    //          0: {
    //            items:1
    //          },
    //          600: {
    //            items: 2
    //          },
    //          900: {
    //            items:3
    //          },
    //          1000:{
    //          	 items:3
    //          } 
    //        }	
    //    })
    //  });

    // }


    jQuery(document).ready(function() {
        jQuery('#featureslider').addClass('owl-carousel');
        jQuery('#featureslider').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            touchDrag: false,
            mouseDrag: false,
            smartSpeed: 2000,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplaySpeed: 2200,
            responsive: {
                0: {
                    items: 1
                },
                533: {
                    items: 2
                },
                767: {
                    items: 2
                },
                768: {
                    items: 3
                },
                990: {
                    items: 3
                },
                1000: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        })
    });

    jQuery(document).ready(function() {
        jQuery('.bme_prtnr_tdy .wpb_gallery_slides ul').addClass('owl-carousel');
        jQuery('.bme_prtnr_tdy .wpb_gallery_slides ul').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            touchDrag: false,
            smartSpeed: 2000,
            mouseDrag: false,
            //autoplay:true,
            //autoplayTimeout:5000,
            responsive: {
                0: {
                    items: 1
                },
                569: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        })
    });

    function isFacebookApp() {
        var ua = navigator.userAgent || navigator.vendor || window.opera;
        return (ua.indexOf("FBAN") > -1) || (ua.indexOf("FBAV") > -1);
    }

    function isInstagramApp() {
        var ua = navigator.userAgent || navigator.vendor || window.opera;
        return (ua.indexOf('Instagram') > -1) ? true : false;
    }

    if (!isFacebookApp() && !isInstagramApp()) {
        setTimeout(function() {
            jQuery(".nlpp").trigger("click");
        }, 1500)
    }
    jQuery(document).ready(function() {
        changewidth();
    });

    jQuery(window).resize(function() {
        changewidth();
    });

    function changewidth() {
        if (jQuery('.closed_img').length) {
            setTimeout(function() {
                var wid = jQuery('.landing_block2').outerWidth();
                jQuery('.closed_img').attr('style', 'width:' + wid + 'px !important');
            }, 200)
        }
    }
    jQuery(document).ready(function() {
        if (jQuery('.winner_slider').length) {
            setTimeout(function() {
                jQuery('.winner_slider .prv_block').height(jQuery('.winner_slider').outerHeight());
            }, 500);
        }
    });

    // new code

    jQuery(document).ready(function() {
        var owl = jQuery('#ourmember_won');
        owl.owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            touchDrag: true,
            mouseDrag: true,
            autoplay: false,
            smartSpeed: 2000,
            items: 5,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                    stagePadding: 20
                },
                569: {
                    items: 2,
                    nav: false,
                    stagePadding: 50
                },
                768: {
                    items: 3,
                    nav: false,
                    stagePadding: 50
                },
                1000: {
                    items: 5
                },
                1200: {
                    items: 5
                }

            }
        });
        setTimeout(function() {
            owl.trigger('refresh.owl.carousel');
        }, 100)
    });

    //18-04-2023-DreamHack
    jQuery(document).ready(function() {
        var owl = jQuery('#other_prizes');
        owl.owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            touchDrag: true,
            mouseDrag: true,
            autoplay: false,
            smartSpeed: 2000,
            items: 5,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    stagePadding: 30
                },
                569: {
                    items: 2,
                    nav: false,
                    stagePadding: 50
                },
                768: {
                    items: 3,
                    nav: false,
                    stagePadding: 50
                },
                1000: {
                    items: 5
                },
                1200: {
                    items: 5
                }

            }
        });
        setTimeout(function() {
            owl.trigger('refresh.owl.carousel');
        }, 100)
    });



    // v- load the script after the page is fully loaded
    jQuery(document).ready(function() {
        const allTabsButons = jQuery(".tabs_button");
        const allTabs = jQuery(".tabs .tab");
        allTabsButons.click(function() {
            const thisParentCityAttr = jQuery(this).parent().attr("data-city");
            // remove class from a parent of the previous active button
            // add the 'active' class to the parent of the current active button
            allTabsButons.parent().removeClass("tabs_item_active");
            jQuery(this).parent().addClass("tabs_item_active");
            // remove the 'active' class from the previous active tab
            // add the 'active' class to the current active tab
            allTabs.filter(".tab_active").removeClass("tab_active");
            allTabs.filter(`[data-city=${thisParentCityAttr}]`).addClass("tab_active");
        });
    });

    jQuery(".mobilenav").click(function() {
        jQuery(".mobile_menu").toggleClass('open');
    });
    jQuery(".navclsbtn").click(function() {
        jQuery(".mobile_menu").toggleClass('open');
    });

    jQuery(".mobilenav").click(function() {
        jQuery("body").toggleClass('overley');
    });
    jQuery(".navclsbtn").click(function() {
        jQuery("body").toggleClass('overley');
    });

    jQuery('.login_link a').each(function() {
        jQuery(this).wrapInner('<span></span');
    });


    jQuery(document).ready(function() {
        jQuery('.homepartnerslider.hide_mobile ul').addClass('owl-carousel');
        jQuery('.homepartnerslider.hide_mobile ul').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            touchDrag: true,
            mouseDrag: false,
            smartSpeed: 2000,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 50
                },
                480: {
                    items: 1,
                    stagePadding: 50
                },
                600: {
                    items: 2,
                    stagePadding: 50
                },
                900: {
                    items: 3,
                    stagePadding: 50
                }
            }
        })
    });
    if (jQuery(window).width() < 992) {
        jQuery(document).ready(function() {
            jQuery('.hmlaest_win').addClass('owl-carousel');
            jQuery('.hmlaest_win').owlCarousel({
                loop: true,
                dots: false,
                nav: false,
                touchDrag: true,
                mouseDrag: false,
                autoplay: false,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 40
                    },
                    480: {
                        items: 1,
                        stagePadding: 50
                    },
                    600: {
                        items: 2,
                        stagePadding: 50
                    },
                    900: {
                        items: 3,
                        stagePadding: 50
                    }
                }
            })
        });
    }


    jQuery('.scroll_down').click(function(e) {
        event.preventDefault();
        if (jQuery(window).width() < 440) {
            var header_section = 64;
        } else {
            var header_section = 101;
        }


        var offset = jQuery('#scroll_down').offset().top - header_section;
        jQuery('html,body').animate({
            scrollTop: offset
        }, 700);
    });

    // if(jQuery( window ).width() > 992){
    //    gsap.registerPlugin(ScrollTrigger);
    //     if (jQuery(".entre_shape").length>0) {
    //       gsap.timeline({
    //           scrollTrigger: {
    //             trigger: ".accm_sec",
    //             start: "-500",
    //             end: "100",
    //             scrub: true,
    //             markers: false,
    //           }
    //       }).to(".entre_shape",{y : 100});
    //     }

    //     gsap.registerPlugin(ScrollTrigger);
    //     if (jQuery(".plans_shape").length>0) {
    //       gsap.timeline({
    //           scrollTrigger: {
    //             trigger: ".prc_sec",
    //             start: "-200",
    //             end: "400",
    //             scrub: true,
    //             markers: false,
    //           }
    //       }).to(".plans_shape",{y : 200});
    //     }

    //     gsap.registerPlugin(ScrollTrigger);
    //     if (jQuery(".pwin_shape").length>0) {
    //       gsap.timeline({
    //           scrollTrigger: {
    //             trigger: ".hmprwin_sec",
    //             start: "-500",
    //             end: "100",
    //             scrub: true,
    //             markers: false,
    //           }
    //       }).to(".pwin_shape",{y : 200});
    //     }

    //     gsap.registerPlugin(ScrollTrigger);
    //     if (jQuery(".pwin_shape2").length>0) {
    //       gsap.timeline({
    //           scrollTrigger: {
    //             trigger: ".hmprwin_sec",
    //             start: "-100",
    //             end: "400",
    //             scrub: true,
    //             markers: false,
    //           }
    //       }).to(".pwin_shape2",{y : -100});
    //     }
    //    }
</script>

<script type="text/javascript">
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
	  const elmnt = document.getElementById("header_section");
	  var currentScrollPos = window.pageYOffset;
	  if(currentScrollPos > elmnt.offsetHeight){
	    if (prevScrollpos > currentScrollPos) {
	      document.getElementById("header_section").classList.remove("fixed-hide");
	    } else {
	      document.getElementById("header_section").classList.add("fixed-hide");
	    }
	    prevScrollpos = currentScrollPos;
	  }
	}

	jQuery('.page_tabs .tabs_item').click(function(){
		jQuery('.page_tabs .tabs_item').removeClass('.tabs_item_active');
		jQuery(this).addClass('.tabs_item_active');
		if(jQuery(this).data("id") == 'master'){
			jQuery('.master_chat').show();
			jQuery('.legendry_chat').hide();
			jQuery('.goat_chat').hide();
		} else if(jQuery(this).data("id") == 'legendary'){
			jQuery('.legendry_chat').show();
			jQuery('.master_chat').hide();
			jQuery('.goat_chat').hide();
		} else if(jQuery(this).data("id") == 'goat'){
			jQuery('.goat_chat').show();
			jQuery('.legendry_chat').hide();
			jQuery('.master_chat').hide();
		}
	})

		
jQuery(document).ready(function(){
  setTimeout(function(){
  	jQuery('.klaviyo_submit_button').text('Subscribe');
  },500);
}); 
document.addEventListener('DOMSubtreeModified', (e) => {
  if(jQuery(e.target).has('.success_message')){
  	if(jQuery('.success_message').html()!='')
  	jQuery('.klaviyo_submit_button').hide();
  }
})
</script>