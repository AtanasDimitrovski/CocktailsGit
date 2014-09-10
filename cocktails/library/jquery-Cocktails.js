$(document).ready(function(){
	
	   $('.ckt-menu').jcarousel();
	   
	   $('.box').hover(function(){
		   $(this).find("span").css('text-shadow','1px 1px 10px #FFFFFF');	   
	   }, function(){
		   $(this).find("span").css('text-shadow','none');	  		   
	   });
	
});