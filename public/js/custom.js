  
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




