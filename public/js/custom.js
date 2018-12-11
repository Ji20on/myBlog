  
/*svg hover*/
$("#logo").on('click',function(){
	$(this).toggleClass('clickit');
});



/*add class menu*/
var pathName = window.location.pathname;
var linkPage = $("#link-page").val();
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
else if(linkPage != '' && linkPage == 'port') {
	$("#works").addClass("active");
}
else if (linkPage != '' && linkPage == 'blog'){
	$("#blog").addClass("active");
}



/*pre loader*/

var overlay = document.getElementById("pre-loader-wrap");
window.addEventListener('load', function(){
		overlay.style.display = 'none';
	});
