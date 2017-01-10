jQuery(document).ready(function($){

//FooterNavigation
var num = 0;
$("#footer_bt").click(function(){
	$("#footer_inner").slideToggle();
    $(this).data("click", ++num);
    var click = $(this).data("click");
    if(click %2 == 0){
		$('#footer_arrow').each(function(){
			var arrowBottom = $(this).html();
			$(this).html(
			arrowBottom.replace(/∨/g,'∧'));
		});
    } else {
	    $('#footer_arrow').each(function(){
			var arrowTop = $(this).html();
				$(this).html(
				arrowTop.replace(/∧/g,'∨'));
			});
	}
    	return false;
	});
//SearchForm
$('#header input[name="s"]').focus(function(){
     s = $(this);
    if(s.val()===''){s.val('');
    }s.animate({width: '250px'},400);
});
$('#header input[name="s"]').blur(function(){
     s = $(this);
    if(s.val()===''){s.val('');
    }s.animate({width: '70px'},500);
});

//Ripple
$(document.body).bind("click",function(e) {
        new Ripple({
            x: e.pageX,
            y: e.pageY,
            count: 1,
            width: 3,
            zIndex: 30,
            color: "#ffffff"
        });
    });

});

//AutoPager
$(function() {
    $.autopager({
        autoLoad: false,
        link: '.ajaxLoad a',
        content: '.hentry-home'
    });
    $('.ajaxLoad a').click(function() {
        $.autopager('load');
        return false;
    });
});
$(function(){
	$.autopager({content: '#wrap'});
	$.autopager({link: '.more_link'});

});