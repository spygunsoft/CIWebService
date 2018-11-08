$(document).ready(function(){
	//initialize some script
		
	$.localScroll({hash:true, axis:'y', duration:1000});	
	//hide for animation
	$(".jumbotron,.feature").hide();
	//left-nav show 
	/*$(window).scroll(function(){
		if($(window).scrollTop() >= 50){$(".left-nav").show("slide",{direction:"left"},500);}
		else if($(window).scrollTop() <= 50){$(".left-nav").hide("slide",{direction:"left"},1000);}		
	});*/
	//opening page		
	$(".jumbotron").show("fade",600);
	$(".feature:eq(0)").delay(600).show("drop",{direction:"down"},300);
	$(".feature:eq(2)").delay(900).show("drop",{direction:"down"},300);
	$(".feature:eq(1)").delay(1200).show("drop",{direction:"down"},300);
	$(".feature:eq(3)").delay(1500).show("drop",{direction:"down"},300);
	
	//page load modal
	var url = window.location.hash;
	if($(url).attr("class") == "modal fade")$(url).modal("show");
	//effect
	//navbarlink
	function enterlink(targetlink){
		icon_offset = 0;
		icon_width	= $("span:eq(0)",targetlink).width();
		text_offset	= 0;
		text_width	= $("span:eq(1)",targetlink).width();
		icon_move	= (icon_width+text_width-6);
		text_move	= 24;		
		$("span:eq(0)",targetlink).stop(true);
		$("span:eq(1)",targetlink).stop(true);
		$("span:eq(0)",targetlink).animate({opacity:0},200);
		$("span:eq(1)",targetlink).delay(200).animate({left : "-" +  text_move},200);
		$("span:eq(0)",targetlink).delay(200).animate({left : icon_move},200);
		$("span:eq(0)",targetlink).animate({opacity:1},200);
	};	
	function leavelink(targetlink){	
		$("span:eq(0)",targetlink).stop(true);
		$("span:eq(1)",targetlink).stop(true);	
		$("span:eq(0)",targetlink).animate({opacity:0},200);
		$("span:eq(1)",targetlink).delay(200).animate({left : text_offset},200);
		$("span:eq(0)",targetlink).delay(200).animate({left : icon_offset},200);
		$("span:eq(0)",targetlink).animate({opacity:1},200);
	};	
	$(".navbar-custom").on({
		mouseenter: function(){enterlink(this);},
		mouseleave: function(){leavelink(this);}
	});
	//left-navbar
	/*$(".left-nav-custom").bind({
		mouseenter: function(){$(this).animate({left : 115},200);},
		mouseleave: function(){$(this).animate({left : 0},200);}
	});*/		
	//logo
  	$("#logo").rotate({
		bind:{
			mouseenter : function(){$(this).rotate({animateTo:180})},
			mouseleave : function(){$(this).rotate({animateTo:0})}
			}	
	});
	//dropdown animation
	$('.navbar .dropdown').hover(function() {
    		$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
    	}, function() {
    		$(this).removeClass("open").find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
    	});
	$(".dropdown-toggle").click(function(){
		$.scrollTo($("#section-about"),800);
	});
	//feature panel
	$(".feature").on({
		mouseenter : function(){$(this).effect("highlight",300).effect("highlight",300);},
		mouseleave : function(){
			var i = $(".feature").index(this) + 1;
			$(this).delay(300).effect("transfer",{to:$(".feature").eq(i)},700);
		}
	});
	
	
	
});
        
		