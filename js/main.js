/**
 * Cookie plugin
 */
jQuery.cookie=function(name,value,options){if(typeof value!='undefined'){options=options||{};if(value===null){value='';options=$.extend({},options);options.expires=-1;}var expires='';if(options.expires&&(typeof options.expires=='number'||options.expires.toUTCString)){var date;if(typeof options.expires=='number'){date=new Date();date.setTime(date.getTime()+(options.expires*24*60*60*1000));}else{date=options.expires;}expires='; expires='+date.toUTCString();}var path=options.path?'; path='+(options.path):'';var domain=options.domain?'; domain='+(options.domain):'';var secure=options.secure?'; secure':'';document.cookie=[name,'=',encodeURIComponent(value),expires,path,domain,secure].join('');}else{var cookieValue=null;if(document.cookie&&document.cookie!=''){var cookies=document.cookie.split(';');for(var i=0;i<cookies.length;i++){var cookie=jQuery.trim(cookies[i]);if(cookie.substring(0,name.length+1)==(name+'=')){cookieValue=decodeURIComponent(cookie.substring(name.length+1));break;}}}return cookieValue;}};

function cookiePolicy(){
	var _window = jQuery( window ),
	cookieNotice = jQuery('.cookie-policy-notice');
	if ( cookieNotice.length > 0) {
		jQuery('#cookie-policy-notice-close a').on('click', function(){
			jQuery.cookie('infusecookieenabled', '1', { expires: 365, path: '/' });
			cookieNotice.slideUp(500);
			return false;
		});
	}
};

function hide(){
    document.getElementById('tabs').style.display = 'none';
}


jQuery(document).ready(function($) {
    $("#form-toggle").hide();
    $("#contact-toggle").click(function() {
        $("#form-toggle").slideToggle(500);
    });
});

// mmenu
jQuery(document).ready(function( $ ) {
	cookiePolicy();
 });


jQuery('.my-subject').click(function(){
var title = $(this).attr('dataTitle'); //put the dataTitle in the variable title
jQuery(".your-subject input").val( title); //put the title as the subject in your contact form 7
});


//filter products
function handleSelect(elm)
            {
                window.location = elm.value;
            }

//bxslider
jQuery(window).load(function() {
    
	
	jQuery('.test').bxSlider({
		adaptiveHeight: true,
		controls: false,
		mode: 'fade',
		touchEnabled: true,
		pause: 10000,
		speed: 1000,
	});
	
	
    jQuery('.main-slider').bxSlider({
		adaptiveHeight: true,
		auto: true,
		pause: 10000,
		speed: 1500,
        captions: true,
        hyperlinks:true,
	});

    
	
	if (jQuery(window).width() <= 600){	
		jQuery('.treatment-slider').bxSlider({
			minSlides: 1,
			maxSlides: 1,
			speed: 500,
			slideMargin: 0,
			slideWidth: 520,
		});
	} else {
		jQuery('.treatment-slider').bxSlider({
			minSlides: 1,
			maxSlides: 2,
			speed: 500,
			slideMargin: 0,
			slideWidth: 520,
		});	
	}
	
});