$(document).ready(function (){
	$('#add_price').click(function(){
	var add_subtract    = $("[name='add_subtract']:checked").val();
	var kids            = $("[name='kids']" ).val();
	var adults          = $("[name='adults']" ).val();
	var recipes         = $("[name='recipes']" ).val();
	var ingredients     = $("[name='ingredients']").val();
	var price           = $("[name='price']").val();
	var product_id      = $("[name='product_id']").val();
	var ingredient_name = $("[name='ingredients'] option:selected").text();
	var ingredient_key  = kids+"_"+adults+"_"+recipes;
	if(price=="")
	{
		toastr.error('Please Enter Price','Empty Price');
		return false;
	}
	$.ajax({
		url: base_url+'recipes/add_ingredient_details',
		data: {'ingredient_key':ingredient_key, 'ingredients':ingredients,
			  'price':price,
			  'product_id':product_id,
			  'add_subtract':add_subtract },
		method: 'post',
		success: function(response) {
			if(response == 'Dublicate')
			{
				toastr.error('Price already exits for this case','Duplicate');
			}
			else {
				$('#tbody').append("<tr><td>"+kids +"</td><td>"
					+adults+"</td><td>"+recipes+"</td><td>"+ingredient_name+
					"</td><td>"+price+"$</td><td>"+add_subtract+" </td><td><button id='"+ response +
					"' class='btn btn-sm btn-danger delete_ingredient'>Delete</button></td></tr>") ;
			}
		},
	});

	});

$('#tbody').on('click','.delete_ingredient', function(){
 var id =  $(this).attr('id') ;
 $.ajax({
 	url: base_url+'recipes/delete_ingredient_details/'+id ,
 	method: 'post',
 	success: function(response){
 		if(response)
 		{
 		 	$('#'+id).closest('tr').remove();
 		}

 	}
 });


});

});