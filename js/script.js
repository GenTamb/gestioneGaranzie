$(document).ready(function(){
	$("#header").slideDown("slow");
	$("#footer").slideDown("slow");
	$("#title").fadeIn(1500);
	$("#footer").animate({bottom:"1%", width:"98%"},"slow");
	$("#credits").fadeIn(2500);
	$("#search").delay(1250).fadeIn("slow");
	$("#adminBTN").delay(1500).slideDown();
});

$(document).ready(function(){
	$("#btn").click(function(){	
	$.post("function/loginAction.php",{name: $("#name").val(),pass: $("#pass").val()},function(data){
		if(data==1){
			document.location="index.php";
		}
		else if(data==0){
			alert("Utente inesistente!");
		}
		else{
			alert("Credenziali errate!");
		}
	});
	});
});

$(document).ready(function(){
	$("#send").click(function(){
		$("#display").slideUp();
		var model=$("#mod").val();
		var category=$("#categoria").val();
		var brand=$("#marca").val();
		var numOrd=$("#numOrd").val();
		var numDoc=$("#numDoc").val();
		if(model=="" && category=="" && brand=="" && numOrd=="" && numDoc==""){
			alert("Nessun campo valorizzato!");
		}
		else{
		$.post("function/searchAction.php", 
		{ 
		model: model,
		category: category,
		brand: brand,
        numOrd: numOrd,
        numDoc: numDoc		
	    },
        function(data){
			if(data==0){
				alert('No Record');
			}
			else{
			   
				$("#display").slideDown("fast");
				$("#displayFieldSet").empty();
				$("#displayFieldSet").append(data);
						
			}
		});
		}		
});
});
var loaded=0;

$(document).ready(function(){
	$("#adminBTN").click(function(){
		if(loaded==0){
		var iframe=document.createElement("iframe");
		iframe.id= 'console';
		document.body.appendChild(iframe);
		$("#console").css({"border":"none","display":"none","position":"absolute","top":"15%","left":"92%","height":"100px","width":"120px"});
		$("#console").slideDown("slow");
		$("#console").attr("src","function/console.php");
		loaded=1;
		}
		else{
			$("#console").slideToggle("slow");
		}
	});
});






