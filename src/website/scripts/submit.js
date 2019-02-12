$(function(){
	$('#submitform').submit(function(e){
		e.preventDefault();
		var str = $("#submittxt").val();
		console.log(str);
		//if no message request text
		if (str.length == 0){
				$("#errormsg").html("Please Enter Text");
				return;
		} else{
			//submit text to submit.php
			$('#errormsg').html("");
			$.ajax({
				type: 	'GET',
				url:	'../submit.php',
				data:	{q:str},
				datatype: 'text',
				success: function(data){
					//get date time and convert it to readable format
					var dt = new Date();
					var time = dt.getHours() + ":" + dt.getMinutes();
					//display user message and bot response in chat
					$("#textfield").append('<div class="userpost chat"><h3>You</h3><p>'+ str + '</p><p class="timestamp">'+time+'</p></div>' );
					$("#textfield").append('<div class="botresponse chat"><h3>Unknown</h3><p>' + data + '</p><p class="timestamp">'+time+'</p></div>');
				},
				complete: function(data){
					//scroll to bottom of text box
					$("#textfield").scrollTop($("#textfield").prop('scrollHeight'));
					//empty text box
					$("#submittxt").val("");
				}
			});	
		}
	});
});





