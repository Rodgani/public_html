$(document).ready(function (){
	$('#all_recipes').DataTable();

$(document).on('click','.btn-delete',function(){
		var id = $(this).data('id');
		if(confirm('Are you Sure to Delete'))
		{
		$.ajax({
			url: base_url + 'recipes/delete_recipe',
			data:{'id': id},
			method: 'post',
			success: function (result)
			{

				if( result == "success" )
				{
					$('#'+id).remove();
				}
			}
		});
	}
	});
});