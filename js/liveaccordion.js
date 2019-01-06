$(document).ready(function(){
	$('div.accordion > h2').on('click', function(){
	    $(this)
	      .next('div:hidden').slideDown()
	      .siblings('div:visible').slideUp();
	});
});