$(document).ready(function(){
	$("#send").click(function(){
		var user=$("#user").val();
		var name=$("#name").val();
		var pass=$("#pass").val();
		if($("#admin").is(':checked')){
			var admin=1;
		}
		else var admin=0;
		if(user=="" && name=="" && pass==""){
			alert('Errore: nessun campo valorizzato');
		}
		else if(pass==""){
			alert('Errore: campo password vuoto!');
		}
		else{
		$.post("usrAdd.php",{user: user, name: name, pass: pass, admin: admin}, function(data){
			if(data==0){
				alert('Utente già esistente');
			}
			else if(data==1){
				alert('Utente creato con successo');
				$("#user").val("");
				$("#name").val("");
				$("#pass").val("");
				$("#admin").prop("checked",false);
			}
			else if(data==2){
				alert('Errore nella query');
			}
	});
		}
});
});