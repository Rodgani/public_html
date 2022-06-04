$(document).ready(function(){

	$('#profileUpdateform').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url: base_url + 'admin/updateUserProfile',
			method:'post',
			data: $('#profileUpdateform').serialize(),
			success: function(response){
				if(response == 'not_unique')
				{
					$('#detail_error_div').html('<strong>Email</strong> Already Exists');
					$('#detail_error_div').fadeIn();
				}
				if(response == 'success')
				{
					$('#detail_success_div').html('<strong>Updated</strong> Sucessfully');
					$('#detail_success_div').fadeIn();
				}
			 }

		});

		setTimeout(function(){
					$('#detail_error_div').fadeOut();
					$('#detail_success_div').fadeOut();


		 }, 3000);

	});


	$('#reset_password_form').on('submit',function(event){
	event.preventDefault();
	var  password        = $('#password').val();
	var  new_password    = $('#new_password').val();
	var confirm_password = $('#confirm_password').val();
	var error            = passwordvalidate(password);
		if(error)
		{
		$('#alert_error').html('Password should contain 6 characters');
		$('#alert_error').fadeIn();
		return false;
		}
		error = passwordvalidate(new_password);
		if(error)
		{
			$('#alert_error').html('Password should contain 6 characters');
			$('#alert_error').fadeIn();
			return false;
		}
		if(new_password != confirm_password)
		{
			$('#alert_error').html('Password is should Match confirm password');
			$('#alert_error').fadeIn();
			return false;
		}
		$.ajax({
			url: base_url+'admin/resetPassword',
			data: {'password':password,'new_password': new_password},
			method:'post',
			success: function(respose){
				if(respose == 1)
				{
					$('#alert_success').html('Password have been changed successfully');
					$('#alert_success').fadeIn();
				}
				else
				{
					$('#alert_error').html('Please provide correct current password');
					$('#alert_error').fadeIn();
				}
			}
		});


	});





	function passwordvalidate($password)
	{
		if($password == "" )
		{
		return true;
		}
		if($password.length < 6)
		{
		return true ;
		}
	}

});



