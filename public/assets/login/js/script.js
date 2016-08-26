
function validatePassword(){

	var password = document.getElementById("password"), 
    	confirm_password = document.getElementById("confirm_password");
  	
  	if(password.value != confirm_password.value) {
    	confirm_password.setCustomValidity("Passwords Don't Match");
    	$('#confirm_password').addClass('error');
  	} else {
    	confirm_password.setCustomValidity('');
  	}

}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$(document).ready(function() {
	$('#form_reg').submit(function(event) {
		event.preventDefault();
		$.ajax({
			url : url,
			method : 'POST',
			data : {
				username : $('input[name=username]').val(),
				_token : token
			},
			success : function(data) {
				alert(data);
			}
		});
	});
});