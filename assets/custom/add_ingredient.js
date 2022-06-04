$(document).ready(function (){
 	CKEDITOR.replace('menu_description');
	   $('#add_menu_form').on('submit',function(){
	   	var menu_title = $('#menu_title').val();
	   	if(menu_title == "")
	   	{
	   		$('.alert-danger').html('Please provide valid menu title');
	   		$('.alert-danger').fadeIn();

	  return false;
	  }
	  });

	 setTimeout(function(){

	  $('.alert').fadeOut();
		}, 3000);
	 
});