$(document).ready(function (){
	$('#all_menu').DataTable();
	$('.btn-delete').on('click',function(){
		var id = $(this).data('id');
		if(confirm('Are you Sure to Delete'))
		{
		$.ajax({
			url: base_url + 'admin/delete_faq',
			data:{'id': id},
			method: 'post',
			success: function (result)
			{
				if(result=="success")
				{
					$('#'+id).remove();
				}
			}
		});
	}
	});
});