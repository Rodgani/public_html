$(document).ready(function (){
 	CKEDITOR.replace('menu_description');
	   $('#menu_description').on('submit',function(){
	   	var menu_title = $('#menu_title').val();
	   	if(menu_title == "")
	   	{
	   		$('.alert-danger').html('Please provide valid Question');
	   		$('.alert-danger').fadeIn();

	  return false;
	  }
	  });

	 setTimeout(function(){

	  $('.alert').fadeOut();
		}, 3000);

});