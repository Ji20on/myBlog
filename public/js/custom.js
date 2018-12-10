  
/*svg hover*/
$("#logo").on('click',function(){
	$(this).toggleClass('clickit');
});



/*add class menu*/
var pathName = window.location.pathname;
if (pathName == '/'){
	$("#home").addClass("active"); 
}
else if(pathName == '/about'){
	$("#about").addClass("active");
}
else if(pathName == '/portfolio'){
	$("#works").addClass("active");
}
else if(pathName == '/blog'){
	$("#blog").addClass("active");
}

/*preloader*/
/*$(window).on('load',function(){
	$('#pre-loader-wrap').show();
});

$(document).ready(function(){
$('#pre-loader-wrap').hide();
});
*/
var overlay = document.getElementById("pre-loader-wrap");
window.addEventListener('load', function(){
  overlay.style.display = 'none';
})

