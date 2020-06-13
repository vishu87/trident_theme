$(document).ready(function(){
	
	$(document).on("click",".menuToggle",function(e){
		$("header .header--nav > ul").slideToggle();
	});

	$(".enroll-form").validate();

	$("#stream").change(function(){
		var val = $(this).val();
		if (val=='science') {
			$("#subject").show();
		}
		if (val=='arts' || val=='commerce') {
			$("#subject").hide();
		}
	});

});




