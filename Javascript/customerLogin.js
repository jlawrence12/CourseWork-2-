//function to display error messages within the form
function alerts(location, type, message, closable) {
    if (closable == true) 
        $('#'+location +'Alert').html('<div class="alert alert-'+type+' alert-dismissible fade in '+location+'" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +message+'</div>');
    else
        $('#'+location+'Alert').html('<div class="alert alert-'+type+' fade in '+location+'" role="alert">'+message+'</div>');
}
function customerLogin(){

	clearErrors();

	//Collect data from the form
	var email = $('#customerEmail').val().toLowerCase();
    var password = $('#customerPassword').val();

	var data = { emailLog: email, passwordLog: password };

	//enter ajax
	$.ajax(
	{ 
		dataType: 'json',
		type: 'POST',
		url: './customerLogin.php',
		data: data,
		success: function(ajaxResponse) {
			switch(ajaxResponse.result) {
				case "successful": 
					location.reload();
					break;
				case "incorrect": 
					alerts("login", "danger", "Incorrect.", false); 
					$('#logIn-form:has(input[name*="Login"])').addClass('has-error');
					break;
				}
			},
		});
	return false;
}

function clearErrors() {
	$(".form-group.has-error").removeClass('has-error');
	$("label.error-msg, .alert").remove();

}