$(document).ready(function(){
	$('#content').load('content/home.html');


	$('ul#nav-mobile li a').click(function(){

		var page=$(this).attr('href');

		//alert(page);

		$('#content').load('content/'+page+'.html');

		return false;
	});

		

});

