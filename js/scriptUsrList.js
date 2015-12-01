$(document).ready(function(){
	$("#modify").click(function(){
		var user=$("#user").val();
		var name=$("#name").val();
		var admin=$("#adminBox").val();
		var newPsw=$("#newPsw").val();
		if(user=="" || name=="" || admin==""){
			alert('Errore: campi user,name o admin non valorizzati!');
		}
		else{
		$.post("usrChange.php",{user: user, name: name, admin: admin, newPassword: newPsw},function(data){
			if(data==1){
				alert('Utente modificato');
				location.reload();
			}
			else alert('Utente non modificato');
		});
	}
});
});

$(document).ready(function(){
	$("#delete").click(function(){
		var user=$("#user").val();
		if(user==""){
			alert('Errore:campo user non valorizzato!');
		}
		else{
			$.post("deleteUser.php",{ user: user},function(data){
				if(data==1){
					alert('Utente cancellato');
					location.reload();
				}
				else alert('Errore');
			});
		}
	});
});