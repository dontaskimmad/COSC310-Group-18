$(function(){
$('#submitform').submit(function(e){
	e.preventDefault();
	var str = $("#submittxt").val();
	console.log(str);
	if (str.length == 0){
			$("#errormsg").html("Please Enter Text");
			return;
	} else{
		$('#errormsg').html("");
		$.ajax({
			type: 	'GET',
			url:	'../submit.php',
			data:	{q:str},
			datatype: 'text',
			success: function(data){
				$("#textfield").append('<div class="userpost chat"><h3>You</h3><p>'+ str + '</p></div>' );
				$("#textfield").append('<div class="botresponse chat"><h3>Unknown</h3><p>' + data + '</p></div>');
			}
		});
	}
});
});




