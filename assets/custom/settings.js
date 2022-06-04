$(document).ready(function () {

	$('.change-settings').on('click',function(event){
		event.preventDefault();

	var data = $('#setting_form').serialize();
	$.ajax({
		url: base_url + 'admin/update_settings',
		data: data,
		method: 'post',
		success: function(result){
			if (result == 'success')
			{
				alert('settings updated successfully');
			}

		}
	});


	});
});