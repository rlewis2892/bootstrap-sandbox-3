$(document).ready(function(){

	//initialize Swipebox
	$('.swipebox').swipebox();

	//initialize simple-sidebar, default to "toggled" state
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
});