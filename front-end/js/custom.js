$(document).ready(function(){
	
	$(document).on("click",".menuToggle",function(e){
		$("header .header--nav > ul").slideToggle();
	});

	// $(".enroll-form").validate();

	$(document).on("change","#stream",function(){
		var val = $(this).val();
		if (val=='science') {
			$("#subject").show();
		}
		if (val=='arts' || val=='commerce') {
			$("#subject").hide();
		}
	});

	$(document).on("click","#submit-btn",function(){
		if($(".enroll-form").valid()){
			$("#submit-btn").css("display","none");
			$("#test-btn").css("display","block");
		}
	});
});




