$(document).ready(function(){
	
	$(document).on("click",".menuToggle",function(e){
		$("header .header--nav > ul").slideToggle();
	});

	AOS.init();
});




