(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".home-slide").owlCarousel({
        	autoplay:true,
        	margin:10,
        	loop:true,
        	nav:true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'</i>", "<i class='fa fa-angle-right'</i>"],
          	responsiveClass: true,
            responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 2,
			  },
			  1000: {
				items: 1,
			  }
			}
        });


        $(".video-gallery").owlCarousel({
        	autoplay:true,
        	margin:10,
        	loop:true,
        	nav:true,
            dots: true,
          	responsiveClass: true,
            responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 2,
			  },
			  1000: {
				items: 3,
			  }
			}
        });





        $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('.scrollToTop').fadeIn();
		        } else {
		            $('.scrollToTop').fadeOut();
		        }
		    });

		    //Click event to scroll to top
		    $('.scrollToTop').on('click', function(){
		        $('html, body').animate({scrollTop : 0},800);
		        return false;
		    });



    });


    jQuery(window).load(function(){
        jQuery(".page-loader").fadeOut(1000);
    });


}(jQuery));

// --------------- time js ------------
function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // 0 should be displayed as 12
    var minutes = now.getMinutes().toString().padStart(2, '0');
    var seconds = now.getSeconds().toString().padStart(2, '0');
    var timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
    document.getElementById('clock').innerHTML = timeString;
}

setInterval(updateClock, 1000);


// --------------- time js ------------

!function(d,l){"use strict";var e=!1,n=!1;if(l.querySelector)if(d.addEventListener)e=!0;if(d.wp=d.wp||{},!d.wp.receiveEmbedMessage)if(d.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){for(var r,i,a,s=l.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),n=l.querySelectorAll('blockquote[data-secret="'+t.secret+'"]'),o=new RegExp("^https?:$","i"),c=0;c<n.length;c++)n[c].style.display="none";for(c=0;c<s.length;c++)if(r=s[c],e.source===r.contentWindow){if(r.removeAttribute("style"),"height"===t.message){if(1e3<(a=parseInt(t.value,10)))a=1e3;else if(~~a<200)a=200;r.height=a}if("link"===t.message)if(i=l.createElement("a"),a=l.createElement("a"),i.href=r.getAttribute("src"),a.href=t.value,o.test(a.protocol))if(a.host===i.host)if(l.activeElement===r)d.top.location.href=t.value}}},e)d.addEventListener("message",d.wp.receiveEmbedMessage,!1),l.addEventListener("DOMContentLoaded",t,!1),d.addEventListener("load",t,!1);function t(){if(!n){n=!0;for(var e,t,r=-1!==navigator.appVersion.indexOf("MSIE 10"),i=!!navigator.userAgent.match(/Trident.*rv:11\./),a=l.querySelectorAll("iframe.wp-embedded-content"),s=0;s<a.length;s++){if(!(e=a[s]).getAttribute("data-secret"))t=Math.random().toString(36).substr(2,10),e.src+="#?secret="+t,e.setAttribute("data-secret",t);if(r||i)(t=e.cloneNode(!0)).removeAttribute("security"),e.parentNode.replaceChild(t,e)}}}}(window,document);
