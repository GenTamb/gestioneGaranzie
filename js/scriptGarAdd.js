$(document).ready(function(){
	$("#newFile").click(function(){
		window.open("upload.php","uploadForm","height=150px, width=350px");
	});
	$("#chooseFile").click(function(){
		window.open("choose.php","chooseForm","height=300px, width=400px");
	});
	$("#send").click(function(){
		var mod=$("#mod").val();
		var cat=$("#categoria").val();
		var mar=$("#marca").val();
		var numDoc=$("#numDoc").val();
		var numOrd=$("#numOrd").val();
		var tel=$("#telefono").val();
		var fax=$("#fax").val();
		var mail=$("#mail").val();
		var lnk=$("#link").val();
		if(mod=="" || cat=="" || mar==""){
			alert("Errore: modello, categoria o marca non valorizzati!");
		}
		else{
		$.post("addGarAction.php",
		      {modello: mod, categoria:cat, marca:mar, numDoc: numDoc, numOrd: numOrd, telefono: tel, fax: fax, mail: mail, lnk:lnk},
			  function(result){
			       alert(result);
		                    });
	}
});
});