$(function(){
$('#submitform').submit(function(e){
	e.preventDefault();
	var str = $("#submittxt").val();
	console.log(str);
	if (str.length == 0){
			$("#errormsg").html("Enter Text");
			return;
	} else{
		$('#errormsg').html("");
		$.ajax({
			type: 	'GET',
			url:	'../submit.php',
			data:	{q:str},
			datatype: 'text',
			success: function(data){
				$("#textfield").append('<p class="userpost">'+ str + '</p>' );
				$("#textfield").append('<p class="botresponse">' + data + '</p>');
			}
		});
	}
});
});




