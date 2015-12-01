$(document).ready(function(){
	$("#seeUsers").click(function(){
		window.open("usrList.php","List","height=150px, width=520px");
	});
		$("#addUsers").click(function(){
		window.open("usrAdd.html","Add","height=150px,width=300px");
	});
	$("#addGar").click(function(){
		window.open("garAdd.php","AddGar","height=250px,width=350px");
	});
});