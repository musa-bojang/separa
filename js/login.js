jQuery(document).ready(function() {
	//   App.init();
	//   Login.init();

	$("form#login-form").submit(function(e) {
		e.preventDefault();
		var formData = new FormData(this);

		var username = document.forms["login-form"]["username"].value;
		var password = document.forms["login-form"]["password"].value;
	
		if(username.length < 5){
			$("#usernamelength").fadeIn(100, function() {
				$("#usernamelength").html(
					'<div class="alert alert-warning alert-dismissible fade show" role="alert">' +
					'Incorrect username' +
					'<button type="button" class="close"  data-dismiss="alert" aria-label="Close">' +
					'<span aria-hidden = "true"> &times; </span> </button> </div>');
                    $("#usernamelength").fadeOut(1000);

			});
		} 
		if(password.length < 5){
			$("#passwordlength").fadeIn(100, function() {
				$("#passwordlength").html(
					'<div class="alert alert-warning alert-dismissible fade show" role="alert">' +
					'Incorrect password' +
					'<button type="button" class="close"  data-dismiss="alert" aria-label="Close">' +
					'<span aria-hidden = "true"> &times; </span> </button> </div>');

			});
		}
        if(username.length >= 5 && password.length >= 5){
			$.ajax({
				url: 'model/authenticate.php',
				type: 'POST',
				data: formData,
				beforeSend: function() {
					$("#error").fadeOut();
					//$("#login_button").html('<img height="20" src="ajax_loader.gif" />   Sending ...');
				},
				success: function(response) {
					 
					// if(response.match(/ok$/)){
					if ($.trim(response) == 'success') {
						// alert(response);
						$("#login_button").html('<img height="20" src="ajax_loader.gif" />   Signing In ...');
						setTimeout(' window.location.href = "profile_upload.php"; ', 100);
						// alert("1");
					} else if ($.trim(response) == 'error') {
						// alert(response);
						$("#error").fadeIn(100, function() {
							$("#error").html(
								'<div class="alert alert-warning alert-dismissible fade show" role="alert">' +
								'Invalid credentials' +
								'<button type="button" class="close"  data-dismiss="alert" aria-label="Close">' +
								'<span aria-hidden = "true"> &times; </span> </button> </div>');
	
						});
					} else {
						// alert(response);
					
					}
	
				},
				error: function(request, status, error) {
					alert(request.responseText);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			
		}
		
		// }



	});

});