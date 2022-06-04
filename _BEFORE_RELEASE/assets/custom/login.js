$(document).ready(function (){
	$('#btn-login').on('click',function (e){
		e.preventDefault();
		var email    = $('#admin_login .email').val();
		var password = $('#admin_login .password').val();
		$.ajax({
			url: base_url+'login/login_process',
			data: {'email': email, 'password': password},
			method: 'POST',
			success:function ( responce ){
				if( 'error' == responce ){
					$('.admin-login-msg').show();
					$('.admin-login-msg').html('Please Enter valid details');
				}
				else if ( 'blocked' == responce )
				{
					$('.admin-login-msg').show();
					$('.admin-login-msg').html('Your account is temporarily blocked, Contact Support');
				}
				else
				{
					window.location.replace( base_url+'admin' );
				}
			},
		});
	});
});