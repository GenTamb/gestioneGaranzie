$(document).ready(function(){
	$("#chiudiFINESTRA").click(function(){
		window.opener.$('#link').val($("#linkUp").val());
		window.close();
	});
});