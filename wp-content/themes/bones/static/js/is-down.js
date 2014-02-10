// JavaScript Document

$("#mapCircle").click( function(event){
	event.preventDefault();
	if ($(this).hasClass("isDown") ) {
		$("#layover").animate({marginTop:"0px"}, 200);			
		$(this).removeClass("isDown");
 		$('#mapCircle').css('background-image', 'url(img/arrow-down.png)');
	} else {
		$("#layover").animate({marginTop:"300px"}, 200);	
		$(this).addClass("isDown");
 		$('#mapCircle').css('background-image', 'url(img/arrow-up.png)');
	}
	return false;
});


