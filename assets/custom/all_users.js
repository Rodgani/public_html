$( document ).ready(function() {

$('.status_updater').change(function(){
	var status  =  $(this).prop('checked');
	var id = $(this).attr("id");
	if( status == false )
		{
			status = 0;
		}
	else
		{
			status = 1 ;
		}
	$.ajax({
		url: base_url + 'user/change_user_status',
		data: {'id':id , 'status': status},
		method:'post',
		success: function(response){
			if(response == 1)
			{
				toastr.success('User Status Changed Successfully');
			}
		}
	});

});


$('.show_model').on('click',function(){

	// var id  = $('#modelview').data('id');
	// var data  = "<input type='text' value='abc'>" + id;
	// $('.modal-body').html(data);
	$('#modal-default').modal('toggle');

})
});