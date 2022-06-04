$(document).ready(function (){
    CKEDITOR.replace('add_recipes');
    $('.select2').select2();
	$('.add_new_need').click(function(){
		var need  = $('#add_need').val();
		$('#you_need_fields').append ("<div class='form-group col-md-3 input_need'><div class='input-group'><input type='text' readonly class='form-control' name='you_will_need[]' value='"+

			need+"'><span class='input-group-btn'><button type='button' class='btn_delete btn btn-primary'> - </button></span></div></div>");

		$('#add_need').val('');
	});

	$(document).on("click", ".btn_delete", function(){
		$(this).closest('.input_need').remove();
	});


	$('.add_ingredient_option').on('click',function(){

		var custom_origional    = $("[name='custom_origional'] option:selected").text();
		var custom_replace      = $("[name='custom_replace'] option:selected").text();
		var custom_origional_id = $("[name='custom_origional']").val();
		var custom_replace_id   = $("[name='custom_replace']").val();
		$('.custom_ingredient_detal tbody').prepend("<tr><td style='display:none;'><input type='hidden' name='custom_origional_ids[]'  value='"+custom_origional_id+"'><input class='form-control' type='hidden' name='custom_replace_ids[]' value='"+custom_replace_id+"'></td><td>"+custom_origional+"</td><td>"+custom_replace+"</td><td><input class='form-control' type='number' style='width:60px' required='' name='custom_price[]'></td><td><input class='form-control' style='width:60px' type='number' required='' name='custom_double[]'></td> <td> <input type='text' name='custom_titles[]' required='' class='form-control' id='custom_titke'> </td>  <td><textarea class='form-control' required='' name='instructions[]' cols='50' rows='2' class='form-control'></textarea></td><td><input type='file' required='' name='custom_ingredient_image[]'></td> <td> <button class='btn btn-danger btn-sm delete_custom_ingredient'> Delete </button> </td> </tr>");
		counter++;
	});

	$(document).on("click", ".delete_custom_ingredient", function(){
		$(this).closest('tr').remove();
	});

	$(document).on("click", ".delete_basic_ingredient", function(){
		$(this).closest('tr').remove();
	});

	$('.add_basic_ingredient').on('click',function(){
		var basic = $("[name='basic_ingredient'] option:selected").text();
		var basic_id = $("[name='basic_ingredient']").val();

		$('.basic_ingredient_detal tbody').prepend("<tr><td style='display:none'><input type='hidden' name='basic_ids[]' value='"+basic_id+"'></td><td>"+ basic +"</td><td><input type='text' name='basic_titles[]' required='' class='form-control' id='basic titles'></td><td><textarea  name='basic_instruction[]' required='' cols='40' rows='2' class='form-control'></textarea></td><td><input type='file' required='' class='form-control' name='optional_ingredient_image[]'></td><td><input type='number' required='' class='form-control' style='width:60px' name='basic_double[]'></td> <td> <button class='btn btn-danger btn-sm delete_basic_ingredient'> Delete </button> </td> </tr>");
	});


	$('#add_recipes_form').on('submit',function(){
		if(! $('.basic_ingredient_detal tbody tr').length > 0 ){
			toastr.error('Please Add Ingredients');
			return false;
		}
		if(! $('.input_need input').length > 0 ){
			toastr.error('Please Add You Will Need Items');
			return false;
		}

	});






});
