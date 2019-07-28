$("#contactForm").on("submit", function(e) {
	e.preventDefault();

	let submitBtn = $('#btnSend');

	submitBtn.addClass("send-animation");
	submitBtn.html("Se trimite..");

	$("#sectionForm .alert-danger").hide();

	$.ajax({
	  type: "POST",

	  data: {
	  	 name: $("#name").val(),
	  	 email: $("#email").val(),
	  	 company: $("#company").val(),
	  	 phone: $("#phone").val(),
	  	 subject: $("#subject").val(),
	  	 message: $("#message").val(),
	  },

	  success: function(result){
	  	result = JSON.parse(result);

	  	// wait for animation
	  	setTimeout(function() {
		    if(Object.keys(result).length == 0) {
		    	// success
			    submitBtn.html("Mesaj trimis");
			    $("#successMessage").show();
		    } else {
		    	submitBtn.removeClass('send-animation');
		    	submitBtn.html("Trimite");

		    	// error
		    	for(var key in result) {
		    		$("#" + key + "Error").show();
		    	}
		    }
	  	}, 650);
	  }
	});
});

$("input").on("input", function(){
	if($(this).val().length > 0) {
		$(this).addClass("active");
	} else {
		$(this).removeClass('active');
	}
});

$(document).ready(function () {
	// clients swiper
  	var clientsSwiper = new Swiper('#clientsSwiper', {
	    slidesPerView: 3,
	    loop: true,
    });

  	// iso swiper
  	var isoSwiper = new Swiper('#isoSwiper', {
	    slidesPerView: 2,
	    loop: true,
  	})

  	// process slider
  	$('#ourProcessSlider').carousel()
});