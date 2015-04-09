$(document).ready(function(){
	//MENU
	var hash = window.location.hash.split("/");
	if(hash[1]!='' && $('#documenter_sidebar a[href=#' + hash[1] + "]").attr('href') != undefined) {
		$('#documenter_sidebar a[href=#' + hash[1] + "]").addClass('current');
	}

	$('#showmenu').click(function() {
		var hidden = $('#documenter_sidebar').data('hidden');
		$('#showmenu').text(hidden ? '<<' : '>>');
		if(hidden){
			$('#documenter_sidebar').animate({left: '0px'},500)
			$('#showmenu').animate({left: '200px'},500)
			$('#documenter_content').animate({left: '218px'},500)
		}else{
			$('#documenter_sidebar').animate({left: '-200px'},500)
			$('#showmenu').animate({left: '0px'},500)
			$('#documenter_content').animate({left: '20px'},500)
		}
		$('#documenter_sidebar,.image').data("hidden", !hidden);
	});
	
	$('#documenter_sidebar a').click(function() {
		$('#documenter_sidebar a').removeClass('current');
		$(this).addClass('current');
		//console.log($(this).attr('rel'));
		$('body').scrollTo($(this).attr('rel'),{duration:'slow', offsetTop : '50'});
	});
});