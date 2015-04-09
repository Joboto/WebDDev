function register(){
	window.location = "../api/newmember";
	/*var formels = $('#registerForm').serialize();
	var myurl = "../api/newmember";
	$.ajax({
		url: myurl,
		type: 'POST',
		data: formels,
		success: function(reply){
			alert(reply);
		}
	});*/
}

function test(){
	var myurl = "api/";
	$.ajax({
		url: myurl,
		success: function(reply){
			alert(reply);
		}
	});
}