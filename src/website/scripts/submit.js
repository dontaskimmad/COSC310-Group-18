
function submitq(){
	var str = $("#submittxt").val();
	console.log(str);
	if (str.length == 0){
			$("#errormsg").html("Enter Text");
			return;
	} else{
		if(window.XMLHttpRequest){
			//IE7+
			xmlhttp = new XMLHttpRequest();
		} else {
			//IE6, IE5
			xmlhttp = new ActiveXObject("MicrosoftXMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200){
				console.log("Succesfull Connect");
				//$("#textfield").append('<p class="userpost">', str, '</p>' );
				//$("#textfield").append('<p class="botresponse">', this.responseText, '</p>');
			}
		};
		xmlhttp.open("GET","submit.php?q="+str,true);
		xmlhttp.send();
	}
}

