$(function(){
	$('.dropdown-menu li').on('click', function() {
	  var getValue = $(this).children('.text').text();
	  var getParent =  $(this).parents('.dropdown');
	  $(getParent).children('.dropdown-select').text(getValue);
	  $(getParent).children('input').val(getValue);

	});
})