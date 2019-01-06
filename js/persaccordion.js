$(document).ready(function(){
	$('div.accordion > h3').on('click', function(){
	    $(this)
	      .next('div:hidden').slideDown()
	      .siblings('div:visible').slideUp();
	});
});