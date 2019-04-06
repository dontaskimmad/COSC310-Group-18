$(function(){
	$('#submitform').submit(function(e){
		e.preventDefault();
		var str = $("#submittxt").val();
		
		//reformat word if necessary
		var formatted = format_string(str);
		console.log(formatted);
		
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
				data:	{q:formatted},
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
	
		
	function format_string(str){
		let doc = nlp(str, {rico:'NotName', harris:'NotName'});
		if(doc.match('#Place').length > 0){
			return "location";
		}
		if(doc.match('#Person').length > 0){
			let name = doc.match('#Person');
			name = name.normalize().toTitleCase().out('text');
			let username = 'username '
			name = username.concat(name);
			return name;
		}
		return str;
	}
});





