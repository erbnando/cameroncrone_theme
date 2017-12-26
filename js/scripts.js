jQuery('#menu-main-menu').hover(
	function(){jQuery('.project-info').css('opacity', '.1')},
	function(){jQuery('.project-info').css('opacity', '')}
);

jQuery('#menu-main-menu > li > a').mouseenter(
	function(){jQuery('.overlay').css('opacity', '.9')}
);

jQuery('#menu-main-menu').mouseleave(
	function(){jQuery('.overlay').css('opacity', '')}
);
/*
jQuery('#menu-main-menu > li > a').mouseenter(
	function(){jQuery('.sub-menu').show()}
);

jQuery('#menu-main-menu').mouseleave(
	function(){jQuery('.sub-menu').hide()}
);
*/
jQuery(".artwork").filter(function(){
    var $this = jQuery(this);
    return $this.width() > $this.height();
	}).addClass("horizontal");

jQuery(".artwork").filter(function(){
    var $this = jQuery(this);
    return $this.width() < $this.height();
	}).addClass("vertical");

jQuery( "#menu-icon" ).click(function() {
    jQuery( ".sub-menu" ).toggle();
/*
	var divHeight = jQuery('.sub-menu').height(); 
    jQuery(".placeholder").css('min-height', divHeight+'px');
    jQuery( ".placeholder" ).toggle();
*/
});

window.onload = workheight;
jQuery(window).resize(workheight);

function workheight() {
var maxHeight = -1;

jQuery('.artwork').each(function() {
maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
});

jQuery('.artwork-wrap').each(function() {
jQuery(this).css('max-height', maxHeight);
});
};